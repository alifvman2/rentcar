<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('admin');
            $table->unsignedBigInteger('customer');
            $table->unsignedBigInteger('mobil');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->string('harga');
            $table->string('total_denda')->nullable();
            $table->string('status');
            $table->date('tgl_dikembalikan')->nullable();
            $table->timestamps();

            $table->foreign('admin')->references('id')->on('admin');
            $table->foreign('customer')->references('id')->on('customer');
            $table->foreign('mobil')->references('id')->on('mobil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
};
