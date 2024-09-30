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
            $table->id();
            $table->string('link')->unique();
            $table->boolean('deleted')->default(false);
            $table->string('owner');
            $table->string('parent')->default('00000000-0000-0000-0000-000000000000');
            $table->string('name');
            $table->string('name_en')->nullable();
            $table->float('height');
            $table->float('depth');
            $table->string('measurement_unit');
            $table->float('weight');
            $table->float('net_weight');
            $table->string('full_name')->nullable();
            $table->float('volume');
            $table->float('width');
            $table->integer('coefficient');
            $table->boolean('is_packaging_set')->default(false);
            $table->string('accounting_type');
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
