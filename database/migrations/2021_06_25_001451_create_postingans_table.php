<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostingansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postingans', function (Blueprint $table) {
            $table->id();
            $table->string('post_name');
            $table->string('post_author');
            $table->string('post_author_id');
            $table->string('post_author_image');
            $table->string('post_author_job');
            $table->string('post_course');
            $table->string('post_category');
            $table->text('post_desc')->nullable();
            $table->string('post_image')->unique()->nullable();
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
        Schema::dropIfExists('postingans');
    }
}
