<?php

use App\Models\employee;
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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(employee::class);
            $table->timestamps();
            $table->string('title');
            $table->string('url');
            $table->string('salary');
            $table->string('location');
            $table->string('schedule')->default('Full Time');
            $table->boolean('featured')->default(false);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
        
    }
};
