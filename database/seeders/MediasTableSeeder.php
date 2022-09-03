<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MediasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('medias')->delete();

        DB::table('medias')->insert(array (
            0 =>
            array (
                'id' => 1,
                'mediable_type' => 'App\\Models\\Diary',
                'mediable_id' => 1,
                'type' => 0,
                'category' => NULL,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/after/thumbs/KFzxeM6217.jfif',
                'thumb_path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/after/thumbs/KFzxeM6217.jfif',
                'user_id' => 1,
                'created_at' => '2022-04-29 00:49:04',
                'updated_at' => '2022-05-09 01:17:45',
            ),
            1 =>
            array (
                'id' => 2,
                'mediable_type' => 'App\\Models\\Diary',
                'mediable_id' => 1,
                'type' => 1,
                'category' => NULL,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/before/thumbs/ZGEtmt7664.jpg',
                'thumb_path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/before/thumbs/ZGEtmt7664.jpg',
                'user_id' => 1,
                'created_at' => '2022-04-29 00:49:16',
                'updated_at' => '2022-04-29 00:51:01',
            ),
            2 =>
            array (
                'id' => 3,
                'mediable_type' => 'App\\Models\\Diary',
                'mediable_id' => 2,
                'type' => 0,
                'category' => NULL,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/after/thumbs/KFzxeM6217.jfif',
                'thumb_path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/after/thumbs/KFzxeM6217.jfif',
                'user_id' => 1,
                'created_at' => '2022-04-29 00:49:04',
                'updated_at' => '2022-05-09 01:17:45',
            ),
            3 =>
            array (
                'id' => 4,
                'mediable_type' => 'App\\Models\\Diary',
                'mediable_id' => 2,
                'type' => 1,
                'category' => NULL,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/before/thumbs/ZGEtmt7664.jpg',
                'thumb_path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/before/thumbs/ZGEtmt7664.jpg',
                'user_id' => 1,
                'created_at' => '2022-04-29 00:49:16',
                'updated_at' => '2022-04-29 00:51:01',
            ),
            4 =>
            array (
                'id' => 5,
                'mediable_type' => 'App\\Models\\CounselingReport',
                'mediable_id' => 3,
                'type' => 1,
                'category' => 'self',
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/jWDQUa1892.png',
                'thumb_path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/jWDQUa1892.png',
                'user_id' => 1,
                'created_at' => '2022-04-29 01:34:39',
                'updated_at' => '2022-04-29 01:36:28',
            ),
            5 =>
            array (
                'id' => 6,
                'mediable_type' => 'App\\Models\\CounselingReport',
                'mediable_id' => 3,
                'type' => 1,
                'category' => 'self',
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/after/thumbs/lGLOjh6166.png',
                'thumb_path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/after/thumbs/lGLOjh6166.png',
                'user_id' => 1,
                'created_at' => '2022-04-29 01:34:56',
                'updated_at' => '2022-04-29 01:39:54',
            ),
            6 =>
            array (
                'id' => 7,
                'mediable_type' => 'App\\Models\\CounselingReport',
                'mediable_id' => 3,
                'type' => 1,
                'category' => 'like',
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/before/thumbs/sbYnMG7453.png',
                'thumb_path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/before/thumbs/sbYnMG7453.png',
                'user_id' => 1,
                'created_at' => '2022-04-29 01:35:12',
                'updated_at' => '2022-04-29 01:36:28',
            ),
            7 =>
            array (
                'id' => 8,
                'mediable_type' => 'App\\Models\\CounselingReport',
                'mediable_id' => 3,
                'type' => 1,
                'category' => 'like',
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/after/thumbs/nwAKaK2799.png',
                'thumb_path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/after/thumbs/nwAKaK2799.png',
                'user_id' => 1,
                'created_at' => '2022-04-29 01:35:12',
                'updated_at' => '2022-04-29 01:36:28',
            ),
            8 =>
            array (
                'id' => 9,
                'mediable_type' => 'App\\Models\\CounselingReport',
                'mediable_id' => 2,
                'type' => 1,
                'category' => 'self',
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/jWDQUa1892.png',
                'thumb_path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/jWDQUa1892.png',
                'user_id' => 1,
                'created_at' => '2022-04-29 01:34:39',
                'updated_at' => '2022-04-29 01:36:28',
            ),
            9 =>
            array (
                'id' => 10,
                'mediable_type' => 'App\\Models\\CounselingReport',
                'mediable_id' => 2,
                'type' => 1,
                'category' => 'self',
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/after/thumbs/lGLOjh6166.png',
                'thumb_path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/after/thumbs/lGLOjh6166.png',
                'user_id' => 1,
                'created_at' => '2022-04-29 01:34:56',
                'updated_at' => '2022-04-29 01:39:54',
            ),
            10 =>
            array (
                'id' => 11,
                'mediable_type' => 'App\\Models\\CounselingReport',
                'mediable_id' => 2,
                'type' => 1,
                'category' => 'like',
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/before/thumbs/sbYnMG7453.png',
                'thumb_path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/before/thumbs/sbYnMG7453.png',
                'user_id' => 1,
                'created_at' => '2022-04-29 01:35:12',
                'updated_at' => '2022-04-29 01:36:28',
            ),
            11 =>
            array (
                'id' => 12,
                'mediable_type' => 'App\\Models\\CounselingReport',
                'mediable_id' => 2,
                'type' => 1,
                'category' => 'dislike',
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/after/thumbs/nwAKaK2799.png',
                'thumb_path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/after/thumbs/nwAKaK2799.png',
                'user_id' => 1,
                'created_at' => '2022-04-29 01:35:12',
                'updated_at' => '2022-04-29 01:36:28',
            ),
            12 =>
            array (
                'id' => 13,
                'mediable_type' => 'App\\Models\\CounselingReport',
                'mediable_id' => 3,
                'type' => 1,
                'category' => 'self',
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/jWDQUa1892.png',
                'thumb_path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/menus/thumbs/jWDQUa1892.png',
                'user_id' => 1,
                'created_at' => '2022-04-29 01:34:39',
                'updated_at' => '2022-04-29 01:36:28',
            ),
            13 =>
            array (
                'id' => 14,
                'mediable_type' => 'App\\Models\\CounselingReport',
                'mediable_id' => 3,
                'type' => 1,
                'category' => 'self',
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/after/thumbs/lGLOjh6166.png',
                'thumb_path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/after/thumbs/lGLOjh6166.png',
                'user_id' => 1,
                'created_at' => '2022-04-29 01:34:56',
                'updated_at' => '2022-04-29 01:39:54',
            ),
            14 =>
            array (
                'id' => 15,
                'mediable_type' => 'App\\Models\\CounselingReport',
                'mediable_id' => 3,
                'type' => 1,
                'category' => 'like',
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/before/thumbs/sbYnMG7453.png',
                'thumb_path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/before/thumbs/sbYnMG7453.png',
                'user_id' => 1,
                'created_at' => '2022-04-29 01:35:12',
                'updated_at' => '2022-04-29 01:36:28',
            ),
            15 =>
            array (
                'id' => 16,
                'mediable_type' => 'App\\Models\\CounselingReport',
                'mediable_id' => 3,
                'type' => 1,
                'category' => 'dislike',
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/after/thumbs/nwAKaK2799.png',
                'thumb_path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/after/thumbs/nwAKaK2799.png',
                'user_id' => 1,
                'created_at' => '2022-04-29 01:35:12',
                'updated_at' => '2022-04-29 01:36:28',
            ),
            16 =>
            array (
                'id' => 17,
                'mediable_type' => 'App\\Models\\Question',
                'mediable_id' => 1,
                'type' => 1,
                'category' => NULL,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/user/medias/nGYLON6968.png',
                'thumb_path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/user/medias/thumbs/nGYLON6968.png',
                'user_id' => 1,
                'created_at' => '2022-04-29 00:49:28',
                'updated_at' => '2022-04-29 00:51:01',
            ),
            17 =>
            array (
                'id' => 18,
                'mediable_type' => 'App\\Models\\Question',
                'mediable_id' => 2,
                'type' => 1,
                'category' => NULL,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/user/medias/nGYLON6968.png',
                'thumb_path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/user/medias/thumbs/nGYLON6968.png',
                'user_id' => 1,
                'created_at' => '2022-04-29 00:49:28',
                'updated_at' => '2022-04-29 00:51:01',
            ),
            18 =>
            array (
                'id' => 19,
                'mediable_type' => 'App\\Models\\Question',
                'mediable_id' =>3,
                'type' => 1,
                'category' => NULL,
                'path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/before/thumbs/hpOVJF5317.png',
                'thumb_path' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/cases/before/thumbs/hpOVJF5317.png',
                'user_id' => 1,
                'created_at' => '2022-04-29 00:49:28',
                'updated_at' => '2022-04-29 00:51:01',
            ),
        ));
    }
}
