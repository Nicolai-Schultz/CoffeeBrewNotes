<?php

use App\Models\CoffeeNote;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // create 10 records with a recognizable marker
        CoffeeNote::factory()->count(10)->create([
            'notes' => 'seeded_by_migration_2026_01_10_205110',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // remove only the records we created above
        CoffeeNote::where('notes', 'seeded_by_migration_2026_01_10_205110')->delete();
    }
};
