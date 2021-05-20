<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration {
  public function up() {
    Schema::create('comments', function (Blueprint $table) {
      $table->id();
      $table
        ->foreignId('user_id')
        ->constrained('users')
        ->cascadeOnDelete();
      $table->string('description');
      $table->timestamps();
    });
  }

  public function down() {
    Schema::dropIfExists('comments');
  }
}
