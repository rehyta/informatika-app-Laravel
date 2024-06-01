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
        Schema::create('livecodes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->references('id')->on('courses')->onDelete('cascade');;
            $table->foreignId('user_id')->constrained()->references('id')->on('users')->onDelete('cascade');
            $table->text('input');
            $table->text('output');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livecodes');
    }
};
