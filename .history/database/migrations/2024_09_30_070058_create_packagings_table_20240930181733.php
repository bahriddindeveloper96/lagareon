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
        Schema::create('packagings', function (Blueprint $table) {
            $table->id('id')->primary();
             $table->string('link')->unique(); // kerakli ustun  
            $table->boolean('is_deleted')->default(false);
            $table->uuid('owner_id');
            $table->string('name');
            $table->float('height');
            $table->float('depth');
            $table->uuid('unit_of_measure_id');
            $table->float('weight');
            $table->float('net_weight');
            $table->float('volume');
            $table->float('width');
            $table->integer('coefficient');
            $table->boolean('owner_set')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packagings');
    }
};
