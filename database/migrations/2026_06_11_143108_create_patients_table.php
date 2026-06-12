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
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50);
            $table->string('surname',50);
            $table->string('identity_card',20)->unique();
            $table->string('email',150)->unique()->nullable();
            $table->char('gender');
            $table->date('birthdate');
            $table->string('phone_number',20)->nullable();
            $table->string('address',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
