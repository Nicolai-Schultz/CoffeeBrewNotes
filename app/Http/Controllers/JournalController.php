<?php

namespace App\Http\Controllers;

use App\Models\CoffeeNote;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function show(){
        $notes = CoffeeNote::all();
        return view('add-journal-entry', ['notes' => $notes]);
    }

    public function store(){
        dd(request()->all());
    }
}
