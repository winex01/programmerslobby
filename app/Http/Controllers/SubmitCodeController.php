<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitCodeRequest;
use App\Project;
use Carbon\Carbon;

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
        $date = Carbon::now();
        $monthYear = $date->format('F').$date->year;
        $imageName = $request->image->store('public/projects/'.$monthYear);
        $imageName = str_replace('public/', '', $imageName);

        auth()->user()->projects()->create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
            'sourcecode_link' => $request->code,
            'status' => 'PUBLISHED',
        ]);

        toastr()->success('Submitted successfully!');
        return redirect()->back();
    }

}
