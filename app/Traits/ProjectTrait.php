<?php

namespace App\Traits;

use App\Project;
use App\User;

trait ProjectTrait {

    /**
     * 
     * 
     */
    public function suggestedProjects($limit = 6)
    {
        return Project::select('slug', 'title', 'image')
        ->published()
        ->inRandomOrder()
        ->limit($limit)->get();
    }

    /**
     * 
     * 
     */
    public function userProjects(User $user, $submittedBy)
    {
    	$paginateNum = 3;
    	$projects = null;

    	if ($user->id == 2) {
            // 2 == guest
            $projects = Project::where('coded_by', 'like', "%$submittedBy%")
                        ->published()
                        ->latest()
                        ->paginate($paginateNum);
        }else {
            $projects = $user->projects()
                        ->published()
                        ->latest()
                        ->paginate($paginateNum);
        }

        return $projects;
    }

}
