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

<div class="tab-pane bg-white" id="create">
    <h4 class="p-3">Modification du client</h4>
    <form class="form-horizontal" action="/client/update/{{$modif->id}}" method="post" enctype="multipart/form-data" role="form">
        @csrf
        <div class="row">
            <div class="form-group col-md-4">
                <h5 class="bg-light p-1 m-1">Modifier le nom</h5>
                <hr>
                <input type="text" name="nom" value="{{old('nom',$modif->nom)}}" class="form-control">
            </div>

            <div class="form-group col-md-4">
                <h5 class="bg-light p-1 m-1">Choisir l'adresse mail</h5>
                <hr>
                <input type="email" name="email" value="{{old('email',$modif->email)}}" class="form-control">
            </div>

            <div class="form-group col-md-4">
                <h5 class="bg-light p-1 m-1">Choisir le numero</h5>
                <hr>
                <input type="text" name="numero" value="{{old('numero',$modif->numero)}}" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-block btn-sm">Submit</button>
        </div>
    </form>
</div>
@stop
