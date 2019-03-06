{{-- <li> <a href="url({{$item->id}})">{{$item->nom}}</a>
    <br> --}}
        
    <div class="card-header" id="headingOne">
        <h5 class="mb-0 col-12 text-center row">
            <button class="btn btn-link text-dark col-12" data-toggle="collapse" data-target="#{{$item->id}}" aria-expanded="true"
                    aria-controls="collapseOne"> 
                    {{$item->nom}}
            </button>
            <a class="col-12" href="/chapitre/cours/{{$item->id}}"> click</a>
            </h5>
        </div>
        


