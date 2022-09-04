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
                'question' => 'ボトックスは眉間や額に打つのは効果的であるのか？',
                'answer' => '効果はあります。',
                'created_at' => '2022-08-26 05:26:13',
                'updated_at' => '2022-08-26 05:26:13',
            ),
            1 =>
            array (
                'id' => 2,
                'counseling_report_id' => 1,
                'question' => '入院は必須か？',
                'answer' => '効3日〜出来たら4日入院必須',
                'created_at' => '2022-08-29 07:35:50',
                'updated_at' => '2022-08-29 07:35:50',
            ),
            2 =>
            array (
                'id' => 3,
                'counseling_report_id' => 1,
                'question' => 'ダウンタイムはどのくらいか？',
                'answer' => '1週間程度',
                'created_at' => '2022-08-29 08:51:16',
                'updated_at' => '2022-08-29 08:51:16',
            ),
            3 =>
            array (
                'id' => 4,
                'counseling_report_id' => 2,
                'question' => 'ボトックスは眉間や額に打つのは効果的であるのか？',
                'answer' => '効果はあります。',
                'created_at' => '2022-08-26 05:26:13',
                'updated_at' => '2022-08-26 05:26:13',
            ),
            4 =>
            array (
                'id' => 5,
                'counseling_report_id' => 2,
                'question' => '入院は必須か？',
                'answer' => '効3日〜出来たら4日入院必須',
                'created_at' => '2022-08-29 07:35:50',
                'updated_at' => '2022-08-29 07:35:50',
            ),
            5 =>
            array (
                'id' => 6,
                'counseling_report_id' => 2,
                'question' => 'ダウンタイムはどのくらいか？',
                'answer' => '1週間程度',
                'created_at' => '2022-08-29 08:51:16',
                'updated_at' => '2022-08-29 08:51:16',
            ),
            6 =>
            array (
                'id' => 7,
                'counseling_report_id' => 3,
                'question' => 'ボトックスは眉間や額に打つのは効果的であるのか？',
                'answer' => '効果はあります。',
                'created_at' => '2022-08-26 05:26:13',
                'updated_at' => '2022-08-26 05:26:13',
            ),
            7 =>
            array (
                'id' => 8,
                'counseling_report_id' => 3,
                'question' => '入院は必須か？',
                'answer' => '効3日〜出来たら4日入院必須',
                'created_at' => '2022-08-29 07:35:50',
                'updated_at' => '2022-08-29 07:35:50',
            ),
            8 =>
            array (
                'id' => 9,
                'counseling_report_id' => 3,
                'question' => 'ダウンタイムはどのくらいか？',
                'answer' => '1週間程度',
                'created_at' => '2022-08-29 08:51:16',
                'updated_at' => '2022-08-29 08:51:16',
            ),
        ));


    }
}
