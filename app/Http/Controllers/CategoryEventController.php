<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryEventController extends Controller
{
    public function index(Category $category){
        $events = $category->events()->with(['user', 'category'])->paginate(3);

        return view('categories.events.index', [
            'category' => $category, 
            'events' => $events
        ]);
    }
}
