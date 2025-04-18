<?php

use App\Models\job;
use App\Models\tag;
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
        Schema::create('job_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(job::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(tag::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_tag');
    }
};
