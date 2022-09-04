<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MenuCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('menu_categories')->delete();

        DB::table('menu_categories')->insert(array (
            0 =>
            array (
                'menu_id' => 1,
                'category_id' => 160,
            ),
            1 =>
            array (
                'menu_id' => 2,
                'category_id' => 161,
            ),
            2 =>
            array (
                'menu_id' => 3,
                'category_id' => 162,
            ),
            3 =>
            array (
                'menu_id' => 4,
                'category_id' => 163,
            ),
            4 =>
            array (
                'menu_id' => 5,
                'category_id' => 27,
            ),
            5 =>
            array (
                'menu_id' => 6,
                'category_id' => 31,
            ),
            6 =>
            array (
                'menu_id' => 1,
                'category_id' => 33,
            ),
            7 =>
            array (
                'menu_id' => 3,
                'category_id' => 29,
            ),
            8 =>
            array (
                'menu_id' => 2,
                'category_id' => 36,
            ),
            9 =>
            array (
                'menu_id' => 5,
                'category_id' => 28,
            ),
            10 =>
            array (
                'menu_id' => 4,
                'category_id' => 29,
            ),
            11 =>
            array (
                'menu_id' => 6,
                'category_id' => 29,
            ),
            12 =>
            array (
                'menu_id' => 5,
                'category_id' => 31,
            ),
            13 =>
            array (
                'menu_id' => 6,
                'category_id' => 34,
            ),
            14 =>
            array (
                'menu_id' => 4,
                'category_id' => 35,
            ),
            15 =>
            array (
                'menu_id' => 2,
                'category_id' => 35,
            ),
            16 =>
            array (
                'menu_id' => 5,
                'category_id' => 38,
            ),
            17 =>
            array (
                'menu_id' => 1,
                'category_id' => 48,
            ),
            18 =>
            array (
                'menu_id' => 4,
                'category_id' => 58,
            ),
            19 =>
            array (
                'menu_id' => 3,
                'category_id' => 349,
            )
        ));


    }
}
