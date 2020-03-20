<?php

namespace App\Http\Controllers;

use App\Traits\ProjectTrait;
use App\Traits\SeoTrait;
use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    use ProjectTrait;
    use SeoTrait;

	protected $suggestedProjects;
    protected $viewFolder = 'static-pages.';

    /**
     * 
     * 
     */
	public function __construct()
	{
        parent::__construct();
        
        $this->suggestedProjects = $this->suggestedProjects();
	}

    /**
     * 
     * 
     */
    public function disclaimer()
    {
        $this->basicSEO('Disclaimer');

    	return view($this->viewFolder.'disclaimer', [
    		'suggestedProjects' => $this->suggestedProjects
    	]);
    }

    /**
     * 
     * 
     */
    public function tos()
    {
        $this->basicSEO('Terms And Privacy');

    	return view($this->viewFolder.'terms-and-conditions', [
    		'suggestedProjects' => $this->suggestedProjects
    	]);
    }

    /**
     * 
     * 
     */
    public function about()
    {
        $this->basicSEO('About Us');

        return view($this->viewFolder.'about-us', [
            'suggestedProjects' => $this->suggestedProjects
        ]);
    }

    /**
     * 
     * 
     */
    public function contact()
    {
        $this->basicSEO('Contact Us');

        return view($this->viewFolder.'contact-us', [
            'suggestedProjects' => $this->suggestedProjects
        ]);
    }

}
