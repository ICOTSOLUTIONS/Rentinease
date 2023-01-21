<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostingFloorPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posting_floor_plans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('posting_id')->nullable();
            $table->string('name')->nullable();
            $table->mediumText('floor_plan')->nullable();
            $table->foreign('posting_id')->references('id')->on('postings')->onDelete('CASCADE');
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
        Schema::dropIfExists('posting_floor_plans');
    }
}
