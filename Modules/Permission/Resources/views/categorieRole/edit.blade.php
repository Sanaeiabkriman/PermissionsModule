{{-- Roles --}}
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
<h4 style="font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;" class="bg-navy">
    Modification de la categorie-role
</h4>

<form action="/catrole/update/{{$modif->id}}" method="post" enctype="multipart/form-data" role="form">
    @csrf
    <div class="box">
        <div class="form-group">
            <label>Nom de la categorie-role</label>
            <input type="text" name="nom" value="{{old('nom',$modif->nom)}}" class="form-control">
        </div>

        <button type="submit" class="btn btn-default btn-block btn-sm">Ajouter</button>
    </div>

</form>
@stop
