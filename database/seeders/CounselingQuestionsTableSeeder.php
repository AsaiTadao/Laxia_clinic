<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CounselingQuestionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('counseling_questions')->delete();

        DB::table('counseling_questions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'counseling_report_id' => 1,
                'question' => 'fdsf',
                'answer' => 'dfsfdsfsd',
                'created_at' => '2022-08-26 05:26:13',
                'updated_at' => '2022-08-26 05:26:13',
            ),
            1 =>
            array (
                'id' => 2,
                'counseling_report_id' => 2,
                'question' => 'sdsd',
                'answer' => 'dsd',
                'created_at' => '2022-08-29 07:35:50',
                'updated_at' => '2022-08-29 07:35:50',
            ),
            2 =>
            array (
                'id' => 3,
                'counseling_report_id' => 3,
                'question' => 'aa',
                'answer' => 'aaa',
                'created_at' => '2022-08-29 08:51:16',
                'updated_at' => '2022-08-29 08:51:16',
            ),
        ));


    }
}
