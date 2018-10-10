<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsMotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads_moto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',100);
            $table->string('description',250);
            $table->integer('model_year');
            $table->integer('price_colones')->default(0);
            $table->integer('price_dollars')->default(0);
            $table->integer('mileage')->default(0);
            $table->smallInteger('displacement');
            $table->boolean('status')->default(true);
            $table->text('extras_moto');
            $table->string('email_ad',128);
            $table->string('phone_ad',128);
            $table->boolean('show_user_email')->default(true);
            $table->boolean('show_user_phone')->default(true);
            $table->dateTime('ad_start_day');
            $table->dateTime('ad_end_day');
            $table->text('extras_ad');
            $table->integer('total_cost_ad_colones')->default(0);
            $table->integer('total_cost_ad_dollars')->default(0);
            $table->integer('motorcycle_brand_id')->unsigned();
            $table->foreign('motorcycle_brand_id')->references('id')->on('motorcycle_brands');
            $table->integer('district_id')->unsigned();
            $table->foreign('district_id')->references('id')->on('districts');
            $table->integer('type_fuel_id')->unsigned();
            $table->foreign('type_fuel_id')->references('id')->on('types_fuel');
            $table->integer('type_motorcycle_id')->unsigned();
            $table->foreign('type_motorcycle_id')->references('id')->on('type_motorcycles');
            $table->integer('promo_id')->unsigned();
            $table->foreign('promo_id')->references('id')->on('promotions');
            $table->integer('type_ad_moto_id')->unsigned();
            $table->foreign('type_ad_moto_id')->references('id')->on('types_ad_moto');


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
        Schema::dropIfExists('ads_moto');
    }
}
