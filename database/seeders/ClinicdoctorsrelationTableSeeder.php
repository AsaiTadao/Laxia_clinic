<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class ClinicdoctorsrelationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clinic_doctors_relation')->delete();

        DB::table('clinic_doctors_relation')->insert(array (
            0 =>
            array (
                'id' => 1,
                'clinic_id' => 1,
                'doctor_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'clinic_id' => 1,
                'doctor_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'clinic_id' => 1,
                'doctor_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}
