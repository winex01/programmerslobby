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

    public function tos()
    {
    	return view('terms-and-conditions', [
    		'suggestedProject' => $this->suggestedProject
    	]);
    }

    public function about()
    {
        return view('about-us', [
            'suggestedProject' => $this->suggestedProject
        ]);
    }

    public function contact()
    {
        return view('contact-us', [
            'suggestedProject' => $this->suggestedProject
        ]);
    }

}
