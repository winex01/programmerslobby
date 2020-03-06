<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitCodeRequest;
use App\Project;
use App\Tag;
use App\Traits\ProjectTrait;
use Carbon\Carbon;
use SEOMeta;
use OpenGraph;
use Twitter;

class SubmitCodeController extends Controller
{
    use ProjectTrait;

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        SEOMeta::setTitle('Submit Code');
        SEOMeta::setCanonical(url()->current());
        // desc default

        OpenGraph::setTitle('Submit Code');
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'article');
        // desc default

        Twitter::setTitle('Submit Code');
        // site default

        $suggestedProject = $this->suggestedProjects();

        $tags = Tag::orderBy('description')->get();
        return view('submit-code', compact('suggestedProject', 'tags'));
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
            'status' => 'PENDING',
        ])->tags()->attach($request->tags);

        toastr()->success('Submitted successfully! Your code are now being reviewed!');
        return redirect()->back();
    }

}
