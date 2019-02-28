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

<div class="row">
    @foreach ($donnee as $item)
    <div class="col-md-3">

        <div class="box">
            <div class="bg-light">
                <div class="widget-user-image">
                    <img src={{Storage::url("public/images/thumbnails/".$item->image)}}>
                </div>

                <h6 class="m-0 auto">
                    <a class="widget-user-username text-navy m-auto" href="{{$item->lien}}">{{$item->titre}}</a>
                </h6>
                <h5 class="widget-user-desc">{{$item->media}}</h5>
                <h3>{{$item->date}}</h3>
            </div>
            <div class="p-2 row">
                <div class="col-6 text-center">
                    <a href="/presse/edit/{{$item->id}}" type="submit" class="btn btn-light">Editer</a>
                </div>
                <div class="col-6">
                    <form action="/presse/delete/{{$item->id}}" method="POST" class="text-center">
                        @csrf
                        <button type="submit" class="btn btn-light bg-light border">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.widget-user -->
    </div>
    @endforeach
    {{-- <div class="form-group col-12 mb-0">
            <button type="submit" class="btn btn-block btn-light btn-sm border border-disabled">Submit</button>
        </div> --}}
    <form action="/presse/create" class="form-group col-12 mb-0">
        <button class="btn btn-block btn-light btn-sm border border-disabled">Créer un nouvel article</button>
    </form>
</div>
@stop
