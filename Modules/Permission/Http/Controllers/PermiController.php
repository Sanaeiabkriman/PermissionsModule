<?php
/*-----------------------------------------------
* @package Module Permissions
* @author  Sanae
* @copyright   Copyright (c) 2018 - MolenGeek (https://molengeek.com/)
* @license http://opensource.org/licenses/MIT  MIT License
* @since   Version 1.0.0
* @TODO (??)
* @param type
* @param2 type
* @return TypeObjet
-----------------------------------------------*/

namespace Modules\Permission\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Permission\Entities\Permission;
use Modules\Permission\Http\Requests\PermissionValidation;
// use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class PermiController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $donnee = Permission::all();
        return view('permission::permission.index', compact('donnee'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create(PermissionValidation $request)
    {
        $donnee = new Permission;
        $donnee->permission=$request->permission;
        $donnee->save();
        return redirect('permission/admin');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit(Permission $permission, $id)
    {
        $modif = Permission::find($id);
        return view('permission::permission.edit',compact('modif'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(PermissionValidation $request, $id)
    {
        $modif = Permission::find($id);
        $modif->permission=$request->permission;
        $modif->save();
        return redirect('permission/admin');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $del = Permission::find($id);
        $del->delete();
        return redirect('permission/admin');

    }
}
