<?php

namespace Modules\Factory\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Factory\Entities\Statut;
use Modules\Factory\Http\Requests\StatutValidation;

class StatutController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $donnee = Statut::all();
        return view('factory::statut.index', compact('donnee'));    
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create(StatutValidation $request)
    {
        $donnee = new Statut;
        $donnee->nom=$request->nom;
        $donnee->save();
        return redirect('statut/admin');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('factory::edit');
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
    public function destroy($id)
    {
        $del = Statut::find($id);
        $del->delete();
        return redirect('statut/admin');
    }
}
