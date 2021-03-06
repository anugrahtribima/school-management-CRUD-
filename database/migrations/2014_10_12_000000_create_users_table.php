<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('student_id')->unique()->nullable();
            $table->bigInteger('teacher_id')->unique()->nullable();
            $table->date('birth');
            $table->string('class')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('role');
            $table->string('attendance')->nullable();
            $table->string('address')->nullable();
            $table->string('lesson')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
}
