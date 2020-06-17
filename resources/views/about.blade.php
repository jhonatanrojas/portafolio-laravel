@extends('layout')
@section('title')
Sobre mi
@endsection
@section('content')
    
<div class="container">
    <div class="row">
     

   
        <div class="col-12 col-lg-6">
<h1 class="display-4 text-primary">Sobre mi</h1>
<p class="text-secundary"> 
    In nostrud ut sit proident esse incididunt laborum nisi amet.
    Sint amet sit adipisicing aute cupidatat commodo sint eiusmod id dolor.
</p>
           
<a  class="btn btn-primary btn-block btn-lg" href="{{ route('contact')}}"> Contáctame</a> 
<a  class="btn  btn-outline-primary btn-block btn-lg" href="{{ route('proyectos.index')}}"> Portafolio</a>     

        </div>
        <div class="col-12 col-lg-6">
            <img class="img-fluid mb-4" src="{{ asset('images/home/developer.svg') }}" alt="desarrollo web">
        </div>
    </div>
</div>
@endsection