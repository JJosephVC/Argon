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
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->string('amount',10);
            $table->enum('status', ['Pendiente','Confirmada', 'Cancelada']);

            $table->foreignId('p_payments_types_id')->constrained('payments_types')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('p_billings_id')->constrained('billings')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
