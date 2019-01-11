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
{{-------------------------Affichage des roles-------------------------}}

<div class="col-md-12">
        <h4 class="bg-navy p-2 text-center">Affichage des roles créés</h4>
    <div class="tab-pane bg-light" id="show">
        <table class="table table-condensed">
            <tbody>
                <tr class="row m-auto">
                    <th class="col-1">Id</th>
                    <th class="col-3">Nom</th>
                    <th class="col-3">Categorie</th>
                    <th class="col-3">Permissions</th>
                </tr>
                @foreach ($role as $item)
                <tr class="row m-auto">
                    <td class="col-1"> {{$item->id}}</td>
                    <td class="col-3">{{$item->nom}}</td>
                    @if ($item->categorie)
                    <td class="col-3">{{$item->categorie->nom}}</td>
                    @endif
                    <td class="col-3">
                        @foreach ($item->permission as $permi)
                        {{$permi->permission}}
                        @if (count($item->permission) != $count++)
                        ,
                        @endif
                        @endforeach
                        <?php $count=1 ?>
                    </td>
                    <td class="col-1">
                        <a href="/role/edit/{{$item->id}}" type="submit" role="button" class="btn btn-light btn-md btn-block">Editer</a>
                    </td>
                    <td class="col-1">
                        <form action="/role/delete/{{$item->id}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-light bg-navy">supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <form action="/role/create" class="form-group">
        <button class="btn btn-default btn-md btn-block">Créer un nouveau role</button>
    </form>
</div>

@stop
