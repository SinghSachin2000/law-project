<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Job_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jobs')->insert([
            [
                'name' => 'Legal Researcher - Judiciary Hindi',
                'location' => 'Dr. Mukherjee Nagar, Delhi',
                'experience' => 'Must have appeared at least 2 Mains of Judicial Services',
                'position' => 'Permanent / Contractual / Ad Hoc',
                'salary' => '15,000 - 18,000/-',
                'aboutus' => Str::limit("St. Peter's Law Academy is an institute specialized in judiciary and law entrance exam preparation. We aim at the overall development of students making sure they receive a quality education to help them become extraordinary judges and crack into the top law colleges. We are hiring for the above position.", 255),
                'requirements' => Str::limit("We are looking for professionals who can contribute with their knowledge and expertise in preparing material with respect to case laws and previous year patterns of Judicial Services.", 255),
            ],
            [
                'name' => 'Legal Researcher - Judiciary English',
                'location' => 'Dr. Mukherjee Nagar, Delhi',
                'experience' => 'Must have appeared at least 2 Mains of Judicial Services',
                'position' => 'Permanent / Contractual / Ad Hoc',
                'salary' => '15,000 - 18,000/-',
                'aboutus' => Str::limit("St. Peter's Law Academy is an institute specialized in judiciary and law entrance exam preparation. We aim at the overall development of students making sure they receive a quality education to help them become extraordinary judges and crack into the top law colleges. We are hiring for the above position.", 255),
                'requirements' => Str::limit("We are looking for professionals who can contribute with their knowledge and expertise in preparing material with respect to case laws and previous year patterns of Judicial Services.", 255),
            ],
            [
                'name' => 'Legal Researcher - Judiciary Telugu',
                'location' => 'Dr. Mukherjee Nagar, Delhi',
                'experience' => 'Must have appeared at least 2 Mains of Judicial Services',
                'position' => 'Permanent / Contractual / Ad Hoc',
                'salary' => '15,000 - 18,000/-',
                'aboutus' => Str::limit("St. Peter's Law Academy is an institute specialized in judiciary and law entrance exam preparation. We aim at the overall development of students making sure they receive a quality education to help them become extraordinary judges and crack into the top law colleges. We are hiring for the above position.", 255),
                'requirements' => Str::limit("We are looking for professionals who can contribute with their knowledge and expertise in preparing material with respect to case laws and previous year patterns of Judicial Services.", 255),
            ],
            [
                'name' => 'DTP OPERATOR',
                'location' => '632 First floor, Mukherjee Nagar, Delhi',
                'experience' => 'Minimum 2 Year',
                'position' => 'DTP OPERATOR',
                'salary' => '15-22K',
                'aboutus' => Str::limit("St. Peter's Law Academy is an institute specialized in judiciary and law entrance exam preparation. We aim at the overall development of students making sure they receive a quality education to help them become extraordinary judges and crack into the top law colleges. We are hiring for the above position.", 255),
                'requirements' => Str::limit("Responsibilities: Format books, magazines, and publications using Adobe InDesign Create graphics for print and digital media, including social media Maintain accuracy and attention to detail Stay current with design trends and software updates Qualifications: 2+ years experience as DTP Operator or similar role Proficient in Adobe Suite (InDesign, Photoshop, Illustrator) Excellent communication abilities Self-motivated with ability to meet deadlines Team player with positive attitude.", 255),
            ],
        ]);
    }
}
