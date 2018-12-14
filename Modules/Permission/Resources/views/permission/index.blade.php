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
<h4 style="font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;" class="bg-navy">
    Création d'une nouvelle permission
</h4>

<form action="/permission/create" method="post" enctype="multipart/form-data" role="form">
    @csrf
    <div class="box">
        <div class="form-group">
            <label>Nom de la permission</label>
            <input type="text" name="permission" value="{{old('permission')}}" class="form-control">
        </div>

        <button type="submit" class="btn btn-default btn-block btn-sm">Ajouter</button>
    </div>

</form>
<br>

<div class="box box-solid">
    <div class="box-body">
        {{-- Titre de page --}}
        <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
            Permissions
        </h4>

        <table class="table table-condensed">
            <tbody>
                @foreach ($donnee as $item)
                <tr>
                    <th style="width: 10px">{{$item->id}}</th>
                    <th>{{$item->permission}}</th>

                    <th style="width: 40px">
                        <a href="/permission/edit/{{$item->id}}" type="submit" class="btn btn-default">Edit</a>
                    </th>
                
                    <th style="width: 40px">
                        <form action="/permission/delete/{{$item->id}}" method="POST">
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