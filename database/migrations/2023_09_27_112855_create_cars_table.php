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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->decimal('purchase_price', 10);
            $table->string('make')->index();
            $table->string('model')->index();
            $table->year('year');
            $table->string('color');
            $table->string('engine_type');
            $table->string('vin')->unique()->index();
            $table->string('auction_name');
            $table->string('sale_status');
            $table->unsignedInteger('lot_number')->unique()->index();
            $table->string('condition');
            $table->string('primary_damage');
            $table->string('odometer');
            $table->string('date_of_sale');
            $table->string('main_photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
