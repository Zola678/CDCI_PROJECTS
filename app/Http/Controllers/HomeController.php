<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// HomeController.php

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}