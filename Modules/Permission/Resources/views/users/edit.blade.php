@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@foreach ($role as $item)
{{$modif->role_users[0]->permission[1]->permission}}
@endforeach

@stop
