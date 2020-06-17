
@extends('layout')
@section('title')
Create
@endsection
@section('content')
<div class="container">

    @include('partials.session-status')

    @include('partials.validation-error')
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <h1 class="display-5">Nuevo Proyecto</h1>
           
    <form action="{{ route('proyectos.store')}}"
    method="post"

    class="bg-white shadow rounded px-4 py-3"
    enctype="multipart/form-data"
    >

    @csrf
    @include('projects._form')
    <button class="btn btn-primary btn-lg btn-block">Guardar</button>
    </form>
        </div>
    </div>

</div>
@endsection