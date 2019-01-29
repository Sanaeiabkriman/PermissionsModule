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
use Modules\Permission\Entities\Role;
use Modules\Permission\Entities\CategorieRole;
use Modules\Permission\Entities\Permission;
use App\User;
use Modules\Permission\Http\Requests\RoleValidation;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $role=Role::with('permission','categorie')->get(); 
        $count=1;
        return view('permission::role.index', compact('role','count'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    
    public function create()
    {
        $user=User::all();
        $permission=Permission::all();
        $categorie=CategorieRole::all();
        $role=Role::with('permission','categorie')->get(); 
        return view('permission::role.create', compact('role','categorie','permission','user'));
         
    }
    public function store(RoleValidation $request)
    {
        $role= new Role;
        $role->categorie_role_id=$request->categorie;
        $role->nom=$request->nom;
        $role->save();
        foreach($request->permi as $item){
            $role->permission()->attach($item); 
        }
        $role->save();
        return redirect('role/admin');
    }
    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit(Request $request, $id)
    {
        $modif=Role::find($id);
        $permission=Permission::all();
        $categorie=CategorieRole::all();
        $role=Role::with('permission','categorie')->get(); 
        return view('permission::role.edit', compact('modif','categorie','permission'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(RoleValidation $request, $id)
    {
        $modif=Role::find($id);
        $modif->categorie_role_id=$request->categorie;
        $modif->nom=$request->nom;
        $modif->save();
        $modif->permission()->sync($request->permi);
        $modif->save();
        return redirect('role/admin');

    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $del=Role::find($id);
        $del->permission()->detach();
        $del->delete();
        return redirect('role/admin');

    }
}
