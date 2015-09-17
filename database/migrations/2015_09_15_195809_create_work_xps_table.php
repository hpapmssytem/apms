<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkXpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_xps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('position');
            $table->string('company_name');
            $table->text('task_description');
            $table->string('date_started');
            $table->string('date_ended')->nullable();
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
        Schema::drop('work_xps');
    }
}
