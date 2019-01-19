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

{{-------------------------Creation-------------------------}}
<div class="tab-pane bg-white" id="create">
    <h4 class="p-2 bg-navy text-center rounded border-primary">Création d'un projet</h4>
    <form action="/projet/store" method="post" role="form">
        @csrf
        <div class="row">
            <div class="form-group col-md-3">
                <h5 class="bg-light m-1 p-1">Entrer le nom du projet</h5>
                <hr>
                <input type="text" name="nom" value="{{old('nom')}}" placeholder="nom" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <h5 class="bg-light p-1">Choisir le client</h5>
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
                <h5 class="bg-light p-1">Choisir le statut</h5>
                <hr>
                <div>
                    <select name="statut" value="{{old('statut')}}" class="btn btn-block btn-sm bg-light">
                        @foreach ($statut as $item)
                        <option value="{{$item->id}}">{{$item->nom}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group col-md-3">
                <h5 class="bg-light m-1  p-1">Entrer la description du projet</h5>
                <hr>
                <input type="text" name="description" value="{{old('description')}}" placeholder="description" class="form-control">
            </div>

            <div class="form-group col-md-3">
                <h5 class="bg-light m-1 p-1">Entrer la date limite</h5>
                <hr>
                <input type="text" name="date" value="{{old('date')}}" placeholder="jj/mm/aaaa" class="form-control" id='datepicker' />
            
            </div>

            <div class="form-group col-md-4">
                <h5 class="bg-light p-1">Choisir les collaborateurs</h5>
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

            <div class="form-group col-12 mb-0">
                <button type="submit" class="btn btn-block btn-light btn-sm border border-disabled">Submit</button>
            </div>
        </div>
    </form>
</div>

@stop
