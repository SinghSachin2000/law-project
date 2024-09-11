<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Blog_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blog')->insert([

            [
                'title' => 'Domestic Violence Act',
                'imgurl' => 'https://itcodetech.com/stpeterslaw/media/blog_covers/DOMESTIC.png',
                'author' => "St. Peter's Law Academy",
                'publish_date' => '2024-08-13',
                'content' => json_encode([
                    [
                        'main_heading' => 'Domestic Violence Act',
                        'sections' => [
                            [
                                'heading' => 'Domestic Violence in India',
                                'content' => 'The Domestic Violence Act (2005) protects women from various forms of abuse, including physical, sexual, emotional, and financial harm.',
                            ],
                            [
                                'heading' => 'Importance of the Act',
                                'content' => 'Provides protection, empowerment, and legal recognition for victims.',
                                'points' => ['Protection', 'Empowerment', 'Legal recognition'],
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Understanding Domestic Violence',
                        'sections' => [
                            [
                                'heading' => 'Definition and Forms',
                                'content' => 'The Act defines abuse as physical, sexual, economic, and emotional.',
                                'points' => ['Physical', 'Sexual', 'Economic', 'Emotional'],
                            ],
                            [
                                'heading' => 'Types of Abuse',
                                'points' => [
                                    'Sexual abuse: Violating dignity.',
                                    'Physical abuse: Endangering life.',
                                    'Emotional abuse: Humiliation.',
                                ]
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Historical Context',
                        'sections' => [
                            [
                                'heading' => 'Laws Evolution',
                                'content' => 'From the Indian Penal Code and Dowry Prohibition Act to the Domestic Violence Act (2005).',
                            ],
                            [
                                'heading' => 'Landmark Cases',
                                'content' => 'Cases have reinforced protections for women.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Key Provisions',
                        'sections' => [
                            [
                                'heading' => 'Overview',
                                'content' => 'Provides immediate relief and recognizes multiple types of abuse.',
                            ],
                            [
                                'heading' => 'Rights and Protections',
                                'content' => 'Ensures safety and dignity.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Legal Procedures',
                        'sections' => [
                            [
                                'heading' => 'Filing a Complaint',
                                'points' => [
                                    'Prepare report',
                                    'File complaint',
                                    'Submit evidence',
                                    'Magistrate hearing',
                                    'Orders',
                                    'Follow-up',
                                ]
                            ],
                            [
                                'heading' => 'Protection Orders',
                                'content' => 'Provides safety and support for victims.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Challenges',
                        'sections' => [
                            [
                                'heading' => 'Implementation Issues',
                                'content' => 'Challenges include lack of awareness and social stigma.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Role of Legal Professionals',
                        'sections' => [
                            [
                                'heading' => 'Support and Awareness',
                                'content' => 'Legal professionals advocate for victims and raise legal awareness.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Recent Developments',
                        'sections' => [
                            [
                                'heading' => 'Amendments and Impact',
                                'content' => 'Recent changes improve protection for widows and children.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'FAQs',
                        'sections' => [
                            [
                                'heading' => 'What is Domestic Violence?',
                                'content' => 'Includes physical, sexual, emotional, and financial abuse.',
                            ],
                            [
                                'heading' => 'How to Seek Protection?',
                                'points' => [
                                    'File complaint',
                                    'Role of protection officer',
                                    'Legal proceedings',
                                    'Support services',
                                    'Public involvement',
                                ]
                            ]
                        ]
                    ]
                ]),
                'conclusion' => 'The Act provides essential protection against various forms of abuse, offering measures to safeguard victims.',
                'category' => 'General',
            ],

            //============
            [
                'title' => 'Challenges In Judiciary Exam Preparation',
                'imgurl' => 'https://itcodetech.com/stpeterslaw/media/blog_covers/Screenshot_2024-08-07_130111.png',
                'author' => "St. Peter's Law Academy",
                'publish_date' => '2024-08-13',
                'content' => json_encode([
                    [
                        'main_heading' => 'Domestic Violence Act',
                        'sections' => [
                            [
                                'heading' => 'Domestic Violence in India',
                                'content' => 'The Domestic Violence Act (2005) protects women from various forms of abuse, including physical, sexual, emotional, and financial harm.',
                            ],
                            [
                                'heading' => 'Importance of the Act',
                                'content' => 'Provides protection, empowerment, and legal recognition for victims.',
                                'points' => ['Protection', 'Empowerment', 'Legal recognition'],
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Understanding Domestic Violence',
                        'sections' => [
                            [
                                'heading' => 'Definition and Forms',
                                'content' => 'The Act defines abuse as physical, sexual, economic, and emotional.',
                                'points' => ['Physical', 'Sexual', 'Economic', 'Emotional'],
                            ],
                            [
                                'heading' => 'Types of Abuse',
                                'points' => [
                                    'Sexual abuse: Violating dignity.',
                                    'Physical abuse: Endangering life.',
                                    'Emotional abuse: Humiliation.',
                                ]
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Historical Context',
                        'sections' => [
                            [
                                'heading' => 'Laws Evolution',
                                'content' => 'From the Indian Penal Code and Dowry Prohibition Act to the Domestic Violence Act (2005).',
                            ],
                            [
                                'heading' => 'Landmark Cases',
                                'content' => 'Cases have reinforced protections for women.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Key Provisions',
                        'sections' => [
                            [
                                'heading' => 'Overview',
                                'content' => 'Provides immediate relief and recognizes multiple types of abuse.',
                            ],
                            [
                                'heading' => 'Rights and Protections',
                                'content' => 'Ensures safety and dignity.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Legal Procedures',
                        'sections' => [
                            [
                                'heading' => 'Filing a Complaint',
                                'points' => [
                                    'Prepare report',
                                    'File complaint',
                                    'Submit evidence',
                                    'Magistrate hearing',
                                    'Orders',
                                    'Follow-up',
                                ]
                            ],
                            [
                                'heading' => 'Protection Orders',
                                'content' => 'Provides safety and support for victims.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Challenges',
                        'sections' => [
                            [
                                'heading' => 'Implementation Issues',
                                'content' => 'Challenges include lack of awareness and social stigma.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Role of Legal Professionals',
                        'sections' => [
                            [
                                'heading' => 'Support and Awareness',
                                'content' => 'Legal professionals advocate for victims and raise legal awareness.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Recent Developments',
                        'sections' => [
                            [
                                'heading' => 'Amendments and Impact',
                                'content' => 'Recent changes improve protection for widows and children.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'FAQs',
                        'sections' => [
                            [
                                'heading' => 'What is Domestic Violence?',
                                'content' => 'Includes physical, sexual, emotional, and financial abuse.',
                            ],
                            [
                                'heading' => 'How to Seek Protection?',
                                'points' => [
                                    'File complaint',
                                    'Role of protection officer',
                                    'Legal proceedings',
                                    'Support services',
                                    'Public involvement',
                                ]
                            ]
                        ]
                    ]
                ]),
                'conclusion' => 'The Act provides essential protection against various forms of abuse, offering measures to safeguard victims.',
                'category' => 'Judiciary',
            ]
            ,

            //============
            [
                'title' => 'Difference Between B.A L.L.B. and B.B.A L.L.B. : Which Path to Choose?',
                'imgurl' => 'https://itcodetech.com/stpeterslaw/media/blog_covers/BALLB_OoBXyaZ.jpg',
                'author' => "St. Peter's Law Academy",
                'publish_date' => '2024-08-13',
                'content' => json_encode([
                    [
                        'main_heading' => 'Domestic Violence Act',
                        'sections' => [
                            [
                                'heading' => 'Domestic Violence in India',
                                'content' => 'The Domestic Violence Act (2005) protects women from various forms of abuse, including physical, sexual, emotional, and financial harm.',
                            ],
                            [
                                'heading' => 'Importance of the Act',
                                'content' => 'Provides protection, empowerment, and legal recognition for victims.',
                                'points' => ['Protection', 'Empowerment', 'Legal recognition'],
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Understanding Domestic Violence',
                        'sections' => [
                            [
                                'heading' => 'Definition and Forms',
                                'content' => 'The Act defines abuse as physical, sexual, economic, and emotional.',
                                'points' => ['Physical', 'Sexual', 'Economic', 'Emotional'],
                            ],
                            [
                                'heading' => 'Types of Abuse',
                                'points' => [
                                    'Sexual abuse: Violating dignity.',
                                    'Physical abuse: Endangering life.',
                                    'Emotional abuse: Humiliation.',
                                ]
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Historical Context',
                        'sections' => [
                            [
                                'heading' => 'Laws Evolution',
                                'content' => 'From the Indian Penal Code and Dowry Prohibition Act to the Domestic Violence Act (2005).',
                            ],
                            [
                                'heading' => 'Landmark Cases',
                                'content' => 'Cases have reinforced protections for women.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Key Provisions',
                        'sections' => [
                            [
                                'heading' => 'Overview',
                                'content' => 'Provides immediate relief and recognizes multiple types of abuse.',
                            ],
                            [
                                'heading' => 'Rights and Protections',
                                'content' => 'Ensures safety and dignity.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Legal Procedures',
                        'sections' => [
                            [
                                'heading' => 'Filing a Complaint',
                                'points' => [
                                    'Prepare report',
                                    'File complaint',
                                    'Submit evidence',
                                    'Magistrate hearing',
                                    'Orders',
                                    'Follow-up',
                                ]
                            ],
                            [
                                'heading' => 'Protection Orders',
                                'content' => 'Provides safety and support for victims.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Challenges',
                        'sections' => [
                            [
                                'heading' => 'Implementation Issues',
                                'content' => 'Challenges include lack of awareness and social stigma.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Role of Legal Professionals',
                        'sections' => [
                            [
                                'heading' => 'Support and Awareness',
                                'content' => 'Legal professionals advocate for victims and raise legal awareness.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Recent Developments',
                        'sections' => [
                            [
                                'heading' => 'Amendments and Impact',
                                'content' => 'Recent changes improve protection for widows and children.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'FAQs',
                        'sections' => [
                            [
                                'heading' => 'What is Domestic Violence?',
                                'content' => 'Includes physical, sexual, emotional, and financial abuse.',
                            ],
                            [
                                'heading' => 'How to Seek Protection?',
                                'points' => [
                                    'File complaint',
                                    'Role of protection officer',
                                    'Legal proceedings',
                                    'Support services',
                                    'Public involvement',
                                ]
                            ]
                        ]
                    ]
                ]),
                'conclusion' => 'The Act provides essential protection against various forms of abuse, offering measures to safeguard victims.',
                'category' => 'LLB',
            ]
            ,

            //==========
            [
                'title' => 'Best CLAT PG Coaching',
                'imgurl' => 'https://itcodetech.com/stpeterslaw/media/blog_covers/Best_CLAT_PG_Coaching_by_stpeterslaw.png',
                'author' => "St. Peter's Law Academy",
                'publish_date' => '2024-08-13',
                'content' => json_encode([
                    [
                        'main_heading' => 'Domestic Violence Act',
                        'sections' => [
                            [
                                'heading' => 'Domestic Violence in India',
                                'content' => 'The Domestic Violence Act (2005) protects women from various forms of abuse, including physical, sexual, emotional, and financial harm.',
                            ],
                            [
                                'heading' => 'Importance of the Act',
                                'content' => 'Provides protection, empowerment, and legal recognition for victims.',
                                'points' => ['Protection', 'Empowerment', 'Legal recognition'],
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Understanding Domestic Violence',
                        'sections' => [
                            [
                                'heading' => 'Definition and Forms',
                                'content' => 'The Act defines abuse as physical, sexual, economic, and emotional.',
                                'points' => ['Physical', 'Sexual', 'Economic', 'Emotional'],
                            ],
                            [
                                'heading' => 'Types of Abuse',
                                'points' => [
                                    'Sexual abuse: Violating dignity.',
                                    'Physical abuse: Endangering life.',
                                    'Emotional abuse: Humiliation.',
                                ]
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Historical Context',
                        'sections' => [
                            [
                                'heading' => 'Laws Evolution',
                                'content' => 'From the Indian Penal Code and Dowry Prohibition Act to the Domestic Violence Act (2005).',
                            ],
                            [
                                'heading' => 'Landmark Cases',
                                'content' => 'Cases have reinforced protections for women.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Key Provisions',
                        'sections' => [
                            [
                                'heading' => 'Overview',
                                'content' => 'Provides immediate relief and recognizes multiple types of abuse.',
                            ],
                            [
                                'heading' => 'Rights and Protections',
                                'content' => 'Ensures safety and dignity.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Legal Procedures',
                        'sections' => [
                            [
                                'heading' => 'Filing a Complaint',
                                'points' => [
                                    'Prepare report',
                                    'File complaint',
                                    'Submit evidence',
                                    'Magistrate hearing',
                                    'Orders',
                                    'Follow-up',
                                ]
                            ],
                            [
                                'heading' => 'Protection Orders',
                                'content' => 'Provides safety and support for victims.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Challenges',
                        'sections' => [
                            [
                                'heading' => 'Implementation Issues',
                                'content' => 'Challenges include lack of awareness and social stigma.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Role of Legal Professionals',
                        'sections' => [
                            [
                                'heading' => 'Support and Awareness',
                                'content' => 'Legal professionals advocate for victims and raise legal awareness.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Recent Developments',
                        'sections' => [
                            [
                                'heading' => 'Amendments and Impact',
                                'content' => 'Recent changes improve protection for widows and children.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'FAQs',
                        'sections' => [
                            [
                                'heading' => 'What is Domestic Violence?',
                                'content' => 'Includes physical, sexual, emotional, and financial abuse.',
                            ],
                            [
                                'heading' => 'How to Seek Protection?',
                                'points' => [
                                    'File complaint',
                                    'Role of protection officer',
                                    'Legal proceedings',
                                    'Support services',
                                    'Public involvement',
                                ]
                            ]
                        ]
                    ]
                ]),
                'conclusion' => 'The Act provides essential protection against various forms of abuse, offering measures to safeguard victims.',
                'category' => 'CLAT PG',
            ]
            ,
            //===========
            [
                'title' => 'Semester Wise Law (LLB Syllabus Semester Wise)',
                'imgurl' => 'https://itcodetech.com/stpeterslaw/media/blog_covers/semsester_wise_law_llb_syllabus.png',
                'author' => "St. Peter's Law Academy",
                'publish_date' => '2024-08-13',
                'content' => json_encode([
                    [
                        'main_heading' => 'Domestic Violence Act',
                        'sections' => [
                            [
                                'heading' => 'Domestic Violence in India',
                                'content' => 'The Domestic Violence Act (2005) protects women from various forms of abuse, including physical, sexual, emotional, and financial harm.',
                            ],
                            [
                                'heading' => 'Importance of the Act',
                                'content' => 'Provides protection, empowerment, and legal recognition for victims.',
                                'points' => ['Protection', 'Empowerment', 'Legal recognition'],
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Understanding Domestic Violence',
                        'sections' => [
                            [
                                'heading' => 'Definition and Forms',
                                'content' => 'The Act defines abuse as physical, sexual, economic, and emotional.',
                                'points' => ['Physical', 'Sexual', 'Economic', 'Emotional'],
                            ],
                            [
                                'heading' => 'Types of Abuse',
                                'points' => [
                                    'Sexual abuse: Violating dignity.',
                                    'Physical abuse: Endangering life.',
                                    'Emotional abuse: Humiliation.',
                                ]
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Historical Context',
                        'sections' => [
                            [
                                'heading' => 'Laws Evolution',
                                'content' => 'From the Indian Penal Code and Dowry Prohibition Act to the Domestic Violence Act (2005).',
                            ],
                            [
                                'heading' => 'Landmark Cases',
                                'content' => 'Cases have reinforced protections for women.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Key Provisions',
                        'sections' => [
                            [
                                'heading' => 'Overview',
                                'content' => 'Provides immediate relief and recognizes multiple types of abuse.',
                            ],
                            [
                                'heading' => 'Rights and Protections',
                                'content' => 'Ensures safety and dignity.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Legal Procedures',
                        'sections' => [
                            [
                                'heading' => 'Filing a Complaint',
                                'points' => [
                                    'Prepare report',
                                    'File complaint',
                                    'Submit evidence',
                                    'Magistrate hearing',
                                    'Orders',
                                    'Follow-up',
                                ]
                            ],
                            [
                                'heading' => 'Protection Orders',
                                'content' => 'Provides safety and support for victims.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Challenges',
                        'sections' => [
                            [
                                'heading' => 'Implementation Issues',
                                'content' => 'Challenges include lack of awareness and social stigma.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Role of Legal Professionals',
                        'sections' => [
                            [
                                'heading' => 'Support and Awareness',
                                'content' => 'Legal professionals advocate for victims and raise legal awareness.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Recent Developments',
                        'sections' => [
                            [
                                'heading' => 'Amendments and Impact',
                                'content' => 'Recent changes improve protection for widows and children.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'FAQs',
                        'sections' => [
                            [
                                'heading' => 'What is Domestic Violence?',
                                'content' => 'Includes physical, sexual, emotional, and financial abuse.',
                            ],
                            [
                                'heading' => 'How to Seek Protection?',
                                'points' => [
                                    'File complaint',
                                    'Role of protection officer',
                                    'Legal proceedings',
                                    'Support services',
                                    'Public involvement',
                                ]
                            ]
                        ]
                    ]
                ]),
                'conclusion' => 'The Act provides essential protection against various forms of abuse, offering measures to safeguard victims.',
                'category' => 'Law Exams',
            ],
            
            //=============
            [
                'title' => 'CLAT- History',
                'imgurl' => 'https://itcodetech.com/stpeterslaw/media/blog_covers/History_Of.png',
                'author' => "St. Peter's Law Academy",
                'publish_date' => '2024-08-13',
                'content' => json_encode([
                    [
                        'main_heading' => 'Domestic Violence Act',
                        'sections' => [
                            [
                                'heading' => 'Domestic Violence in India',
                                'content' => 'The Domestic Violence Act (2005) protects women from various forms of abuse, including physical, sexual, emotional, and financial harm.',
                            ],
                            [
                                'heading' => 'Importance of the Act',
                                'content' => 'Provides protection, empowerment, and legal recognition for victims.',
                                'points' => ['Protection', 'Empowerment', 'Legal recognition'],
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Understanding Domestic Violence',
                        'sections' => [
                            [
                                'heading' => 'Definition and Forms',
                                'content' => 'The Act defines abuse as physical, sexual, economic, and emotional.',
                                'points' => ['Physical', 'Sexual', 'Economic', 'Emotional'],
                            ],
                            [
                                'heading' => 'Types of Abuse',
                                'points' => [
                                    'Sexual abuse: Violating dignity.',
                                    'Physical abuse: Endangering life.',
                                    'Emotional abuse: Humiliation.',
                                ]
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Historical Context',
                        'sections' => [
                            [
                                'heading' => 'Laws Evolution',
                                'content' => 'From the Indian Penal Code and Dowry Prohibition Act to the Domestic Violence Act (2005).',
                            ],
                            [
                                'heading' => 'Landmark Cases',
                                'content' => 'Cases have reinforced protections for women.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Key Provisions',
                        'sections' => [
                            [
                                'heading' => 'Overview',
                                'content' => 'Provides immediate relief and recognizes multiple types of abuse.',
                            ],
                            [
                                'heading' => 'Rights and Protections',
                                'content' => 'Ensures safety and dignity.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Legal Procedures',
                        'sections' => [
                            [
                                'heading' => 'Filing a Complaint',
                                'points' => [
                                    'Prepare report',
                                    'File complaint',
                                    'Submit evidence',
                                    'Magistrate hearing',
                                    'Orders',
                                    'Follow-up',
                                ]
                            ],
                            [
                                'heading' => 'Protection Orders',
                                'content' => 'Provides safety and support for victims.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Challenges',
                        'sections' => [
                            [
                                'heading' => 'Implementation Issues',
                                'content' => 'Challenges include lack of awareness and social stigma.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Role of Legal Professionals',
                        'sections' => [
                            [
                                'heading' => 'Support and Awareness',
                                'content' => 'Legal professionals advocate for victims and raise legal awareness.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Recent Developments',
                        'sections' => [
                            [
                                'heading' => 'Amendments and Impact',
                                'content' => 'Recent changes improve protection for widows and children.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'FAQs',
                        'sections' => [
                            [
                                'heading' => 'What is Domestic Violence?',
                                'content' => 'Includes physical, sexual, emotional, and financial abuse.',
                            ],
                            [
                                'heading' => 'How to Seek Protection?',
                                'points' => [
                                    'File complaint',
                                    'Role of protection officer',
                                    'Legal proceedings',
                                    'Support services',
                                    'Public involvement',
                                ]
                            ]
                        ]
                    ]
                ]),
                'conclusion' => 'The Act provides essential protection against various forms of abuse, offering measures to safeguard victims.',
                'category' => 'CLAT',
            ],
            //=========
            [
                'title' => 'Best DU LLB Coaching In Delhi',
                'imgurl' => 'https://itcodetech.com/stpeterslaw/media/blog_covers/best_du_llb_coaching_in_delhi.png',
                'author' => "St. Peter's Law Academy",
                'publish_date' => '2024-08-13',
                'content' => json_encode([
                    [
                        'main_heading' => 'Domestic Violence Act',
                        'sections' => [
                            [
                                'heading' => 'Domestic Violence in India',
                                'content' => 'The Domestic Violence Act (2005) protects women from various forms of abuse, including physical, sexual, emotional, and financial harm.',
                            ],
                            [
                                'heading' => 'Importance of the Act',
                                'content' => 'Provides protection, empowerment, and legal recognition for victims.',
                                'points' => ['Protection', 'Empowerment', 'Legal recognition'],
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Understanding Domestic Violence',
                        'sections' => [
                            [
                                'heading' => 'Definition and Forms',
                                'content' => 'The Act defines abuse as physical, sexual, economic, and emotional.',
                                'points' => ['Physical', 'Sexual', 'Economic', 'Emotional'],
                            ],
                            [
                                'heading' => 'Types of Abuse',
                                'points' => [
                                    'Sexual abuse: Violating dignity.',
                                    'Physical abuse: Endangering life.',
                                    'Emotional abuse: Humiliation.',
                                ]
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Historical Context',
                        'sections' => [
                            [
                                'heading' => 'Laws Evolution',
                                'content' => 'From the Indian Penal Code and Dowry Prohibition Act to the Domestic Violence Act (2005).',
                            ],
                            [
                                'heading' => 'Landmark Cases',
                                'content' => 'Cases have reinforced protections for women.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Key Provisions',
                        'sections' => [
                            [
                                'heading' => 'Overview',
                                'content' => 'Provides immediate relief and recognizes multiple types of abuse.',
                            ],
                            [
                                'heading' => 'Rights and Protections',
                                'content' => 'Ensures safety and dignity.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Legal Procedures',
                        'sections' => [
                            [
                                'heading' => 'Filing a Complaint',
                                'points' => [
                                    'Prepare report',
                                    'File complaint',
                                    'Submit evidence',
                                    'Magistrate hearing',
                                    'Orders',
                                    'Follow-up',
                                ]
                            ],
                            [
                                'heading' => 'Protection Orders',
                                'content' => 'Provides safety and support for victims.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Challenges',
                        'sections' => [
                            [
                                'heading' => 'Implementation Issues',
                                'content' => 'Challenges include lack of awareness and social stigma.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Role of Legal Professionals',
                        'sections' => [
                            [
                                'heading' => 'Support and Awareness',
                                'content' => 'Legal professionals advocate for victims and raise legal awareness.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Recent Developments',
                        'sections' => [
                            [
                                'heading' => 'Amendments and Impact',
                                'content' => 'Recent changes improve protection for widows and children.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'FAQs',
                        'sections' => [
                            [
                                'heading' => 'What is Domestic Violence?',
                                'content' => 'Includes physical, sexual, emotional, and financial abuse.',
                            ],
                            [
                                'heading' => 'How to Seek Protection?',
                                'points' => [
                                    'File complaint',
                                    'Role of protection officer',
                                    'Legal proceedings',
                                    'Support services',
                                    'Public involvement',
                                ]
                            ]
                        ]
                    ]
                ]),
                'conclusion' => 'The Act provides essential protection against various forms of abuse, offering measures to safeguard victims.',
                'category' => 'cuet',
            ],

            //=========
            [
                'title' => 'How To Prepare For UP Judiciary Exam',
                'imgurl' => 'https://itcodetech.com/stpeterslaw/media/blog_covers/up_judiciary_exam_complete_guide.png',
                'author' => "St. Peter's Law Academy",
                'publish_date' => '2024-08-13',
                'content' => json_encode([
                    [
                        'main_heading' => 'Domestic Violence Act',
                        'sections' => [
                            [
                                'heading' => 'Domestic Violence in India',
                                'content' => 'The Domestic Violence Act (2005) protects women from various forms of abuse, including physical, sexual, emotional, and financial harm.',
                            ],
                            [
                                'heading' => 'Importance of the Act',
                                'content' => 'Provides protection, empowerment, and legal recognition for victims.',
                                'points' => ['Protection', 'Empowerment', 'Legal recognition'],
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Understanding Domestic Violence',
                        'sections' => [
                            [
                                'heading' => 'Definition and Forms',
                                'content' => 'The Act defines abuse as physical, sexual, economic, and emotional.',
                                'points' => ['Physical', 'Sexual', 'Economic', 'Emotional'],
                            ],
                            [
                                'heading' => 'Types of Abuse',
                                'points' => [
                                    'Sexual abuse: Violating dignity.',
                                    'Physical abuse: Endangering life.',
                                    'Emotional abuse: Humiliation.',
                                ]
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Historical Context',
                        'sections' => [
                            [
                                'heading' => 'Laws Evolution',
                                'content' => 'From the Indian Penal Code and Dowry Prohibition Act to the Domestic Violence Act (2005).',
                            ],
                            [
                                'heading' => 'Landmark Cases',
                                'content' => 'Cases have reinforced protections for women.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Key Provisions',
                        'sections' => [
                            [
                                'heading' => 'Overview',
                                'content' => 'Provides immediate relief and recognizes multiple types of abuse.',
                            ],
                            [
                                'heading' => 'Rights and Protections',
                                'content' => 'Ensures safety and dignity.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Legal Procedures',
                        'sections' => [
                            [
                                'heading' => 'Filing a Complaint',
                                'points' => [
                                    'Prepare report',
                                    'File complaint',
                                    'Submit evidence',
                                    'Magistrate hearing',
                                    'Orders',
                                    'Follow-up',
                                ]
                            ],
                            [
                                'heading' => 'Protection Orders',
                                'content' => 'Provides safety and support for victims.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Challenges',
                        'sections' => [
                            [
                                'heading' => 'Implementation Issues',
                                'content' => 'Challenges include lack of awareness and social stigma.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Role of Legal Professionals',
                        'sections' => [
                            [
                                'heading' => 'Support and Awareness',
                                'content' => 'Legal professionals advocate for victims and raise legal awareness.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'Recent Developments',
                        'sections' => [
                            [
                                'heading' => 'Amendments and Impact',
                                'content' => 'Recent changes improve protection for widows and children.',
                            ]
                        ]
                    ],
                    [
                        'main_heading' => 'FAQs',
                        'sections' => [
                            [
                                'heading' => 'What is Domestic Violence?',
                                'content' => 'Includes physical, sexual, emotional, and financial abuse.',
                            ],
                            [
                                'heading' => 'How to Seek Protection?',
                                'points' => [
                                    'File complaint',
                                    'Role of protection officer',
                                    'Legal proceedings',
                                    'Support services',
                                    'Public involvement',
                                ]
                            ]
                        ]
                    ]
                ]),
                'conclusion' => 'The Act provides essential protection against various forms of abuse, offering measures to safeguard victims.',
                'category' => 'Judicial Exam',
            ]
            ,
//========
[
    'title' => 'Premier PCS J Classes in Delhi',
    'imgurl' => 'https://itcodetech.com/stpeterslaw/media/blog_covers/premier_pcs_j_classes_in_delhi.png',
    'author' => "St. Peter's Law Academy",
    'publish_date' => '2024-08-13',
    'content' => json_encode([
        [
            'main_heading' => 'Domestic Violence Act',
            'sections' => [
                [
                    'heading' => 'Domestic Violence in India',
                    'content' => 'The Domestic Violence Act (2005) protects women from various forms of abuse, including physical, sexual, emotional, and financial harm.',
                ],
                [
                    'heading' => 'Importance of the Act',
                    'content' => 'Provides protection, empowerment, and legal recognition for victims.',
                    'points' => ['Protection', 'Empowerment', 'Legal recognition'],
                ]
            ]
        ],
        [
            'main_heading' => 'Understanding Domestic Violence',
            'sections' => [
                [
                    'heading' => 'Definition and Forms',
                    'content' => 'The Act defines abuse as physical, sexual, economic, and emotional.',
                    'points' => ['Physical', 'Sexual', 'Economic', 'Emotional'],
                ],
                [
                    'heading' => 'Types of Abuse',
                    'points' => [
                        'Sexual abuse: Violating dignity.',
                        'Physical abuse: Endangering life.',
                        'Emotional abuse: Humiliation.',
                    ]
                ]
            ]
        ],
        [
            'main_heading' => 'Historical Context',
            'sections' => [
                [
                    'heading' => 'Laws Evolution',
                    'content' => 'From the Indian Penal Code and Dowry Prohibition Act to the Domestic Violence Act (2005).',
                ],
                [
                    'heading' => 'Landmark Cases',
                    'content' => 'Cases have reinforced protections for women.',
                ]
            ]
        ],
        [
            'main_heading' => 'Key Provisions',
            'sections' => [
                [
                    'heading' => 'Overview',
                    'content' => 'Provides immediate relief and recognizes multiple types of abuse.',
                ],
                [
                    'heading' => 'Rights and Protections',
                    'content' => 'Ensures safety and dignity.',
                ]
            ]
        ],
        [
            'main_heading' => 'Legal Procedures',
            'sections' => [
                [
                    'heading' => 'Filing a Complaint',
                    'points' => [
                        'Prepare report',
                        'File complaint',
                        'Submit evidence',
                        'Magistrate hearing',
                        'Orders',
                        'Follow-up',
                    ]
                ],
                [
                    'heading' => 'Protection Orders',
                    'content' => 'Provides safety and support for victims.',
                ]
            ]
        ],
        [
            'main_heading' => 'Challenges',
            'sections' => [
                [
                    'heading' => 'Implementation Issues',
                    'content' => 'Challenges include lack of awareness and social stigma.',
                ]
            ]
        ],
        [
            'main_heading' => 'Role of Legal Professionals',
            'sections' => [
                [
                    'heading' => 'Support and Awareness',
                    'content' => 'Legal professionals advocate for victims and raise legal awareness.',
                ]
            ]
        ],
        [
            'main_heading' => 'Recent Developments',
            'sections' => [
                [
                    'heading' => 'Amendments and Impact',
                    'content' => 'Recent changes improve protection for widows and children.',
                ]
            ]
        ],
        [
            'main_heading' => 'FAQs',
            'sections' => [
                [
                    'heading' => 'What is Domestic Violence?',
                    'content' => 'Includes physical, sexual, emotional, and financial abuse.',
                ],
                [
                    'heading' => 'How to Seek Protection?',
                    'points' => [
                        'File complaint',
                        'Role of protection officer',
                        'Legal proceedings',
                        'Support services',
                        'Public involvement',
                    ]
                ]
            ]
        ]
    ]),
    'conclusion' => 'The Act provides essential protection against various forms of abuse, offering measures to safeguard victims.',
    'category' => 'Pcsj',
]

        ]);
    }
}
