<?php

namespace Database\Seeders;

use App\Models\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $category_ids = Category::all()->pluck('id')->all(); // [1,2,3,4,5,6]

        for ($i=0; $i < 20; $i++) {

            $project = new Project();
            $project->title = $faker->sentence( $faker->numberBetween(3,5) );
            $project->client = $faker->name;
            $project->description = $faker->optional()->text(100);
            $project->slug = Str::slug($project->title, '-');
            $project->category_id = $faker->optional()->randomElement($category_ids);

            $project->save();

        }
    }
}
