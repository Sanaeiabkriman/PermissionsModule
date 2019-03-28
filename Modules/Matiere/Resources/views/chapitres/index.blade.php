@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')

<h1>index</h1>
<div id="index">
    <div class="container">
        <IndexComponent></IndexComponent>
    </div>
</div>
{{-- 
<div id="accordion">
    <div class="card p-3">
        <div class="bg-light container  text-center">
      
          
        </div> 
            
        <br>

        <form action="/chapitre/create" class="form-group text-center">
            <button class="btn btn-default ">Créer un nouveau chapitre</button>
        </form>
    </div>
</div> --}}

@stop

