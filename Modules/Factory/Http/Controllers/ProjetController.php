<?php

namespace Modules\Factory\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Factory\Entities\Projet;
use Modules\Factory\Http\Requests\ProjetValidation;
use App\User;
use Auth;
use Modules\Factory\Entities\Statut;
use Modules\Factory\Entities\Client;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $donnee=Projet::all();
        return view('factory::projet.index', compact('donnee')); 
     }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $donnee=Projet::all();
        $collaborateurs=User::all();
        $clients=Client::all();
        $statut=Statut::all();
        return view('factory::projet.create',  compact('donnee','collaborateurs','clients','statut'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $projet= new Projet;
        $projet->nom=$request->nom;
        $projet->description=$request->description;
        $projet->date=$request->date;
        $projet->user_id=Auth::id();
        $projet->client_id=$request->clients;
        $projet->statut_id=$request->statut;
        $projet->save();
        foreach($request->collaborateurs as $item){
            $projet->collaborateur()->attach($item); 
        }
        $projet->save();
        return redirect('projet/admin');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('factory::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        $donnee=Projet::all();
        $collaborateurs=User::all();
        $clients=Client::all();
        $statut=Statut::all();
        return view('factory::projet.edit',  compact('donnee','collaborateurs','clients','statut'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $projet=Projet::find($id);
        $projet->nom=$request->nom;
        $projet->description=$request->description;
        $projet->date=$request->date;
        $projet->user_id=Auth::id();
        $projet->client_id=$request->clients;
        $projet->statut_id=$request->statut;
        $projet->save();
        $projet->collaborateur()->sync($request->collaborateurs); 
        return redirect('projet/admin');

    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $del=Projet::find($id);
        $del->collaborateur()->detach();
        $del->delete();
        return redirect('projet/admin');
    }
}
