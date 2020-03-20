<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use App\Notifications\ContactUs;
use App\User;
use Illuminate\Support\Facades\Notification;

class ContactFormSubmitController extends Controller
{

    /**
     * 
     * 
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactUsRequest $request)
    {
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
