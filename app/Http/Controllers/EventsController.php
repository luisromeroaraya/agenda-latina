<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventsController extends Controller
{
    public function index() {
        $events = Event::paginate(3);
        return view('events.index', [
            'events' => $events
            ]);
    }
}
