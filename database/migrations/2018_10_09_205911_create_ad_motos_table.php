<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdMotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_motos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',100);
            $table->string('description',250);
            $table->integer('model_year');
            $table->integer('price_colones')->default(0);
            $table->integer('price_dollars')->default(0);
            $table->integer('mileage')->default(0);
            $table->smallInteger('displacement');
            $table->boolean('ad_status')->default(true);
            $table->text('extras_moto')->nullable();
            $table->string('email_ad',128);
            $table->string('phone_ad',128);
            $table->boolean('show_user_email')->default(true);
            $table->boolean('show_user_phone')->default(true);
            $table->dateTime('ad_start_date');
            $table->dateTime('ad_end_date');
            $table->text('extras_ad')->nullable();
            $table->integer('total_cost_ad_colones')->default(0);
            $table->integer('total_cost_ad_dollars')->default(0);
            $table->integer('motorcycle_brand_id')->unsigned();
            $table->foreign('motorcycle_brand_id')->references('id')->on('motorcycle_brands');
            $table->integer('district_id')->unsigned();
            $table->foreign('district_id')->references('id')->on('districts');
            $table->integer('type_fuel_id')->unsigned();
            $table->foreign('type_fuel_id')->references('id')->on('type_fuels');
            $table->integer('type_motorcycle_id')->unsigned();
            $table->foreign('type_motorcycle_id')->references('id')->on('type_motorcycles');
            $table->integer('promo_id')->unsigned()->nullable();
            $table->foreign('promo_id')->references('id')->on('promotions');
            $table->integer('type_ad_moto_id')->unsigned();
            $table->foreign('type_ad_moto_id')->references('id')->on('type_ad_motos');


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
        Schema::dropIfExists('ad_motos');
    }
}
