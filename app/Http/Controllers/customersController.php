<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class customersController extends Controller
{
    // create customers
    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email:rfc|unique:users,email'
        ]);


        $user = User::create([...$validated,'password' => $validated['name']]);


        $user->assignRole("customer");

        return back()->with("status",'Create Customer success ');
    }

    // show edit customers

    public function edit(string $id)
    {

         return view("admin.customers.edit",[
            'customer' => User::find($id)
         ]);
    }

    // update

    public function update(Request $request)
    {
        $user = User::find($request->input("id"));
        $validated = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email:rfc ' , Rule::unique('users','email')->ignore($user->id)]
        ]);


        $user->fill($validated);
        $user->password = $validated['name'];

        $user->save();

        return back()->with("status",'Change Customer success ');
    }


    public function destroy(Request $request) {
        $id = $request->input("id");

        $customer = User::find($id);
        $name = $customer->name;
        if($customer->images) {
            Storage::delete($customer->images);
        }

        $customer->delete();

        return redirect()->route("dashboard.customers")->with("status", "delete customer $name success");

    }
}
