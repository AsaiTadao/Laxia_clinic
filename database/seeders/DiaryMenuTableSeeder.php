<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DiaryMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('diary_menu')->delete();

        DB::table('diary_menu')->insert(array (
            0 =>
            array (
                'id' => 1,
                'diary_id' => 1,
                'menu_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'cost' => 234936,
            ),
            1 =>
            array (
                'id' => 2,
                'diary_id' => 2,
                'menu_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'cost' => 1000,
            ),
        ));


    }
}
