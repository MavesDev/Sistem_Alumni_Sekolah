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
            $table->string('email')->unique();
            $table->string('level')->default('user');
            $table->char('alumni_code', 9)->unique();
            $table->char('alumni_generation');
            $table->string('alumni_course');
            $table->string('alumni_domisil');
            $table->char('alumni_last_year');
            $table->string('alumni_job');
            $table->string('alumni_image')->unique()->default('unknown.png');
            $table->string('alumni_job_desc')->nullable()->default('-');
            $table->string('alumni_desc')->nullable()->default('-');
            $table->string('whatsapp')->nullable()->default('-');
            $table->string('instagram')->nullable()->default('-');
            $table->string('twitter')->nullable()->default('-');
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
