<?php

use App\Project;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //Project::truncate();
        Project::created([
            'category_id'=>1,
            'title'=>'proyecto de prueba',
            'url'=>'proyecto-prueba',
            'description'=>'description'
        ]);
        Project::created([
            'category_id'=>1,
            'title'=>'proyecto de prueba',
            'url'=>'proyecto-prueba',
            'description'=>'description'
        ]);

        Project::created([
            'category_id'=>1,
            'title'=>'proyecto de prueba',
            'url'=>'proyecto-prueba',
            'description'=>'description'
        ]);


    }
}
