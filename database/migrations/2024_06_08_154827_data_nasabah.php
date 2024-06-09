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
        Schema::create('data_nasabah',function (Blueprint $table) {
            $table->id ();
            $table->string('nama');
            $table->bigInteger('norekening');
            $table->string('jenisTabungan');
            $table->date('activatedDate');
            $table->date('expiredDate')->nullable();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_nasabah');
    }
};
