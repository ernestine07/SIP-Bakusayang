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
            $table->smallInteger('id', true, true);
            $table->smallInteger('users_id')->unsigned()->nullable();
            $table->string('no_invoice', 10);
            $table->string('menu', 50);
            $table->foreign('users_id')->references('id')->on('users')->onDelete('set null');
            $table->string('nama_pelanggan', 10);
            $table->enum('status_pembayaran',['Lunas','Pending'])->default('Pending');// ada 2 sudah dan belum
            $table->enum('status_order',['Takeaway','Dinein'])->default('Dinein');// ada 2 Take away dan Dinein
            $table->integer('total', false, true)->default(0);
            $table->integer('diskon', false, true)->default(0);
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
