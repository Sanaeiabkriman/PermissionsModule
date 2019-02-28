@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<li class="dropdown list-unstyled text-center m-2">
        <a href="#" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false">dvedvfef</a>
        <ul class="dropdown-menu" role="menu">
            @foreach ($types as $item)
            
            <li> 
                <a href="/chapitre/search/{{$item->id}}">
                    {{$item->nom}}
                </a>
            </li>
            @endforeach
        </ul>
    </li>

@foreach ($typechapitre as $item)
<div class="bg-white container">
        <div class="row">
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="info-box m-1">
                        <img src={{Storage::url("public/images/thumbnails/".$item->image)}} alt="">
                        <div class="info-box-content">
                        <span class="info-box-number">{{$item->nom}}</span>
                        <span class="progress-text">{{$item->description}}</span>   
                    </div>
                </div>
            </div>
        </div>
</div>
@endforeach


<div class="text-center">
    {{ $typechapitre->links() }}
</div>
@stop