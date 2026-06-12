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
        Schema::create('dentists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50)->index();
            $table->string('surname',50);
            $table->string('email',150)->unique();
            $table->string('phone_number',15);
            $table->string('description_professional',100)->nullable();
            $table->string('speciality',100);
            $table->string('license_number',20)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dentists');
    }
};
