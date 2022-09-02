<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DiaryCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('diary_categories')->delete();

        DB::table('diary_categories')->insert(array (
            0 =>
            array (
                'id' => 1,
                'diary_id' => 1,
                'category_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'diary_id' => 2,
                'category_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'diary_id' => 1,
                'category_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'diary_id' => 2,
                'category_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'diary_id' => 1,
                'category_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'diary_id' => 2,
                'category_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}
