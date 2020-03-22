<?php

namespace App\Http\Controllers;

use App\Project;
use App\Traits\ProjectTrait;
use App\Traits\SeoTrait;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    use ProjectTrait;
    use SeoTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->basicSEO('Home');

        $projects = Project::published()->latest()->paginate(6);
        return view(viewIndex('projects'), compact('projects'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $project = Project::where('slug', $slug)->published()->firstOrFail();

        $this->detailedSEO([
            'image' => $project->image,
            'description' => $project->description,
            'title' => $project->title,
            'published_time' => $project->published_at->toW3CString(),
            'modified_time' => $project->modified_at->toW3CString(),
            'meta_keywords' => implode(', ', array_merge(
                (array)$project->meta_keywords,
                $project->tag_description->toArray()
            )),
            'author' => $project->submittedBy,
        ]);

        return view(viewShow('projects'), [
            'project' => $project,
            'suggestedProjects' => $this->suggestedProjects()
        ]);
    }

}
