<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserEventController extends Controller
{
    public function index(User $user){
        $events = $user->events()->with(['user', 'category'])->paginate(3);

        return view('users.events.index', [
            'user' => $user, 
            'events' => $events
        ]);
    }
}
