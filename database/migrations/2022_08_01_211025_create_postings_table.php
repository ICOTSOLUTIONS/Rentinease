<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('purpose_id')->nullable();
            $table->unsignedBigInteger('property_type_place_id')->nullable();
            $table->string('layout')->nullable();
            $table->string('area')->nullable();
            $table->string('city')->nullable();
            $table->string('bath')->nullable();
            $table->string('size')->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->string('building_name')->nullable();
            $table->string('building_age')->nullable();
            $table->string('price')->nullable();
            $table->string('price_per')->nullable();
            // $table->mediumText('images')->nullable();
            // $table->mediumText('videos')->nullable();
            // $table->string('floor_plan_layout')->nullable();
            $table->string('furnishing')->nullable();
            $table->string('amenities')->nullable();
            $table->string('facilities')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('listing_type')->nullable();
            $table->foreign('purpose_id')->references('id')->on('purposes')->onDelete('CASCADE');
            $table->foreign('property_type_place_id')->references('id')->on('property_type_places')->onDelete('CASCADE');
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
        Schema::dropIfExists('postings');
    }
}
