<?php

namespace App\Http\Controllers;

use App\Notifications\ContactUs;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ContactFormSubmitController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:10'
        ]);

        // TODO add captcha

        Notification::route('mail', config('mail.contact_us'))
            ->notify(new ContactUs(
                $request->name,
                $request->email,
                $request->message
            ));


        toastr()->success('Thank you for reaching us, We will contact you soon.');
        return redirect()->back();

    }
}
