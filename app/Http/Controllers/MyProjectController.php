<?php

namespace App\Http\Controllers;

use App\DataTables\ProjectsDataTable;
use App\Project;
use App\Traits\SuggestedProjects;
use Illuminate\Http\Request;
use SEOMeta;
use OpenGraph;
use Twitter;

class MyProjectController extends Controller
{
    use SuggestedProjects;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProjectsDataTable $projectsDataTable)
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


        return $projectsDataTable
            ->render('my-projects', [
                'suggestedProject' => $this->suggestedProjects()
        ]);

        // return $this->dataTable
        // ->addScope(new ActivityLogDataTableScope)
        // ->render('vendor.voyager.activity-log.browse', [
        //     'dataType' => $this->dataType($slug)
        // ]);
    }

}
