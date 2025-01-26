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
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->decimal('deposit_amount', 8, 1)->nullable();
            $table->date('deposit_date')->nullable();
            $table->BigInteger('transaction_id')->nullable();
            $table->string('bank')->nullable();
            $table->string('deposit_slip')->nullable();
            $table->BigInteger('user_id')->nullable();
            $table->string('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deposits');
    }
};
