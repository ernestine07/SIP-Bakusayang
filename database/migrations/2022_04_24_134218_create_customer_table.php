<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->smallInteger('id', true, true);
            $table->string('nama_customer', 25);
            $table->enum('jeniskelamin', ['Laki-laki', 'Perempuan']);
            $table->string('alamat');
            $table->string('no_telepon', 14);
            $table->smallInteger('users_id')->unsigned();;
            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
}
