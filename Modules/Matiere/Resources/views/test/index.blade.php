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

<div class="box box-solid">
    <div class="box-body">
        <h4 class="text-center bg-light">
        </h4>
        <ul class="bg-light" >
            <?php echo $mavar ?>
        </ul>     
    </div>
</div>
@stop
