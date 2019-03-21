@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')
@section('content_header')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div id="app">
    <div class="container">
        <App></App>
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

