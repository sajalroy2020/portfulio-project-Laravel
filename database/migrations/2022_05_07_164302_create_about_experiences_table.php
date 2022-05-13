<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_experiences', function (Blueprint $table) {
            $table->id();
            $table->string('about_img');
            $table->string('Year_1');
            $table->string('Year_1_exprience');
            $table->string('Year_2');
            $table->string('Year_2_exprience');
            $table->string('Year_3');
            $table->string('Year_3_exprience');
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
        Schema::dropIfExists('about_experiences');
    }
}
