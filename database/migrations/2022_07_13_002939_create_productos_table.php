<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('producto_id');
            $table->string('producto_nom');
            $table->integer('producto_prec');
            $table->integer('producto_stock');
            $table->string('producto_desc');
            $table->string('producto_img')->nullable();
            $table->unsignedInteger('cat_id');
            $table->foreign('cat_id')->references('cat_id')->on('categorias');
            $table->unsignedInteger('talla_id');
            $table->foreign('talla_id')->references('talla_id')->on('tallas');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
