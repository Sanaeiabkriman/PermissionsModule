{{-- /*-----------------------------------------------
* @package Module Permissions
* @author  Sanae
* @copyright   Copyright (c) 2018 - MolenGeek (https://molengeek.com/)
* @license http://opensource.org/licenses/MIT  MIT License
* @since   Version 1.0.0
* @TODO (??)
* @param type
* @param2 type
* @return TypeObjet
-----------------------------------------------*/ --}}
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
    Création d'un post
</h4>

<form action="/posts/create" method="post" enctype="multipart/form-data" role="form">
    @csrf
    <div class="box">
        <div class="form-group">
            <label>Nom du post</label>
            <input type="text" name="text" value="{{old('text')}}" class="form-control">
        </div>

        <button type="submit" class="btn btn-default btn-block btn-sm">Ajouter</button>
    </div>

</form>
<br>

<div class="box box-solid">
    <div class="box-body">
        {{-- Titre de page --}}
        <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
            Posts
        </h4>

        <table class="table table-condensed">
            <tbody>
                @foreach ($post as $item)
                <tr>
                    <th style="width: 10px">{{$item->id}}</th>
                    <th>{{$item->text}}</th>
                    <th>{{$item->user_id}}</th>
                    <th>{{$item->user->name}}</th>
                    @can('update',$item)
                    <th style="width: 40px">
                        <a href="/posts/edit/{{$item->id}}" type="submit" class="btn btn-default">Edit</a>
                    </th>
                    @endcan
                    
                    @can('delete',$item)
                    <th style="width: 40px">
                        <form action="/posts/delete/{{$item->id}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-default">Del</button>
                        </form>
                    </th>
                    @endcan
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop

