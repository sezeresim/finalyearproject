<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("question_area_id");
            $table->unsignedBigInteger("list_id");
            $table->boolean('complete')->default(false);
            $table->timestamps();

            //foreign key
            $table->foreign('question_area_id')->references('id')->on('question_areas')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survey_users');
    }
}
