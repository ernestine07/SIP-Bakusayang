<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('menu_id')->unsigned();
            $table->float('qty', 12, 2)->default(0);
            $table->double('diskon', 12, 2)->default(0);
            $table->double('total', 12, 2)->default(0);
            $table->string('nama_cust'); // nama pelanggan yang pesan
            $table->string('status_cart'); // ada 2 yaitu cart, checkout
            $table->foreign('menu_id')->references('id')->on('menu');
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
        Schema::dropIfExists('cart');
    }
}
