<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Clinic;
use App\Models\PatientInfo;
use App\Models\Reservation;
use App\Models\RsvHopeTime;

class PatientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('users')->truncate();
        DB::table('patients')->truncate();
        DB::table('clinics')->truncate();
        DB::table('doctors')->truncate();
        // DB::table('patient_infos')->truncate();
        DB::table('reservations')->truncate();
        DB::table('rsv_hope_times')->truncate();

        $faker = \Faker\Factory::create('ja_JP');

        $clinic = User::create([
            'name' => 'クリニック１',
            'email' => 'clinic1@test.com',
            'password' => bcrypt('123123123'),
            'role' => 'clinic'
        ]);
        Clinic::where('id',1)->update([
            'name' => 'クリニック2',
            'city_id'=>22,
            'addr02'=>'addr02',
            'nearest_station'=>'渋谷駅、代官山駅',
            'site'=>'site',
            'access'=>'代官山駅から徒歩7-8分。',
            'phone_number'=>'033-1331-1333',
            'credit_card'=>'VISA ',
            'parking'=>'なし',
            'photo'=>'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/stuffs/thumbs/rPxjaP4537.png',

        ]);
        $doctor = User::create([
            'name' => '医師-1',
            'email' => 'doctor1@test.com',
            'password' => bcrypt('123123123'),
            'role' => 'doctor'
        ]);
        Doctor::where('id',1)->update([
            'clinic_id'=>1,
            'kata_name'=>'田中 仁',
            'hira_name'=>'田中 仁',
            'job_id'=>'3',
            'experience_year'=>'20',
            'spec0'=>'10',
            'spec1'=>'19',
            'spec2'=>'1',
            'profile'=>'2009年	群馬大学医学部医学科卒業
            2009年	(財)老年病研究所附属病院 脳神経外科 整形外科 麻酔科
            2011年	品川美容外科
            2014年	都内美容外科分院長
            2017年	もとび美容外科クリニック
            2018年	銀座TAクリニック
            2019年	高崎TAクリニックアソシエ 院長',
            'career'=>'日本美容外科学会(JSAS)
            日本美容皮膚科学会',
            'photo'=>'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/doctor/profile/thumbs/qKItkl1677.png',
        ]);
        $doctor = User::create([
            'name' => '医師-2',
            'email' => 'doctor2@test.com',
            'password' => bcrypt('123123123'),
            'role' => 'doctor'
        ]);
        Doctor::where('id',2)->update([
            'clinic_id'=>1,
            'kata_name'=>'田中 仁',
            'hira_name'=>'田中 仁',
            'job_id'=>'3',
            'experience_year'=>'20',
            'spec0'=>'10',
            'spec1'=>'19',
            'spec2'=>'1',
            'profile'=>'2009年	群馬大学医学部医学科卒業
            2009年	(財)老年病研究所附属病院 脳神経外科 整形外科 麻酔科
            2011年	品川美容外科
            2014年	都内美容外科分院長
            2017年	もとび美容外科クリニック
            2018年	銀座TAクリニック
            2019年	高崎TAクリニックアソシエ 院長',
            'career'=>'日本美容外科学会(JSAS)
            日本美容皮膚科学会',
            'photo'=>'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/stuffs/thumbs/ybdqMF4994.png',
        ]);
        $doctor = User::create([
            'name' => '医師-3',
            'email' => 'doctor3@test.com',
            'password' => bcrypt('123123123'),
            'role' => 'doctor'
        ]);
        Doctor::where('id',3)->update([
            'clinic_id'=>1,
            'kata_name'=>'田中 仁',
            'hira_name'=>'田中 仁',
            'job_id'=>'3',
            'experience_year'=>'20',
            'spec0'=>'10',
            'spec1'=>'19',
            'spec2'=>'1',
            'profile'=>'ふぁsdふぁsdfあsdふぁsdfあsdf',
            'career'=>'ふぁsdふぁsdfあsdふぁsdfあsdf',
            'photo'=>'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/stuffs/thumbs/Grlsqe9629.png',
        ]);
        for($i = 0; $i <= 10; $i++):
            $user = User::create([
                'name' => '患者_' . $i,
                'email' => 'patient_' . $i . '@test.com',
                'password' => bcrypt('123123123'),
                'role' => 'patient'
            ]);
        endfor;
        for($i = 0; $i <= 10; $i++):
            $patient = Patient::where('id',$i+1)->update([
                'name' => '患者_' . $i,
                'kana' => 'カンジャ_' . $i,
                'unique_id' => NULL,
                'nickname' => NULL,
                'intro' => NULL,
                'photo' => 'https://clinic-reservation.s3-ap-northeast-1.amazonaws.com/clinic/stuffs/thumbs/TSVOQS4996.jpg',
                'gender' => random_int(0, 1) == 1 ? 'female' : 'male',
                'phone_number' => $faker->e164PhoneNumber,
                'birthday' => $faker->date
            ]);
            // $patientInfo = $user->patient->info()->create([
            //     'name01' => $faker->firstName,
            //     'name02' => $faker->lastName,
            //     'kana01' => 'テスト',
            //     'kana02' => 'テスト',
            //     'birthday' => $faker->date,
            //     'gender' => random_int(0, 1) == 1 ? 'female' : 'male',
            //     'phone_number' => $faker->e164PhoneNumber,
            // ]);
            $reservation = Reservation::updated([
                'patient_id' => $i+1,
                'clinic_id' => 1,
                'status' => 5,
                // 'source' => random_int(0, 1) == 1 ? 5 : 10,
                'hope_treat' => random_int(0, 1),
                // 'is_visited' => random_int(0, 1),
                'note' => '質問が入ります。'
            ]);
            for ($j = 0; $j < 5; $j++) {
                RsvHopeTime::create([
                    'reservation_id' => $i+1,
                    'date' => $faker->date,
                    'start_time' => $faker->time('H:i:s', '23:59:59'),
                    'end_time' => $faker->time('H:i:s', '23:59:59'),
                ]);
            }
        endfor;
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
