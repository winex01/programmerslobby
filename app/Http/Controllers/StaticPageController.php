<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class StaticPageController extends Controller
{
	protected $suggestedProject;

	public function __construct()
	{
		$this->suggestedProject = Project::select('slug', 'title', 'image')
									->inRandomOrder()
									->limit(6)->get();
	}

    public function disclaimer()
    {
    	return view('disclaimer', [
    		'suggestedProject' => $this->suggestedProject
    	]);
    }
}
