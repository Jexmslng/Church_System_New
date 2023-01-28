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
            $table->id('MinistryId');
            $table->foreign('UserId')->references('UserId')->on('user_info');
            $table->boolean('FaithInFormationCommission');
            $table->boolean('SocialAction');
            $table->boolean('YouthCommission');
            $table->boolean('WorshipCommission');
            $table->boolean('BEC');
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
        Schema::dropIfExists('ministries');
    }
};
