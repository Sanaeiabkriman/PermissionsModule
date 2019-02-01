<?php

namespace Modules\Coding\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Coding\Entities\Etat;
use Modules\Coding\Http\Requests\EtatValidation;

class EtatController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $donnee=Etat::all();
        return view('coding::etats.index', compact('donnee'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create(EtatValidation $request)
    {
        $donnees=new Etat;
        $donnees->nom =$request->nom;
        $donnees->save();
        return redirect('etats/admin');
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
        $modif=Etat::find($id);
        return view('coding::etats.edit', compact('modif'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(EtatValidation $request, $id)
    {
        $modif=Etat::find($id);
        $modif->nom=$request->nom;
        $modif->save();
        return redirect('etats/admin');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $del=Etat::find($id);
        $del->delete();
        return redirect ('etats/admin');
    }
}
