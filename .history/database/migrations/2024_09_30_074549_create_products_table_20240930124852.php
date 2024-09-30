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
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('link')->unique();
        $table->boolean('deleted')->default(false);
        $table->boolean('is_group')->default(false);
        $table->string('parent')->nullable();
        $table->string('name');
        $table->string('code');
        $table->string('article')->nullable();
        $table->string('type')->nullable();
        $table->string('measurement_unit')->nullable();
        $table->text('comment')->nullable();
        $table->decimal('weight', 8, 2)->default(0);
        $table->string('full_name')->nullable();
        $table->decimal('volume', 8, 2)->default(0);
        $table->string('storage_unit')->nullable();
        $table->integer('storage_time')->default(0);
        $table->string('packaging_set')->nullable();
        $table->boolean('is_set')->default(false);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
