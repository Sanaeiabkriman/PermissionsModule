{{-- Categories --}}
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
<h4 class="bg-navy p-2 text-center">
    Modification de la categorie
</h4>

<form action="/categorie/update/{{$modif->id}}" method="post" enctype="multipart/form-data" role="form">
    @csrf
    <div class="box p-2">
        <div class="form-group p-1">
            <p>Nom de la categorie</p>
            <input type="text" name="nom" value="{{old('nom',$modif->nom)}}" class="form-control">
            <button type="submit" class="btn btn-default btn-block btn-sm mt-2">Ajouter</button>
        </div>
    </div>
</form>
@stop
