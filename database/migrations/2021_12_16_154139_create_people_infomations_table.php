<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleInfomationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people_information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('province_id')->nullable();
            $table->unsignedBigInteger('district_id')->nullable();
            $table->unsignedBigInteger('ward_id')->nullable();
            $table->unsignedBigInteger('province_admin_id')->nullable();
            $table->unsignedBigInteger('district_admin_id')->nullable();
            $table->unsignedBigInteger('ward_admin_id')->nullable();
            $table->string('identification')->unique();
            $table->string('name');
            $table->string('birthday');
            $table->string('gender');
            $table->string('home_town')->nullable();
            $table->string('resident')->nullable();
            $table->string('religion')->nullable();
            $table->string('edu_level')->nullable();
            $table->string('job')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people_infomations');
    }
}
