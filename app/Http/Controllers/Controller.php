<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function contacto(Request $request)
    {
        $request->validate([
           'name' => 'required',
           'email' => 'required',
           'subject' => 'required',
           'comments' => 'required'
        ]);
        $input = $request->all();
        $correo = new ContactMail($input);
        Mail::to('mendoza.andres1996@gmail.com')->send($correo);
        
        return redirect()->back()->with(['success' => 'Se envió el correo con éxito.']);
    }
}
