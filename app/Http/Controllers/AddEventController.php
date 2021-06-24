<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddEventController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $user = Auth::user();
        $categories = Category::all();
        $events = Event::orderBy('date_start', 'asc')->with(['user', 'category'])->where('user_id', $user->id)->get();
        return view('dashboard.addEvent', ['user' => $user, 'categories' => $categories, 'events' => $events]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'category_id' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
            'place' => 'required',
            'address' => 'required',
            'description' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'url' => 'required',
            'img_src' => 'required'
        ]);
        $request->user()->events()->create($request->only('name', 'category_id', 'date_start', 'date_end', 'place', 'address', 'description', 'telephone', 'email', 'url', 'img_src'));
        return back();
    }
}
