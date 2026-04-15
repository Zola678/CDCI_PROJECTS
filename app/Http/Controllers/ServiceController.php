<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// ServiceController.php

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('dashboard', compact('services'));
    }
}
