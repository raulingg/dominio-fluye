<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dominio;

class DominioController extends Controller
{
   public function registrar()
   {
       return view('dominio/registrar');
   }
   
   public function enviarSolicitud(Request $request, Dominio $dominio)
   {
        $dominioRequest = $request->get('dominio');
        
        $this->validate($request, ['dominio' => 'required']);
        
        $dominioArray = explode('.', $dominioRequest);
        $cantidad = count($dominioArray);
        
        if ($cantidad > 3 || $cantidad <= 1) {
            session()->flash('error', 'Dominio inválido');
            return redirect()->back();
        } 
             
        $dominio->save(['dominio' => $dominioRequest]);
        session()->flash('success', 'Su solicitud de registro fue enviada con éxito');
        return redirect()->back();
   }
}
