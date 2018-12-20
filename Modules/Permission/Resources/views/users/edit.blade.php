@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
{{-- {{$modif->role_users[0]->permission[1]->permission}} --}}

Nom: {{$modif->name}} 
<br>
@foreach ($modif->role_users as $item)
    Catégorie :{{$item->cat->nom}}
    <br>

Permissions:@foreach ($item->permission as $item)

{{$item->permission}}
@endforeach
@endforeach


{{-- <h4>Modification de l'user</h4> --}}

{{-- <form class="form-horizontal" action="/users/update/{{$modif->id}}" method="post" enctype="multipart/form-data" role="form">
    @csrf
    <div class="form-group">
        <label for="inputName" class="col-sm-2 control-label">Modifier le role</label>
        <div class="form-group">
            <select name="cat">
                    @foreach ($catrole as $item)
                    <option value="{{$item->id}}">{{$item->nom}}{{old($item->id)}}</option>
                    @endforeach
            </select>
        </div> 
    </div>
    <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Modifier la permission</label>
            <div class="form-group">
                @foreach ($permission as $item)
                <input type="checkbox" name="permi[]" value="{{$item->id}}"> {{$item->permission}}
                @endforeach
            </div> 
        </div>
   
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-light">Submit</button>
        </div>
    </div>
</form> --}}

@stop
