@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

<div class="tab-pane bg-white" id="create">
    <h4 class="p-3">Modification d'un role</h4>
    <form class="form-horizontal" action="/role/update/{{$modif->id}}" method="post" enctype="multipart/form-data" role="form">
        @csrf
        <div class="row">
            <div class="form-group col-md-4">
                <h5 class="bg-light p-1 m-1">Choisir le nom</h5>
                <hr>
                <input type="text" name="nom" value="{{old('nom',$modif->nom)}}" placeholder="nom" class="form-control">
            </div>

            <div class="form-group col-md-4">
                <h5 class="bg-light p-1 m-1">Choisir la categorie</h5>
                <hr>
                <div>
                    <select name="categorie" class="btn btn-block btn-sm bg-light">
                        @foreach ($categorie as $item)
                        <option value="{{$item->id}}">{{$item->nom}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group col-md-4">
                <h5 class="bg-light p-1 m-1">Choisir les permissions</h5>
                <hr>
                <div class="form-group">
                    @foreach ($permission as $item)
                    <div class="col-lg-6">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <input type="checkbox" name="permi[]" value="{{$item->id}}">{{$item->permission}}
                            </span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-block btn-sm">Submit</button>
        </div>
    </form>
</div>
@stop
