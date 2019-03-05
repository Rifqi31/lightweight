<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLightModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('light_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name', 20);
            $table->string('last_name', 20);
            $table->string('birth_place', 25);
            $table->date('birth_date');
            $table->integer('phone_number')->nullable();
            $table->string('email')->unique();
            $table->string('profile_pict')->nullable();         // upload one picture
            $table->string('major', 20);
            $table->decimal('mark_result', 10,2)->nullable();    // example 8.22
            $table->text('address')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('light_models');
    }
}
