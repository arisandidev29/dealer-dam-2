<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\isNull;

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

    public function destroy(Request $request)
    {
        $id = $request->input('id');
        $deleteUser = User::find($id);
        if(!isNull($deleteUser->images)) {
             Storage::delete($deleteUser->images);
        }

        $deleteUser->delete();

         return redirect()->route('dashboard.user')->with("status","success delete User"); 
    }
}
