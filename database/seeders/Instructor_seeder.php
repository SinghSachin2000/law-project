<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Instructor_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("instructors")->insert([
            [
                'imgurl' => 'https://itcodetech.com/stpeterslaw/media/teachers_covers/5.png',
                'name' => 'Janardan Upadhyay',
                'description' => 'Criminal Law and Constitutional Law',
                'number' => null,
                'email' => 'teachers2@stpeterslaw.com',
                'address' => 'B-12, Dr. Mukherjee Nagar, Delhi',
                'facebookid' => null,
                'twitterid' => null,
                'instgramid' => null,
                'linkedinid' => null,
                'education' => json_encode([
                    [
                        'heading' => 'Educational Qualification-',
                        'description' => 'LL.B LL.M Ph.D'
                    ],
                    [
                        'heading' => 'Hobbies-',
                        'description' => 'Learning, Listening Music, Playing Cricket'
                    ],
                    [
                        'heading' => 'Role Model-',
                        'description' => 'Dr. APJ Abdul Kalam, Stephen Hawking'
                    ],
                    [
                        'heading' => 'Favourite Musician-',
                        'description' => 'Lata Mangeshkar, A.R. Rahman'
                    ],
                    [
                        'heading' => 'Mantra Of Life-',
                        'description' => 'Discipiline and Punctuality,Never give up, Expect nothing appreciate everything'
                    ],
                    [
                        'heading' => 'Favourite Movies-',
                        'description' => '3 Idiots, M.S. Dhoni'
                    ],
                ]),
            ],

            // ==========
            [
                'imgurl' => 'https://itcodetech.com/stpeterslaw/media/teachers_covers/3.png',
                'name' => 'Aditya Malik',
                'description' => 'Quantitative techniques and logical reasoning',
                'number' => null,
                'email' => 'teachers2@stpeterslaw.com',
                'address' => 'B-12, Dr. Mukherjee Nagar, Delhi',
                'facebookid' => null,
                'twitterid' => null,
                'instgramid' => null,
                'linkedinid' => null,
                'education' => json_encode([
                    [
                        'heading' => 'Educational Details -',
                        'description' => 'Bachelor In Law- Campus Law Centre, University Of Delhi Bachelor in Science- Ramjas College, University Of Delhi'
                    ],
                    [
                        'heading' => 'Hobbies-',
                        'description' => 'Community Involvement, Teaching, Reading short stories, Traveling, Doing sports.'
                    ],
                    [
                        'heading' => 'Role Model-',
                        'description' => 'Novak Djokovic, Roger Federer, Family members, Gagan Pratap sir, Osho.'
                    ],
                    [
                        'heading' => 'Favourite Musician-',
                        'description' => 'A.R rahmaan, Arjit Singh, Jagjit Singh.'
                    ],
                    [
                        'heading' => 'Mantra Of Life-',
                        'description' => 'Life is too short, half is gone half is left so make peace with your surroundings.'
                    ],
                    [
                        'heading' => 'Favourite Movies-',
                        'description' => 'Catch me if you can, Shawshank redemption, The silence of lamb, The perfume, The pianist.'
                    ],
                ]),
            ],
            // =========
            [
                'imgurl' => 'https://itcodetech.com/stpeterslaw/media/teachers_covers/2.png',
                'name' => 'Sumit Panwar',
                'description' => 'Criminal Law and Minor Law',
                'number' => null,
                'email' => 'teachers2@stpeterslaw.com',
                'address' => 'B-12, Dr. Mukherjee Nagar, Delhi',
                'facebookid' => null,
                'twitterid' => null,
                'instgramid' => null,
                'linkedinid' => null,
                'education' => null,
            ],

            // ======
            [
                'imgurl' => 'https://itcodetech.com/stpeterslaw/media/teachers_covers/awnish_sir_1.png',
                'name' => 'Awnish Tiwari',
                'description' => 'Civil law and Constitutional law',
                'number' => null,
                'email' => 'teachers2@stpeterslaw.com',
                'address' => 'B-12, Dr. Mukherjee Nagar, Delhi',
                'facebookid' => null,
                'twitterid' => null,
                'instgramid' => null,
                'linkedinid' => null,
                'education' => null,
            ],
            // =============
            [
                'imgurl' => 'https://itcodetech.com/stpeterslaw/media/teachers_covers/Prem_Sir.png',
                'name' => 'Prem Kumar',
                'description' => 'Legal Reasoning and General Knowledge',
                'number' => null,
                'email' => 'teachers2@stpeterslaw.com',
                'address' => 'B-12, Dr. Mukherjee Nagar, Delhi',
                'facebookid' => null,
                'twitterid' => null,
                'instgramid' => null,
                'linkedinid' => null,
                'education' => json_encode([
                    [
                        'heading' => 'Educational Qualification-',
                        'description' => 'Graduation(History) LLB( DU)'
                    ],
                    [
                        'heading' => 'Hobbies-',
                        'description' => 'Reading Story books/ Novels'
                    ],
                    [
                        'heading' => 'Role Model-',
                        'description' => 'Mother'
                    ],
                    [
                        'heading' => 'Favourite Musician-',
                        'description' => 'Kishore Kumar, MD. Rafi'
                    ],
                    [
                        'heading' => 'Mantra Of Life-',
                        'description' => 'If you want to become a judge, then think like a judge, talk like a judge, behave like a judge.'
                    ],
                    [
                        'heading' => 'Favourite Movies-',
                        'description' => 'Ek doctor ki maut'
                    ],
                ]),
            ],
            //==========
            [
                'imgurl' => 'https://itcodetech.com/stpeterslaw/media/teachers_covers/4.png',
                'name' => 'Sajid Aman Khan',
                'description' => 'English',
                'number' => null,
                'email' => 'teachers2@stpeterslaw.com',
                'address' => 'B-12, Dr. Mukherjee Nagar, Delhi',
                'facebookid' => null,
                'twitterid' => null,
                'instgramid' => null,
                'linkedinid' => null,
                'education' => json_encode([
                    [
                        'heading' => 'Educational Qualification-',
                        'description' => 'MBA [HR] -Sikkim Manipal University B.ED- (Maharshi Dayanand University, Rohtak)'
                    ],
                    [
                        'heading' => 'Hobbies-',
                        'description' => 'Teaching, Travelling and Interacting with people'
                    ],
                    [
                        'heading' => 'Role Model-',
                        'description' => 'A P J Abdul Kalam'
                    ],
                ]),
            ],

            // ==========
            [
                'imgurl' => 'https://itcodetech.com/stpeterslaw/media/teachers_covers/7.png',
                'name' => 'Manvendra Kr. Roy',
                'description' => 'General studies and Current affairs',
                'number' => null,
                'email' => 'teachers2@stpeterslaw.com',
                'address' => 'B-12, Dr. Mukherjee Nagar, Delhi',
                'facebookid' => null,
                'twitterid' => null,
                'instgramid' => null,
                'linkedinid' => null,
                'education' => json_encode([
                    [
                        'heading' => 'Educational Qualification-',
                        'description' => 'MCA-(Master In Computer Application)'
                    ],
                    [
                        'heading' => 'Hobbies-',
                        'description' => 'Listioning to music, Surfing creative thing on web'
                    ],
                    [
                        'heading' => 'Role Model-',
                        'description' => 'Vikas Divyakirti and Rohit Shetty'
                    ],
                    [
                        'heading' => 'Favourite Musician-',
                        'description' => 'A.R Rehman, Bhappi Lahri'
                    ],
                    [
                        'heading' => 'Mantra Of Life-',
                        'description' => 'Live each moment of life

'
                    ],
                    [
                        'heading' => 'Favourite Movies-',
                        'description' => '3Idiots,12thFail, Gardish, Satte pe Satta, Golmaal, Padosan'
                    ],
                ]),
            ],
            // =========
            [
                'imgurl' => 'https://itcodetech.com/stpeterslaw/media/teachers_covers/6.png',
                'name' => 'Ranjeet Acharya',
                'description' => 'Civil Law',
                'number' => null,
                'email' => 'teachers2@stpeterslaw.com',
                'address' => 'B-12, Dr. Mukherjee Nagar, Delhi',
                'facebookid' => null,
                'twitterid' => null,
                'instgramid' => null,
                'linkedinid' => null,
                'education' => json_encode([
                    [
                        'heading' => 'Educational Qualification-',
                        'description' => 'LL.B.'
                    ],
                    [
                        'heading' => 'Hobbies-',
                        'description' => 'Playing cricket'
                    ],
                    [
                        'heading' => 'Role Model-',
                        'description' => 'Dr APJ Abdul Kalam'
                    ],
                    [
                        'heading' => 'Favourite Musician-',
                        'description' => 'Sonu Nigam'
                    ],
                    [
                        'heading' => 'Mantra Of Life-',
                        'description' => 'Honesty'
                    ],
                    [
                        'heading' => 'Favourite Movies-',
                        'description' => 'M.S.Dhoni'
                    ],
                ]),
            ],

            // ======
            [
                'imgurl' => 'https://itcodetech.com/stpeterslaw/media/teachers_covers/SHIVANI_MAM.png',
                'name' => 'Shivani Chaudhary',
                'description' => 'Criminal Law',
                'number' => null,
                'email' => 'teachers2@stpeterslaw.com',
                'address' => 'B-12, Dr. Mukherjee Nagar, Delhi',
                'facebookid' => null,
                'twitterid' => null,
                'instgramid' => null,
                'linkedinid' => null,
                'education' => null,
            ],
            // =============
            [
                'imgurl' => 'https://itcodetech.com/stpeterslaw/media/teachers_covers/DHIRENDRA_SIR_1_1.png',
                'name' => 'Dhirendra',
                'description' => 'Constitutional Law and Criminal Law',
                'number' => null,
                'email' => 'teachers2@stpeterslaw.com',
                'address' => 'B-12, Dr. Mukherjee Nagar, Delhi',
                'facebookid' => null,
                'twitterid' => null,
                'instgramid' => null,
                'linkedinid' => null,
                'education' => null,
            ],
        ]);
    }
}
