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
        Schema::create('adds', function (Blueprint $table) {
            $table->id('adds_id');
            $table->foreignId('admin_id');
            $table->foreignId('comp_id');
            $table->string('adds_name')->nullable();
            $table->string('adds_img');
            $table->text('adds_desc')->nullable();
            $table->text('adds_video')->nullable();
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
        Schema::dropIfExists('adds');
    }
};
