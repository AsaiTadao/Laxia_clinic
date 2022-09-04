<?php

    namespace Database\Seeders;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Database\Seeder;

class DiaryTextQuestionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('diary_text_questions')->delete();

        DB::table('diary_text_questions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'question_id' => 1,
                'diary_id' => 1,
                'answer' => '二重幅が狭くて吊り目になるのが気になっていた。コンプレックスである。',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'question_id' => 2,
                'diary_id' => 1,
                'answer' => '・施術費用が安い
                ・立地が良い
                ・予約が取りやすい
                ・受けたい施術に特化している
                ・ドクターの対応が良い
                ・カウンセリングが良い
                ・カウンセラーや看護師の対応が良い',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'question_id' => 3,
                'diary_id' => 1,
                'answer' => '前回お腹周り担当してくれた方々なので信頼してました。
                手際いいし、他のお客様いないので、貸し切りの状態です。カウンセラーの方も凄く対応よく、手際いいし、気も利かせてくれます。',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'question_id' => 4,
                'diary_id' => 1,
                'answer' => '前回お腹周り担当してくれた方々なので信頼してました。
                手際いいし、他のお客様いないので、貸し切りの状態です。カウンセラーの方も凄く対応よく、手際いいし、気も利かせてくれます。',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'question_id' => 5,
                'diary_id' => 1,
                'answer' => '二重幅が狭くて吊り目になるのが気になっていた。コンプレックスである。',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'question_id' => 6,
                'diary_id' => 1,
                'answer' => '二重幅が狭くて吊り目になるのが気になっていた。コンプレックスである。',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'question_id' => 6,
                'diary_id' => 2,
                'answer' => '二重幅が狭くて吊り目になるのが気になっていた。コンプレックスである。',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 =>
            array (
                'id' => 8,
                'question_id' => 1,
                'diary_id' => 2,
                'answer' => '・施術費用が安い
                ・立地が良い
                ・予約が取りやすい
                ・受けたい施術に特化している
                ・ドクターの対応が良い
                ・カウンセリングが良い
                ・カウンセラーや看護師の対応が良い',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 =>
            array (
                'id' => 9,
                'question_id' => 2,
                'diary_id' => 2,
                'answer' => '前回お腹周り担当してくれた方々なので信頼してました。
                手際いいし、他のお客様いないので、貸し切りの状態です。カウンセラーの方も凄く対応よく、手際いいし、気も利かせてくれます。',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 =>
            array (
                'id' => 10,
                'question_id' => 3,
                'diary_id' => 2,
                'answer' => '前回お腹周り担当してくれた方々なので信頼してました。
                手際いいし、他のお客様いないので、貸し切りの状態です。カウンセラーの方も凄く対応よく、手際いいし、気も利かせてくれます。',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 =>
            array (
                'id' => 11,
                'question_id' => 4,
                'diary_id' => 2,
                'answer' => '二重幅が狭くて吊り目になるのが気になっていた。コンプレックスである。',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 =>
            array (
                'id' => 12,
                'question_id' => 5,
                'diary_id' => 2,
                'answer' => '二重幅が狭くて吊り目になるのが気になっていた。コンプレックスである。',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),

        ));


    }
}
