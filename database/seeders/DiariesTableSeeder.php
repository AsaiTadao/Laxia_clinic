<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DiariesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('diaries')->delete();

        DB::table('diaries')->insert(array (
            0 =>
            array (
                'id' => 1,
                'patient_id' => 1,
                'clinic_id' => 1,
                'treat_date' => '2020-11-02',
                'doctor_id' => 77,
                'price' => 500000,
                'created_at' => '2022-08-25 17:36:39',
                'updated_at' => '2022-08-25 20:37:18',
                'rate_01' => 5,
                'rate_02' => 4,
                'rate_03' => 3,
                'rate_04' => 2,
                'rate_05' => 5,
                'rate_06' => 5,
                'rate_07' => 4,
                'rate_08' => 5,
                'rate_09' => 3,
                'ave_rate' => 4.0,
                'cost_anesthetic' => 11,
                'cost_drug' => 11,
                'cost_other' => 11,
                'public' => 1,
            ),
            1 =>
            array (
                'id' => 2,
                'patient_id' => 2,
                'clinic_id' => 1,
                'treat_date' => '2022-01-15',
                'doctor_id' => 74,
                'price' => 106000,
                'created_at' => '2022-08-25 18:41:07',
                'updated_at' => '2022-08-25 18:41:07',
                'rate_01' => 4,
                'rate_02' => 4,
                'rate_03' => 1,
                'rate_04' => 5,
                'rate_05' => 3,
                'rate_06' => 4,
                'rate_07' => 3,
                'rate_08' => 2,
                'rate_09' => 1,
                'ave_rate' => 3.0,
                'cost_anesthetic' => 1000,
                'cost_drug' => 2000,
                'cost_other' => 3000,
                'public' => 1,
            ),
        ));


    }
}
