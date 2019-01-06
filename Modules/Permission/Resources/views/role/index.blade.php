@extends('adminlte::page')
@section('title', 'AdminLTE')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="col-md-9">
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs p-2">
            <li class="p-1 px-2"><a href="#show" data-toggle="tab" aria-expanded="false">Roles</a></li>
            <li class="p-1 px-2"><a href="#create" data-toggle="tab" aria-expanded="false"> Ajouter un role </a></li>
        </ul>
        <div class="tab-content">

            <div class="tab-pane" id="show">
                <h4>Affichage des roles créés</h4>

                <table class="table table-condensed">
                    <tbody>
                        @foreach ($role as $item)
                        <tr>
                            <th style="width: 10px"> {{$item->id}}</th>
                            <th style="width: 10px">{{$item->cat->nom}}</th>

                            <th style="width: 10px"> 
                            @foreach ($item->permission as $permi)
                                {{$permi->permission}},
                                @endforeach
                            </th>
                            <th style="width: 80px">
                                <a href="/role/edit/{{$item->id}}" type="submit" class="btn btn-block btn-default btn-xs">Editer</a>
                            </th>
                            <th style="width: 80px">
                                <form action="/role/delete/{{$item->id}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-block btn-default btn-xs">supprimer</button>
                                </form>
                            </th>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
                <!-- /.post -->
              
            </div>



            {{--
            -------------------------------------------------------------------------------------------------------
            --}}

            <!-- /.tab-pane -->

            <div class="tab-pane" id="create">
                <h4>Création d'un role</h4>

                <form class="form-horizontal" action="/role/create" method="post" enctype="multipart/form-data" role="form">
                    @csrf
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Choisir la categorie de role</label>
                        <div class="form-group">
                            <select name="cat" value="{{old('cat')}}">
                                @foreach ($catrole as $item)
                                <option value="{{$item->id}}">{{$item->nom}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Choisir la permission</label>
                        <div class="form-group">
                            @foreach ($permission as $item)
                            <input type="checkbox" name="permi[]" value="{{$item->id}}"> {{$item->permission}}
                            @endforeach
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-light">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
            <!-- /.tab-pane -->


        </div>
        <!-- /.tab-content -->
    </div>
    <!-- /.nav-tabs-custom -->

</div>

@stop
