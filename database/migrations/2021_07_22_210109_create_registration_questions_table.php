<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('registration_id');
            $table->integer('question_id');
            $table->integer('option_id')->nullable();
            $table->integer('mark')->default(0)->comment('1-correct, 0-wrong');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registration_questions');
    }
}
