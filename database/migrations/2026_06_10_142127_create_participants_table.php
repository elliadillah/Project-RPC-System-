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
    Schema::create('participants', function (Blueprint $table) {
        $table->id();

        $table->string('full_name');

        $table->string('email')->unique();

        $table->string('phone_number');

        $table->string('nik');

        $table->integer('age');

        $table->string('category');

        $table->string('jersey_size');

        $table->string('bib_number')->nullable();

        $table->string('registration_code')->nullable();

        $table->string('status')
            ->default('Pending');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
