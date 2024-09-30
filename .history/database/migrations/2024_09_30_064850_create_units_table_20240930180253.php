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
        Schema::create('units', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->boolean('is_deleted')->default(false);
            $table->string('link')->nullable(); // yoki kerakli turdagi ustun
            $table->string('name');
            $table->string('code')->nullable();
            $table->string('full_name')->nullable();
            $table->string('abbreviation')->nullable();
            $table->boolean('is_measure')->default(false);
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('units');
    }
};
