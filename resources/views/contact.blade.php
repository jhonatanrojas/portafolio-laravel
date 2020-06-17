@extends('layout')
@section('title')
Contact
@endsection
@section('content')
<div class="container">

<div class="row">
    <div class="col-12 col-sm-10 col-lg-8 mx-auto">
   

        
            @include('partials.session-status')
            <h1 class="display-5">{{ __('Contact')}}</h1>
            <form   method="post" 
                    action="{{ route('contactp') }}" 
                    class="bg-white shadow rounded px-4 py-3">
                @csrf
        
               
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text " 
                    class="form-control bg-light shadow-sm 
                     @error('name')   is-invalid  
                     @else  border-0  @enderror"
                     name="name" 
                     placeholder="Nombre" 
                     value="{{ old('name')}}"
                     id="name"> 
                     @error('name')
                         <span class=" invalid-feedback " role="alert">
                         <strong> {{ $message}}</strong>
                         </span>
                     @enderror
                </div>
              
                <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control bg-light shadow-sm 
                @error('email')   is-invalid  
                @else  border-0  @enderror" 
                name="email" 
                id="email"
                placeholder="Email" 
                value="{{ old('email')}}">
        
                @error('email')
                <span class=" invalid-feedback " role="alert">
                <strong> {{ $message}}</strong>
                </span>
                 @enderror
        
                </div>
                <div class="form-group">
                    <label for="subject">Asunto</label>
                <input  type="text" 
                        class="form-control bg-light shadow-sm 
                        @error('subject')   is-invalid  
                        @else  border-0  @enderror" 
                        name="subject" 
                        id="subject"
                        placeholder="Asunto" 
                        value="{{ old('subject')}}">
                        @error('subject')
                        <span class=" invalid-feedback " role="alert">
                        <strong> {{ $message}}</strong>
                        </span>
                         @enderror
                    </div>
        
            <div class="form-group">
                        <label for="content">Contenido</label>
        
                <textarea 
               
                    class="form-control bg-light shadow-sm 
                    @error('content')   is-invalid  
                    @else  border-0  @enderror" 
                    name="content" 
                    id="content" cols="30" 
                    rows="10">{{ old('content')}}
                </textarea>
        
                    @error('content')
                    <span class=" invalid-feedback " role="alert">
                    <strong> {{ $message}}</strong>
                    </span>
                    @enderror
            </div>
               
            <div class="form-group">
                <button class="btn btn-primary btn-lg btn-block ">Enviar</button>
            </div>
        
            </form>  
        </div>
    </div>
</div>


@endsection