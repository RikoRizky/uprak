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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('admin_id',100);
            $table->string('category', 100);
            $table->string('brand', 255);
            $table->string('type', 255);
            $table->string('number', 50);
            $table->string('cost_per_hour');
            $table->string('time_start', 25);
            $table->string('time_end', 25);
            $table->string('total_price', 25);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
