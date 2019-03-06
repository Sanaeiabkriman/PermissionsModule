@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<li class="dropdown list-unstyled text-center m-2">
    <a href="#" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Filtrer</a>
    <ul class="dropdown-menu" role="menu">
        @foreach ($types as $item)
        <li>
            <a href="/chapitre/search/{{$item->id}}">
                {{$item->nom}}
            </a>
        </li>
        @endforeach
    </ul>
</li>
<?php $countCours = count($typechapitre) ?>

<div  class="container text-center bg-gray disabled color-palette mt-5">
    <h4> Nous avous trouvé {{$countCours}} @if($countCours > 1) resultats @else resultat @endif à votre recherche</h4>
</div>
<br>

@foreach ($typechapitre as $item)
<div class="tab-pane bg-white container">
    <div class="row py-0">
        <div class="col-md-12 col-sm-6 col-xs-12 row m-2">
            <img src={{Storage::url("public/images/thumbnails/".$item->image)}} alt="">
            <div class="bg-light col-8">
                <div class=" m-3 p-2">
                    <a class="info-box-number" href="/chapitre/cours/{{$item->id}}">{{$item->nom}}</a>
                    <span class="progress-text">{{$item->description}}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach


<div class="text-center">
    {{$typechapitre->links()}}
</div>
@stop
