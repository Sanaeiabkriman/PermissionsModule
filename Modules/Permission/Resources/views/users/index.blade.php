@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="box box-solid">
    <div class="box-body">
        {{-- Titre de page --}}
        <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
            Users
        </h4>

        <table class="table table-condensed">
            <tbody>
                @foreach ($users as $item)
                <tr>
                    <th style="width: 10px">{{$item->id}}</th>
                    <th>{{$item->name}}</th>
                    <th>{{$item->email}}</th>
                    {{-- <th>{{$item->password}}</th> --}}
                    <th>
                        {{$item->role_users}}
                    </th>
                    <th style="width: 40px">
                        <a href="/users/edit/{{$item->id}}" type="submit" class="btn btn-default">Edit</a>
                    </th>
                
                    {{-- <th style="width: 40px">
                        <form action="/permission/delete/{{$item->id}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-default">Del</button>
                        </form>
                    </th> --}} 
                </tr>
                @endforeach
                {{dd($role->user)}}
                @foreach ($role as $item)
                    @foreach ($item->permission as $item)
                        {{$item->permission}}
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
