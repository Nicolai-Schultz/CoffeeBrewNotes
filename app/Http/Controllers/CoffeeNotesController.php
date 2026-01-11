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
        request()->validate([
            'bean' => 'required',
            'grind_size' => 'required',
            'amount' => 'required',
            'preparation_steps' => 'required',
            'notes' => 'required'
        ]);
        $note = new CoffeeNote();
        $note->type = request('type');
        $note->bean = request('bean');
        $note->grind_size = request('grind_size');
        $note->amount = request('amount');
        $note->preparation_steps = request('preparation_steps');
        $note->notes = request('notes');
        $note->save();
        return redirect('/coffee-notes');
    }

    public function destroy($id) {
        $note = CoffeeNote::findOrFail($id);
        $note->delete();
        return redirect('/coffee-notes');
    }

    public function roll(){
        $choiceA = request('choice_a');
        $choiceB = request('choice_b');
        $result = rand(0, 1) ? $choiceA : $choiceB;
        return view('muffi-decider', ['result' => $result]);
    }
}
