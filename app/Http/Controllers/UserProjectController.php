<?php

namespace App\Http\Controllers;

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
        // TODO: if user is guest select like from submittedBy/Name provided
        $suggestedProjects = $this->suggestedProjects();
        $projects = $user->projects()
                    ->published()
                    ->latest()
                    ->paginate(3);

        $author = $user->name;

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
