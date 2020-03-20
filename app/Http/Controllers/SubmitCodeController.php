<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitCodeRequest;
use App\Project;
use App\Tag;
use App\Traits\ProjectTrait;
use App\Traits\SeoTrait;
use Carbon\Carbon;

class SubmitCodeController extends Controller
{
    use ProjectTrait;
    use SeoTrait;

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->basicSEO('Submit Code');        

        $suggestedProjects = $this->suggestedProjects();
        $tags = Tag::orderBy('description')->get();
        
        return view(viewCreate('submit-code'), compact('suggestedProjects', 'tags'));
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
            'status' => (strtolower($request->submit_code) == 'submit' ? 'PENDING' : 'DRAFT'),
        ])->tags()->attach($request->tags);

        toastr()->success('Submitted successfully! Your code are now being reviewed!');
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

}
