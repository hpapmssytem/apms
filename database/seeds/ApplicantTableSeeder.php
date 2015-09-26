<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use apms\Applicant;
use apms\EducXp;
use apms\WorkXp;

class ApplicantTableSeeder extends seeder
{
	public function run()
	{
		$faker = \Faker\Factory::create();

		//Applicant::truncate();

	    foreach (range(1, 10) as $index) {
	        $applicant = new Applicant(array(
	            'fname'        => $faker->firstName(),
	            'mname'        => $faker->lastName(),
	            'lname'        => $faker->lastName(),
	            'age'          => $faker->numberBetween(18, 35),
	            'birthdate'    => $faker->date('Y-m-d'),
	            'date_applied' => '2015-9-20',
	            'address'      => $faker->address(),
	            'contact_num'  => "0910".$faker->shuffle("9067831"),
	            'email_add'    => $faker->email(),
	            'status'       => 0,
	            'position_id'  => mt_rand(1, 10)
	        ));

	        $applicant->save();

	        foreach(range(1, mt_rand(3,4)) as $n){
	            if($n == 1){
	                $level = 'Elementary';
	            }
	            else if ($n == 2){
	                $level = "Secondary";
	            }
	            else if ($n == 3){
	                $level = "Tertiary";
	            }
	            else{
	                $level = "Postgrad";
	            }

	            $educxp = new EducXp(array(
	                'level'          => $level,
	                'school_name'    => $faker->text(20),
	                'school_address' => $faker->streetName().", ".$faker->city(),
	                'date_grad'      => $faker->year()
	            ));

	            $applicant->educXps()->save($educxp);
	        }

	        foreach(range(1, mt_rand(1, 5)) as $n){
	            $workxp = new WorkXp(array(
	                'position'         => $faker->text(20),
	                'company_name'     => $faker->company(),
	                'task_description' => $faker->paragraph(4),
	                'date_started'     => $faker->month().'-'.$faker->year(),
	                'date_ended'       => $faker->month().'-'.$faker->year()
	            ));

	            $applicant->workXps()->save($workxp);
	        }
	    }
	}
}