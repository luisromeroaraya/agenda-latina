<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateEventRequest;
use Illuminate\Support\Facades\Auth;

class MyEventsController extends Controller
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
        return view('dashboard.myEvents', ['user' => $user, 'categories' => $categories, 'events' => $events]);
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
        return view('dashboard.changeEvent', ['categories' => $categories,'event' => $event]);
    }

    public function update(UpdateEventRequest $request, Event $event)
    {
        $event->update($request->only('name', 'category_id','date_start', 'date_end','place', 'address', 'description', 'telephone', 'email', 'url', 'img_src'));

        return back()->with('message', 'Cambios guardados exitosamente');

    }
}
