<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DoctorImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('doctor_images')->delete();

        DB::table('doctor_images')->insert(array (
            0 =>
            array (
                'id' => 1,
                'doctor_id' => 1,
                'photo' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/doctor/cases/before/thumbs/gXzuxB1652.jpg',
                'created_at' => '2021-08-09 03:06:09',
                'updated_at' => '2021-08-09 03:06:09',
            ),
            1 =>
            array (
                'id' => 2,
                'doctor_id' => 1,
                'photo' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/doctor/cases/after/thumbs/OunmlI0065.jpg',
                'created_at' => '2021-08-09 03:06:09',
                'updated_at' => '2021-08-09 03:06:09',
            ),
            2 =>
            array (
                'id' => 3,
                'doctor_id' => 1,
                'photo' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/doctor/profile/thumbs/nsMmLk6130.png',
                'created_at' => '2022-08-21 21:30:51',
                'updated_at' => '2022-08-21 21:30:51',
            ),
            3 =>
            array (
                'id' => 4,
                'doctor_id' => 1,
                'photo' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/doctor/profile/thumbs/TCXdJH4416.png',
                'created_at' => '2022-08-21 21:30:51',
                'updated_at' => '2022-08-21 21:30:51',
            ),
            4 =>
            array (
                'id' => 5,
                'doctor_id' => 2,
                'photo' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/doctor/profile/thumbs/ZoDqNE3085.png',
                'created_at' => '2022-08-21 21:30:51',
                'updated_at' => '2022-08-21 21:30:51',
            ),
            5 =>
            array (
                'id' => 6,
                'doctor_id' => 2,
                'photo' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/doctor/profile/thumbs/KnUsJq2058.png',
                'created_at' => '2022-08-21 21:30:51',
                'updated_at' => '2022-08-21 21:30:51',
            ),
        ));


    }
}
