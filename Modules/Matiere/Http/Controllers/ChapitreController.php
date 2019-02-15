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
        return view('matiere::test.index', compact('mavar'));  
    }

    function recurcive($id = NULL){
        $r ="";
        $enfant = "";
        $chapitres = Chapitre::where("parent",$id)->get();
        foreach ($chapitres as $item) {
            $r .= view('matiere::test.r', compact('item')); 
            $enfant =$this->recurcive($item->id);
            if ($enfant == ""){
                $r .= view('matiere::test.liclose');  
            }
            if($enfant){
                    $ul_open = view('matiere::test.ulopen');
                    $ul_close = view('matiere::test.ulclose');
                    $r .= $ul_open.$enfant.$ul_close;
                }
            }
        return $r;
    }

    function recurcivev($id = NULL){
        $r ="";
        $enfant = "";
        $branch=array();
        $chapitres = Chapitre::where("parent",$id)->get();
        foreach ($chapitres as $item) {
            //    $splited = explode ( '.' , $item->nom);
            //    if(count($splited) >1){
            //        for($i=0; $i<count($splited);$i++){
            //            $this->r .="&nbsp;&nbsp;"; 
            //         }
            //     } //etape1
            $r .= view('matiere::test.r', compact('item')); //"<li> <a href='".url("$item->id")."' >".$item->nom."</a>";//etape2
            // $this->r .= $item->nom."<br>"; //etape1
            $enfant =$this->recurcive($item->id);
                if ($enfant == ""){
                    $r .= view('matiere::test.liclose');  
                    // $r .= $enfant;
                    //$item['enfant']=$enfant;  
                }
                if($enfant){
                    $ul_open = view('matiere::test.ulopen');
                    $ul_close = view('matiere::test.ulclose');
                    $r .= $ul_open.$enfant.$ul_close;
                }
                // $this->r .= "</ul> ";//etape 2
                // $branch[] = $item;//etape 1
                // $branch= $item;
                // return view('matiere::test.li', compact('item'));   
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
