<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitCodeRequest;
use App\Project;

class SubmitCodeController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $suggestedProject = Project::select('slug', 'title', 'image')
                                    ->inRandomOrder()
                                    ->limit(6)->get();
                                    
        return view('submit-code', compact('suggestedProject'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubmitCodeRequest $request)
    {
        auth()->user()->projects()->create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => 'https://lorempixel.com/330/220/?29435',
            'sourcecode_link' => 'https://github.com',
            'status' => 'PUBLISHED',
        ]);

        toastr()->success('Submitted successfully!');
        return redirect()->back();
    }

}
