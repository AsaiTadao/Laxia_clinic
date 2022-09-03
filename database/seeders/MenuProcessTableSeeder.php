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


        DB::table('menu_process')->delete();

        DB::table('menu_process')->insert(array (
            0 =>
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => '施術前写真撮影',
                'period' => 15,
                'created_at' => '2022-07-04 17:50:45',
                'updated_at' => '2022-07-04 17:50:45',
            ),
            1 =>
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => '消毒',
                'period' => 15,
                'created_at' => '2022-07-04 17:50:45',
                'updated_at' => '2022-07-04 17:50:45',
            ),
            2 =>
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => '麻酔',
                'period' => 15,
                'created_at' => '2022-08-20 23:58:11',
                'updated_at' => '2022-08-20 23:58:11',
            ),
            3 =>
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => '消毒',
                'period' => 15,
                'created_at' => '2022-08-20 23:58:11',
                'updated_at' => '2022-08-20 23:58:11',
            ),
            4 =>
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => '施術',
                'period' => 15,
                'created_at' => '2022-08-21 00:01:15',
                'updated_at' => '2022-08-21 00:01:15',
            ),
            5 =>
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => '止血',
                'period' => 10,
                'created_at' => '2022-08-21 00:01:15',
                'updated_at' => '2022-08-21 00:01:15',
            ),
            6 =>
            array (
                'id' => 7,
                'menu_id' => 2,
                'title' => '施術前写真撮影',
                'period' => 15,
                'created_at' => '2022-07-04 17:50:45',
                'updated_at' => '2022-07-04 17:50:45',
            ),
            7 =>
            array (
                'id' => 8,
                'menu_id' => 2,
                'title' => '消毒',
                'period' => 15,
                'created_at' => '2022-07-04 17:50:45',
                'updated_at' => '2022-07-04 17:50:45',
            ),
            8 =>
            array (
                'id' => 3,
                'menu_id' => 2,
                'title' => '麻酔',
                'period' => 15,
                'created_at' => '2022-08-20 23:58:11',
                'updated_at' => '2022-08-20 23:58:11',
            ),
            9 =>
            array (
                'id' => 4,
                'menu_id' => 2,
                'title' => '消毒',
                'period' => 15,
                'created_at' => '2022-08-20 23:58:11',
                'updated_at' => '2022-08-20 23:58:11',
            ),
            10 =>
            array (
                'id' => 5,
                'menu_id' => 2,
                'title' => '施術',
                'period' => 15,
                'created_at' => '2022-08-21 00:01:15',
                'updated_at' => '2022-08-21 00:01:15',
            ),
            11 =>
            array (
                'id' => 6,
                'menu_id' => 2,
                'title' => '止血',
                'period' => 10,
                'created_at' => '2022-08-21 00:01:15',
                'updated_at' => '2022-08-21 00:01:15',
            ),
            12 =>
            array (
                'id' => 1,
                'menu_id' => 3,
                'title' => '施術前写真撮影',
                'period' => 15,
                'created_at' => '2022-07-04 17:50:45',
                'updated_at' => '2022-07-04 17:50:45',
            ),
            13 =>
            array (
                'id' => 2,
                'menu_id' => 3,
                'title' => '消毒',
                'period' => 15,
                'created_at' => '2022-07-04 17:50:45',
                'updated_at' => '2022-07-04 17:50:45',
            ),
            14 =>
            array (
                'id' => 3,
                'menu_id' => 3,
                'title' => '麻酔',
                'period' => 15,
                'created_at' => '2022-08-20 23:58:11',
                'updated_at' => '2022-08-20 23:58:11',
            ),
            15 =>
            array (
                'id' => 4,
                'menu_id' => 3,
                'title' => '消毒',
                'period' => 15,
                'created_at' => '2022-08-20 23:58:11',
                'updated_at' => '2022-08-20 23:58:11',
            ),
            16 =>
            array (
                'id' => 5,
                'menu_id' => 3,
                'title' => '施術',
                'period' => 15,
                'created_at' => '2022-08-21 00:01:15',
                'updated_at' => '2022-08-21 00:01:15',
            ),
            17 =>
            array (
                'id' => 6,
                'menu_id' => 3,
                'title' => '止血',
                'period' => 10,
                'created_at' => '2022-08-21 00:01:15',
                'updated_at' => '2022-08-21 00:01:15',
            )
        ));


    }
}
