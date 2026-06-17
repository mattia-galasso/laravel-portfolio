<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
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

        $types = Type::all();
        $technologies = Technology::all();

        for ($i = 0; $i < 10; $i++) {

            $newProject = new Project();

            $newProject->name = $faker->sentence(3);
            $newProject->customer = $faker->company();
            $type = $faker->randomElement($types);
            $newProject->type_id = $type->id;
            //
            $start = $faker->dateTimeBetween('-2 years', 'now');
            $end = $faker->dateTimeBetween($start, '+1 years');
            $newProject->project_start = $start->format('Y_m_d');
            $newProject->project_end = $end->format('Y_m_d');
            //
            $newProject->summary = $faker->paragraph();

            $newProject->save();

            $newProject->technologies()->sync($faker->randomElements($technologies, 2));
        }
    }
}
