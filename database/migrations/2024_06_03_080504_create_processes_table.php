<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('processes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('course_id')->nullable()->constrained('courses');
            $table->foreignId('material_id')->nullable()->constrained('materials');
            $table->foreignId('livecode_id')->nullable()->constrained('livecodes');
            $table->boolean('material_status')->default(false);
            $table->boolean('livecode_status')->default(false);
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('processes');
    }
};
