<?php

namespace App\Http\Controllers;

use App\Project;
use App\Category;
use Illuminate\Http\Request;
use  Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CreateProjectRequest;

class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
      //  $this->middleware('auth')->only('create','edit','store');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //listar recursos
    public function index()
    {
        
        $projects= Project::with('category')->orderBy('created_at','DESC')->paginate(6) ;
        $newProject = new Project();

        //MUESTRA LOS PROYECTOS ELIMINADOS
        $deletedProjects= Project::onlyTrashed()->get();
        return view("projects.index", compact('projects','newProject','deletedProjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $this->authorize('create',$project= new Project());	
        return view('projects.create', ['project'     => $project,
                                        'categories' => Category::pluck('name','id')] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //guardar recurso
    public function store(CreateProjectRequest $request)
    {
        
        $project= new Project($request->validated());

        $project->image= request()->file('image')->store('images','public');

        $project->save();
        
 


     
        return   redirect()->route('proyectos.index')->with('status','El proyecto fue creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $proyecto)
    {
      //'project'=>Project::findOrFail($id)
        $newProject= new Project();

        return view('projects.show',
        [
            'newProject'    =>  $newProject,
            'project'=>$proyecto
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $proyecto)
    {
     
        $this->authorize('update',$newProject= new Project());	

        return view('projects.edit',
        [
            'project'       =>   $proyecto,
            'newProject'    =>  $newProject,
            'categories'    =>   Category::pluck('name','id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Project $proyecto)
    {

    // $project =  Project::findOrFail(request('id'));
        //

        $fields=  request()->validate([
            'title'=>'required',
            'url'=>'required',
            'description'=>'required',
            'category_id'=>'required',
           
        ]);

        if(request()->hasFile('image')){
            $fields=  request()->validate([
                'title'=>'required',
                'url'=>'required',
                'category_id'=>'required',
                'description'=>'required',
                'image'=>['required','image'],

               
            ]);
                Storage::delete($proyecto->image);

            $project=  $proyecto->fill( $fields);
            $project->image= request()->file('image')->store('images','public');
            $project->save();

         
        }else{
            $proyecto->update($fields);
        }
      
   


        
            return   redirect()->route('proyectos.show', $proyecto)->with('status','el proyecto fue actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $proyecto)
    {
        //

        $this->authorize('delete', $proyecto);

        Storage::delete($proyecto->image);
         $proyecto->delete();
       //Project::destroy($id);
       
        return   redirect()->route('proyectos.index')->with('status','el proyecto fue eliminado con exito');
    }

    public function restore($projectUrl)
    {
        $project = Project::withTrashed()->whereUrl($projectUrl)->firstOrFail();

        $this->authorize('restore', $project);

        $project->restore();

        return redirect()->route('projects.index')
            ->with('status', 'El proyecto fue restaurado con éxito.');
    }

    public function forceDelete($projectUrl)
    {
        $project = Project::withTrashed()->whereUrl($projectUrl)->firstOrFail();

        $this->authorize('force-delete', $project);

        Storage::delete($project->image);


    
        $project->forceDelete();


        return redirect()->route('projects.index')->with('status', 'El proyecto fue eliminado con éxito.');	        return redirect()->route('projects.index')
            ->with('status', 'El proyecto fue eliminado permanentemente.');
    }	    

}
