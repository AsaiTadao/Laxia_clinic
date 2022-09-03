<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;;

class CounselingReportsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('counseling_reports')->delete();

        DB::table('counseling_reports')->insert(array (
            0 =>
            array (
                'id' => 1,
                'patient_id' => NULL,
                'clinic_id' => 1,
                'doctor_id' => 1,
                'counseling_date' => '2020-10-10',
                'content' => 'TBD-ここに例を入れる（どんなことに悩んでいますか？）',
                'reason' => 'TBD-ここに例を入れる（このクリニックを選んだ理由は？）',
                'before_counseling' => 'カウンセリングの様子はどうでしたか？',
                'after_ccounseling' => 'カウンセリング後の感想',
                'rate' => 4,
                'created_at' => '2022-04-01 14:30:26',
                'updated_at' => '2022-04-01 14:30:26',
                'title' => '湘南美容クリニック銀座院で二重埋没についてカウンセリング',
                'public' => 1,
            ),
            1 =>
            array (
                'id' => 2,
                'patient_id' => NULL,
                'clinic_id' => 1,
                'doctor_id' => 2,
                'counseling_date' => '2020-10-10',
                'content' => 'TBD-ここに例を入れる（どんなことに悩んでいますか？）',
                'reason' => 'TBD-ここに例を入れる（このクリニックを選んだ理由は？）',
                'before_counseling' => 'カウンセリングの様子はどうでしたか？',
                'after_ccounseling' => 'カウンセリング後の感想',
                'rate' => 4,
                'created_at' => '2022-04-01 14:31:46',
                'updated_at' => '2022-04-01 14:31:46',
                'title' => '湘南美容クリニック銀座院で二重埋没についてカウンセリング',
                'public' => 1,
            ),
            2 =>
            array (
                'id' => 3,
                'patient_id' => NULL,
                'clinic_id' => 1,
                'doctor_id' => 3,
                'counseling_date' => '2020-10-10',
                'content' => 'TBD-ここに例を入れる（どんなことに悩んでいますか？）',
                'reason' => 'TBD-ここに例を入れる（このクリニックを選んだ理由は？）',
                'before_counseling' => 'カウンセリングの様子はどうでしたか？',
                'after_ccounseling' => 'カウンセリング後の感想',
                'rate' => 4,
                'created_at' => '2022-04-01 14:35:29',
            'updated_at' => '2022-04-01 14:35:29',
                'title' => '湘南美容クリニック銀座院で二重埋没についてカウンセリング',
                'public' => 1,
            ),
        ));

    }
}
