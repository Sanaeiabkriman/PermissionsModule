<?php

namespace Modules\Permission\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Permission\Entities\Permission;
use Modules\Permission\Http\Requests\PermissionValidation;
class PermiController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $donnee =Permission::all();
        return view('permission::permission.index', compact('donnee'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create(PermissionValidation $request)
    {
        $donnee= new Permission;
        $donnee->permission=$request->permission;
        $donnee->save();
        return redirect('permission/admin/permis');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $modif=Permission::find($id);
        return view('permission::permission.edit',compact('modif'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(PermissionValidation $request, $id)
    {
        $modif=Permission::find($id);
        $modif->permission=$request->permission;
        $modif->save();
        return redirect('permission/admin/permis');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $del=Permission::find($id);
        $del->delete();
        return redirect('permission/admin/permis');

    }
}
