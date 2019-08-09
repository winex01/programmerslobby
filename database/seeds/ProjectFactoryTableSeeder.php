<?php

use Illuminate\Database\Seeder;

class ProjectFactoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        factory(\App\Project::class, 500)->create()->each(function ($project) {
        	
        	$tempTags = [];
        	while(count($tempTags) < 3) {
	        	$randomId = \App\Tag::all()->random()->id;
	        	if(!in_array($randomId, $tempTags)) {
	        		$tempTags[] = $randomId;
	        	}
        	}

        	$this->command->getOutput()->writeln('project_id: '.$project->id.' '.implode(',', $tempTags));

        	foreach($tempTags as $temp) {
        		if(empty($temp)) {
        			continue;
        		}

        		if(!$project->tags->contains($temp)) {
        			$project->tags()->attach($temp);
        		}
        	}

        });
    }
}
