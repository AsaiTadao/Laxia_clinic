<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CasesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('cases')->delete();

        DB::table('cases')->insert(array (
            0 =>
            array (
                'id' => 1,
                'clinic_id' => 1,
                'doctor_id' => 1,
                'name' => '二重術1dayナチュラルプレミアム法',
                'patient_age' => 10,
                'patient_gender' => 'female',
                'case_description' => 'あああ',
                'treat_risk' => 'あああ',
                'doctor_opinion' => NULL,
                'created_at' => '2021-04-18 17:31:48',
                'updated_at' => '2021-06-23 19:55:56',
            ),
            1 =>
            array (
                'id' => 2,
                'clinic_id' => 1,
                'doctor_id' => 1,
                'name' => '二重術1dayナチュラルプレミアム法',
                'patient_age' => 11,
                'patient_gender' => 'male',
                'case_description' => 'あああ',
                'treat_risk' => 'あああ',
                'doctor_opinion' => NULL,
                'created_at' => '2021-04-18 17:31:48',
                'updated_at' => '2021-06-22 13:26:29',
            ),
            2 =>
            array (
                'id' => 3,
                'clinic_id' => 1,
                'doctor_id' => 2,
                'name' => '二重術1dayナチュラルプレミアム法',
                'patient_age' => 11,
                'patient_gender' => 'male',
                'case_description' => 'あああ',
                'treat_risk' => 'あああ',
                'doctor_opinion' => NULL,
                'created_at' => '2021-04-18 17:31:48',
                'updated_at' => '2021-06-15 15:03:11',
            ),
            3 =>
            array (
                'id' => 4,
                'clinic_id' => 1,
                'doctor_id' => 1,
                'name' => '二重術1dayナチュラルプレミアム法',
                'patient_age' => 11,
                'patient_gender' => 'male',
                'case_description' => 'あああ',
                'treat_risk' => 'あああ',
                'doctor_opinion' => 'ああああ',
                'created_at' => '2021-04-18 17:31:48',
                'updated_at' => '2021-06-16 10:00:39',
            ),
            4 =>
            array (
                'id' => 5,
                'clinic_id' => 1,
                'doctor_id' => 2,
                'name' => '二重術1dayナチュラルプレミアム法　',
                'patient_age' => 11,
                'patient_gender' => 'male',
                'case_description' => 'あああ',
                'treat_risk' => 'あああ',
                'doctor_opinion' => NULL,
                'created_at' => '2021-04-18 17:31:48',
                'updated_at' => '2021-06-15 15:28:27',
            ),
            5 =>
            array (
                'id' => 6,
                'clinic_id' => 1,
                'doctor_id' => 1,
                'name' => '二重術1dayナチュラルプレミアム法　',
                'patient_age' => 11,
                'patient_gender' => 'male',
                'case_description' => 'あああ',
                'treat_risk' => 'あああ',
                'doctor_opinion' => NULL,
                'created_at' => '2021-04-18 17:31:48',
                'updated_at' => '2021-06-15 15:28:34',
            )
        ));


    }
}
