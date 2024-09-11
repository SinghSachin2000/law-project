<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Exam_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("exams")->insert([
            [
                'examDomain' => 'After 12th',
                'bannerUrl' => 'https://itcodetech.com/stpeterslaw/media/exams_covers/COMMON_LAW_ADMISSION_TEST_1.jpg',
                'title' => 'Common Law Admission Test (CLAT)',
                'description' => json_encode([
                    'description' => [
                        'CLAT is easily one of the top 10 law entrance exams in the country. The Common Law Admission Test (CLAT) is national-level exam that is conducted by the 22 participating NLUs on a rotational basis for admission to undergraduate and postgraduate law courses offered by them. There are around 2622 seats in undergraduate CLAT 2021, while, around 738 seats are available in CLAT PG. The total CLAT seats will get divided into several categories depending upon the reservation policy of NLUs. In addition to these participating NLUs, many private institutes also use CLAT scores for admission purposes.',
                        'description2' => 'The online application form of CLAT 2021 commencedin the 1st week of January and the last date to apply is on 30th of April. The exam will be conducted on 13thof June.',
                    ],
                    'tableData' => [
                        'Name of The Exam' => '	Common Law Admission Test',
                        'Common Name' => 'CLAT',
                        'Mode of Exam' => '	Offline (Pen and Paper based)',
                        'Participating NLUs' => '22',
                        'Seat Intake' => '2622',
                    ],
                    'points' => null,
                ]),
                'eligibilityCritieria' => json_encode([
                    'description' => null,
                    'points' => [
                        'There will be no upper age limit for UG programme in CLAT 2021.',
                        '45% marks in case of the candidates belonging to unreserved/OBC/speciallyabled person (SAP) and other categories and 40% marks in case of the candidates belonging to SC or ST categories.',
                        'Candidates who are appearing in the qualifying exam in March/April 2021 also eligible for the appearing in CLAT 2021 online examination. They shall be required to produce an evidence of their passing of their qualifying examination at the time of admission, failing which they shall lose their right to be considered for admission.'
                    ]
                ]),
                'carrerOpportunity' => null,
                'examPattern' => json_encode([
                    'description' => '*Paper will be divided into 5 sections - English Language, Current Affairs including General Knowledge, Legal Reasoning, Logical Reasoning and Quantitative Technique.',
                    'tableData' => [
                        'Mode' => 'Offline(Pen and Paper based)',
                        'Duration' => '2 hours',
                        'Medium' => 'English',
                        'Subjects' => '	Five',
                        'Type of Questions' => 'MCQs',
                        'Total Questions' => '150',
                        'Marking Scheme' => '1 mark for each correct answer',
                        'Negative Marking' => '0.25 marks every wrong answer',
                    ]
                ]),
                'about' => null,
                'role' => null,
            ],


            [
                'examDomain' => 'After 12th',
                'bannerUrl' => 'https://itcodetech.com/stpeterslaw/media/exams_covers/AILET.jpg',
                'title' => 'All India Law Entrance Test (AILET)',
                'description' => json_encode([
                    'description' => [
                        'The National Law University Delhi, which is out of the CLAT ambit, conducts AILET for admitting candidates to its undergraduate (BA LLB) and postgraduate (LLM) law programs. AILET would also rank as one of the top 10 law entrance exams in India. The seat intake for BA LLB is 110, LLM programs is 70 and PhD is 8. The online application form of AILET 2021 commenced on the 23rd of January and will clone on 20th of May. The exam is to be held on 20th of June and it will be held in offline mode across 20 cities in the country. In addition to NLU, Delhi some private institutes also use AILET scores for admission purposes.',
                    ],
                    'tableData' => [
                        'Name of The Exam' => '	 All India Law Entrance Examination',
                        'Common Name' => 'AILET',
                        'Conducting Body' => 'Consortium of NLUs',
                        'Mode of Exam' => '	Offline (Pen and Paper based)',
                        'Course Offered' => 'BA LLB, LLM and PhD',
                        'Seat Intake' => 'BA LLB - 110',

                    ],
                    'points' => null,

                ]),
                'eligibilityCritieria' => json_encode([
                    'description' => null,
                    'points' => [
                        '50% aggregate marks in Higher Secondary or equivalent examination.',
                        'Candidates appearing in 12th Class examination in March/ April 2021, can apply for AILET 2021.',
                        'As per the updates, NLU Delhi has withdrawn the age eligibility criteria. This came into force according to the official brochure released on January 15, 2021.',
                        'Note: Total 110 Seats: 55 for Delhi Region and 55 for All India Category.'
                    ]
                ]),
                'carrerOpportunity' => null,
                'examPattern' => json_encode([
                    'description' => '*Paper will be divided in five sections - English including Comprehension, General Knowledge & Current Affairs, Elementary Mathematics, Legal Aptitude and Logical Reasoning.',
                    'tableData' => [
                        'Mode' => 'Offline(Pen and Paper based)',
                        'Duration' => '1 hour and 30 minutes',
                        'Medium' => 'English',
                        'Subjects' => '	Five',
                        'Type of Questions' => 'MCQs',
                        'Total Questions' => '150',
                        'Marking Scheme' => '1 mark for each correct answer',
                        'Negative Marking' => '0.25 marks every wrong answer',
                    ]
                ]),
                'about' => null,
                'role' => null,
            ],

            // ======

            [
                'examDomain' => 'After Graduation',
                'bannerUrl' => 'https://itcodetech.com/stpeterslaw/media/exams_covers/LLM.jpg',
                'title' => 'LL.M',
                'description' => json_encode([
                    'description' => [
                        'LL.M stands for a Master’s of law program and the academic program is available both in 1 year and 2 years term across India. It lays adequate importance on specialized learning and advanced training in law. The LL.M is globally recognized as a postgraduate degree, undertaken only by students from legal background. The LL.M degree is ideal for candidates looking to develop their legal expertise in a particular component of the law.',
                        'The LL.M degree is suitable for both lawyers and non-lawyers alike and is internationally recognized. The Master of Laws degree benefits professionals working in a variety of industries, including law, academia, business, marketing, international diplomacy, and administration. A propelled law degree in India is an extraordinary open door for more direction, yet additionally for an encounter that can encourage social, scholarly, and proficient development.',
                        'The main aim of the program is to provide advanced law skills and knowledge to Law graduates. LL.B graduates who want to boost their level of knowledge or specialize in a specific domain within the law field must pursue LL.M. A glance at the LLM programs offered by different NLUs shows that there are at least thirty six distinct specializations on offer, aside from the general LL.M program. In any case, in actuality, there are fifteen particular specializations, since comparative programs are given an alternate name by each NLU. We isolated the programs based on the underlying syllabus into the following specializations Constitutional and Administrative Law :'
                    ],
                    'tableData' => null,
                    'points' => [
                        'Corporate and Commercial Laws',
                        'Corporate and Securities Laws',
                        'Criminal And Security Law',
                        'Energy and Telecommunication Laws',
                        'Environmental Law',
                        'Family and Social Security Law',
                        'General LLM',
                        'Human Rights Law',
                        'Intellectual Property Laws',
                        'International and Comparative Law',
                        'International Law',
                        'International Trade Law and the list goes on...',
                    ]
                ]),
                'eligibilityCritieria' => json_encode([
                    'description' => null,
                    'points' => [
                        'Candidate should be a graduate in LL.B Three-Year /Five-Year Integrated LL.B. (Hons.)/any other equivalent exams with a minimum of Fifty percent (55%) of marks or its equivalent grade in case of candidates belonging to General/OBC/PWD/NRI/PIO/OCI categories and Forty-Five percent (50%) of marks or its equivalent grade in case of candidates belonging to SC/ST categories.',
                        'There is no upper age limit',
                    ]
                ]),
                'carrerOpportunity' => json_encode([
                    'description1' => 'After pursuing an LLM course, Undoubtedly it opens a lot of different doors and different opportunities for law professionals to land better jobs. However, if candidates want to pursue a career in the field of law. To practice law in India you first need to clear the All India Bar Exam(AIBE). Here are some things you can do after completing L.L.M:',
                    'description2' => 'Besides these, candidates can opt for further studies wherein they can pursue either MPhil or Ph.D. in Law. There are other opportunities as well, like appearing for the UPSC exam, to become a judge or UGC NET-Law exam to further pursue your dream into becoming a professor. What are your ambitions as a lawyer?',
                    'points' => [
                        'Judge',
                        'Advocate',
                        'Public Prosecutor',
                        'Legal Adviser',
                        'legal Panel of MNCs',
                        'corporate Law firms',
                        'Government departments',
                    ]
                ]),
                'examPattern' => null,
                'about' => null,
                'role' => null,
            ],

            [
                'examDomain' => 'After 12th',
                'bannerUrl' => 'https://itcodetech.com/stpeterslaw/media/exams_covers/LLB_2.jpg',
                'title' => 'LLB',
                'description' => json_encode([
                    'description' => [
                        'Learn and explore intellectual skillsets and responsibilities of a lawyer in a legally active environment after your graduation with by pursuing 3-Year LL.B program. Every year more than 3.5 lakhs students pursue Law to fulfil their dream of entering the field of law to become an esteemed lawyer or a judicial officer or a lecturer in law or work as a legal advisor or etc. In India, legal education has been traditionally offered as a three years graduate degree. However the structure has been changed since 1987. Law Degrees in India are granted and conferred in terms of the Advocates Act, 1961, which is a law passed by the Parliament both on the aspect of legal education and also regulation of conduct of legal profession. Under the Act, the Bar Council Of India is the supreme regulatory body to regulate the legal profession in India and also to ensure the compliance of the laws and maintenance of professional standards by the legal profession in the country. Therefore, Bar Council of India rules and aims at fostering a culture of academic excellence and scholarship among the aspiring lawyers.',
                        'Law is one of the most thrilling and rewarding professions in India and there is huge earning potential in both government as well as private sectors. Law inclines your knowledge more towards to be eligible to contribute to the well-being of your society while promoting peace, directly or indirectly and cultivate qualities like persuasiveness, hard work, enhanced judgement skills, self-confidence, developed oratory skills and better personality features.'
                    ],
                    'tableData' => null,
                    'points' => null,
                ]),
                'eligibilityCritieria' => json_encode([
                    'description' => 'The minimum eligibility criteria for pursuing 3-Year LL.B is enlisted below. Have a look!',
                    'points' => [
                        'The candidate needs to complete graduation in any discipline.',
                        'The minimum aggregate of marks in graduation is 50% for the general category and relaxation of 45% of aggregate marks is mandatory for the reserved categories.',
                        'There is no age limit for taking admission to the group.',
                      
                    ]
                ]),
                'carrerOpportunity' => json_encode([
                    'description1' => 'Law is the only profession that gives you the opportunity to work in all three organs of the democracy - legislature, executive, and the judiciary.',
                    'description2' => 'You can work in a law firm, as a litigation lawyer, appear for judiciary exams, work in an MNC or legal department of financial institutions, and much more.',
                    'points' =>null,
                ]),
                'examPattern' => null,
                'about' => json_encode([
                    'description' => [
                        'Bar Council of India is responsible for regulating legal education and professional standards in India and LL.B 3-Year is one of the most sought courses that law has to offer. In the 3 years program, students have to go for three years of graduation and then three years of law.',
                        'Students who want to change their stream after graduation and those who want to gain a better perspective in diverse fields of law generally opt for the 3-year program. The curriculum of the course is divided into six semesters and the candidates are awarded the degree only when they complete all the 6 semesters of this 3-years course. The 6 semesters include several renowned subjects like Constitutional law, human rights law, family law, banking and insurance law and much more. LLB 3 years is a complete package for everyone who want to enter the field of law and practice law as a bachelor degree. Candidates who have any interest in training future lawyers or conducting research in law or become a professor in law can further purse other higher degrees like Ph.D. or LL.M to get government placements or get a better job in any private sector or polish their profession as a lawyer or you can also take part in other competitive exams like UGC NET LAW to become a professor, PCS-J Exams to get into judicial services, etc. Candidates learn several legal frameworks and concepts in regular theory classes, moot courts, internships and etc. Some of these include:',


                    ],
                    'points' =>[
                        'Law of crimes that includes brief understanding of several punishable offences',
                        'Legal methods to cope with the intricate and elaborate framework of law',
                        'Moot Court Trial and advocacy to enhance the practical knowledge of court hearings',
                        'Dispute resolution with strategic thought process and transparent understanding of legal terms',
                        'Law elective, property law, constitutional law, etc.',
                        'Drafting, pleading, and conveyancing several legal facts and figures into valid documents',
                        'Probation of Offenders Act, Criminal Procedure Code, and Juvenile Justice Act',
                        'Environmental law, law of contract, family law, law of taxation, and much more'
                    ]
                    ,

                ]),
                'role' => json_encode([
                    'roles' => [
                        'Role of a lawyer in society.' => 'Lawyers are individuals who become saviors when it comes to solving disputes. In a nutshell, you can say that lawyers are the knights of the judicial system who help to safeguard law and order with their dynamic knowledge while transforming the Indian society. Lawyers help to maintain order in the society and helps the judiciary and legislature to stand firm in its toes. Lawyers keep the society running by sustaining the equity on the three branches of the government and by providing proper guidelines and order upon the behaviour for all citizens.',
                        'Role of law in society.' => 'Law plays as an agent of instrumental social change and modernization. Law helps to protect and set the code of conduct for a civilization so that the individual elements in the society remain in harmony. The whole society revolves around the concept of co-existence and the plausibility of law in society is necessary to maintain peace in the coexistence while governing the judiciary, making people accountable and arousing fear in mind of criminals.'
                    ]
                ]),
            ],

            [
                'examDomain' => 'After Law',
                'bannerUrl' => 'https://itcodetech.com/stpeterslaw/media/exams_covers/UGC.jpg',
                'title' => 'UGC Net- Law',
                'description' => json_encode([
                    'description' => [
                        'Law is known as one of the most rewarding professions because after pursuing your post-graduation in law, you can diverge into several worthwhile careers through some exams. UGC NET- Law is one of those illuminating exams that can serve as a turning point for individuals who want to work with some of the most esteemed government and private organizations in India.',
                        'There’s more to the exam than you see on the surface, the syllabus is precise and vast, that requires individuals to gain comprehensive knowledge in several fields of law through rigorous hard work and diligent time management.'
                    ],
                    'tableData' => null,
                    'points' => null,
                ]),
                'eligibilityCritieria' => json_encode([
                    'description' => 'To appear in the UGC NET- Law exam, an individual needs to complete their post-graduation. As per the norms of NTA, LLB graduates aren’t eligible to appear for the exam as LLB is a bachelor’s degree. To appear in the exam you must fill the eligibility criteria under NTA, which states:',
                    'points' => [
                        'The first and foremost requirement for appearing UGC NET- LAW is having a post graduate in law. It should be also noted that candidates who are in the qualifying year of their Master’s or have passed out the PG degree and are waiting for the result can also apply for the exam. But as per the eligibility, their PG results must be declared within the 2 years of the UGC NET Result declaration date.',
                        'The minimum educational qualification required for a candidate is completing their PG with a minimum of 55% for the general category and 50% for SC/ST/OBC/Transgender.',
                        'For JRF, candidate should not cross more than 30 years of age. It should be also noted that other than the general categories, the reserved categories get 5 years relaxation. While for candidates pursuing LLM, relaxation of three years is given.',
                        'For assistant professor there is no time limit.',
                    ]
                ]),
                'carrerOpportunity' => json_encode([
                    'description1' => 'Law Career opportunities after clearing the UGC NET exam in law are vast. Some of the career prospects are as follows:',
                    'description2' => 'Tons of opportunities are waiting for you with arms wide open. You only need to take a step ahead by qualifying UGC NET Law exam and you would be ready with a milestone for your future.',
                    'points' => [
                        'Become a Legal Researcher',
                        'Become an Assistant Professor or Lecturer in any UGC Approved universities.',
                        'Get a Doctorate Degree in Law',
                        'Get a Job in PSUs such as NTPC, ONGC, CIL, REC, etc.',
                        'Become a Legal Consultant',
                        'Get Placed at Judicial Posts.',
                        'Become a Writer or Editor of Law Books',
                        'Become a Trainer to train Law Students.',
                    ],
                ]),
                'examPattern' => null,
                'about' => json_encode([
                    'description' => [
                        'The field of law is full of some unparalleled surprises. The deeper you dig, the more instances you will find where law stunned the commoners and of course the jurisdiction. If becoming a researcher in law or becoming a professor in Law is your passion so that you can indulge in the thrill of some exciting cases and take the burden of reshaping the society on your shoulders, then you must be willing to appear in the UGC NET-Law. Individuals who want to take their career to the next level, can enroll for the exam to determine their calibre and expand their horizons of knowledge.',
                        'The exam is conducted by NTA (National Testing Agency) and the procedure of the exam unfolds in two papers.',
                        'Paper 1 consists of 50 MCQs and is common for all subjects and it consists of questions from Comprehension Reading, Reasoning ability, mental ability, etc. On the other hand, paper 2 consists of 100 law-based MCQ-type questions and so demand subjective knowledge on law to crack the competitive exam.',
                        'It should be noted that the time duration of Paper 1 is 1 hour and paper 2 is 2 hours and there is no negative marking in both the papers. So aspirants are advised to attempt every possible question that they can.'
                    ],
                    'points' => null,
                ]),
                'role' => json_encode([
                    'roles' => [
                        'Role of a lawyer in society' => null,
                        'Role of law in society' => 'Without law, there would be clashes in social platforms. Law acts as a medium of setting up a mandatory instructive framework for the citizens who are governed by the law. If you have to find the operator of modernization and social change, there is no better alternative than law. Whether the law is good or bad, the society needs law and so studying law is as noble as any other profession that strives to protect and save mankind.'
                    ]
                ]),
            ]
            
        ]);
    }
}
