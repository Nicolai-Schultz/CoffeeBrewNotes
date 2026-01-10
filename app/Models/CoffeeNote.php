<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoffeeNote extends Model
{
    use HasFactory;

    protected $table = 'coffee_note';
    public $timestamps = false;

    protected $fillable = [
        'grind_size',
        'bean',
        'amount',
        'brew_time',
        'notes',
    ];

    protected $casts = [
        'amount' => 'float',
        'brew_time' => 'integer',
    ];
}
