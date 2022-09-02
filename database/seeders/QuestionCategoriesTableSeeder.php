<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class QuestionCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('question_categories')->delete();

        DB::table('question_categories')->insert(array (
            0 =>
            array (
                'id' => 1,
                'question_id' => 1,
                'category_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'question_id' => 2,
                'category_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'question_id' => 3,
                'category_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'question_id' => 1,
                'category_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'question_id' => 2,
                'category_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'question_id' => 3,
                'category_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));


    }
}
