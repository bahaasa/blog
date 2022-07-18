<?php

use Illuminate\Database\Seeder;
use App\Trainer;
class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Trainer::create([
           'name'=>'kareem',
           'spec'=>'web',
           'img'=>'1.png'
       ]);

       Trainer::create([
        'name'=>'ali',
        'spec'=>'flutter',
        'img'=>'2.png'
    ]);
    Trainer::create([
        'name'=>'ali',
        'spec'=>'science',
        'img'=>'3.png'
    ]);
    Trainer::create([
        'name'=>'mohamed',
        'spec'=>'engerning',
        'img'=>'4.png'
    ]);
    Trainer::create([
        'name'=>'ahamed',
        'spec'=>'phsical',
        'img'=>'5.png'
    ]);
    }
}

