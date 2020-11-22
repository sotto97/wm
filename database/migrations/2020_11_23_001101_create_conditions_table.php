<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conditions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->date('check_date')->comment('測定日');
            $table->double('weight', 4, 1)->nullable()->comment('体重');
            $table->double('bmi', 2, 1)->nullable()->comment('BMI');
            $table->double('fat', 3, 1)->nullable()->comment('体脂肪率');
            $table->double('muscle', 3, 1)->nullable()->comment('筋肉量');
            $table->double('visceral_fat', 3, 1)->nullable()->comment('内臓脂肪レベル');
            $table->integer('metabolism')->nullable()->comment('基礎代謝');
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
        Schema::dropIfExists('conditions');
    }
}
