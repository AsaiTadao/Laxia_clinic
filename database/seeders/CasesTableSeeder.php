<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CasesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('cases')->delete();

        DB::table('cases')->insert(array (
            0 =>
            array (
                'id' => 1,
                'clinic_id' => 1,
                'doctor_id' => 1,
                'name' => '切らない目の下のクマ取りの美容整形',
                'patient_age' => 10,
                'patient_gender' => 'female',
                'case_description' => '肌表面に出ている、色の濃いシミなどのお悩み対して高い効果を発揮します。名前の通り、スポット的にシミを取るピンポイントの施術に向いています。出力が強めなので痛みも多少ありますが、ゴムで弾かれた程度の痛みです。
',
                'treat_risk' => '一時的な赤み、かゆみ、痛み、ヒリヒリ感、紫斑、稀に色素の増強や脱失、炎症、炎症性色素沈着',
                'doctor_opinion' => NULL,
                'created_at' => '2021-04-18 17:31:48',
                'updated_at' => '2021-06-23 19:55:56',
            ),
            1 =>
            array (
                'id' => 2,
                'clinic_id' => 1,
                'doctor_id' => 1,
                'name' => '切らない目の下のクマ取りの美容整形',
                'patient_age' => 11,
                'patient_gender' => 'male',
                'case_description' => '肌表面に出ている、色の濃いシミなどのお悩み対して高い効果を発揮します。名前の通り、スポット的にシミを取るピンポイントの施術に向いています。出力が強めなので痛みも多少ありますが、ゴムで弾かれた程度の痛みです。
',
                'treat_risk' => '一時的な赤み、かゆみ、痛み、ヒリヒリ感、紫斑、稀に色素の増強や脱失、炎症、炎症性色素沈着',
                'doctor_opinion' => NULL,
                'created_at' => '2021-04-18 17:31:48',
                'updated_at' => '2021-06-22 13:26:29',
            ),
            2 =>
            array (
                'id' => 3,
                'clinic_id' => 1,
                'doctor_id' => 2,
                'name' => '切らない目の下のクマ取りの美容整形',
                'patient_age' => 11,
                'patient_gender' => 'male',
                'case_description' => '肌表面に出ている、色の濃いシミなどのお悩み対して高い効果を発揮します。名前の通り、スポット的にシミを取るピンポイントの施術に向いています。出力が強めなので痛みも多少ありますが、ゴムで弾かれた程度の痛みです。
',
                'treat_risk' => '一時的な赤み、かゆみ、痛み、ヒリヒリ感、紫斑、稀に色素の増強や脱失、炎症、炎症性色素沈着',
                'doctor_opinion' => NULL,
                'created_at' => '2021-04-18 17:31:48',
                'updated_at' => '2021-06-15 15:03:11',
            ),
            3 =>
            array (
                'id' => 4,
                'clinic_id' => 1,
                'doctor_id' => 1,
                'name' => '切らない目の下のクマ取りの美容整形',
                'patient_age' => 11,
                'patient_gender' => 'male',
                'case_description' => '肌表面に出ている、色の濃いシミなどのお悩み対して高い効果を発揮します。名前の通り、スポット的にシミを取るピンポイントの施術に向いています。出力が強めなので痛みも多少ありますが、ゴムで弾かれた程度の痛みです。
',
                'treat_risk' => '一時的な赤み、かゆみ、痛み、ヒリヒリ感、紫斑、稀に色素の増強や脱失、炎症、炎症性色素沈着',
                'doctor_opinion' => '一時的な赤み、かゆみ、痛み、ヒリヒリ感、紫斑、稀に色素の増強や脱失、炎症、炎症性色素沈着あ',
                'created_at' => '2021-04-18 17:31:48',
                'updated_at' => '2021-06-16 10:00:39',
            ),
            4 =>
            array (
                'id' => 5,
                'clinic_id' => 1,
                'doctor_id' => 2,
                'name' => '切らない目の下のクマ取りの美容整形　',
                'patient_age' => 11,
                'patient_gender' => 'male',
                'case_description' => '肌表面に出ている、色の濃いシミなどのお悩み対して高い効果を発揮します。名前の通り、スポット的にシミを取るピンポイントの施術に向いています。出力が強めなので痛みも多少ありますが、ゴムで弾かれた程度の痛みです。
',
                'treat_risk' => '一時的な赤み、かゆみ、痛み、ヒリヒリ感、紫斑、稀に色素の増強や脱失、炎症、炎症性色素沈着',
                'doctor_opinion' => NULL,
                'created_at' => '2021-04-18 17:31:48',
                'updated_at' => '2021-06-15 15:28:27',
            ),
            5 =>
            array (
                'id' => 6,
                'clinic_id' => 1,
                'doctor_id' => 1,
                'name' => '切らない目の下のクマ取りの美容整形　',
                'patient_age' => 11,
                'patient_gender' => 'male',
                'case_description' => '肌表面に出ている、色の濃いシミなどのお悩み対して高い効果を発揮します。名前の通り、スポット的にシミを取るピンポイントの施術に向いています。出力が強めなので痛みも多少ありますが、ゴムで弾かれた程度の痛みです。
',
                'treat_risk' => '一時的な赤み、かゆみ、痛み、ヒリヒリ感、紫斑、稀に色素の増強や脱失、炎症、炎症性色素沈着',
                'doctor_opinion' => NULL,
                'created_at' => '2021-04-18 17:31:48',
                'updated_at' => '2021-06-15 15:28:34',
            )
        ));


    }
}
