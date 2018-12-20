<?php

namespace Modules\Permission\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Modules\Permission\Entities\Role;
use Modules\Permission\Entities\CategorieRole;
use Modules\Permission\Entities\Permission;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $users=User::all(); 
        $permission=Permission::all();
        $catrole=CategorieRole::all();
        $role=Role::with('permission','cat')->get();     
        return view('permission::users.index', compact('users','role', 'catrole','permission'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create(Request $request)
    {   $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password= Hash::make($request['password']);
        $user->save();
        foreach($request->role as $item){
            $user->role_users()->attach($item); 
        }
        $user->save();
        return redirect('users/admin');
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
        return view('permission::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $modif=User::find($id);
        $permission=Permission::all();
        $catrole=CategorieRole::all();
        $role=Role::with('permission','cat')->get();
        // dd($modif->role_users[0]);
        return view('permission::users.edit', compact('modif','role','catrole','permission'));
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
        $del=User::find($id);
        $del->role_users()->detach();
        $del->delete();
        return redirect('users/admin');
    }
}
