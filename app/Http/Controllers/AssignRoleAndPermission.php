<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;

class AssignRoleAndPermission extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:assign role/permission');
    }
    public function assignRole(Request $request,$id){
        $user=User::findOrFail($id);
        $request->validate([
            'role_id' => 'required|array',
            'role_id.*' => 'exists:roles,id',
        ]);
        $roleIDstring=implode(',',$request->role_id);
        $rolesId=explode(',',$roleIDstring);
            $role=Role::whereIn('id',$rolesId)->get();
            $user->syncRoles($role);
        return response()->json([
            'message' => 'Role assigned to user successfully.'
        ]);

    }
    public function assignPermissionToRoles(Request $request,$id){
        // $user =User::find(Auth::user()->id);
        // dd($user->hasRole(['user']));

        $role=Role::findOrFail($id);
        $request->validate([
            'permission_id' => 'required|array',
            'permission_id.*' => 'exists:roles,id',
        ]);
        $permissionIDstring=implode(',',$request->permission_id);
        $permissionsId=explode(',',$permissionIDstring);
            $permission=Permission::whereIn('id',$permissionsId)->get();
            $role->syncPermissions($permission);
        return response()->json([
            'message' => 'Permission assigned to role successfully.'
        ]);
    }
public function userWithRoleAndPermission(Request $request, $id)
{
    $user = User::findOrFail($id)->load('roles.permissions');
    // $roleId=$user->roles->pluck('id');
    // foreach($roleId as $roles){
    //     $p=Role::findById($roles)->with('permissions:name')->get();
    //        $permiss=$p->pluck('permissions')->flatten()->pluck('name')->toArray();
    // }
    // $roles = $user->roles->pluck('name')->toArray();

    return response()->json([
        'user' => $user->only('name', 'email'),
        User::findOrFail($id)->load('roles.permissions'),

    ]);
}
public function removeRoleToUser(Request $request, $id)
{
    $user = User::findOrFail($id);
    $request->validate([
        'role_id'=>'required|exists:roles,id'
    ]);
    $role=Role::findById($request->role_id);
    $user->removeRole($role);

    return response()->json([
        'message' => 'role succesfuly deleted',
    ]);
}
}
