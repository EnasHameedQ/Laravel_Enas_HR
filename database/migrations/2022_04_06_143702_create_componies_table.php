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
        Schema::create('componies', function (Blueprint $table) {
            
            $table->id('comp_id');
            $table->string('comp_name');
            $table->text('comp_desc')->nullable();
            $table->text('comp_address')->nullable();
            $table->text('comp_phone')->nullable();
            $table->foreignId('admin_id');
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
        Schema::dropIfExists('componies');
    }
};
