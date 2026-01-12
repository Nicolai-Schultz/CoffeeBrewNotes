<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalEntry extends Model
{
    public $timestamps = false;

    protected $table = 'journal_entry';
    protected $guarded = [];
}
