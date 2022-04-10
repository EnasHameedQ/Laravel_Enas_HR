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
        Schema::create('education', function (Blueprint $table) {
            $table->id('edu_id');
            $table->foreignId('up_id');
            $table->string('edu_degree')->nullable();  //bacaloria or master or deplom
            $table->string('edu_Granted_side')->nullable(); // institute or uneversity
            $table->string('up_contry')->nullable();
            $table->string('up_city')->nullable();
            $table->text('edu_certifecate');
            $table->text('edu_certifecate_type');
            $table->date('edu_graduation_year')->nullable();
            $table->date('edu_expiration_year')-> default(null);
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
        Schema::dropIfExists('education');
    }
};
