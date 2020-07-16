

@extends('layout')
@section('title')
Proyectos
@endsection
@section('content')
<div class="container">
  <div class="d-flex mb-3 justify-content-between align-items-center">

    @isset($category)
      <div>
        <h1 class="display-4 mb-0 ">{{$category->name}}</h1>
        <a href="{{ route('proyectos.index') }}"> Regresar al portafolio</a>
      </div>
    

      @else
      <h1 class="display-4 mb-0 ">Portafolio</h1>
    @endisset
   
 
  
        @can('create', $newProject)
      

          <a  class="btn btn-primary" 
              href="{{ route('proyectos.create') }}">Crear Proyecto
          </a>
    
        @endcan
  </div>
 
  <p class="lead text-secondary">
    Proyectos realizados 
  </p>

    <div class="d-flex flex-wrap justify-content-between align-items-start">
      @forelse ($projects as $project)
      <div class="card border-0 mt-4 mx-auto" style="width: 18rem;">
        @if ($project->image)
        <img src="{{ asset('storage/'.$project->image) }}" class="card-img-top" alt="..." style="height:150px; object-fit:cover;">
        @endif
        <div class="card-body">
          <h5 class="card-title">      
            <a href="{{ route('proyectos.show',$project)}}"> {{ $project->title}}</a>
           </h5>
          <h6 class="card-subtitle">
            {{ $project->created_at->format('d/m/y')}}
          </h6>
        <p class="car-text text-truncate"> {{ $project->description }}</p>
          <div class="d-flex  justify-content-between align-items-start">
            <a href="{{ route('proyectos.show',$project)}}" class="btn btn-primary">ver Mas</a>
            
            @if ($project->category_id)
            <a href="{{ route('categories.show',$project->category) }}"  class="badge badge-secondary">{{ $project->category->name}}</a>

            @endif

          </div>
        </div>
      </div>
      @empty
    
      <li class="list-group-item border-0 mb-3 shadow-sm"> 
      En construcción
  </li>
    
    @endforelse

    
</div>
<div class="row mt-3">
  <div class=" col-4  mx-auto">
    {!! $projects->links() !!}
  </div>
</div>
   
    

</div>

@endsection