<?php

namespace App\Http\Controllers;

use SEOMeta;
use Twitter;
use OpenGraph;
use App\Project;
use Illuminate\Http\Request;
use App\Traits\ProjectTrait;
use App\DataTables\ProjectDataTable;
use App\DataTables\Scopes\ProjectScopeDataTable;

class MyProjectController extends Controller
{
    use ProjectTrait;

    protected $dataTable;

    public function __construct(ProjectDataTable $projectDataTable)
    {
        $this->dataTable = $projectDataTable;
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

        return $this->dataTable
        ->addScope(new ProjectScopeDataTable)
        ->render('my-projects', [
            'suggestedProject' => $this->suggestedProjects()
        ]);
    }

}
