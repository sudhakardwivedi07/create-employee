<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\College;

class CollegeController extends Controller
{
    public function index()
    {
        $colleges = College::all();
        return view('colleges.index', compact('colleges'));
    }

    public function create()
    {
        return view('colleges.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        College::create([
            'name' => $request->name,
            'location' => $request->location,
        ]);

        return redirect('/colleges')->with('success', 'College added successfully!');
    }
}
