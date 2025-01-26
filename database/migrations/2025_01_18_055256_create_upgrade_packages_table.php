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
        Schema::create('upgrade_packages', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('package_id');
            $table->BigInteger('user_id');
            $table->Decimal('amount');
            $table->string('number_of_tasks');
            $table->string('remaining_tasks');
            $table->string('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('upgrade_packages');
    }
};
