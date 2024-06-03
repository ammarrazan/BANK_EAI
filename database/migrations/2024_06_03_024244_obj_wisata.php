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
        Schema::create('obj_wisata', function (Blueprint $table) {
            $table->id();
            $table->string('id_wisata')->nullable();
            $table->string('nama_objek')->nullable();
            $table->float('harga_tiket')->nullable();
            $table->float('saldo')->nullable();
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
