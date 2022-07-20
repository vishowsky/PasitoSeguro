<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebpayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webpay', function (Blueprint $table) {
            $table->bigIncrements('wp_id');
            $table->string('session_id');
            $table->float('total',9,2);
            $table->tinyInteger('status')->comment('1: pendiente. 2: aprobada.')->default(1);
            $table->softDeletes();
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
        Schema::dropIfExists('webpay');
    }
}
