<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('ministries', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('FaithInFormationCommission');
            $table->boolean('SocialAction');
            $table->boolean('YouthCommission');
            $table->boolean('WorshipCommission');
            $table->boolean('BEC');
        });

        Schema::create('users_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('LastName');
            $table->string('FirstName');
            $table->string('MiddleName');
            $table->string('Phone')->unique();
            $table->integer('Age');
            $table->date('Birthday');
            $table->unsignedInteger('ministries_id');
            $table->foreign('ministries_id')->references('id')->on('ministries')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('users_info_id');
            $table->string('username');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('role');
            $table->foreign('users_info_id')->references('id')->on('users_info');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
