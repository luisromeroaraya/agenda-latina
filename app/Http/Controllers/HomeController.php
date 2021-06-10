<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $highlights = Event::orderBy('date_start', 'asc')->with(['user', 'category'])->paginate(6);
        $concerts = Event::orderBy('date_start', 'asc')->with(['user', 'category'])->where('category_id', '1')->get();
        $parties = Event::orderBy('date_start', 'asc')->with(['user', 'category'])->where('category_id', '2')->get();
        $exhibitions = Event::orderBy('date_start', 'asc')->with(['user', 'category'])->where('category_id', '3')->get();
        return view('home', [
            'highlights' => $highlights,
            'concerts' => $concerts,
            'parties' => $parties,
            'exhibitions' => $exhibitions
        ]);
    }
}
