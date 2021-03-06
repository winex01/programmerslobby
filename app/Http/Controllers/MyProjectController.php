<?php

namespace App\Http\Controllers;

use App\DataTables\ProjectDataTable;
use App\DataTables\Scopes\ScopeAuthenticatedUserProjects;
use App\Traits\ProjectTrait;
use App\Traits\SeoTrait;
use Illuminate\Http\Request;

class MyProjectController extends Controller
{
    use ProjectTrait;
    use SeoTrait;

    protected $dataTable;

    public function __construct(ProjectDataTable $dataTable)
    {
        parent::__construct();
        
        $this->dataTable = $dataTable;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'My Projects';
        $this->basicSEO($title);

        return $this->dataTable
        ->addScope(new ScopeAuthenticatedUserProjects)
        ->render('datatables.default', [
            'suggestedProjects' => $this->suggestedProjects(),
            'dataTableTitle' => $title
        ]);
    }

}
