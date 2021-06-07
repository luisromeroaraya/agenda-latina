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
        //dd(auth()->user()->events);
        return view ('dashboard');
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
}
