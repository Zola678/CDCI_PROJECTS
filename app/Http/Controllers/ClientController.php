<?php

namespace App\Http\Controllers;
// ClientController.php

use Illuminate\Support\Str;

class ClientController extends Controller
{
    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required',
            'image'=>'nullable|image'
        ]);

        $imagePath = null;

        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('clients','public');
        }

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'image'=>$imagePath,
            'token'=>Str::random(60)
        ]);

        return redirect('/')
            ->with('success','Cliente criado com sucesso!');
    }
}