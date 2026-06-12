<?php

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
        Schema::create('billings_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('quantity');
            $table->decimal('unit_price', 10,2);
            $table->decimal('amount',10,2);

            $table->foreignId('bd_billings_id')->constrained('billings')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('bd_treatments_types_id')->constrained('treatment_types')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billings_details');
    }
};
