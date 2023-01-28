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
        Schema::create('user_info', function (Blueprint $table) {
            $table->id('UserInfoId');
            $table->foreign('AccountId')->references('UserAccountId')->on('user_account');
            $table->string('LastName');
            $table->string('FirstName');
            $table->string('MiddleName');
            $table->string('Email')->unique();
            $table->string('Phone')->unique();
            $table->integer('Age');
            $table->date('Birthday');
            $table->foreign('MinistryId')->references('Id')->on('ministries');
            $table->timestamp('last_used_at')->nullable();
            $table->timestamp('expires_at')->nullable();
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
        Schema::dropIfExists('user_info');
    }
};
