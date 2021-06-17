<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('date_start', 'asc')->with(['user', 'category'])->paginate(9);
        return view('events.index', [
            'events' => $events
        ]);
    }

    public function show(Event $event)
    {
        return view('events.show', [
            'event' => $event
        ]);
    }

    public function search()
    {
        $events = Event::orderBy('date_start', 'asc')
        ->with(['user', 'category'])->filter(request(['search']))->paginate(9);
        
        return view('events.index', [
            'events' => $events
        ]);
    }
}
