<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_areas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');;
            $table->string('title');
            $table->string('purpose');
            $table->string('survey_state')->default('public');
            $table->date('last_date');
            $table->string('survey_list');
            $table->integer('like_count')->default('0');
            $table->integer('dislike_count')->default('0');
            $table->string('whatIs')->default('survey');
          /*  $table->time('time_limit')->default(0);*/
            $table->timestamps();

            //foreign key
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_areas');
    }
}
