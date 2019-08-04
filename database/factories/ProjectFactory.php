<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use App\User;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {

	$sentence = $faker->sentence(5);
    $title = substr($sentence, 0, strlen($sentence) - 1);
    $slug = str_slug($title, '-');

    return [
        'title' => $title,
        'slug' => $slug,
        'description' => $faker->paragraph($nbSentences = 10, $variableNbSentences = true),
        'image' => $faker->imageUrl('330', '220'),
        'github_link' => 'https://github.com/',
        'download_link' => 'https://github.com/',
        'status' => 'PUBLISHED',
        'author_id' => factory(User::class)->create()->id,
        'created_at' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now'),
        'updated_at' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now')
    ];
});
