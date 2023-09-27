<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class teacherseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teacher= ['Gary Cabrera', 'James Vance','Aliza Vance',
    'Averie Carter','James Vance','Aliza Vance'
    ];
    foreach($teacher as $tr){
        Teacher::create(['name'=>$tr]);
    }

    }
}
