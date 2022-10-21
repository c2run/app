<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensajesController extends Controller
{
    public function store(Request $request){
        return $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'asunto' => 'required',
            'content' => 'required',
        ]);
        return 'Datos validados';
    }
}
