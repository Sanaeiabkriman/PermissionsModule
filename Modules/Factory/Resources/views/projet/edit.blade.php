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
<div class="tab-pane bg-white" id="create">
    <h4 class="p-3">Modification du client</h4>
    <form class="form-horizontal" action="/projet/update/{{$modif->id}}" method="post" enctype="multipart/form-data"
        role="form">
        @csrf
        <div class="row m-1">
            <div class="form-group col-md-4">
                <h5 class="bg-light p-1 m-1">Modifier le nom</h5>
                <hr>
                <input type="text" name="nom" value="{{old('nom',$modif->nom)}}" class="form-control">
            </div>

            <div class="form-group col-md-4">
                <h5 class="bg-light m-1 p-1">Choisir le client</h5>
                <hr>
                <div>
                    <select name="clients" value="{{old('clients')}}" class="btn btn-block btn-sm bg-light">
                        @foreach ($clients as $item)
                        <option value="{{$item->id}}">{{$item->nom}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group col-md-4">
                <h5 class="bg-light m-1 p-1">Choisir le statut</h5>
                <hr>
                <div>
                    <select name="statut" value="{{old('statut')}}" class="btn btn-block btn-sm bg-light">
                        @foreach ($statut as $item)
                        <option value="{{$item->id}}">{{$item->nom}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group col-md-5">
                <h5 class="bg-light m-1  p-1">Entrer la description du projet</h5>
                <hr>
                <textarea type="text" name="description" value="{{old('description')}}" class="form-control">{{$modif->description}}</textarea>
            </div>
            <div class="form-group col-md-4">
                <h5 class="bg-light m-1 p-1">Entrer la date limite</h5>
                <hr>
                <input type="text" name="date" value="{{old('date',$modif->date)}}" placeholder="jj/mm/aaaa" class="form-control" id='datepicker'/>

            </div>
            <div class="form-group col-md-3">
                <h5 class="bg-light m-1 p-1">Choisir les collaborateurs</h5>
                <hr>
                <div class="form-group">
                    @foreach ($collaborateurs as $item)
                    <div class="col-lg-6">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <input type="checkbox" name="collaborateurs[]" value="{{$item->id}}">{{$item->name}}
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
