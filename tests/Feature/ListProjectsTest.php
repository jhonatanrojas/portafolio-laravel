<?php

namespace Tests\Feature;

use App\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ListProjectsTest extends TestCase
{
    use RefreshDatabase; 
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCanSeeAllProjects()
    {
        $this->withoutExceptionHandling();
        $project = Project::created([
                    'title'=>"Mi primer proyecto",
                    'url'=>"proyecto-de-prueba",
                    'description'=>"Descripcion del proyecto"
                        ]);
    
 
       
        $response = $this->get(route('proyectos.index'));

        $response->assertStatus(200);

    }
}
