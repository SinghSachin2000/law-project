<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Category_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("category")->insert([
            [
                "name" => 'Judiciary',
            ],
            [
                "name" => 'LLB',
            ],
            [
                "name"=> 'CLAT PG',
            ],
            [
                "name"=> 'CLAT UG',
            ],
            [
                "name"=> 'LAW Exams',
            ],
            [
                "name"=> 'CLAT',
            ],
            [
                "name"=> 'cuet',
            ],
            [
                "name"=> 'Judicial Exam',
            ],
            [
                "name"=> 'General',
            ],
            [
                "name"=> 'Pcsj',
            ],
        ]);
    }
}
