<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Models\TicketActivity;

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
        $ticketActivities = TicketActivity::with('user')->where('ticket_id', $id)->get();
        return view('screens.verCaso', compact('ticket', 'ticketActivities'));
    }

    public function edit($id)
    {
        $ticket = Ticket::with('user')->find($id);    
        $users = User::whereHas('roles', function ($query) {
            $query->whereIn('name', ['developer', 'admin']);
        })->get();

        $ticketActivities = TicketActivity::with('user')->where('ticket_id', $id)->get();
        return view('screens.ticketEdit', compact('ticket', 'users', 'ticketActivities'));
    }

    public function update(Request $request, $id)
    {        
        $request->validate([
            'prioridad' => 'required',
            'estado' => 'required',
            'asignado' => 'required'
        ]);

        Ticket::find($id)->update([
            'prioridad' => $request->prioridad,
            'estado' => $request->estado,
            'usuario_asignado' => $request->asignado
        ]);
        return redirect()->route('ticket.edit', $id);        
    }

    public function activity(Request $request)
    {
        $activity = new TicketActivity();
        $activity->ticket_id = $request->ticket_id;
        $activity->user_id = auth()->user()->id;
        $activity->description = $request->description;
        $activity->save();
        return redirect()->route('ticket.edit', $request->ticket_id);
    }

}
