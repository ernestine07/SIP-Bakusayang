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
            $table->smallInteger('id', true, true);
            $table->smallInteger('menu_id')->unsigned();
            $table->smallInteger('user_id')->unsigned();
            // $table->float('qty', 12, 2)->default(0);
            $table->tinyInteger('qty');
            // $table->double('diskon', 12, 2)->default(0);
            $table->integer('total', false, true);
            // $table->string('nama_cust')->nullable(); // nama pelanggan yang pesan
            // $table->string('status_cart')->nullable(); // ada 2 yaitu cart, checkout
            $table->foreign('menu_id')->references('id')->on('menu');
            $table->foreign('user_id')->references('id')->on('users');
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
