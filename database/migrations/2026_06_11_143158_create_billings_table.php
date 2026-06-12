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
        Schema::create('billings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('invoice_number',20);
            $table->date('issue_date');
            $table->decimal('subtotal', 12,2);
            $table->decimal('iva', 8,2)->default(0.00);
            $table->decimal('total', 12,2);
            $table->enum('status', ['Pendiente','Parcialmente pagado','Pagado']);

            $table->foreignId('b_dates_id')->constrained('dates')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billings');
    }
};
