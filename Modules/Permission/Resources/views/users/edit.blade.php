@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
{{-- {{$modif->role_users[0]->permission[1]->permission}} --}}

Nom: {{$modif->name}} 
<br>
Catégorie : 
@foreach ($modif->role_users as $item)
 {{$item->categorie->nom}}
@endforeach

<br>
Permissions:
    @foreach ($permission as $item)
    {{$item->permission}}
    @endforeach



@stop
