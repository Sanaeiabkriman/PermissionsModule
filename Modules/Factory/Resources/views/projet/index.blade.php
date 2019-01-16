{{-- projet des projets --}}
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



<div class="box box-solid">
    <div class="box-body">
        <h4 class="text-center bg-light">
            Projets
        </h4>
        <table class="table table-condensed">
            <tbody>
                <tr class="row m-auto">
                    <th class="col-1">Id</th>
                    <th class="col-2">Nom</th>
                    <th class="col-2">Date</th>
                    <th class="col-2">Client</th>
                    <th class="col-2">Statut</th>
                    <th class="col-2">Responsables</th>
                </tr>
                @foreach ($donnee as $item)   
                <tr class="row m-auto">
                    <td class="col-1">{{$item->id}}</td>
                    <td class="col-2">{{$item->nom}}</td>
                    <td class="col-2">{{$item->date}}</td>
                    <td class="col-2">{{$item->statut->nom}}</td>
                    <td class="col-2">{{$item->client->nom}}</td> 
                    <td>
                        @foreach ($item->collaborateur as $item)                        
                        {{$item->name}},
                        @endforeach
                    </td>                                       
                    <td class="col-1">
                        <form action="/projet/delete/{{$item->id}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-light bg-navy">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <form action="/projet/create" class="form-group">
        <button class="btn btn-default btn-md btn-block">Créer un nouveau projet</button>
    </form>
</div>
@stop