<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MasterTableSeeder::class);
        $this->call(PatientTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
        $this->call(UserMasterTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(PrefsTableSeeder::class);
        $this->call(TownsTable01Seeder::class);
        $this->call(CitiesTable01Seeder::class);
        $this->call(DayInfosTableSeeder::class);
        $this->call(MtbConcernCategoriesTableSeeder::class);
        $this->call(MtbPartCategoriesTableSeeder::class);
        $this->call(CasesTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(AttachmentsTableSeeder::class);
        $this->call(DoctorImagesTableSeeder::class);
        $this->call(DiariesTableSeeder::class);
        $this->call(CaseCategoriesTableSeeder::class);
        $this->call(CaseMenusTableSeeder::class);
        $this->call(CounselingReportsTableSeeder::class);
        $this->call(CounselingQuestionsTableSeeder::class);
        $this->call(CounselingCategoriesTableSeeder::class);
        $this->call(DiaryCategoriesTableSeeder::class);
        $this->call(DiaryMenuTableSeeder::class);
        $this->call(PatientCategoriesTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(QuestionCategoriesTableSeeder::class);
        $this->call(MediasTableSeeder::class);
        $this->call(DiaryTextQuestionsTableSeeder::class);
        $this->call(MenuCategoriesTableSeeder::class);
        $this->call(MenuCategoriesTableSeeder::class);
        $this->call(TreatProgressesTableSeeder::class);
        $this->call(TreatStatusTableSeeder::class);
        $this->call(DoctorCategoriesTableSeeder::class);
        $this->call(ClinicdoctorsrelationTableSeeder::class);
    }
}
