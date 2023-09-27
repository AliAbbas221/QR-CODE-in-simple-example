<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class courseseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course= ['English','French','ICDL','Communication Skills'];
        foreach($course as $cs){
            Course::create(['name'=>$cs]);
        }
    }
}
