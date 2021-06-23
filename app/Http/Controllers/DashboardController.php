<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
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
        return view('dashboard', ['user' => $user, 'categories' => $categories, 'events' => $events]);
    }

    public function destroy(Event $event)
    {
        $this->authorize('delete', $event);
        $event->delete();
        return back();
    }

    public function edit(Event $event)
    {
        $categories = Category::all();
        return view('changeEvent', ['categories' => $categories,'event' => $event]);
    }
}
