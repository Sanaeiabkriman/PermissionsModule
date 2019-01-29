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
<div class="tab-pane bg-white" id="create">
    <h4 class="p-2 bg-navy text-center rounded border-primary">Création d'une référence media</h4>
    <form action="/presse/store" method="post" enctype="multipart/form-data" role="form">
        @csrf
        <div class="row">
            <div class="form-group col-md-4">
                <h5 class="bg-light m-1 p-1">Entrer le nom du media</h5>
                <hr>
                <input type="text" name="media" value="{{old('media')}}" placeholder="media" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <h5 class="bg-light m-1 p-1">Entrer la date de l'article</h5>
                <hr>
                <input type="text" name="date" value="{{old('date')}}" placeholder="jj/mm/aaaa" class="form-control" id='datepicker' />
            </div>

            <div class="form-group col-md-4">
                <h5 class="bg-light m-1  p-1">Entrer le lien de l'article</h5>
                <hr>
                <input type="lien" name="lien" value="{{old('lien')}}" placeholder="lien" class="form-control">
            </div>

            <div class="form-group col-md-4">
                <h5 class="bg-light m-1 p-1">Entrer le titre de l'article</h5>
                <hr>
                <input type="text" name="titre" value="{{old('titre')}}" placeholder="titre" class="form-control">
            </div>
            <div class="form-group col-md-4 m-2">
                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group col-12 mb-0">
                <button type="submit" class="btn btn-block btn-light btn-sm border border-disabled">Submit</button>
            </div>
        </div>
    </form>
</div>
@stop
