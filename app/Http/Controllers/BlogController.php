<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Project;
use App\Traits\ProjectTrait;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    use ProjectTrait;

    protected $viewFolder = 'blogs.';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suggestedProjects = $this->suggestedProjects();
        $blogs = Project::published()->orderBy('created_at', 'DESC')->simplePaginate(3); //Temporary lng

        //
        return view($this->viewFolder.'index', compact('blogs', 'suggestedProjects'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }
}
