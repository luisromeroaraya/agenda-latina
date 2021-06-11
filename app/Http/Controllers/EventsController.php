<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

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
        $events = Event::orderBy('date_start', 'asc')->with(['user', 'category'])->where('name', 'like', '%' . request('search') . '%')->orWhere('description', 'like', '%' . request('search') . '%')->orWhere('place', 'like', '%' . request('search') . '%')->orWhere('date_start', 'like', '%' . request('search') . '%')->paginate(9);
        
        return view('events.index', [
            'events' => $events
        ]);
    }

}
