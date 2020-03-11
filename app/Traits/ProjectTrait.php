<?php

namespace App\Traits;

use App\Project;

trait ProjectTrait {

    public function suggestedProjects($limit = 4)
    {
        return Project::select('slug', 'title', 'image')
        ->published()
        ->inRandomOrder()
        ->limit($limit)->get();
    }

}
