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
       // $chapitres=Chapitre::all();
        $mavar=$this->recurcive();
        // $mavar = $this->r;
        return view('matiere::chapitres.index', compact('mavar'));  
    }

    function recurcive($id = NULL){
        $r ="";
        $enfant = "";
        $chapitres = Chapitre::where("parent",$id)->get();
        foreach ($chapitres as $item) {
            $r .= view('matiere::chapitres.r', compact('item')); 
            $enfant =$this->recurcive($item->id);
            if ($enfant == ""){
                $r .= view('matiere::chapitres.liclose', compact('item'));  
            }
            if($enfant){
                    $ul_open = view('matiere::chapitres.ulopen',compact('item'));
                    $ul_close = view('matiere::chapitres.ulclose',compact('item'));
                    $r .= $ul_open.$enfant.$ul_close;
                }
            }
        return $r;
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
    public function show($id)
    {
        $mavar=Chapitre::find($id);
        $mavar=$this->recurcive();
        return view('matiere::chapitres.show', compact('mavar'));
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
