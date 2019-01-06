<?php

namespace Modules\Permission\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Permission\Entities\Role;
use Modules\Permission\Entities\CategorieRole;
use Modules\Permission\Entities\Permission;
use App\User;
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $user=User::all();
        $permission=Permission::all();
        $catrole=CategorieRole::all();
        $role=Role::with('permission','cat')->get(); 
        return view('permission::role.index', compact('role','catrole','permission','user'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create(Request $request)
    {
        $role= new Role;
        $role->categorie_role_id=$request->cat;
        $role->save();
        foreach($request->permi as $item){
            $role->permission()->attach($item); 
        }
        $role->save();
        return redirect('role/admin/role');
    }
    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit(Request $request, $id)
    {
        $modif=Role::find($id);
        $permission=Permission::all();
        $catrole=CategorieRole::all();
        $role=Role::with('permission','cat')->get(); 
        return view('permission::role.edit', compact('modif','catrole','permission'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $modif=Role::find($id);
        $modif->categorie_role_id=$request->cat;
        $modif->save();
        $modif->permission()->sync($request->permi);
        $modif->save();
        return redirect('role/admin/role');

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
        return redirect('role/admin/role');

    }
}
