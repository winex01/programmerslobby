<?php

namespace App\Http\Controllers;

use App\DataTables\ProjectDataTable;
use App\DataTables\Scopes\ScopeAuthenticatedUserProjects;
use App\DataTables\Scopes\ScopeProjectBookmarks;
use App\Project;
use App\Traits\ProjectTrait;
use App\Traits\SeoTrait;
use Illuminate\Http\Request;

class BookmarkProjectController extends Controller
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
        $title = 'My Bookmarks';
        $this->basicSEO($title);

        return $this->dataTable
        ->addScope(new ScopeProjectBookmarks)
        ->render('datatables.default', [
            'suggestedProjects' => $this->suggestedProjects(),
            'dataTableTitle' => $title
        ]);
    }

    public function store($project)
    {
        $project = Project::findOrFail($project);
        toastr()->success(
            $project->isFavorited() ? 'Bookmark Successfully!' : 'Remove bookmark successfully!'
        );
        return redirect()->back();
    }

   
}
