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
        Schema::create('user_account', function (Blueprint $table) {
            $table->id('UserAccountId');
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
        Schema::dropIfExists('user_account');
    }
};











return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_account', function (Blueprint $table) {
            $table->id('UserId');
            $table->string('Email')->unique();
            $table->string('Username');
            $table->string('Password');
            $table->string('LastName');
            $table->string('FirstName');
            $table->string('MiddleName');
            $table->string('Phone')->unique();
            $table->integer('Age');
            $table->date('Birthday');
            $table->boolean('FaithInFormationCommission');
            $table->boolean('SocialAction');
            $table->boolean('YouthCommission');
            $table->boolean('WorshipCommission');
            $table->boolean('BEC');
            $table->integer('Role');
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
        Schema::dropIfExists('user_account');
    }
};
