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

<br>
<div class="box box-solid">
    <div class="box-body">
        <h4 class="text-center bg-light">
        </h4>
        <table class="table table-condensed">
            <tbody>
                <tr class="row m-auto">
                    <th class="col-1">Id</th>
                    <th class="col-4">Nom</th>
                    <th class="col-4">Parent</th>

                </tr>
                @foreach ($chapitres as $item)   
                {{dd($item)}} <br>

                <tr class="row m-auto">
                    <td class="col-1">{{$item->id}}</td>
                    <td class="col">{{$item->nom}}</td>   
                    <td class="col">{{$item->parent}}</td>   

                    <td class="col-1">
                        <a href="/test/recurcive/{{$item->id}}" type="submit" class="btn btn-light">voir le chapitre</a>
                    </td>      
                    <td class="col-1">
                        <form action="/chapitre/delete/{{$item->id}}" method="POST">
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