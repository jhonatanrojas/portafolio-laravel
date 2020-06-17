<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Project;

class CategoryController extends Controller
{
    //
    public function show(Category $category)
    {
            //return $category->projects()->with('category')->latest()->paginate();
         $newProject= new Project();	
        return view('projects.index', [
            'newProject'    =>  $newProject,
            'category'      =>  $category,
            'projects'      =>  $category->projects()->with('category')->latest()->paginate()
            // $category->projects->load('category')
        ]);
    }
}
