<?php

namespace App\Http\Controllers;

use App\Models\CoffeeNote;
use App\Models\JournalEntry;

class CoffeeNotesController extends Controller
{
    public function show()
    {
        $notes = CoffeeNote::all();
        $journalEntries = JournalEntry::all();
        $avgGrindSize = $this->calculateAverageGrindSize($notes, $journalEntries);
        $avgAmount = $this->calculateAverageAmount($notes);

        return view('index', [
            'notes' => $notes,
            'journalEntries' => $journalEntries,
            'avgGrindSize' => $avgGrindSize,
            'avgAmount' => $avgAmount
        ]);
    }

    public function store() {
        request()->validate([
            'bean' => 'required',
            'grind_size' => 'required',
            'amount' => 'required',
            'preparation_steps' => 'required',
            'extraction_notes' => 'required'
        ]);
        $note = new CoffeeNote();
        $note->title = request('title');
        $note->type = request('type');
        $note->bean = request('bean');
        $note->grind_size = request('grind_size');
        $note->amount = request('amount');
        $note->preparation_steps = request('preparation_steps');
        $note->extraction_notes = request('extraction_notes');
        $note->save();
        return redirect('/coffee-notes');
    }

    public function destroy($id) {
        $note = CoffeeNote::findOrFail($id);
        $note->delete();
        return redirect('/coffee-notes');
    }

    /**
     * @param $notes
     * @param $journalEntries
     * @return float
     */
    private function calculateAverageGrindSize($notes): float
    {
        $total = 0.0;
        $count = 0;

        foreach ($notes as $note) {
            if (is_numeric($note->grind_size)) {
                $total += (float) $note->grind_size;
                $count++;
            }
        }

        return $count > 0 ? $total / $count : 0.0;
    }

    /**
     * @param $notes
     * @return float
     */
    private function calculateAverageAmount($notes): float
    {
        $total = 0.0;
        $count = 0;

        foreach ($notes as $note) {
            if (is_numeric($note->amount)) {
                $total += (float) $note->amount;
                $count++;
            }
        }

        return $count > 0 ? $total / $count : 0.0;
    }
}
