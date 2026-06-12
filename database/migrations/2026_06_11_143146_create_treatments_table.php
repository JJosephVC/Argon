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
        Schema::create('treatments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->string('observations',255)->nullable();
            $table->enum('status',['Pendiente', 'En proceso', 'Finalizado']);
            $table->decimal('cost', 12,2);

            $table->foreignId('t_treatments_types_id')->constrained('treatment_types')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('t_records_id')->constrained('records')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treatments');
    }
};
