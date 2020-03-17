<?php

namespace App\Http\Controllers;

use App\Project;
use App\Traits\ProjectTrait;
use App\User;
use Illuminate\Http\Request;
use OpenGraph;
use SEOMeta;
use Twitter;

class UserProjectController extends Controller
{
    use ProjectTrait;

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, $submittedBy)
    {
        $suggestedProjects = $this->suggestedProjects();

        $projects = $this->userProjects($user, $submittedBy);

        $author = $user->id == 2 ? $submittedBy : $user->name; //2 == Guest

        SEOMeta::setTitle($author);
        SEOMeta::setCanonical(url()->current());
        // desc default

        OpenGraph::setTitle($author);
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'article');
        // desc default

        Twitter::setTitle($author);
        // site default

        return view(viewShow('user-project'), compact(
            'projects', 
            'suggestedProjects')
        );
    }

}
