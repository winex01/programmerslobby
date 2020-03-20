<?php

namespace App\Http\Controllers;

use App\DataTables\ProjectDataTable;
use App\DataTables\Scopes\ProjectScopeDataTable;
use App\Project;
use App\Traits\ProjectTrait;
use App\Traits\SeoTrait;
use Illuminate\Http\Request;

class MyProjectController extends Controller
{
    use ProjectTrait;
    use SeoTrait;

    protected $dataTable;

    public function __construct(ProjectDataTable $projectDataTable)
    {
        parent::__construct();
        
        $this->dataTable = $projectDataTable;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->basicSEO('My Projects');

        return $this->dataTable
        ->addScope(new ProjectScopeDataTable)
        ->render(viewIndex('my-projects'), [
            'suggestedProjects' => $this->suggestedProjects()
        ]);
    }

}
