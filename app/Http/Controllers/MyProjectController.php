<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use SEOMeta;
use OpenGraph;
use Twitter;

class MyProjectController extends Controller
{

    protected $suggestedProject;

	public function __construct()
	{
		$this->suggestedProject = Project::select('slug', 'title', 'image')
									->inRandomOrder()
									->limit(6)->get();
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        SEOMeta::setTitle('My Projects');
        SEOMeta::setCanonical(url()->current());
        // desc default

        OpenGraph::setTitle('My Projects');
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'article');
        // desc default

        Twitter::setTitle('My Projects');
        // site default

        return view('my-projects', [
    		'suggestedProject' => $this->suggestedProject
    	]);
    }

}
