<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PatientCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        DB::table('patient_categories')->delete();

        DB::table('patient_categories')->insert(array (
            0 =>
            array (
                'patient_id' => 1,
                'category_id' => 174,
            ),
            1 =>
            array (
                'patient_id' => 2,
                'category_id' => 177,
            ),
            2 =>
            array (
                'patient_id' => 3,
                'category_id' => 135,
            ),
            3 =>
            array (
                'patient_id' => 4,
                'category_id' => 138,
            ),
            4 =>
            array (
                'patient_id' => 5,
                'category_id' => 31,
            ),
            5 =>
            array (
                'patient_id' => 6,
                'category_id' => 36,
            ),
            6 =>
            array (
                'patient_id' => 7,
                'category_id' => 35,
            ),
            7 =>
            array (
                'patient_id' => 8,
                'category_id' => 36,
            ),
            8 =>
            array (
                'patient_id' => 9,
                'category_id' => 31,
            ),
            9 =>
            array (
                'patient_id' => 10,
                'category_id' => 33,
            ),
        ));


    }
}
