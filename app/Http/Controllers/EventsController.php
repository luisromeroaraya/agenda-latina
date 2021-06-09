<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventsController extends Controller
{
    public function index() {
        $events = Event::orderBy('date', 'asc')->with(['user'])->paginate(3);
        return view('events.index', [
            'events' => $events
            ]);
    }

    public function show(Event $event){
        return view('events.show', [
            'event' => $event
        ]);
    }
}
