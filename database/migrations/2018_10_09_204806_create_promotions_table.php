<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_final');
            $table->integer('monto_aplicado');
            $table->integer('porcentaje_aplicado');
            $table->integer('type_promo_id')->unsigned();
            $table->foreign('type_promo_id')->references('id')->on('type_promos');
            $table->integer('promotion_rules_id')->unsigned();
            $table->foreign('promotion_rules_id')->references('id')->on('promotion_rules');
            //Todo history about who did the new promo or edited a promo
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
        Schema::dropIfExists('promotions');
    }
}
