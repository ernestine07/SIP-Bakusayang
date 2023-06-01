<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('laporans', function (Blueprint $table) {
        //     $table->id();
        //     $table->bigInteger('no_invoice')->unsigned();
        //     $table->bigInteger('subtotal')->unsigned();
        //     $table->bigInteger('diskon')->unsigned();
        //     $table->timestamps();
        //     $table->foreign('no_invoice')->references('id')->on('transaksi');
        //     $table->foreign('subtotal')->references('id')->on('transaksi');
        //     $table->foreign('diskon')->references('id')->on('transaksi');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporans');
    }
}
