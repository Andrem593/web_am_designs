<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        $fecha = date('Y-m-d H:i:s');                
        return view('screens.tickets', compact('user','fecha'));
    }

    public function store(Request $request)
    {
        $ticket = new Ticket();
        $ticket->user_id = auth()->user()->id;
        $ticket->fecha = date('Y-m-d H:i:s');
        $ticket->prioridad = $request->prioridad;
        $ticket->descripcion = $request->descripcion;  
        $ticket->estado = 1;
        $ticket->empresa_id = 1;              
        $ticket->save();
        return redirect()->route('home');
    }

    public function show($id)
    {
        $ticket = Ticket::with('user')->find($id);
        return view('screens.verCaso', compact('ticket'));
    }
}
