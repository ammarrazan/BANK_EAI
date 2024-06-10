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
        Schema::create('hotel_table',function (Blueprint $table) {
            $table->id ();
            $table->string('jenis');
            $table->string('name');
            $table->float ('total');
            $table->float('saldo');
            $table->string('paymentStatus');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_table');
    }
};
