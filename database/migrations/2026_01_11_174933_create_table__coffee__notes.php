<?php

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
        Schema::create('coffee_note', function (Blueprint $table) {
            $table->id();
            $table->integer('grind_size');
            $table->text('bean');
            $table->integer('amount');
            $table->text('notes');
            $table->text('preparation_steps');
            $table->text('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coffee_note');
    }
};
