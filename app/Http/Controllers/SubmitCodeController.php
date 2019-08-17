<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        //
    }

}
