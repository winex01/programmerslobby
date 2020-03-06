<?php

namespace App\Http\Controllers;

use App\Project;
use App\Traits\ProjectTrait;
use Illuminate\Http\Request;
use SEOMeta;
use OpenGraph;
use Twitter;

class StaticPageController extends Controller
{
    use ProjectTrait;

	protected $suggestedProject;
    protected $viewFolder = 'static-pages.';

	public function __construct()
	{
        $this->suggestedProject = $this->suggestedProjects();
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

    	return view($this->viewFolder.'disclaimer', [
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
    	return view($this->viewFolder.'terms-and-conditions', [
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

        return view($this->viewFolder.'about-us', [
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

        return view($this->viewFolder.'contact-us', [
            'suggestedProject' => $this->suggestedProject
        ]);
    }

}
