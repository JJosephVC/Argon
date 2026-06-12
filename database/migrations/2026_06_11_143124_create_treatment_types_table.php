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
        Schema::create('treatment_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50)->index();
            $table->string('description',255)->nullable();
            $table->decimal('base_cost', 12,2)->default(0.00);
            $table->integer('estimated_duration');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treatment_types');
    }
};
