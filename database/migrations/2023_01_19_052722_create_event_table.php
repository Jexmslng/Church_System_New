<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('Event', function (Blueprint $table) {
      $table->id();
      $table->string('EventName');
      $table->dateTime('EventDateFrom');
      $table->dateTime('EventDateTo');
      $table->longText('Details');
      $table->string('Picture');
      $table->boolean('Attendance')->default(0);
      $table->boolean('Post')->default(0);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('Event');
  }
}
