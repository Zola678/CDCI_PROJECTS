<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// AdminController.php

class AdminController extends Controller
{
    public function index()
    {
        if(!auth()->user()->is_admin){
            abort(403);
        }

        $users = User::withCount('requestServices')->get();

        return view('admin.index', compact('users'));
    }
}