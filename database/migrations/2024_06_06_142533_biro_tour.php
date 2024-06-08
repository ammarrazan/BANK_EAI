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
        Schema::create('birotour', function (Blueprint $table) {
            $table->id();
            $table->integer('no_guider')->nullable();
            $table->string('nama_guider')->nullable();
            $table->string('profile')->nullable();
            $table->float('saldo')->nullable();
            $table->float('fee')->nullable();
            $table->date('active_date')->nullable();
            $table->date('expired_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
