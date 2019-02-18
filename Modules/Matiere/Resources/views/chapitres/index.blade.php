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

<div id="accordion">
    <div class="card">

        <ul class="bg-light" >
            <?php echo $mavar ?>
        </ul>     
    </div>
</div>
@stop

