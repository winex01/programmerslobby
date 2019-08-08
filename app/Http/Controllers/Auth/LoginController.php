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
    protected $redirectTo = '/home';

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
        $providerUser = Socialite::driver($provider)->user();
        clock($providerUser);

        $user = User::where([
            ['provider', $provider],
            ['provider_id', $providerUser->id],
        ])->first();

        $user = User::whereHas('providers', function($q) use($search) {
            $q->where([
                ['name' => $provider],
                ['provider_unique_id' => $providerUser->id]
            ]);
        });

        if (!$user) {
            //check email if already signed in by other provider
            // if not then insert new user, otherwise attach provider
            $checkEmail = User::where('email', $providerUser->email)->first();

            if (!$checkEmail) {
                $user = User::create([
                    'name' => $providerUser->name,
                    'email' => $providerUser->email,
                    'avatar' => $providerUser->avatar,
                    'provider' => $provider,
                    'email_verified_at' => true
                ]);
            }

            //attach provider

        }

        auth()->login($user, true);

        return redirect($this->redirectTo);
    }
}
