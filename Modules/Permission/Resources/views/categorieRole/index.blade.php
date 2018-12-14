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
    Création d'une nouvelle categorie-role
</h4>

<form action="/catrole/create" method="post" enctype="multipart/form-data" role="form">
    @csrf
    <div class="box">
        <div class="form-group">
            <label>Nom de la categorie-role</label>
            <input type="text" name="nom" value="{{old('nom')}}" class="form-control">
        </div>

        <button type="submit" class="btn btn-default btn-block btn-sm">Ajouter</button>
    </div>

</form>
<br>

<div class="box box-solid">
    <div class="box-body">
        {{-- Titre de page --}}
        <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
            Categorie Roles
        </h4>

        <table class="table table-condensed">
            <tbody>
                @foreach ($donnee as $item)
                <tr>
                    <th style="width: 10px">{{$item->id}}</th>
                    <th>{{$item->nom}}</th>

                    <th style="width: 40px">
                        <a href="/catrole/edit/{{$item->id}}" type="submit" class="btn btn-default">Edit</a>
                    </th>
                
                    <th style="width: 40px">
                        <form action="/catrole/delete/{{$item->id}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-default">Del</button>
                        </form>
                    </th>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
