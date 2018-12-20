@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="box box-solid">
    <div class="box-body">
        {{-- Titre de page --}}
        <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
            Users
        </h4>
        <div class="tab-pane" id="create">
                <h4>Création d'un user</h4>

                <form class="form-horizontal" action="/users/create" method="post" enctype="multipart/form-data" role="form">
                    @csrf
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nom</label>
                        <input type="text" name="name" value="{{old('name')}}">
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email</label>
                        <input type="email" name="email" value="{{old('email')}}">
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Password</label>
                        <input type="password" name="password">
                    </div>
                    
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Choisir le role</label>

                        <div class="form-group">
                                @foreach ($role as $item)
                                <input type="checkbox" name="role[]" value="{{$item->id}}"> {{$item->id}}
                                @endforeach
                            </div>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-light">Submit</button>
                        </div>
                    </div>
                </form>

            </div>

        <table class="table table-condensed">
            <tbody>
                @foreach ($users as $item)
                <tr>
                    <th style="width: 10px">{{$item->id}}</th>
                    <th>{{$item->name}}</th>
                    <th>{{$item->email}}</th>
                    {{-- <th>{{$item->password}}</th> --}}

                    <th style="width: 40px">
                        <a href="/users/edit/{{$item->id}}" type="submit" class="btn btn-default">show</a>
                    </th>
                
                    <th style="width: 40px">
                        <form action="/users/delete/{{$item->id}}" method="POST">
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
