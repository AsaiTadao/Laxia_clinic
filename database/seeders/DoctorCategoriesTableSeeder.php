<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DoctorCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('doctor_categories')->delete();

        DB::table('doctor_categories')->insert(array (
            0 =>
            array (
                'doctor_id' => 1,
                'category_id' => 28,
            ),
            1 =>
            array (
                'doctor_id' => 1,
                'category_id' => 32,
            ),
            2 =>
            array (
                'doctor_id' => 1,
                'category_id' => 28,
            ),
            3 =>
            array (
                'doctor_id' => 2,
                'category_id' => 27,
            ),
            4 =>
            array (
                'doctor_id' => 2,
                'category_id' => 31,
            ),
            5 =>
            array (
                'doctor_id' => 3,
                'category_id' => 174,
            ),
            6 =>
            array (
                'doctor_id' => 3,
                'category_id' => 167,
            ),
            7 =>
            array (
                'doctor_id' => 3,
                'category_id' => 263,
            )
        ));


    }
}
