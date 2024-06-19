<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class usersController extends Controller
{
    public function changeRole(Request $request)
    {
        $role = $request->input("role");
        $id = $request->input("id");

        #current roles
        $user = User::find($id);

        $currentRole = $user->getRoleNames()->first();

        $user->removeRole($currentRole);

        $user->assignRole($role);

        return back()->with('status','change role user ' . $user->name . ' success');


    }
}
