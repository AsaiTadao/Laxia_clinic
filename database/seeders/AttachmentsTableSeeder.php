<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class AttachmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('attachments')->delete();

        DB::table('attachments')->insert(array (
            0 =>
            array (
                'id' => 1,
                'attachable_type' => 'App\\Models\\TreatCase',
                'attachable_id' => 1,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/before/thumbs/vBdZTT2495.jfif',
                'img_type' => 0,
                'created_at' => '2022-06-01 18:46:18',
                'updated_at' => '2022-06-01 18:46:18',
            ),
            1 =>
            array (
                'id' => 2,
                'attachable_type' => 'App\\Models\\TreatCase',
                'attachable_id' => 1,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/after/thumbs/NtbezG3997.jfif',
                'img_type' => 1,
                'created_at' => '2022-06-01 18:46:18',
                'updated_at' => '2022-06-01 18:46:18',
            ),
            2 =>
            array (
                'id' => 3,
                'attachable_type' => 'App\\Models\\TreatCase',
                'attachable_id' => 1,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/before/thumbs/URZzEK6154.jfif',
                'img_type' => 0,
                'created_at' => '2022-06-01 19:02:02',
                'updated_at' => '2022-06-01 19:02:02',
            ),
            3 =>
            array (
                'id' => 4,
                'attachable_type' => 'App\\Models\\TreatCase',
                'attachable_id' => 1,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/after/thumbs/KFzxeM6217.jfif',
                'img_type' => 1,
                'created_at' => '2022-06-01 19:02:02',
                'updated_at' => '2022-06-01 19:02:02',
            ),
            4 =>
            array (
                'id' => 5,
                'attachable_type' => 'App\\Models\\TreatCase',
                'attachable_id' => 2,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/before/thumbs/hpOVJF5317.png',
                'img_type' => 0,
                'created_at' => '2022-08-20 22:32:42',
                'updated_at' => '2022-08-20 22:32:42',
            ),
            5 =>
            array (
                'id' => 6,
                'attachable_type' => 'App\\Models\\TreatCase',
                'attachable_id' => 2,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/before/thumbs/wrZtLG0928.png',
                'img_type' => 0,
                'created_at' => '2022-08-20 22:32:42',
                'updated_at' => '2022-08-20 22:32:42',
            ),
            6 =>
            array (
                'id' => 7,
                'attachable_type' => 'App\\Models\\TreatCase',
                'attachable_id' => 2,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/after/thumbs/DLXvKC8767.jpg',
                'img_type' => 1,
                'created_at' => '2022-08-20 22:32:42',
                'updated_at' => '2022-08-20 22:32:42',
            ),
            7 =>
            array (
                'id' => 8,
                'attachable_type' => 'App\\Models\\TreatCase',
                'attachable_id' => 2,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/before/thumbs/ZGEtmt7664.jpg',
                'img_type' => 0,
                'created_at' => '2022-08-20 22:33:54',
                'updated_at' => '2022-08-20 22:33:54',
            ),
            8 =>
            array (
                'id' => 9,
                'attachable_type' => 'App\\Models\\TreatCase',
                'attachable_id' => 3,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/after/thumbs/mVnkUb3150.jpg',
                'img_type' => 1,
                'created_at' => '2022-08-20 22:33:54',
                'updated_at' => '2022-08-20 22:33:54',
            ),
            9 =>
            array (
                'id' => 10,
                'attachable_type' => 'App\\Models\\TreatCase',
                'attachable_id' => 3,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/before/thumbs/CPyYuR1553.png',
                'img_type' => 0,
                'created_at' => '2022-08-20 22:50:54',
                'updated_at' => '2022-08-20 22:50:54',
            ),
            10 =>
            array (
                'id' => 11,
                'attachable_type' => 'App\\Models\\TreatCase',
                'attachable_id' => 3,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/after/thumbs/hNnXul1894.png',
                'img_type' => 1,
                'created_at' => '2022-08-20 22:50:54',
                'updated_at' => '2022-08-20 22:50:54',
            ),
            11 =>
            array (
                'id' => 12,
                'attachable_type' => 'App\\Models\\TreatCase',
                'attachable_id' => 3,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/before/thumbs/jzsCKk0505.jpg',
                'img_type' => 0,
                'created_at' => '2022-08-20 22:53:05',
                'updated_at' => '2022-08-20 22:53:05',
            ),
            12 =>
            array (
                'id' => 13,
                'attachable_type' => 'App\\Models\\TreatCase',
                'attachable_id' => 4,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/after/thumbs/pObjDj5672.png',
                'img_type' => 1,
                'created_at' => '2022-08-20 22:53:05',
                'updated_at' => '2022-08-20 22:53:05',
            ),
            13 =>
            array (
                'id' => 14,
                'attachable_type' => 'App\\Models\\TreatCase',
                'attachable_id' => 4,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/before/thumbs/FvTsNk6759.png',
                'img_type' => 0,
                'created_at' => '2022-08-20 22:55:45',
                'updated_at' => '2022-08-20 22:55:45',
            ),
            14 =>
            array (
                'id' => 15,
                'attachable_type' => 'App\\Models\\TreatCase',
                'attachable_id' => 4,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/after/thumbs/bZuzZo8771.png',
                'img_type' => 1,
                'created_at' => '2022-08-20 22:55:45',
                'updated_at' => '2022-08-20 22:55:45',
            ),
            15 =>
            array (
                'id' => 16,
                'attachable_type' => 'App\\Models\\Clinic',
                'attachable_id' => 1,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/ziEtgH1426.png',
                'img_type' => 0,
                'created_at' => '2022-08-20 23:53:47',
                'updated_at' => '2022-08-20 23:53:47',
            ),
            16 =>
            array (
                'id' => 17,
                'attachable_type' => 'App\\Models\\Clinic',
                'attachable_id' => 1,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/fxloyz0891.png',
                'img_type' => 0,
                'created_at' => '2022-08-20 23:53:47',
                'updated_at' => '2022-08-20 23:53:47',
            ),
            17 =>
            array (
                'id' => 18,
                'attachable_type' => 'App\\Models\\Menu',
                'attachable_id' => 1,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/uGeOxy7173.png',
                'img_type' => 0,
                'created_at' => '2022-08-20 23:58:11',
                'updated_at' => '2022-08-20 23:58:11',
            ),
            18 =>
            array (
                'id' => 19,
                'attachable_type' => 'App\\Models\\Menu',
                'attachable_id' => 1,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/nlbVHm2663.png',
                'img_type' => 0,
                'created_at' => '2022-08-20 23:59:25',
                'updated_at' => '2022-08-20 23:59:25',
            ),
            19 =>
            array (
                'id' => 20,
                'attachable_type' => 'App\\Models\\Menu',
                'attachable_id' => 1,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/jWDQUa1892.png',
                'img_type' => 0,
                'created_at' => '2022-08-21 00:01:15',
                'updated_at' => '2022-08-21 00:01:15',
            ),
            20 =>
            array (
                'id' => 22,
                'attachable_type' => 'App\\Models\\Menu',
                'attachable_id' => 2,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/Zcvlcv6947.png',
                'img_type' => 0,
                'created_at' => '2022-08-21 05:50:32',
                'updated_at' => '2022-08-21 05:50:32',
            ),
            21 =>
            array (
                'id' => 23,
                'attachable_type' => 'App\\Models\\Menu',
                'attachable_id' => 2,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/XJWcEV4944.png',
                'img_type' => 0,
                'created_at' => '2022-08-21 05:50:49',
                'updated_at' => '2022-08-21 05:50:49',
            ),
            22 =>
            array (
                'id' => 24,
                'attachable_type' => 'App\\Models\\Menu',
                'attachable_id' => 3,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/Htgysr9248.png',
                'img_type' => 0,
                'created_at' => '2022-08-21 05:51:05',
                'updated_at' => '2022-08-21 05:51:05',
            ),
            23 =>
            array (
                'id' => 25,
                'attachable_type' => 'App\\Models\\Menu',
                'attachable_id' => 3,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/DcJndx1720.png',
                'img_type' => 0,
                'created_at' => '2022-08-21 05:51:26',
                'updated_at' => '2022-08-21 05:51:26',
            ),
            24 =>
            array (
                'id' => 26,
                'attachable_type' => 'App\\Models\\Menu',
                'attachable_id' => 3,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/aGcmuB9464.png',
                'img_type' => 0,
                'created_at' => '2022-08-21 05:52:12',
                'updated_at' => '2022-08-21 05:52:12',
            ),
            25 =>
            array (
                'id' => 27,
                'attachable_type' => 'App\\Models\\Menu',
                'attachable_id' => 2,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/EdwRfa2137.png',
                'img_type' => 0,
                'created_at' => '2022-08-21 05:52:12',
                'updated_at' => '2022-08-21 05:52:12',
            ),
            26 =>
            array (
                'id' => 28,
                'attachable_type' => 'App\\Models\\Menu',
                'attachable_id' => 3,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/jigHNV5024.png',
                'img_type' => 0,
                'created_at' => '2022-08-21 05:52:59',
                'updated_at' => '2022-08-21 05:52:59',
            ),
            27 =>
            array (
                'id' => 29,
                'attachable_type' => 'App\\Models\\Menu',
                'attachable_id' => 4,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/ZSBnRC8846.png',
                'img_type' => 0,
                'created_at' => '2022-08-21 05:53:25',
                'updated_at' => '2022-08-21 05:53:25',
            ),
            28 =>
            array (
                'id' => 30,
                'attachable_type' => 'App\\Models\\Menu',
                'attachable_id' => 4,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/gQqECu5000.png',
                'img_type' => 0,
                'created_at' => '2022-08-21 05:54:11',
                'updated_at' => '2022-08-21 05:54:11',
            ),
            29 =>
            array (
                'id' => 31,
                'attachable_type' => 'App\\Models\\Menu',
                'attachable_id' => 4,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/yUJQWY8934.png',
                'img_type' => 0,
                'created_at' => '2022-08-21 05:54:34',
                'updated_at' => '2022-08-21 05:54:34',
            ),
            30 =>
            array (
                'id' => 32,
                'attachable_type' => 'App\\Models\\Menu',
                'attachable_id' => 4,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/tjjdBf1855.png',
                'img_type' => 0,
                'created_at' => '2022-08-21 05:54:47',
                'updated_at' => '2022-08-21 05:54:47',
            ),
            31 =>
            array (
                'id' => 33,
                'attachable_type' => 'App\\Models\\Menu',
                'attachable_id' => 4,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/kXSbwS2372.png',
                'img_type' => 0,
                'created_at' => '2022-08-21 05:54:59',
                'updated_at' => '2022-08-21 05:54:59',
            ),
            32 =>
            array (
                'id' => 34,
                'attachable_type' => 'App\\Models\\Menu',
                'attachable_id' => 2,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/XOFoYG8102.png',
                'img_type' => 0,
                'created_at' => '2022-08-21 05:55:11',
                'updated_at' => '2022-08-21 05:55:11',
            ),
            33 =>
            array (
                'id' => 35,
                'attachable_type' => 'App\\Models\\Menu',
                'attachable_id' => 3,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/AyhACf4638.png',
                'img_type' => 0,
                'created_at' => '2022-08-21 05:55:28',
                'updated_at' => '2022-08-21 05:55:28',
            ),
            34 =>
            array (
                'id' => 36,
                'attachable_type' => 'App\\Models\\Menu',
                'attachable_id' => 4,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/tJAGTP1522.png',
                'img_type' => 0,
                'created_at' => '2022-08-21 05:55:42',
                'updated_at' => '2022-08-21 05:55:42',
            ),
            35 =>
            array (
                'id' => 37,
                'attachable_type' => 'App\\Models\\Menu',
                'attachable_id' => 5,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/LbxIPw8792.png',
                'img_type' => 0,
                'created_at' => '2022-08-21 05:55:54',
                'updated_at' => '2022-08-21 05:55:54',
            ),
            36 =>
            array (
                'id' => 38,
                'attachable_type' => 'App\\Models\\Menu',
                'attachable_id' => 5,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/nmmgYg7371.png',
                'img_type' => 0,
                'created_at' => '2022-08-21 05:56:05',
                'updated_at' => '2022-08-21 05:56:05',
            ),
            37 =>
            array (
                'id' => 39,
                'attachable_type' => 'App\\Models\\Menu',
                'attachable_id' => 5,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/SlxjAB9610.png',
                'img_type' => 0,
                'created_at' => '2022-08-21 05:56:22',
                'updated_at' => '2022-08-21 05:56:22',
            ),
            38 =>
            array (
                'id' => 40,
                'attachable_type' => 'App\\Models\\Menu',
                'attachable_id' => 5,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/XSaglq9699.png',
                'img_type' => 0,
                'created_at' => '2022-08-21 05:56:39',
                'updated_at' => '2022-08-21 05:56:39',
            ),
            39 =>
            array (
                'id' => 41,
                'attachable_type' => 'App\\Models\\Menu',
                'attachable_id' => 6,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/NofvYm9825.png',
                'img_type' => 0,
                'created_at' => '2022-08-21 05:56:54',
                'updated_at' => '2022-08-21 05:56:54',
            ),
            40 =>
            array (
                'id' => 42,
                'attachable_type' => 'App\\Models\\Menu',
                'attachable_id' => 6,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/qaFzBV0864.png',
                'img_type' => 0,
                'created_at' => '2022-08-21 05:57:07',
                'updated_at' => '2022-08-21 05:57:07',
            ),
            41 =>
            array (
                'id' => 43,
                'attachable_type' => 'App\\Models\\Menu',
                'attachable_id' => 6,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/GwKihs2645.png',
                'img_type' => 0,
                'created_at' => '2022-08-21 05:57:18',
                'updated_at' => '2022-08-21 05:57:18',
            ),
            42 =>
            array (
                'id' => 44,
                'attachable_type' => 'App\\Models\\TreatCase',
                'attachable_id' => 4,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/before/thumbs/RXmkvj3373.png',
                'img_type' => 0,
                'created_at' => '2022-08-21 09:29:50',
                'updated_at' => '2022-08-21 09:29:50',
            ),
            43 =>
            array (
                'id' => 45,
                'attachable_type' => 'App\\Models\\TreatCase',
                'attachable_id' => 5,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/after/thumbs/dYRJEN0986.png',
                'img_type' => 1,
                'created_at' => '2022-08-21 09:29:50',
                'updated_at' => '2022-08-21 09:29:50',
            ),
            44 =>
            array (
                'id' => 46,
                'attachable_type' => 'App\\Models\\TreatCase',
                'attachable_id' => 5,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/before/thumbs/VQhZlB3540.png',
                'img_type' => 0,
                'created_at' => '2022-08-21 09:44:39',
                'updated_at' => '2022-08-21 09:44:39',
            ),
            45 =>
            array (
                'id' => 47,
                'attachable_type' => 'App\\Models\\TreatCase',
                'attachable_id' => 5,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/after/thumbs/qKVaWI7212.png',
                'img_type' => 1,
                'created_at' => '2022-08-21 09:44:39',
                'updated_at' => '2022-08-21 09:44:39',
            ),
            46 =>
            array (
                'id' => 49,
                'attachable_type' => 'App\\Models\\TreatCase',
                'attachable_id' => 5,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/before/thumbs/OpeZLf8418.png',
                'img_type' => 0,
                'created_at' => '2022-08-21 09:45:47',
                'updated_at' => '2022-08-21 09:45:47',
            ),
            47 =>
            array (
                'id' => 50,
                'attachable_type' => 'App\\Models\\TreatCase',
                'attachable_id' => 5,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/after/thumbs/YzHVoG4310.png',
                'img_type' => 1,
                'created_at' => '2022-08-21 09:45:47',
                'updated_at' => '2022-08-21 09:45:47',
            )
        ));
    }
}
