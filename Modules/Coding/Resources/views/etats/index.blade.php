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
    <h4 class="p-2 bg-navy text-center rounded border-primary">Création d'un etat</h4>
<form action="/etats/create" method="post" enctype="multipart/form-data" role="form">
    @csrf
    <div class="row">
        <div class="form-group col-md-4">
            <h5 class="bg-light m-1 p-1">Entrer le nom</h5>
            <hr>
            <input type="text" name="nom" value="{{old('nom')}}" placeholder="nom" class="form-control">
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
            etats
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
                        <a href="/etats/edit/{{$item->id}}" type="submit" class="btn btn-light">Editer</a>
                    </td>      
                    <td class="col-1">
                        <form action="/etats/delete/{{$item->id}}" method="POST">
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