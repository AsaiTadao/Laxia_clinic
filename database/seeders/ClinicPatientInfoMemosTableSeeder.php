<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class ClinicPatientInfoMemosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('clinic_patient_info_memos')->delete();

        DB::table('clinic_patient_info_memos')->insert(array (
            0 =>
            array (
                'id' => 1,
                'clinic_id' => 1,
                'patient_info_id' => 1,
                'memo' => 'ssd',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'clinic_id' => 1,
                'patient_info_id' => 2,
                'memo' => 'ssd',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'clinic_id' => 1,
                'patient_info_id' => 3,
                'memo' => 'ssd',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));


    }
}
