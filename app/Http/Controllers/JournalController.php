<?php

namespace App\Http\Controllers;

use App\Models\CoffeeNote;
use App\Models\JournalEntry;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function show(){
        $notes = CoffeeNote::all();
        return view('add-journal-entry', ['notes' => $notes]);
    }

    public function store(){
        $request = request();
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'coffee_note_id' => 'required',
        ]);
        $journalEntry = new JournalEntry();
        $journalEntry->title = $request->input('title');
        $journalEntry->description = $request->input('description');
        $journalEntry->coffee_note_id = $request->input('coffee_note_id');
        $journalEntry->save();
        return redirect('/coffee-notes');
    }
}
