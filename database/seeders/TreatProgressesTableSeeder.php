<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TreatProgressesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('treat_progresses')->delete();

        DB::table('treat_progresses')->insert(array (
            0 =>
            array (
                'id' => 1,
                'diary_id' => 1,
                'from_treat_day' => 150,
                'content' => '術後150日目になります。
                目頭切開も迷ったが、元々目が近いタイプだったので鷲鼻で鼻先が下に向いていたので、鼻尖形成に...',
                'created_at' => '2022-08-25 15:48:56',
                'updated_at' => '2022-08-25 19:42:07',
            ),
            1 =>
            array ( 
                'id' => 2,
                'diary_id' => 2,
                'from_treat_day' => 120,
                'content' => '術後120日目になります。
                目頭切開も迷ったが、元々目が近いタイプだったので鷲鼻で鼻先が下に向いていたので、鼻尖形成に...',
                'created_at' => '2022-08-25 19:47:48',
                'updated_at' => '2022-08-25 19:47:48',
            ),
        ));


    }
}
