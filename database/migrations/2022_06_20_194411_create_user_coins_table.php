<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_coins', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_package_coin_id')->nullable();
            $table->foreign('user_package_coin_id')->references('id')->on('user_package_coins')->onDelete('cascade');
            $table->double('minus_coins')->nullable();
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
        Schema::dropIfExists('user_coins');
    }
}
