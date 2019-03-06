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

<div class="tab-pane bg-white">
        <h4 class="p-2 bg-navy text-center rounded border-primary">Création d'un projet</h4>
        <form action="/chapitre/update/{{$chapitre->id}}" method="post" enctype="multipart/form-data" role="form">
            @csrf
            <div class="row">
                <div class="form-group col-md-3">
                    <h5 class="bg-light m-1 p-1">Entrer le nom du chapitre</h5>
                    <hr>
                    <input type="text" name="nom" value="{{old('nom',$chapitre->nom)}}" class="form-control">
                </div>
    
                <div class="form-group col-md-4">
                    <h5 class="bg-light p-1">Choisir le parent</h5>
                    <hr>
                    <div>
                        <select name="parent" value="{{old('parent')}}" class="btn btn-block btn-sm bg-light">
                            <option value="NULL"> </option>
                            @foreach ($chaps as $item)
                            <option value="{{$item->id}}">{{$item->nom}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-4 m-2">
                        <input type="file" name="image" class="form-control-file">
                    </div>
                <div class="form-group col-md-4">
                    <h5 class="bg-light p-1">Choisir les competences</h5>
                    <hr>
                    <div>
                        <input type="text" name="competences" value="{{old('competences',$chapitre->competences)}}" placeholder="competences" class="form-control">
                    </div>
                </div>
    
                <div class="form-group col-md-3">
                    <h5 class="bg-light m-1  p-1">Entrer la description du chapitre</h5>
                    <hr>
                    <textarea type="text" cols="30" rows="10" name="description" value="{{old('description')}}" placeholder="description" class="form-control">{{$chapitre->description}}</textarea>
                </div>
                <div class="form-group col-md-3">
                    <h5 class="bg-light m-1 p-1">Entrer les prerequis</h5>
                    <hr>
                    <input type="text" name="prerequis" value="{{old('prerequis',$chapitre->prerequis)}}" placeholder="prerequis" class="form-control"/>
                </div>
    
                <div class="form-group col-md-4">
                        <h5 class="bg-light p-1">Choisir le type</h5>
                        <hr>
                        <div class="form-group">
                                @foreach ($type as $types)
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="checkbox" name="type[]" value="{{$types->id}}">{{$types->nom}}
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