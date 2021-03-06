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

<h4 class="bg-navy p-2 text-center">
    Création d'une nouvelle permission
</h4>

<form action="/permission/create" method="post" enctype="multipart/form-data" role="form">
    @csrf
    <div class="box p-2">
        <div class="form-group p-1">
            <p>Nom de la permission</p>
            <input type="text" name="permission" value="{{old('permission')}}" class="form-control">
            <button type="submit" class="btn btn-default btn-block btn-sm mt-2">Ajouter</button>
        </div>
    </div>
</form>

<br>

{{-- AFFICHAGE DES PERMISSIONS --}}

<div class="box box-solid">
    <div class="box-body">
        <h4 class="text-center bg-light">
            Permissions
        </h4>
        <table class="table table-condensed">
            <tbody>
                <tr class="row m-auto">
                    <th class="col-1">Id</th>
                    <th class="col-3">Nom</th>
                </tr>
                @foreach ($donnee as $item)
                <tr class="row m-auto">
                    <td class="col-1">{{$item->id}}</td>
                    <td class="col">{{$item->permission}}</td>
                    <td class="col-1">
                        <a href="/permission/edit/{{$item->id}}" type="submit" class="btn btn-light">Editer</a>
                    </td>
                    <td class="col-1">
                        <form action="/permission/delete/{{$item->id}}" method="POST">
                            @csrf
                            <button type="submit" value="submit" class="btn btn-light bg-navy">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
