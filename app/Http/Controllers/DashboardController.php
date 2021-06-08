<?php

namespace App\Http\Controllers;


use App\Models\Event;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }

    public function index() {   
        $events = Event::with(['user'])->get();     
        return view ('dashboard', ['events'=> $events]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'date' => 'required',
            'place' => 'required',
            'description' => 'required',
            'url' => 'required',
            'img_src' => 'required'
        ]);

        $request->user()->events()->create($request->only('name', 'date', 'place', 'description', 'url', 'img_src'));
        
        return back();
    }

    public function destroy(Event $event){
        $event->delete();
        return back();
    }
}
