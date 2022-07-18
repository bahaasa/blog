<?php

use App\SiteContent;
use Illuminate\Database\Seeder;

class SiteContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//  SiteContent::create([
//      'name'=>'banner',
//      'content'=>json_encode([
//    'title'=>'ever student year',
//    'sub_title'=>'make child make your better',
//    'desc'=>"Set have great you male grass yielding an yielding first their you're have called the abundantly fruit were man",

//  ]),

//  ]);

SiteContent::create([
    'name'=>'courses',
    'content'=>json_encode([
  'title'=>'our courses bahaa',
  'sub_title'=>'defferent categories',
 
]),

]);





















    }
}
