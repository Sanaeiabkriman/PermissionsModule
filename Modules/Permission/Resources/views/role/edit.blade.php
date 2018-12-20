 @extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="tab-pane" id="create">
        <h4>Modification d'un role</h4>

        <form class="form-horizontal" action="/role/update/{{$modif->id}}" method="post" enctype="multipart/form-data" role="form">
            @csrf
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Modifier la categorie de role</label>
                <div class="form-group">
                    <select name="cat">
                            @foreach ($catrole as $item)
                            <option value="{{$item->id}}">{{$item->nom}}{{old($item->id)}}</option>
                            @endforeach
                    </select>
                </div> 
            </div>
            <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Modifier la permission</label>
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
@stop
