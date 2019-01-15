{{-- client des projets --}}
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

{{-------------------------Creation-------------------------}}
<div class="tab-pane bg-white" id="create">
    <h4 class="p-2 bg-navy text-center rounded border-primary">Création d'un client</h4>
<form action="/client/create" method="post" enctype="multipart/form-data" role="form">
    @csrf
    <div class="row">
        <div class="form-group col-md-4">
            <h5 class="bg-light m-1 p-1">Entrer le nom</h5>
            <hr>
            <input type="text" name="nom" value="{{old('nom')}}" placeholder="nom" class="form-control">
        </div>

        <div class="form-group col-md-4">
            <h5 class="bg-light m-1  p-1">Entrer l'adresse mail</h5>
            <hr>
            <input type="email" name="email" value="{{old('email')}}" placeholder="email" class="form-control">
        </div>

        <div class="form-group col-md-4">
            <h5 class="bg-light m-1 p-1">Entrer le numero</h5>
            <hr>
            <input type="text" name="numero" value="{{old('numero')}}" placeholder="numero" class="form-control">
        </div>
        
        <div class="form-group col-12 mb-0">
            <button type="submit" class="btn btn-block btn-light btn-sm border border-disabled">Submit</button>
        </div>
    </div>
</form>
</div>
<br>

<div class="box box-solid">
    <div class="box-body">
        <h4 class="text-center bg-light">
            clients
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
                    <td class="col">{{$item->email}}</td>   
                    <td class="col">{{$item->numero}}</td>   

                    <td class="col-1">
                        <a href="/client/edit/{{$item->id}}" type="submit" class="btn btn-light">Editer</a>
                    </td>      
                    <td class="col-1">
                        <form action="/client/delete/{{$item->id}}" method="POST">
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