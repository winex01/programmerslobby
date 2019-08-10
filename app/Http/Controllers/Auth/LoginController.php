<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Provider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

     /**
     * Redirect the user to the provider authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        Provider::firstOrNew([
            'name' => $provider
        ]);
        
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        $provider = Provider::firstOrCreate([
            'name' => $provider
        ]);

        $providerUser = Socialite::driver($provider->name)->user();

        $user = User::WhereHas('providers', function($q) use($provider, $providerUser) { 
            $q->where('provider_id', $provider->id)
                ->where('provider_unique_id', $providerUser->id); 
        })->first();

        if (!$user) {
            $user = User::firstOrCreate(['email' => $providerUser->email], [
                'name' => $providerUser->name,
                'avatar' => $providerUser->avatar,
                'email_verified_at' => true  
            ]);

            if (!$user->providers->contains(['provider_id' => $provider->id, 'provider_unique_id' => $providerUser->id])) {
                $user->providers()->attach($provider->id, [
                    'provider_unique_id' => $providerUser->id
                ]);
            }
        }

        auth()->login($user, true);

        toastr()->success('Welcome back '.$providerUser->name.'!');
        return redirect($this->redirectTo);
    }
}
