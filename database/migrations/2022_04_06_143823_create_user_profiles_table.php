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
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id('up_id');
            $table->foreignId('user_id');
            $table->foreignId('admin_id');
            $table->foreignId('comp_id');
            $table->string('up_fname')->nullable();
            $table->string('up_lname')->nullable();
            $table->string('up_gender')->nullable();
            $table->text('up_img');
            $table->text('up_cv');
            $table->text('up_bio')->nullable();
            $table->text('up_address')->nullable();
            $table->string('up_phone')->nullable();
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
        Schema::dropIfExists('user_profiles');
    }
};
