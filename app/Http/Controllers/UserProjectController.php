<?php

namespace App\Http\Controllers;

use App\Project;
use App\Traits\ProjectTrait;
use App\Traits\SeoTrait;
use App\User;
use Illuminate\Http\Request;

class UserProjectController extends Controller
{
    use ProjectTrait;
    use SeoTrait;

    /**
     * 
     * 
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, $submittedBy)
    {
        $author = $user->id == 2 ? $submittedBy : $user->name; //2 == Guest

        $this->basicSEO($author);

        return view(viewShow('user-project'), [
            'projects' => $this->userProjects($user, $submittedBy),
            'suggestedProjects' => $this->suggestedProjects()
        ]);
    }

}
