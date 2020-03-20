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

    protected $tags;
    protected $suggestedProjects;

    /**
     * 
     * 
     */
    public function __construct()
    {
        $this->tags = Tag::orderBy('description')->get();
        $this->suggestedProjects = $this->suggestedProjects();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->basicSEO('Submit Code');        

        return view(viewCreate('submit-code'), [
            'suggestedProjects' => $this->suggestedProjects,
            'tags' => $this->tags
        ]);
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
            'image' => $this->storeProjectImage($request),
            'sourcecode_link' => $request->code,
            'status' => (strtolower($request->submit_code) == 'submit' ? 'PENDING' : 'DRAFT'),
        ])->tags()->attach($request->tags);

        toastr()->success('Submitted successfully! Your code are now being reviewed!');
        return redirect()->route('my.projects');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
        $this->basicSEO('Edit Submitted Code');        

        return view(viewEdit('submit-code'), [
            'suggestedProjects' => $this->suggestedProjects,
            'tags' => $this->tags,
            'project' => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubmitCodeRequest $request, Project $project)
    {
        //
        $status = 'DRAFT'; 
        $messageInfo = 'Save as Draft!';

        if (strtolower($request->submit_code) == 'submit') {
            $status = 'PENDING';
            $messageInfo = 'Submitted successfully! Your code are now being reviewed!';
        }

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'sourcecode_link' => $request->code,
            'status' => $status
        ];

        if ($request->image) {
            $imagePath = $this->storeProjectImage($request);
            $data['image'] = $imagePath;
        }

        $project->update($data);

        $project->tags()->sync($request->tags);

        toastr()->success($messageInfo);
        return redirect()->route('my.projects');
    }

}
