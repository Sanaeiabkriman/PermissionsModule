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

<div id="accordion text-center">
    <div class="card p-3 text-center">
        <div class="bg-light container">
            <?php echo $mavar ?>
        </div> 
            
        <br>

        <form action="/chapitre/create" class="form-group text-center">
            <button class="btn btn-default ">Créer un nouveau chapitre</button>
        </form>
    </div>
</div>

@stop

