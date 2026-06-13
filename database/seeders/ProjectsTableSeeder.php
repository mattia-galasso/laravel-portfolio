<?php

namespace Database\Seeders;

use App\Models\Project;
use Faker\Generator as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {


        for ($i = 0; $i < 10; $i++) {

            $newProject = new Project();

            $newProject->name = $faker->sentence(3);
            $newProject->customer = $faker->company();
            $newProject->type_id = rand(1, 6);
            //
            $start = $faker->dateTimeBetween('-2 years', 'now');
            $end = $faker->dateTimeBetween($start, '+1 years');
            $newProject->project_start = $start->format('Y_m_d');
            $newProject->project_end = $end->format('Y_m_d');
            //
            $newProject->summary = $faker->paragraph();

            $newProject->save();
        }
    }
}
