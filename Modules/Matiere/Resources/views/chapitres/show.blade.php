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
<li class="dropdown list-unstyled text-center m-2">
    <a href="#" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false">dvedvfef</a>
    <ul class="dropdown-menu" role="menu">
        @foreach ($type as $item)
        <li> 
            <a href="/chapitre/search/{{$item->id}}">
                {{$item->nom}}
            </a>
        </li>
        @endforeach
    </ul>
</li>

@foreach ($mavar as $item)
<div class="tab-pane bg-white container" id="create">
    <div class="row">
        <div class="col-md-12 col-sm-6 col-xs-12">
            
            <img src={{Storage::url("public/images/thumbnails/".$item->image)}} alt="">
            <div class="info-box">
                    <div class="info-box-content">
                    <span class="info-box-number">{{$item->nom}}</span>
                    <span class="progress-text">{{$item->description}}</span>
               
            </div>
        </div>
    </div>

    <form class="form-horizontal" action="/chapitre/edit/{{$item->id}}" method="get" enctype="multipart/form-data" role="form">
        @csrf
        <div class="text-center">
            <button type="submit" class="btn btn-default">Edit</button>
        </div>
    </form>
</div>
@endforeach
<br>
<div class="text-center">
    {{ $mavar->links() }}
</div>
@stop
