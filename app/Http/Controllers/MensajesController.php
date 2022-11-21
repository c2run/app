<?php
namespace App\Http\Controllers;

use App\Mail\MensajeRecibido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class MensajesController extends Controller
{
    public function store(Request $request){
       $mensaje = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'asunto' => 'required',
            'content' => 'required',
        ]);
        Mail::to('jose.cerda66@gmail.com')->send(new MensajeRecibido($mensaje));
        return view('emails.mensaje-enviado');
        return back()->with('status', 'Recibimos tu mensaje, te responderemos en menos de 24 horas');
        
    }
}
