<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// RequestServiceController.php

class RequestServiceController extends Controller
{
    public function store($id)
    {
        RequestService::create([
            'user_id'=>auth()->id(),
            'service_id'=>$id
        ]);

        return redirect()->route('requests.index')
            ->with('success','Serviço solicitado!');
    }

    public function index()
    {
        $requests = RequestService::with('service')
            ->where('user_id', auth()->id())
            ->get();

        return view('requests.index', compact('requests'));
    }
}