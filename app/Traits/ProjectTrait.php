<?php

namespace App\Traits;

use App\Project;
use App\User;
use Carbon\Carbon;

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

    /**
     * 
     * 
     */
    public function storeProjectImage($request)
    {
        $date = Carbon::now();
        $monthYear = $date->format('F').$date->year;
        $imagePath = $request->image->store('public/projects/'.$monthYear);
        $imagePath = str_replace('public/', '', $imagePath);

        return $imagePath;
    }

}
