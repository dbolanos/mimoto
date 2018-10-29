<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotion_rules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->boolean('has_first_deposit');
            $table->integer('min_money_deposit');
            $table->integer('max_money_deposit');
            $table->boolean('check_high_risk');
            $table->boolean('new_accounts_only');
            $table->dateTime('last_login_date');
            $table->dateTime('last_event_date');

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
        Schema::dropIfExists('promotion_rules');
    }
}
