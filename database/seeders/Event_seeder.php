<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Event_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("events")->insert([
            [
             "image"=>'https://www.chinarlawinstitute.com/wp-content/uploads/2023/04/Chinar-image-06-04-23.jpg',
             "heading"=>'Right Time To Start Preparation For Judiciary',
             "event_date"=>'2024-09-15',
             "location"=>"Delhi"
            ],
            [
                "image"=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSv3v5Q7bQy4JBKp6kIVbEVPOT-_E30auhYzg&s',
                "heading"=>'How To Prepare For CLAT',
                "event_date"=>'2024-09-30',
                "location"=>"Mumbai"
            ],
            [
                "image"=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRX3AANbFsoIsvLXQ8yVjQV21wOj21JMGygHg&s',
                "heading"=>'Why You Should Choose Law as an Career',
                "event_date"=>'2024-10-09',
                "location"=>"Rajisthan"
               ]
        ]);
    }
}
