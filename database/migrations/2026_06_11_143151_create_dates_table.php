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
        Schema::create('dates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->time('hour');
            $table->integer('estimated_duration')->nullable();
            $table->enum('appoinment_status', ['Programada','Completada','Cancelada']);

            $table->foreignId('d_dentists_id')->constrained('dentists')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('d_patients_id')->constrained('patients')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('d_treatments_types_id')->constrained('treatment_types')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dates');
    }
};
