<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CaseMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('case_menus')->delete();

        DB::table('case_menus')->insert(array (
            0 =>
            array (
                'case_id' => 1,
                'menu_id' => 1,
            ),
            1 =>
            array (
                'case_id' => 2,
                'menu_id' => 2,
            ),
            2 =>
            array (
                'case_id' => 3,
                'menu_id' => 3,
            ),
            3 =>
            array (
                'case_id' => 4,
                'menu_id' => 4,
            ),
            4 =>
            array (
                'case_id' => 5,
                'menu_id' => 5,
            ),
            5 =>
            array (
                'case_id' => 6,
                'menu_id' => 6,
            ),
        ));


    }
}
