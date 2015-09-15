<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducXpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educ_xps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('level');
            $table->string('school_name');
            $table->string('school_address');
            $table->string('date_grad');
            $table->integer('applicant_id')->unsigned();
            $table->foreign('applicant_id')->references('id')
                ->on('applicants')->onDelete('cascade');
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
        Schema::drop('educ_xps');
    }
}
