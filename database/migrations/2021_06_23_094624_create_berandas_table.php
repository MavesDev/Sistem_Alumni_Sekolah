<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBerandasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berandas', function (Blueprint $table) {
            $table->id();
            $table->string('headMaster_name')->nullable()->default('Nama Kepala Sekolah');
            $table->string('event_name')->nullable()->default('Nama Acara');
            $table->string('headMaster_image')->unique()->nullable()->default('music.png');
            $table->string('event_image')->unique()->nullable()->default('music.png');
            $table->text('headMaster_desc')->default('-')->nullable();
            $table->text('event_desc')->default('-')->nullable();
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
        Schema::dropIfExists('berandas');
    }
}
