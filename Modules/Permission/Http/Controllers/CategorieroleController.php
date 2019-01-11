<?php

namespace Modules\Permission\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Permission\Entities\CategorieRole;
use Modules\Permission\Http\Requests\CategorieRoleValidation;
class CategorieroleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $donnee=CategorieRole::all();
        return view('permission::categorie.index', compact('donnee'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create(CategorieRoleValidation $request)
    {
        $donnee= new CategorieRole;
        $donnee->nom=$request->nom;
        $donnee->save();
        return redirect ('categorie/admin');
    }
    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $modif=CategorieRole::find($id);
        return view('permission::categorie.edit',compact('modif'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(CategorieRoleValidation $request, $id)
    {
        $donnee=CategorieRole::find($id);
        $donnee->nom=$request->nom;
        $donnee->save();
        return redirect('categorie/admin');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $del=CategorieRole::find($id);
        $del->delete();
        return redirect('categorie/admin');
    }
}
