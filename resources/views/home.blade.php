

@extends('layout')
@section('title')
Inicio
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <img class="img-fluid mb-4" src="{{ asset('images/home/webdeveloper.svg') }}" alt="desarrollo web">
        </div>

   
        <div class="col-12 col-lg-6">
<h1 class="display-4 text-primary">Desarrollador Web</h1>
<p class="text-secundary lead"> 
    Programador Web con más de 4 años de experiencia generando código  para empresas de  forma remota de Ecuador, España y presencial en Venezuela del sector tecnólogico,
     startup  y proyectos web personales. <br> <br>Especializado en el desarrollo Web con Laravel, Codeigniter, JavaScript, Vue, Mysql y Postgresql.
</p>
           
<a  class="btn btn-primary btn-block btn-lg" href="{{ route('contact')}}"> Contáctame</a> 
<a  class="btn  btn-outline-primary btn-block btn-lg" href="{{ route('proyectos.index')}}"> Portafolio</a>     

        </div>
    </div>
</div>

@endsection