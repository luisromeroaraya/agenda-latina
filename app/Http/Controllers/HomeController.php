<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $highlights = Event::orderBy('date_start', 'asc')->with(['user', 'category'])->where('highlight', '1')->get();
        $parties = Event::orderBy('date_start', 'asc')->with(['user', 'category'])->where('category_id', '1')->get();
        $concerts = Event::orderBy('date_start', 'asc')->with(['user', 'category'])->where('category_id', '2')->get();
        $sports = Event::orderBy('date_start', 'asc')->with(['user', 'category'])->where('category_id', '3')->get();
        $festivals = Event::orderBy('date_start', 'asc')->with(['user', 'category'])->where('category_id', '4')->get();
        $expositions = Event::orderBy('date_start', 'asc')->with(['user', 'category'])->where('category_id', '5')->get();
        $plays = Event::orderBy('date_start', 'asc')->with(['user', 'category'])->where('category_id', '6')->get();
        $projections = Event::orderBy('date_start', 'asc')->with(['user', 'category'])->where('category_id', '7')->get();
        $dances = Event::orderBy('date_start', 'asc')->with(['user', 'category'])->where('category_id', '8')->get();
        $kids = Event::orderBy('date_start', 'asc')->with(['user', 'category'])->where('category_id', '9')->get();
        $talks = Event::orderBy('date_start', 'asc')->with(['user', 'category'])->where('category_id', '10')->get();
        $others = Event::orderBy('date_start', 'asc')->with(['user', 'category'])->where('category_id', '11')->get();
        return view('home', [
            'highlights' => $highlights,
            'parties' => $parties,
            'concerts' => $concerts,
            'sports' => $sports,
            'festivals' => $festivals,
            'expositions' => $expositions,
            'plays' => $plays,
            'projections' => $projections,
            'dances' => $dances,
            'kids' => $kids,
            'talks' => $talks,
            'others' => $others
        ]);
    }
}
