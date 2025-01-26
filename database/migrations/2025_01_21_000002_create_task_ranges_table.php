<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('task_ranges', function (Blueprint $table) {
            $table->id();
            $table->integer('order_count')->unique(); // 1, 2, 3, 4
            $table->decimal('minimum_amount', 10, 2);
            $table->decimal('commission', 10, 2); // Adding commission column
            $table->timestamps();
        });

        // Insert default values
        DB::table('task_ranges')->insert([
            ['order_count' => 1, 'minimum_amount' => 800, 'commission' => 0],
            ['order_count' => 2, 'minimum_amount' => 800, 'commission' => 0],
            ['order_count' => 3, 'minimum_amount' => 800, 'commission' => 0],
            ['order_count' => 4, 'minimum_amount' => 8800, 'commission' => 0],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task_ranges');
    }
};
