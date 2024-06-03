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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('prompt');
            //$table->foreignId('user_id')->constrained()->references('id')->on('users')->onDelete('cascade');
            // $table->unsignedBigInteger('material_id');
            // $table->foreign('material_id')->references('id')->on('materials');
            // $table->foreignId('material_id')->constrained('materials')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
