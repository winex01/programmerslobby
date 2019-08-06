<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use SEOMeta;
use OpenGraph;
use Twitter;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        SEOMeta::setTitle('Home');
        SEOMeta::setCanonical('http://programmerslobby.com/');
        // desc default

        OpenGraph::setTitle('Home');
        OpenGraph::setUrl('http://programmerslobby.com/');
        OpenGraph::addProperty('type', 'applications');
        // desc default

        Twitter::setTitle('Homepage');
        // site default

        $projects = Project::published()->orderBy('created_at', 'DESC')->paginate(6);
        return view('index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $project = Project::where('slug', $slug)->published()->first();
        $suggestedProject = Project::select('slug', 'title', 'image')
                                    ->where('slug', '!=', $slug)
                                    ->inRandomOrder()
                                    ->limit(6)->get();
        // clock($suggestedProject);
        return view('project', compact('project', 'suggestedProject'));
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
