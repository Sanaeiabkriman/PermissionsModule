@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')


<section class="container">
    <div class="bg-purple color-palette container">
        <h3 class="text-center">{{$cours->nom}}</h3>
        <p>
        @foreach ($cours->type as $item)
          <a href="/chapitre/search/{{$item->id}}" class="text-white">{{$item->nom}}</a>  ,
        @endforeach
        </p>
    </div>

    <p class="bg-light container">
        <?php echo $courstest ?>
    </p> 
    <div class="m-5 bg-white p-2 border">
        <div class="text-center">
            {{-- <img src={{Storage::url("public/images/thumbnails/".$cours->image)}} alt=""> --}}
        </div>
        <p class="m-5">{{$cours->description}}</p>
        <p class="m-5 bg-light p-3">Compétences: {{$cours->competences}}</p>
        <p class="m-5 bg-gray color-palette p-3">Prerequis: {{$cours->prerequis}}</p>
    </div>


</section>

@stop