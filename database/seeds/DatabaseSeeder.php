<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use apms\Applicant;
use apms\EducXp;
use apms\WorkXp;
use apms\Position;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        //DB::table('applicants')->delete();
        $this->call('ApplicantTableSeeder');

        Model::reguard();
    }
}
