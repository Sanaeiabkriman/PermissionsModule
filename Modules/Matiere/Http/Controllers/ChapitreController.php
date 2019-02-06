<?php

namespace Modules\Matiere\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Matiere\Entities\Chapitre;

class ChapitreController extends Controller
{
    protected $c=array();
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $chapitres=Chapitre::all();
        $this->recurcive();
        return view('matiere::test.index', compact('chapitres'));
    }
    
    public function recurcive($id = NULL){
        //-- on stoque les parents dont l'id est null dans $chapitre
        $chapitres = Chapitre::where("parent",$id)->get();
        // --si chapitres n'est pas vide, et donc s'il a des enfants
        if($chapitres->isNotEmpty()){
            // -- pour chaque chapitre qui a des enfants, 
            foreach ($chapitres as $item) {
                //  -- si son id n'est pas null et donc s'il a encore des enfants
                if($id != NULL){
                    // -- on 
                    $this->c[$id]= array();
                    array_push($this->c[$id],$item);
                }else{
                    $this->c ["null"] = array();
                    array_push($this->c,$item);
                }
                
                $this->recurcive($item->id);
            }
        } 
        // return $array;

        // return view('matiere::test.index', compact('chapitres'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('matiere::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('matiere::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('matiere::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
