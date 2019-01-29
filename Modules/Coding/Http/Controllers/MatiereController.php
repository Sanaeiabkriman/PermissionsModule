<?php

namespace Modules\Coding\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Coding\Entities\Matiere;

class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $donnee=Matiere::all();
        return view('coding::matiere.index', compact('donnee'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create(Request $request)
    {
        $donnee= new Matiere;
        $donnee->nom=$request->nom;
        $donnee->save();
        return redirect ('matiere/admin');
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
        return view('coding::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $modif=Matiere::find($id);
        return view('coding::matiere.edit', compact('modif'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request,$id)
    {
        $modif=Matiere::find($id);
        $modif->nom=$request->nom;
        $modif->save();
        return redirect('matiere/admin');

    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $del=Matiere::find($id);
        $del->delete();
        return redirect('matiere/admin');
    }
}
