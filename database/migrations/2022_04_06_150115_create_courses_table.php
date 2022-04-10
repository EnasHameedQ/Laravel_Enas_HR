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
        Schema::create('courses', function (Blueprint $table) {
            $table->id('cor_id');
            $table->foreignId('up_id');
            $table->string('cor_name')->nullable();  
            $table->string('cor_Granted_side')->nullable(); // institute or uneversity
            $table->string('up_contry')->nullable();
            $table->string('up_city')->nullable();
            $table->text('cor_certifecate');
            $table->text('cor_certifecate_type');
            $table->date('cor_graduation_year')->nullable();
            $table->date('cor_expiration_year')->default(null);
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
        Schema::dropIfExists('courses');
    }
};
