<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }

    public function index(){
        //dd(auth()->user()->events);
        return view ('dashboard');
    }

    public function store(Request $request){
        $this->validate($request, [
            
            'date' => 'required',
            'name' => 'required',
            'description' => 'required',
            'place' => 'required',
            'img_src' => 'required',
            'url' => 'required'
        ]);

       
        $request()->user()->events()->create([
            'date' =>$request->date,
            'name' =>$request->name,
            'description' =>$request->description,
            'place' =>$request->place,
            'img_src' =>$request->img_src,
            'url' =>$request->url
        ]);

        return back();
    }
}
