<?php

namespace Modules\Matiere\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Matiere\Entities\Chapitre;
use Modules\Matiere\Entities\Type;
use ImageIntervention;
use Storage;
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
    //     $mavar=$this->recurcive();
    //     // $mavar = $this->r;
        return view('matiere::chapitres.index', compact('chapitres'));  
  

    }

    public function fetch(){
        $chapitres = Chapitre::all();
        return response()->json($chapitres);
    }
    public function fetchtype(){
        $types = Type::all();
        return response()->json($types);
    }

    function recurcive($id = NULL){
        $r ="";
        $enfant = "";
        $chapitres = Chapitre::where("parent",$id)->get();
        foreach ($chapitres as $item) {
            $r .= view('matiere::chapitres.r', compact('item')); 
            $enfant =$this->recurcive($item->id);
            if (!$enfant){
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
        $chapitre=chapitre::all();
        $type=Type::all();
        return view('matiere::chapitres.create',  compact('chapitre','type'));
    }
    
    /**
     * 
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        // $img=$request->file('image');
        // $renom=time().$img->hashName();
        // $img->store('/public/images/original');
        // $resized=ImageIntervention::make($img)->resize(90,90);
        // $resized->save();
        // Storage::put('/public/images/thumbnails/'.$renom, $resized);

        $chapitre = new Chapitre([
            'nom' => $request->nom,
            'parent' => $request->parent,
            'description' => $request->description,
            'competences' => $request->competences,
            'prerequis' => $request->prerequis,
            'image' =>$request->image,
            'enfant' => NULL,
            ]);
            if($request->parent == "NULL")
            $chapitre->parent=NULL;
            // foreach($request->type as $item){
            //     $typearticle=Type::find($item);
            //     $chapitre->type()->attach($typearticle);
            //     $chapitre->save();
            // }
        $chapitre->save();
        return response()->json('success');
        
        
        //   foreach($request->type as $item){
        //     $typearticle=Type::find($item);
        //     $chapitre->type()->attach($typearticle);
        //     $chapitre->save();
        // }
        // $chapitre=new Chapitre;
        // $chapitre->nom=$request->nom;
        // $chapitre->parent=$request->parent;
        
        
        // // $article->textepreview= str_limit($request->texte,200);
        // $chapitre->description =$request->description;
        // $chapitre->competences =$request->competences;
        // $chapitre->prerequis =$request->prerequis;
        // $chapitre->image=$renom;
        // $chapitre->enfant=null;
        // $chapitre->save();
        // foreach($request->type as $item){
        //     $typearticle=Type::find($item);
        //     $chapitre->type()->attach($typearticle);
        //     $chapitre->save();
        // }
        // // return redirect("chapitre/admin");
        // return response()->json('Successfully added');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        $mavar=Chapitre::all();
        $type=Type::all();
        // $mavar=$this->recurcive();
        return response()->json($mavar);
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $chapitre=chapitre::find($id);
        $chaps=chapitre::all();
        $type=Type::all();
        return response()->json($chapitre,$chaps,$type);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $chapitre=Chapitre::find($id);
        if ($request->image== null){   
        }else{      
            Storage::delete('public/images/original/'.$chapitre->image);
            Storage::delete('public/images/thumbnails/'.$chapitre->image);
            $img=$request->image;
            $renom=time().$img->hashName();
            $img->store('/public/images/original/');
            $resized=ImageIntervention::make($img)->resize(125,125);
            $resized->save();
            Storage::put('/public/images/thumbnails/'.$renom, $resized);
            $chapitre->image=$renom;
        }
        $chapitre->nom=$request->nom;
        $chapitre->parent=$request->parent;
        if($request->parent == "NULL")
        $chapitre->parent=NULL;
        $chapitre->description =$request->description;
        $chapitre->competences =$request->competences;
        $chapitre->prerequis =$request->prerequis;
        $chapitre->image=$renom;
        $chapitre->enfant=null;
        $chapitre->save();
        $chapitre->type()->sync($request->type);
        $chapitre->save();
        // return redirect('chapitre/show');
        return response()->json('Successfully Updated');
        
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $del=chapitre::find($id);
        Storage::delete($del->image);
        $del->type()->detach();
        $del->delete();
        // return redirect('chapitre/show');
        return response()->json('Successfully Deleted');

    }

    public function search($id)
    {
        $types=Type::all();
        $type = Type::find($id);
        $typechapitre= $type->chapitre()->paginate(6);    
        return view ('matiere::chapitres.search',compact('typechapitre','types'));
    }

    public function cours($id)
    {
        $cours = Chapitre::find($id);
        $courstest=$this->recurcive($id);
        $count=1;
        return view ('matiere::chapitres.cours',compact('cours', 'courstest','count'));
    }
}
