@extends('layout')
@section('title',$project->title)


@section('content')


<div class="container">

    <div class="row">
        <div class="col-12 col-sm-10 col-lg-8 mx-auto">
            @if($project->image)
            <img class="card-img-top" style="height:150px; object-fit:cover;" src="{{ asset('storage/'.$project->image) }}" alt="{{ $project->title }}">
            @endif
            <div class="bg-white p-5 shadow rounded ">

                <h1 class="mb-0">{{$project->title }}</h1>

                @if ($project->category_id)
                <a  href="{{ route('categories.show',$project->category) }}" class=" mb-1 badge badge-secondary">{{ $project->category->name}}</a>

                @endif

                </form>
                <p class=" text-secondary"> {{$project->description }}</p>
                <p class=" text-secondary  bg-black-50 "> {{$project->created_at->diffForHumans() }}</p>


                <div class="d-flex justify-content-between  align-items-center">
                    <a class="btn btn-link" href="{{ route('proyectos.index')}}"> Regresar</a>
               

                    <div class="btn-group btn-group-sm">
                        @can('update',$newProject)
                        <a class="btn btn-primary" href="{{route('proyectos.edit',$project) }}">Editar</a>
                        @endcan
                        @can('delete',$newProject)
                        <a href="#" class="btn btn-danger" onclick=" document.getElementById('delete-project').submit() ">Eliminar</a>
                        @endcan
                    </div>

              

                </div>

                <form class="d-none" id="delete-project" action="{{ route('proyectos.destroy',$project) }}" method="post">

                    @csrf
                    @method('DELETE')
                    @auth


                    @endauth
            </div>

        </div>
    </div>

</div>

@endsection