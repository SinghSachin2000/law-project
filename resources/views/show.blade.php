@extends('master')

@section('content')

<div class="resultsec w-full">
    <div class="topp w-full h-[400px] flex flex-col justify-center pl-20" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
        <div class="text-white font-bold text-6xl">{{$course->title}} ({{$course->medium}} Medium)</div>
        <div class="text-white flex items-center gap-1">
            <a href="/">Home</a>
            <img src="{{ Vite::asset('resources/assets/greaterthan.png') }}" class="w-3 h-4">
            <a href="/courses">Courses</a>
            <img src="{{ Vite::asset('resources/assets/greaterthan.png') }}" class="w-3 h-4">
            <span>{{$course->courseDomain}}</span>
        </div>
    </div>
</div>


<div>

    <div class="flex m-6 lg:flex-row flex-col gap-6 lg:justify-evenly">
        <div class="flex flex-col gap-6 m-6 lg:w-[60%] w-[80%]">
            <!-- heading  -->
            <div class="text-3xl font-medium">{{$course->title}} ({{$course->medium}} Medium) {{$course->courseDomain}}</div>
            <!-- description -->
            @if ($course->description !=null)
            <div>
                {{$course->description}}
            </div>
            @endif

            <!--who should join  -->
            @if($course->whoShouldJoin !=null)
            <div>
                <div class="font-bold">Who should join this course? </div>
                <ol class="list-decimal list-inside space-y-2 p-2">
                    @foreach(json_decode($course->whoShouldJoin) as $item)
                    <li>{{ $item }}</li>
                    @endforeach
                </ol>
            </div>
            @endif

            <!-- eligibiility -->
            @if ($course->educationalEligibility || $course->professionalEligibility || $course->ageLimit)
            <div>
                <div class="text-2xl font-semibold pb-2">Eligibility</div>
                @if($course->educationalEligibility)
                <div>
                    <div class="text-xl font-semibold ">Educational Eligibility</div>
                    <div>{{$course->educationalEligibility}}</div>
                </div>
                @endif

                @if($course->professionalEligibility )
                <div>
                    <div class="text-xl font-semibold pt-2">Professional Eligibility</div>
                    <div>{{$course->professionalEligibility}}</div>
                </div>
                @endif

                @if($course->ageLimit)
                <div>
                    <div class="text-xl font-semibold pt-2">Age Limit</div>
                    <div>{{$course->ageLimit}}</div>
                </div>
                @endif

            </div>

            @endif

            <!-- test series -->
            @if ($course->testSeries)
            @php
            $testSeries = json_decode($course->testSeries, true);
            @endphp

            <div>
                <div class="pb-2 font-semibold">Test Series</div>
                <div class="p-2">{{ $testSeries['description'] }}</div>
                <div class="pl-4">
                    <ul class="list-disc pl-5">
                        @foreach($testSeries['points'] as $point)
                        <li>{{ $point }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif

            <!--Why choose St.Peter’s Law Academy?   -->

            @if($course->whyChoose)
            <div>
                <div class="font-semibold pb-2 pt-4">Why choose St.Peter’s Law Academy? </div>
                <ol class="list-decimal list-inside space-y-2 ">
                    @foreach(json_decode($course->whyChoose) as $item)
                    <li class="pl-2">{{ $item }}</li>
                    @endforeach
                </ol>
            </div>
            @endif

            <!-- State Specific Preparation -->
            @if ($course->stateSpecificPreparation)
            @php
            $stateSpecificPreparation = json_decode($course->stateSpecificPreparation, true);
            @endphp

            <div>
                <div class="font-semibold mt-4 pb-2">State Specific Preparation </div>
                <div>{{ $stateSpecificPreparation['description'] }}</div>
                <div class="p-4">
                    <ol class="list-decimal list-inside space-y-2">
                        @foreach($stateSpecificPreparation['points'] as $point)
                        <li>{{ $point }}</li>
                        @endforeach
                    </ol>
                </div>
            </div>
            @endif

            <!-- Test Schedule: -->
            @if($course->testSchedule !=null)
            <div>
                <div class="font-semibold text-3xl mt-2 pb-2">Test Schedule: </div>
                <ul class="list-disc pl-5">
                    @foreach(json_decode($course->testSchedule) as $item)
                    <li>{{ $item }}</li>
                    @endforeach
                </ul>

                <div class="pt-4 pb-4">After every Test we conduct test Analyzises to help students to understand the mistakes and the answers.</div>
            </div>
            @endif

            <!--Course Includes: -->
            @if($course->courseIncludes !=null)
            <div>
                <div class="text-3xl font-semibold  pb-2">Course Includes: </div>
                <ul class="list-disc pl-5">
                    @foreach(json_decode($course->courseIncludes) as $item)
                    <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- 4 boxs-->
            <div class="flex gap-4 flex-wrap w-[700px]">
                <!-- 1st box -->
                <div class="flex flex-col gap-8 w-[300px] shadow-lg shadow-gray-700 p-4 rounded-lg">
                    <div class="relative w-[70px] h-[70px]   bg-orange-100 flex items-center justify-center rounded-lg">
                        <div class="flip-container w-full h-full relative transform-style-preserve-3d transition-transform duration-500 hover:rotate-y-180 ">
                            <div class="front absolute inset-0 flex items-center justify-center p-2">
                                <img src="{{ Vite::asset('resources/assets/handsupport.png') }}" alt="Support Icon" class="object-cover">
                            </div>
                            <div class="back absolute inset-0 flex items-center justify-center transform rotate-y-180 p-2">
                                <img src="{{ Vite::asset('resources/assets/handsupport.png') }}" alt="Support Icon" class="object-cover">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="font-semibold text-xl">Study Material</div>
                        <div class="">
                            <ul class="list-disc list-inside">
                                <li>Top-Level inclusive and exam-oriented study material researched and developed by our faculties.</li>
                                <li>Ready Reckoner - Covering theory (Chapter wise and Topic-wise).</li>
                                <li>Digest - Practice Questions for both Pre and Mains | Subject-wise |</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 2ndbox -->
                <div class="flex flex-col gap-8 w-[300px] shadow-lg shadow-gray-700 p-4 rounded-lg">
                    <div class="relative w-[70px] h-[70px]   bg-orange-100 flex items-center justify-center rounded-lg">
                        <div class="flip-container w-full h-full relative transform-style-preserve-3d transition-transform duration-500 hover:rotate-y-180 ">
                            <div class="front absolute inset-0 flex items-center justify-center p-2">
                                <img src="{{ Vite::asset('resources/assets/handsupport.png') }}" alt="Support Icon" class="object-cover">
                            </div>
                            <div class="back absolute inset-0 flex items-center justify-center transform rotate-y-180 p-2">
                                <img src="{{ Vite::asset('resources/assets/handsupport.png') }}" alt="Support Icon" class="object-cover">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="font-semibold text-xl">General Studies</div>
                        <div class="">
                            <ul class="list-disc list-inside">
                                <li>Regular classes of<b>Current Affairs & General Knowledge </b> along with classes General Studies.</li>
                                <li>Monthly Current Affairs Magazine.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 3rd box -->
                <div class="flex flex-col gap-8 w-[300px] shadow-lg shadow-gray-700 p-4 rounded-lg">
                    <div class="relative w-[70px] h-[70px]   bg-orange-100 flex items-center justify-center rounded-lg">
                        <div class="flip-container w-full h-full relative transform-style-preserve-3d transition-transform duration-500 hover:rotate-y-180 ">
                            <div class="front absolute inset-0 flex items-center justify-center p-2">
                                <img src="{{ Vite::asset('resources/assets/handsupport.png') }}" alt="Support Icon" class="object-cover">
                            </div>
                            <div class="back absolute inset-0 flex items-center justify-center transform rotate-y-180 p-2">
                                <img src="{{ Vite::asset('resources/assets/handsupport.png') }}" alt="Support Icon" class="object-cover">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="font-semibold text-xl">Duration</div>
                        <div class="">
                            <ul class="list-disc list-inside">
                                <li>Daily <b>3-4 Hours</b> of INTERACTIVE Classes.</li>
                                <li>Classes will be held from <b>Monday – Friday.</b></li>
                                <li>Tests on every Alternate Saturday/Sunday.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 4th box -->
                <div class="flex flex-col gap-8 w-[300px] shadow-lg shadow-gray-700 p-4 rounded-lg">
                    <div class="relative w-[70px] h-[70px]   bg-orange-100 flex items-center justify-center rounded-lg">
                        <div class="flip-container w-full h-full relative transform-style-preserve-3d transition-transform duration-500 hover:rotate-y-180 ">
                            <div class="front absolute inset-0 flex items-center justify-center p-2">
                                <img src="{{ Vite::asset('resources/assets/handsupport.png') }}" alt="Support Icon" class="object-cover">
                            </div>
                            <div class="back absolute inset-0 flex items-center justify-center transform rotate-y-180 p-2">
                                <img src="{{ Vite::asset('resources/assets/handsupport.png') }}" alt="Support Icon" class="object-cover">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="font-semibold text-xl">
                            Online Support</div>
                        <div class="">
                            <ul class="list-disc list-inside">
                                <li>Mock tests</li>
                                <li>Webinars</li>
                                <li>Recorded Sessions</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <!-- test section  -->
            <div class="flex lg:flex-row flex-col p-4 gap-4">
                <div>
                    <img src="{{ Vite::asset('resources/assets/testimg.png') }}" alt="Test Image">
                </div>
                <div>
                    <div class="font-semibold text-xl pb-4">Having such an extensive test</div>
                    <div>
                        The aim of having such an extensive test series designed and included in this program is simply to keep challenging you now and then. Tests will be conducted regularly; this is purely to improve your test-solving ability and strategies to gain the best results. All the tests will be uploaded on the platform; it will help you not just to analyze your weaknesses but also will allow you to keep taking the test to see your preparation and improve accordingly.
                    </div>
                </div>
            </div>

        </div>
        <div class="flex flex-col items-center">
            <!-- price section -->
            <div class="flex flex-col gap-2 border-2 border-gray-300 p-10 rounded-lg">
                <div class="text-2xl font-medium">{{$course->title}} Coaching {{$course->medium}} Fees Structure</div>

                <div class="    text-red-500">&#8377;{{ number_format($course->price, 2) }} , <span class="line-through text-gray-600">&#8377;{{ number_format($discountedPrice, 2) }}</span></div>

                <div class="   text-green-500 italic">You Can Save &#8377;{{$total}}</div>

                <div class="font-medium">Mode: {{$course->mode}}</div>

                <div>
                    <ul class="list-disc pl-5">
                        <li>360 Degree Syllabus Coverage</li>
                        <li>Interactive Classes</li>
                        <li>Regular Doubt Clearing Sessions</li>
                        <li>Subject-wise Revision After Completion</li>
                        <li>Exam-oriented Study Material</li>
                    </ul>
                </div>
                <div class="font-medium">*EMI Also Available</div>
                <div class="w-full p-2 bg-red-600 text-white rounded-lg text-center font-bold">Buy Now!</div>
            </div>

            <!-- Book A Free Demo -->
            <div class="flex flex-col items-center gap-4 mt-20">
                <div class="w-[400px]">

                    <div class="text-2xl font-semibold pb-2">Book A Free Demo</div>
                    <div>Get A Live Demo & Your Questions Answered With One of Our Experts</div>
                </div>

                <form action="{{ route('demo-class.submit') }}" method="POST" class="flex flex-col items-center justify-center">
                    <input type="text" required name="name" placeholder="Full Name" class="  p-[15px] rounded-lg border border-slate-700 m-2 w-[280px]">
                    <input type="email" required name="email" placeholder="E-mail"
                        class="  p-[15px] rounded-lg border border-slate-700 m-2 w-[280px]">
                    <input type="number" required name="number" placeholder="Your WhatsApp Number"
                        class="  p-[15px] rounded-lg border border-slate-700 m-2 w-[280px]">
                    <select name="course" required class="  p-[15px] rounded-lg border border-slate-700 m-2 w-[280px]">
                        <option value="D.U LL.B" selected class="  p-[15px] rounded-lg border border-slate-700 m-2">D.U LL.B</option>
                        <option value="Course 1" class="  p-[15px] rounded-lg border border-slate-700 m-2">Course 1</option>
                        <option value="Course 2" class="  p-[15px] rounded-lg border border-slate-700 m-2">Course 2</option>
                        <option value="Course 3" class="  p-[15px] rounded-lg border border-slate-700 m-2">Course 3</option>
                        <option value="Course 4" class="  p-[15px] rounded-lg border border-slate-700 m-2">Course 4</option>
                        <option value="Course 5" class="  p-[15px] rounded-lg border border-slate-700 m-2">Course 5</option>
                    </select>
                    <textarea name="message" required placeholder="Message" class="  p-[15px] rounded-lg border border-slate-700 m-2 w-[280px]"></textarea>
                    <button type="submit" class=" bg-blue-900 text-white text-lg w-[280px]  p-2 m-4 rounded-lg">BOOK FOR FREE DEMO</button>
                </form>
            </div>
            <!-- Course Includes -->

            <!--  Contact Us-->
            <div class="flex flex-col gap-2 p-4 border-2 border-slate-300 rounded-lg mt-12">
                <div class="text-3xl font-semibold">Contact Us</div>
                <div class="text-xl font-semibold">Still have doubts</div>
                <div class="   text-red-400 ">
                    <div class="flex items-center"><img src="{{Vite::asset('resources/assets/bluecall.png')}}" class="w-6 mr-2"><span>+91 9990-898-348</span></div>
                    <div class="flex items-center"><img src="{{Vite::asset('resources/assets/bluecall.png')}}" class="w-6 mr-2"><span>+91 9990-898-348</span></div>
                    <div class="flex items-center"><img src="{{Vite::asset('resources/assets/bluewhatsapp.png')}}" class="w-6 mr-2"><span>+91 9990-898-348</span></div>
                </div>

                <div class="text-xl font-semibold">Office Timing : Mon to Sat - 9:00am to 8:00pm</div>
            </div>
        </div>
    </div>

</div>

<!-- faqs -->

<div class="flex flex-col justify-center items-center mb-12 mt-12">
    <div class="p-4 text-4xl font-bold">Frequently Asked Questions</div>
    <div class="w-[80%]">

        <div>
            <div class="accordion-header cursor-pointer p-2 border-2 border-blue-100 bg-blue-900 text-white rounded-lg" data-content-id="content1" onclick="toggleAccordion('content1')">
                How do professors manage the online component of hybrid classes?
            </div>
            <div id="content1" class="accordion-content">
                Professors manage the online component of hybrid classes by teaching live wherein a student either attending a lecture in person or online gets an opportunity to clarify his doubts without any hassle.
            </div>
        </div>

        <div>
            <div class="accordion-header cursor-pointer p-2 border-2 border-blue-100 bg-blue-900 text-white rounded-lg" data-content-id="content2" onclick="toggleAccordion('content2')">
                Are hybrid classes more flexible than traditional classes?
            </div>
            <div id="content2" class="accordion-content">
                Yes, hybrid classes are more flexible than traditional classes since students get the opportunity to adopt a flexible schedule to study and they also save on a lot of time.
            </div>
        </div>

        <div>
            <div class="accordion-header cursor-pointer p-2 border-2 border-blue-100 bg-blue-900 text-white rounded-lg" data-content-id="content3" onclick="toggleAccordion('content3')">
                How do students stay engaged in hybrid classes' in-person and online aspects?
            </div>
            <div id="content3" class="accordion-content">
                We have an interactive class model which enables students to interact with each other and the teachers which keeps the class engaging and interesting.
            </div>
        </div>

        <div>
            <div class="accordion-header cursor-pointer p-2 border-2 border-blue-100 bg-blue-900 text-white rounded-lg" data-content-id="content4" onclick="toggleAccordion('content4')">
                What technology requirements are needed for hybrid classes?
            </div>
            <div id="content4" class="accordion-content">
                To attend hybrid classes, all you need is a device with an internet connection and earphones and you are good to go.
            </div>
        </div>

        <div>
            <div class="accordion-header cursor-pointer p-2 border-2 border-blue-100 bg-blue-900 text-white rounded-lg" data-content-id="content5" onclick="toggleAccordion('content5')">
                How many days do i have to attend in-person classes?
            </div>
            <div id="content5" class="accordion-content">
                You are absolutely under no compulsion to always attend classes in person. You’re welcome to attend the classes online as well as offline.
            </div>
        </div>


        <div>
            <div class="accordion-header cursor-pointer p-2 border-2 border-blue-100 bg-blue-900 text-white rounded-lg" data-content-id="content6" onclick="toggleAccordion('content6')">
                what happens if students don't have devices at home?
            </div>
            <div id="content6" class="accordion-content">
                If students don't have devices at home, they can attend the classes in person too.
            </div>
        </div>

        <div>
            <div class="accordion-header cursor-pointer p-2 border-2 border-blue-100 bg-blue-900 text-white rounded-lg" data-content-id="content7" onclick="toggleAccordion('content7')">
                What about students who fall behind?
            </div>
            <div id="content7" class="accordion-content">
                We at St Peter’s Law Academy treat all our students equally. For the ones who fall behind, we have our special remedial classes in addition to the revision classes that we arrange for all our students after completion of the course. The ones who opt for the hybrid and online classes have the option of revising the classes from the recorded sessions and can also get in touch with the teachers to clear their doubts.
            </div>
        </div>

        <div>
            <div class="accordion-header cursor-pointer p-2 border-2 border-blue-100 bg-blue-900 text-white rounded-lg" data-content-id="content8" onclick="toggleAccordion('content8')">
                How do you address students with special needs or learning deficiencies?
            </div>
            <div id="content8" class="accordion-content">
                For students with special needs or learning deficiencies, we arrange the necessary equipment and interpreters that are required to ensure that they can comprehend everything easily at their convenience.
            </div>
        </div>



        <div>
            <div class="accordion-header cursor-pointer p-2 border-2 border-blue-100 bg-blue-900 text-white rounded-lg" data-content-id="content9" onclick="toggleAccordion('content9')">
                How do we keep our students motivated
            </div>
            <div id="content9" class="accordion-content">
                From time to time keep conducting sessions with our alumni students who have cracked the exams and also invite senior advocates, and former judges who provide insight to the students that motivates them to achieve their goals. Additionally, we also have an interactive model that connects all the students in our batch with each other and their mentors that keep them motivated.
            </div>
        </div>

        <div>
            <div class="accordion-header cursor-pointer p-2 border-2 border-blue-100 bg-blue-900 text-white rounded-lg" data-content-id="content10" onclick="toggleAccordion('content10')">
                What are the four pillars of hybrid learning?
            </div>
            <div id="content10" class="accordion-content">
                The most critical training component of hybrid learning includes technology, teacher training, student support and collaboration.
            </div>
        </div>

    </div>
</div>


<!--  -->
<div class="h-[300px] flex flex-col justify-center items-center bg-gray-100">
    <div class="text-red-500 font-bold text-lg">Testimonial</div>
    <div class="text-4xl font-bold text-blue-950">What Our Loving Students Say</div>
</div>
<!--  -->
<div class="flex flex-col items-center justify-center text-center mt-12 mb-12">
    <div class="text-red-500 font-bold">INSTRUCTORS</div>
    <div class="text-blue-950 font-bold text-4xl p-2">Meet Our Specialized Instructors</div>

    <div class="mt-12 mb-12 flex flex-wrap items-center justify-center lg:w-[80%]">
        @foreach ($teachers as $teacher )
        <div class="flex flex-col items-center justify-center p-4">
            <img src="{{$teacher->imgurl}}" class="rounded-xl">
            <div class="p-2 flex flex-col items-center justify-center gap-2">
                <a href="{{ route('teachers.alldetailsteacher', ['id' => $teacher->id]) }}" class="text-xl font-bold block cursor-pointer">{{$teacher->name}}</a>
                <div class="font-semibold">{{$teacher->description}}</div>
                <div class="flex gap-2 items-center">
                    <div class="border-2 rounded-full p-2 hover:bg-blue-950"><img src="{{Vite::asset('resources/assets/facebookred.png')}}" class="w-6 "></div>
                    <div class="border-2 rounded-full p-2 hover:bg-blue-950"><img src="{{Vite::asset('resources/assets/xred.png')}}" class="w-6"></div>
                    <div class="border-2 rounded-full p-2 hover:bg-blue-950"><img src="{{Vite::asset('resources/assets/instared.png')}}" class="w-6"></div>
                    <div class="border-2 rounded-full p-2 hover:bg-blue-950"><img src="{{Vite::asset('resources/assets/linkedinred.png')}}" class="w-6"></div>

                </div>
            </div>
        </div>
        @endforeach
    </div>

    <a href="/allteachers" class="p-2 bg-blue-950 text-white font-semibold text-xl rounded-lg mt-12 mb-6">VIEW ALL</a>
</div>
<!--  -->
<div class="flex flex-col justify-center items-center pt-12 pb-12 bg-slate-100 blogteach">
    <div class="text-red-500 font-bold">OUR BLOG UPDATE</div>
    <div class="text-4xl font-bold">Featured News And Insights</div>
    <div class="flex gap-6 flex-wrap items-center justify-center p-12">
        @foreach ($latestblog as $blog)
        <div class="w-[350px] border-1 border-slate-300 rounded-xl bg-white">
            <img src="{{$blog->imgurl}}" class="p-4 w-full h-[200px] rounded-xl">

            <div class="p-4 flex flex-col gap-2">
                <div class="p-1 border-2 border-slate-500 rounded-xl text-center w-[150px] bg-blue-950 text-white">{{$blog->category}}</div>
                <div class="font-bold ">{{$blog->title}}</div>
                <div class="flex gap-2 items-center">
                    <img src="https://itcodetech.com/stpeterslaw/media/headers/logo_header.png" class="w-[70px]">
                    <div>By {{$blog->author}}</div>
                </div>
                <div class="flex justify-between">
                    <a href="/legal-pendency-notice" class="p-1 text-center text-white bg-red-600 rounded-lg pl-2 pr-2 font-bold">Read More</a>
                    <div class="flex items-center gap-2">
                        <img src="{{Vite::asset('resources/assets/calenderblack.png')}}" class="w-6">
                        <div>{{$blog->publish_date}}</div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- ===========  -->
<div class="bg-blue-950 text-white flex flex-col lg:flex-row justify-center items-center pt-12 pb-12 lg:justify-evenly reqcall">
    <div>
        <div>
            if you still have doubt please.
        </div>
        <div class="text-4xl p-2 font-semibold ">
            REQUEST A CALL BACK
        </div>
    </div>
    <form action="{{ route('req-callback.submit') }}" method="POST" class="text-black">
        @csrf
        <div>
            <input type="text" required name="fullName" placeholder="Full Name" class="  p-[15px] rounded-lg border border-slate-700 m-2">

            <input type="number" required name="number" placeholder="Your WhatsApp Number"
                class="  p-[15px] rounded-lg border border-slate-700 m-2">

        </div>
        <div>
            <input type="email" required name="email" placeholder="E-mail"
                class="  p-[15px] rounded-lg border border-slate-700 m-2">

            <input type="text" required name="city" placeholder="city" class="  p-[15px] rounded-lg border border-slate-700 m-2">
        </div>
        <div>
            <select name="course" required class="  p-[15px] rounded-lg border border-slate-700 m-2 w-[240px] text-black">
                <option value="D.U LL.B" selected class="  p-[15px] rounded-lg border border-slate-700 m-2">D.U LL.B</option>
                <option value="Course 1" class="  p-[15px] rounded-lg border border-slate-700 m-2">Course 1</option>
                <option value="Course 2" class="  p-[15px] rounded-lg border border-slate-700 m-2">Course 2</option>
                <option value="Course 3" class="  p-[15px] rounded-lg border border-slate-700 m-2">Course 3</option>
                <option value="Course 4" class="  p-[15px] rounded-lg border border-slate-700 m-2">Course 4</option>
                <option value="Course 5" class="  p-[15px] rounded-lg border border-slate-700 m-2">Course 5</option>
            </select>

            <button type="submit" class="text-white    text-center w-[240px] border-4 border-r-white p-[12px] ml-2">REQUEST A CALLBACK</button>
        </div>
    </form>
</div>
@endsection