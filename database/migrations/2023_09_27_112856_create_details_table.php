<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->string('seller');
            $table->string('doc_type');
            $table->string('location');
            $table->string('secondary_damage');
            $table->decimal('est_retail_value', 10);
            $table->decimal('est_repair_value', 10);
            $table->string('transmission');
            $table->string('drive');
            $table->string('car_keys');
            $table->string('fuel');
            $table->text('notes');
            $table->unsignedBigInteger('car_id');
            $table->timestamps();

            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};
