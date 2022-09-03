<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TreatStatusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('treat_status')->delete();

        DB::table('treat_status')->insert(array (
            0 =>
            array (
                'id' => 1,
                'progress_id' => 1,
                'indicator_id' => 1,
                'value' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'progress_id' => 1,
                'indicator_id' => 2,
                'value' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'progress_id' => 1,
                'indicator_id' => 3,
                'value' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'progress_id' => 2,
                'indicator_id' => 1,
                'value' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'progress_id' => 2,
                'indicator_id' => 2,
                'value' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'progress_id' => 2,
                'indicator_id' => 3,
                'value' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));


    }
}
