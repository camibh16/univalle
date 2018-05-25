<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePedidosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->unsigned();
            $table->integer('productos_id')->unsigned();
            $table->integer('estados_id')->unsigned();
            $table->decimal('total')->unsigned();

            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('productos_id')->references('id')->on('productos');
            $table->foreign('estados_id')->references('id')->on('estados');
            $table->timestamps();
            $table->softDeletes();


                    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pedidos');
    }
}
