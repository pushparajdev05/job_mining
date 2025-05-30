<?php

use App\Models\joblist;
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
        Schema::create('tag_joblist', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(joblist::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(tag::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tag_joblist');
    }
};
