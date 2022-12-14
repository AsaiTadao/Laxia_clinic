<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('menus')->delete();

        DB::table('menus')->insert(array (
            0 =>
            array (
                'id' => 1,
                'clinic_id' => 1,
                'name' => '両目埋没法ダブル（５年保証付き）両目',
                'price' => 248900,
                'description' => '通常の埋没法より固定力（強度）が強い、イセア独自の埋没法通常の埋没法より固定力（強度）が強イセア独自の埋没法通法通常のあ度）が強イセア独自の埋',
                'risk' => '通常の埋没法より固定力（強度）が強い、イセア独自の埋没法。<< イセアの埋没法ダブル(５年保証)3つのポイント >>①完成後1ヶ月間二重幅変更無料!②何点留めでも一律料金！③術後５年間同一幅での再手術無料!通常の埋没法より固定力（強度）が強い、イセア独自の埋没法',
                'guarantee' => '通常の通常の埋没法より固定力（強度）が強い、イセア独自の埋没法。<< イセアの埋没法ダブル(５年保証)3つのポイント >><< イセアの埋没法ダブル(５年保証)3つのポイント >>①完成後1ヶ月間二重幅変更無料!
',
                'treat_time' => 5,
                'basshi' => 5,
                'hospital_visit' => 10,
                'hare' => 15,
                'pain' => 10,
                'bleeding' => 10,
                'hospital_need' => 10,
                'masui' => 10,
                'makeup' => 10,
                'shower' => 10,
                'massage' => 10,
                'sport_impossible' => 5,
                'photo' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/user/medias/nGYLON6968.png',
                'status' => 0,
                'created_at' => '2021-04-18 13:11:38',
                'updated_at' => '2021-06-23 20:49:17',
            ),
            1 =>
            array (
                'id' => 2,
                'clinic_id' => 1,
                'name' => '埋没法ダブル（５年保証付き）両目埋没法ダブル（５年保証付き）両目',
                'price' => 500,
                'description' => '通常の埋没法より固定力（強度）が強い、イセア独自の埋没法通常の埋没法より固定力（強度）が強イセア独自の埋没法通法通常のあ度）が強イセア独自の埋....',
                'risk' => '通常の埋没法より固定力（強度）が強い、イセア独自の埋没法。<< イセアの埋没法ダブル(５年保証)3つのポイント >>①完成後1ヶ月間二重幅変更無料!②何点留めでも一律料金！③術後５年間同一幅での再手術無料!通常の埋没法より固定力（強度）が強い、イセア独自の埋没法',
                'guarantee' => '通常の通常の埋没法より固定力（強度）が強い、イセア独自の埋没法。<< イセアの埋没法ダブル(５年保証)3つのポイント >><< イセアの埋没法ダブル(５年保証)3つのポイント >>①完成後1ヶ月間二重幅変更無料!
',
                'treat_time' => 5,
                'basshi' => 5,
                'hospital_visit' => 10,
                'hare' => 15,
                'pain' => 15,
                'bleeding' => 15,
                'hospital_need' => 15,
                'masui' => 15,
                'makeup' => 15,
                'shower' => 15,
                'massage' => 15,
                'sport_impossible' => 15,
                'photo' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/ZSBnRC8846.png',
                'status' => 1,
                'created_at' => '2021-04-18 13:11:38',
                'updated_at' => '2021-04-18 13:11:38',
            ),
            2 =>
            array (
                'id' => 3,
                'clinic_id' => 1,
                'name' => '埋没法ダブル（５年保証付き）両目埋没法ダブル（５年保証付き）両目',
                'price' => 248900,
                'description' => '通常の埋没法より固定力（強度）が強い、イセア独自の埋没法通常の埋没法より固定力（強度）が強イセア独自の埋没法通法通常のあ度）が強イセア独自の埋....',
                'risk' => '通常の埋没法より固定力（強度）が強い、イセア独自の埋没法。<< イセアの埋没法ダブル(５年保証)3つのポイント >>①完成後1ヶ月間二重幅変更無料!②何点留めでも一律料金！③術後５年間同一幅での再手術無料!通常の埋没法より固定力（強度）が強い、イセア独自の埋没法',
                'guarantee' => '通常の通常の埋没法より固定力（強度）が強い、イセア独自の埋没法。<< イセアの埋没法ダブル(５年保証)3つのポイント >><< イセアの埋没法ダブル(５年保証)3つのポイント >>①完成後1ヶ月間二重幅変更無料!
',
                'treat_time' => 5,
                'basshi' => 5,
                'hospital_visit' => 10,
                'hare' => 15,
                'pain' => 15,
                'bleeding' => 15,
                'hospital_need' => 15,
                'masui' => 15,
                'makeup' => 15,
                'shower' => 15,
                'massage' => 15,
                'sport_impossible' => 15,
                'photo' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/user/medias/nGYLON6968.png',
                'status' => 1,
                'created_at' => '2021-04-18 13:11:38',
                'updated_at' => '2021-04-18 13:11:38',
            ),
            3 =>
            array (
                'id' => 4,
                'clinic_id' => 1,
                'name' => '埋没法ダブル（５年保証付き）両目埋没法ダブル（５年保証付き）両目',
                'price' => 200,
                'description' => '通常の埋没法より固定力（強度）が強い、イセア独自の埋没法通常の埋没法より固定力（強度）が強イセア独自の埋没法通法通常のあ度）が強イセア独自の埋....',
                'risk' => '通常の埋没法より固定力（強度）が強い、イセア独自の埋没法。<< イセアの埋没法ダブル(５年保証)3つのポイント >>①完成後1ヶ月間二重幅変更無料!②何点留めでも一律料金！③術後５年間同一幅での再手術無料!通常の埋没法より固定力（強度）が強い、イセア独自の埋没法',
                'guarantee' => '通常の通常の埋没法より固定力（強度）が強い、イセア独自の埋没法。<< イセアの埋没法ダブル(５年保証)3つのポイント >><< イセアの埋没法ダブル(５年保証)3つのポイント >>①完成後1ヶ月間二重幅変更無料!
',
                'treat_time' => 5,
                'basshi' => 5,
                'hospital_visit' => 10,
                'hare' => 15,
                'pain' => 15,
                'bleeding' => 15,
                'hospital_need' => 15,
                'masui' => 15,
                'makeup' => 15,
                'shower' => 15,
                'massage' => 15,
                'sport_impossible' => 15,
                'photo' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/user/medias/nGYLON6968.png',
                'status' => 1,
                'created_at' => '2021-04-18 13:11:38',
                'updated_at' => '2021-04-18 13:11:38',
            ),
            4 =>
            array (
                'id' => 5,
                'clinic_id' => 1,
                'name' => '埋没法ダブル（５年保証付き）両目埋没法ダブル（５年保証付き）両目',
                'price' => 248900,
                'description' => '通常の埋没法より固定力（強度）が強い、イセア独自の埋没法通常の埋没法より固定力（強度）が強イセア独自の埋没法通法通常のあ度）が強イセア独自の埋....',
                'risk' => '通常の埋没法より固定力（強度）が強い、イセア独自の埋没法。<< イセアの埋没法ダブル(５年保証)3つのポイント >>①完成後1ヶ月間二重幅変更無料!②何点留めでも一律料金！③術後５年間同一幅での再手術無料!通常の埋没法より固定力（強度）が強い、イセア独自の埋没法',
                'guarantee' => '通常の通常の埋没法より固定力（強度）が強い、イセア独自の埋没法。<< イセアの埋没法ダブル(５年保証)3つのポイント >><< イセアの埋没法ダブル(５年保証)3つのポイント >>①完成後1ヶ月間二重幅変更無料!
',
                'treat_time' => 5,
                'basshi' => 5,
                'hospital_visit' => 10,
                'hare' => 15,
                'pain' => 15,
                'bleeding' => 15,
                'hospital_need' => 15,
                'masui' => 15,
                'makeup' => 15,
                'shower' => 15,
                'massage' => 15,
                'sport_impossible' => 15,
                'photo' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/user/medias/nGYLON6968.png',
                'status' => 1,
                'created_at' => '2021-04-18 13:11:38',
                'updated_at' => '2021-04-18 13:11:38',
            ),
            5 =>
            array (
                'id' => 6,
                'clinic_id' => 1,
                'name' => '埋没法ダブル（５年保証付き）両目埋没法ダブル（５年保証付き）両目',
                'price' => 248900,
                'description' => '通常の埋没法より固定力（強度）が強い、イセア独自の埋没法通常の埋没法より固定力（強度）が強イセア独自の埋没法通法通常のあ度）が強イセア独自の埋....',
                'risk' => '通常の埋没法より固定力（強度）が強い、イセア独自の埋没法。<< イセアの埋没法ダブル(５年保証)3つのポイント >>①完成後1ヶ月間二重幅変更無料!②何点留めでも一律料金！③術後５年間同一幅での再手術無料!通常の埋没法より固定力（強度）が強い、イセア独自の埋没法',
                'guarantee' => '通常の通常の埋没法より固定力（強度）が強い、イセア独自の埋没法。<< イセアの埋没法ダブル(５年保証)3つのポイント >><< イセアの埋没法ダブル(５年保証)3つのポイント >>①完成後1ヶ月間二重幅変更無料!
',
                'treat_time' => 5,
                'basshi' => 5,
                'hospital_visit' => 10,
                'hare' => 15,
                'pain' => 15,
                'bleeding' => 15,
                'hospital_need' => 15,
                'masui' => 15,
                'makeup' => 15,
                'shower' => 15,
                'massage' => 15,
                'sport_impossible' => 15,
                'photo' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/user/medias/nGYLON6968.png',
                'status' => 1,
                'created_at' => '2021-04-18 13:11:38',
                'updated_at' => '2021-04-18 13:11:38',
            ),
        ));
    }
}
