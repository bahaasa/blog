<?php

use Illuminate\Database\Seeder;
use App\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <=3 ; $i++) { 
            for ($j=1; $j <=6 ; $j++) { 
               Course::create([

                'cat_id' =>$i,
                'trainer_id' =>rand(1,5),
                'name' => "course num $j cat num $j",
                'small_desc' =>'lorem lorm',
                'price' => rand(1000 ,5000),
                'desc' => "yarab yakrem yarb alalameen",
                'img' => "$i $j.png",
               ]);
            }
        }
    }
}
