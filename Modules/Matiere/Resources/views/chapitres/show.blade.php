@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')




{{-- @foreach ($mavar as $item)
    <div class=" bg-white container">
            <div class="row">
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
    <br> --}}


@stop
