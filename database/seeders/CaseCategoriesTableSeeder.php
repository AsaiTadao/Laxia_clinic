<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CaseCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('case_categories')->delete();

        DB::table('case_categories')->insert(array (
            0 =>
            array (
                'case_id' => 1,
                'category_id' => 28,
            ),
            1 =>
            array (
                'case_id' => 1,
                'category_id' => 32,
            ),
            2 =>
            array (
                'case_id' => 1,
                'category_id' => 28,
            ),
            3 =>
            array (
                'case_id' => 2,
                'category_id' => 27,
            ),
            4 =>
            array (
                'case_id' => 2,
                'category_id' => 31,
            ),
            5 =>
            array (
                'case_id' => 3,
                'category_id' => 174,
            ),
            6 =>
            array (
                'case_id' => 3,
                'category_id' => 167,
            ),
            7 =>
            array (
                'case_id' => 3,
                'category_id' => 263,
            ),
            8 =>
            array (
                'case_id' => 4,
                'category_id' => 29,
            ),
            9 =>
            array (
                'case_id' => 5,
                'category_id' => 35,
            ),
            10 =>
            array (
                'case_id' => 4,
                'category_id' => 34,
            ),
        ));


    }
}
