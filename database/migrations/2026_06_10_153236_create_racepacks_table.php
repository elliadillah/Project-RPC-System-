<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('racepacks', function (Blueprint $table) {

            $table->id();

            $table->foreignId('participant_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('bib_number');

            $table->string('jersey_size');

            $table->enum('pickup_status', [
                'not_taken',
                'taken'
            ])->default('not_taken');

            $table->timestamp('pickup_time')
                ->nullable();

            $table->unsignedBigInteger('handover_by')
                ->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('racepacks');
    }
};