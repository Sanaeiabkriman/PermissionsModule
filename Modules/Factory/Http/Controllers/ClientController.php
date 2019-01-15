<?php

namespace Modules\Factory\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Factory\Entities\Client;
use Modules\Factory\Http\Requests\ClientValidation;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $donnee = Client::all();
        return view('factory::client.index', compact('donnee'));       }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create(ClientValidation $request)
    {
        $donnee = new Client;
        $donnee->nom=$request->nom;
        $donnee->numero=$request->numero;
        $donnee->email=$request->email;
        $donnee->save();
        return redirect('client/admin');    
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
        return view('factory::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $modif = Client::find($id);
        return view('factory::client.edit',compact('modif'));    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(ClientValidation $request,$id)
    {
        $modif = Client::find($id);
        $modif->nom=$request->nom;
        $modif->numero=$request->numero;
        $modif->email=$request->email;
        $modif->save();
        return redirect('client/admin');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $del = Client::find($id);
        $del->delete();
        return redirect('client/admin');
    }
}
