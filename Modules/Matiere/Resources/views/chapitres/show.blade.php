@extends('adminlte::page')

@section('title', 'AdminLTE')

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
<li class="dropdown list-unstyled text-center m-2">
    <a href="#" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Filtrer</a>
    <ul class="dropdown-menu" role="menu">
        @foreach ($type as $item)
        <li>
            <a href="/chapitre/search/{{$item->id}}">
                {{$item->nom}}
            </a>
        </li>
        @endforeach
    </ul>
</li>


@foreach ($mavar as $item)
    <div class=" bg-white container" id="v-for-object"  class="demo" >
        <div class="row" v-for="value in object">
            <div class="col-md-12 col-sm-6 col-xs-12 row m-2">
                <div class="col- p-0">
                    <img src={{Storage::url("public/images/thumbnails/".$item->image)}} alt="">
                </div>
                <div class="bg-gray color-palette col-8">
                    <div class="m-2 p-2">
                        <a class="info-box-number" href="/chapitre/cours/{{$item->id}}">{{$item->nom}}</a>
                        <span class="progress-text">{{$item->description}}</span>
                    </div>
                </div>
                <div class="container col-2 row">
                    <div class="col-6">
                        <a href="/chapitre/edit/{{$item->id}}" type="submit" class="btn btn-light">Editer</a>
                    </div>
                    <form action="/chapitre/delete/{{$item->id}}" method="POST" class="m-1 col-6">
                        @csrf
                        <button type="submit" class="btn btn-light border">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
<div id="app"></div>
<br>
<div class="text-center">
    {{ $mavar->links() }}
</div>
@stop
