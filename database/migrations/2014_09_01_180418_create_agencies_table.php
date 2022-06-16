<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('package_id')->nullable();
            $table->string('company_name')->nullable();
            $table->string('owner_name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->longText('website')->nullable();
            $table->string('type')->nullable();
            $table->string('licence_no')->nullable();
            $table->string('permit_no')->nullable();
            $table->string('rera_no')->nullable();
            $table->string('establishment_date')->nullable();
            $table->string('licence_exp_date')->nullable();
            // $table->string('access_of_agents')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('street')->nullable();
            $table->string('building')->nullable();
            $table->string('office')->nullable();
            $table->mediumText('logo')->nullable();
            $table->mediumText('licence')->nullable();
            $table->mediumText('visa')->nullable();
            $table->mediumText('eid')->nullable();
            $table->mediumText('rera')->nullable();
            $table->mediumText('additional_documents')->nullable();
            // $table->string('authorized')->nullable();
            $table->timestamps();
            $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agencies');
    }
}
