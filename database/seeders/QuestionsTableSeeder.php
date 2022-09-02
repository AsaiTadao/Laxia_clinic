<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('questions')->delete();

        DB::table('questions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'patient_id' => 1,
                'title' => 'sadsadawwwwwww',
                'content' => 'asdasdadasdwwwwww',
                'created_at' => '2022-08-29 09:05:31',
                'updated_at' => '2022-08-29 10:28:21',
            ),
            1 =>
            array (
                'id' => 2,
                'patient_id' => 2,
                'title' => 'gfhgf',
                'content' => 'hgfhgfhfghfhgf',
                'created_at' => '2022-08-29 12:15:10',
                'updated_at' => '2022-08-29 12:15:10',
            ),
            2 =>
            array (
                'id' => 3,
                'patient_id' => 3,
                'title' => 'これはしつもんです。',
                'content' => 'テストてでです、。。',
                'created_at' => '2022-08-29 13:04:26',
                'updated_at' => '2022-08-29 13:04:26',
            ),
        ));


    }
}
