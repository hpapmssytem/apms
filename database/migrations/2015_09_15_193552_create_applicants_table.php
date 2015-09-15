<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('position_id')->unsigned();
            $table->foreign('position_id')->references('id')
                ->on('positions')->onDelete('cascade');
            $table->string('fname');
            $table->string('mname')
                ->nullable();
            $table->string('lname');
            $table->integer('age');
            $table->date('birthdate');
            $table->date('date_applied');
            $table->string('address');
            $table->string('contact_num', 11);
            $table->string('email_add');
            $table->tinyInteger('status');
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
        Schema::drop('applicants');
    }
}
