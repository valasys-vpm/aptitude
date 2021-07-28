<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('mobile', 15);
            $table->integer('designation_id');
            $table->string('current_ctc')->nullable();
            $table->string('expected_ctc');
            $table->string('can_join_in');
            $table->dateTime('test_start_time')->nullable();
            $table->integer('attempted')->nullable();
            $table->integer('total_marks')->nullable();
            $table->integer('total_question')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrations');
    }
}
