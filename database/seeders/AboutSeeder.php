<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::updateOrCreate(['name'=>'Mohamed Agha'],[
            'description'=>'I am Mohamed Agha, an Informatics Engineer specializing in Software Engineering and Web Sciences, with experience in Laravel.',
            'job_title'=>'Seinor Back-End Developer',
            'email'=>'aghamouhamad2001@gmail.com',
            'phone'=>'00963941513319',
            'address'=>'Syria , Damascus',
            'age'=>'24',
            'degree'=>'bachelor\'s degree',
            
        ]);
    }
}
