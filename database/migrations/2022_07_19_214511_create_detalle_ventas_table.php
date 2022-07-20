<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_ventas', function (Blueprint $table) {
            $table->increments('dv_id');
            $table->unsignedInteger('venta_id');
            $table->foreign('venta_id')->references('venta_id')->on('ventas');
            $table->unsignedInteger('producto_id');
            $table->foreign('producto_id')->references('producto_id')->on('productos');
             $table->integer('dv_cantidad');
            $table->integer('dv_subtotal');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_ventas');
    }
}
