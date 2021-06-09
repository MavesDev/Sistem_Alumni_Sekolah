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
            $table->char('id_user',8)->unique();
            $table->string('user_name', 155);
            $table->string('user_email')->unique();
            $table->string('user_address');
            $table->string('user_school_now');
            $table->string('user_school_from');
            $table->string('user_job_now');
            $table->string('user_job_current');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('user_password');
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
