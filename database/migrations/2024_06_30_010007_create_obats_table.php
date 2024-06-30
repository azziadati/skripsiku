<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('obats', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('kodeobat')->nullable();
            $table->integer('stok')->nullable();
            $table->integer('id_jenis')->references('id')->on('jenis')->nullable()->constrained();
            $table->string('nama');
            $table->string('dosis')->nullable();
            $table->string('harga')->nullable();
            $table->date('expired')->nullable();
            $table->string('photo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obats');
    }
};
