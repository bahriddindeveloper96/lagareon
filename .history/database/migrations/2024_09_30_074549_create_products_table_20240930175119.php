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
       $table->uuid('id')->primary();
        $table->boolean('is_deleted')->default(false);
        $table->boolean('is_group')->default(false);
        $table->uuid('parent_id')->nullable();
        $table->string('name');
        $table->string('code');
        $table->string('article')->nullable();
        $table->uuid('item_type_id');
        $table->uuid('unit_of_measure_id');
        $table->string('full_name')->nullable();
        $table->string('storage_unit')->default('Sutka');
        $table->integer('shelf_life')->default(200);
        $table->uuid('packaging_set_id')->nullable();
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
