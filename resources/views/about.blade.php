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
    <ul>
        <li> He participado  participé en  proyectos digitales y colaborado con  equipos de diseñadores, copywriters creativos y project managers  .</li>
    </ul>
   
    <ul>
        <li>     Como parte del equipo de programación, he colaborado  en el desarrollo de aplicaciones web, entre lo que destacan 
            <a href="http://dora.ec/">Dora EC</a>, 
            <a href="https://www.practisis.net/page/">Practisis.net</a>
            sistemas de gestión de archivos
            <a href="https://www.archivadora.com/">Archivadora</a>
            Domicilios 
            <a href="http://comeencasa.ec/">Come en casa, entre otras</a>
             
        
        </li>
    </ul>
   
 
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