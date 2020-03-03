<?php

use Illuminate\Database\Seeder;

class TrainingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('trainings')->insert([
            'title'=>'Laravel Basics',
            'description'=>'Laravel Basics Course',
            'trainer'=>'Willie-Basics',
        ]);

        DB::table('trainings')->insert([
            'title'=>'Laravel Intermediate',
            'description'=>'Laravel Intermediate Course',
            'trainer'=>'Willie-Intermediate',
        ]);

        DB::table('trainings')->insert([
            'title'=>'Laravel Advanced',
            'description'=>'Laravel Advanced Course',
            'trainer'=>'Willie-Advanced',
        ]);
    }
}
