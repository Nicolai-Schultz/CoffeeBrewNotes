<?php

namespace App\Http\Controllers;

use App\Models\CoffeeNote;

class CoffeeNotesController extends Controller
{
    public function show()
    {
        $notes = CoffeeNote::all();
        return view('index', ['notes' => $notes]);
    }

    public function store() {
        return view('add-note');
    }
}
