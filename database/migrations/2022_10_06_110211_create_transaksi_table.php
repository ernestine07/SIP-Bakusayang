<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
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
            $table->bigInteger('users_id')->unsigned();
            $table->string('no_invoice');
            $table->string('menu');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('nama_pelanggan');
            $table->enum('status_pembayaran',['Lunas','Pending'])->default('Pending');// ada 2 sudah dan belum
            $table->enum('status_order',['Takeaway','Dinein'])->default('Dinein');// ada 2 Take away dan Dinein
            $table->double('subtotal', 12, 2)->default(0);
            $table->double('diskon', 12, 2)->default(0);
            $table->timestamps();
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
}

            // $table->bigInteger('menu_id')->unsigned();
            // $table->bigInteger('cart_id')->unsigned();;
            // $table->foreign('cart_id')->references('id')->on('cart')->onDelete('cascade');
            // $table->foreign('menu')->references('id')->on('menu')->onDelete('cascade');
            // $table->double('total', 12, 2)->default(0);
