
@extends('layout')
@section('title')
Editar
@endsection
@section('content')

<div class="container">
<div class="row">
    <div class="col-12 col-sm-10 col-lg-8 mx-auto">
        @if ($project->image)
        <img src="{{ asset('storage/'.$project->image) }}" class="card-img-top" style="height:150px; object-fit:cover;" alt="...">
        @endif
        <h1 class="display-5">Editar Proyecto</h1>
        @include('partials.session-status')

        @include('partials.validation-error')
        <form action="{{ route('proyectos.update',$project)}}"
        method="post"
        enctype="multipart/form-data"
        class="bg-white shadow rounded px-4 py-3"
        >
        @method('PATCH')
        @csrf
        @include('projects._form')
        
        <button class="btn btn-primary btn-block btn-lg">Actualizar</button>
        <a  class="btn   btn-block btn-lg" href="{{ route('proyectos.index')}}"> Cancelar</a>  

        </form>
    

    </div>
</div>

</div>

@endsection