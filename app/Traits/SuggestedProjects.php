<?php

namespace App\Traits;

use App\Project;

trait SuggestedProjects {

    public function suggestedProjects($limit = 6)
    {
        return Project::select('slug', 'title', 'image')
        ->published()
        ->inRandomOrder()
        ->limit($limit)->get();
    }

}
