<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use SEOMeta;
use OpenGraph;
use Twitter;

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
        SEOMeta::setTitle('Disclaimer');
        SEOMeta::setCanonical(url()->current());
        // desc default

        OpenGraph::setTitle('Disclaimer');
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'article');
        // desc default

        Twitter::setTitle('Disclaimer');
        // site default

    	return view('disclaimer', [
    		'suggestedProject' => $this->suggestedProject
    	]);
    }

    public function tos()
    {
        SEOMeta::setTitle('Terms And Privacy');
        SEOMeta::setCanonical(url()->current());
        // desc default

        OpenGraph::setTitle('Terms And Privacy');
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'article');
        // desc default

        Twitter::setTitle('Terms And Privacy');
        // site default
    	return view('terms-and-conditions', [
    		'suggestedProject' => $this->suggestedProject
    	]);
    }

    public function about()
    {
        SEOMeta::setTitle('About Us');
        SEOMeta::setCanonical(url()->current());
        // desc default

        OpenGraph::setTitle('About Us');
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'article');
        // desc default

        Twitter::setTitle('About Us');
        // site default
        
        return view('about-us', [
            'suggestedProject' => $this->suggestedProject
        ]);
    }

    public function contact()
    {
        SEOMeta::setTitle('Contact Us');
        SEOMeta::setCanonical(url()->current());
        // desc default

        OpenGraph::setTitle('Contact Us');
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'article');
        // desc default

        Twitter::setTitle('Contact Us');
        // site default
        
        return view('contact-us', [
            'suggestedProject' => $this->suggestedProject
        ]);
    }

}
