{{-- Statut des projets --}}
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
    Création d'une nouveau statut de projet
</h4>

<form action="/statut/create" method="post" enctype="multipart/form-data" role="form">
    @csrf
    <div class="box p-2">
        <div class="form-group p-1">
            <p>Nom du statut</p>
            <input type="text" name="nom" value="{{old('nom')}}" class="form-control">
            <button type="submit" class="btn btn-default btn-block btn-sm mt-2">Ajouter</button>
        </div>
    </div>
</form>

<br>

<div class="box box-solid">
    <div class="box-body">
        <h4 class="text-center bg-light">
            Statuts
        </h4>
        <table class="table table-condensed">
            <tbody>
                <tr class="row m-auto">
                    <th class="col-1">Id</th>
                    <th>Nom</th>
                </tr>
                @foreach ($donnee as $item)   
                <tr class="row m-auto">
                    <td class="col-1">{{$item->id}}</td>
                    <td class="col">{{$item->nom}}</td>       
                    <td class="col-1">
                        <form action="/statut/delete/{{$item->id}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-light bg-navy">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop