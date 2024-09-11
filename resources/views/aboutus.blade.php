@extends('master')

@section('content')

<div class="resultsec w-full">
    <div class="topp w-full h-[400px] flex flex-col justify-center pl-20" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
        <div class="text-white font-bold text-6xl">About Us</div>
        <div class="text-white flex items-center gap-1">
            <a href="/">Home</a>
            <img src="{{ Vite::asset('resources/assets/greaterthan.png') }}" class="w-3 h-4">
            <span>About Us</span>
        </div>
    </div>
</div>


<div class="flex flex-col gap-4 justify-center items-center">
    <div class="text-4xl font-bold p-4">About Us - St.Peter's Law Academy</div>
    <img src="{{Vite::asset('resources/assets/aboutus.png')}}" class="w-[80%]">
    <div class="w-[80%] flex flex-col m-10">
        <div class=" flex flex-col gap-2 p-4">
            <div class="text-4xl font-semibold">MESSAGE FROM DIRECTORS</div>
            <div>"Welcome to St. Peter's Law Academy!</div>
            <div>As a passionate advocate for legal education, I founded St. Peter's Law Academy with a vision to empower students to achieve their dreams in the legal field. We understand the competitive nature of law entrance and all state judiciary exams. Our dedicated faculty and proven track record are here to guide you every step of the way.</div>
            <div>At St. Peter's Law Academy, we believe in fostering a supportive learning environment that equips you with the knowledge, skills, and confidence to succeed. We are committed to providing you with the resources and guidance you need to excel in your chosen law entrance exam, be it Judiciary, CLAT, CUET-LAW, LLB, or any other state judiciary exams.</div>
            <div>We invite you to explore our website and discover how St. Peter's Law Academy can help you unlock your legal potential"</div>
        </div>

        <div class=" flex flex-col gap-2 p-4">
            <div class="text-4xl font-semibold">We</div>
            <div><b>St. Peter’s Law Academy</b> Is A Vision Of Four People, An Entrepreneur, A Bright Scholar, An Educator And A Lawyer Who Brought In Their Expertise To Create An Educational Model To Rewrite The History Of Judiciary Preparation And Law Entrance Examination Preparation.</div>
            <div>We Are Specialized In Judiciary Coaching And Law Entrance Only. Our Aim To Contribute To Society By Providing Quality Education By The Best Educators Without Any Compromise To The Future Of Our Nation. We Wish To Stand As A Guardian, A Friend And A Guide To Support You In Your Preparation, Pat Your Back When You Feel Low, We Don’t Just Want To Prepare You For The Exam We Want You To Be Prepared For The Worldly Challenges You Are Going To Face Once Out There.</div>
            <div>At St.Peter’s Law Academy For The Judiciary, We Offer A Voluminous And An Inclusive Program For A Career-Focused, Goal-Oriented Preparation For Complete Judicial Service Examinations Starting From Prelims To Interview Your One-Stop Solution. We Provide Judicial Preparation Coaching For All The States. By The Edifying Knowledge Of Our Teachers To Guide Every Student And By The Help Of Our Inclusive Exam-Oriented Study Material In The Journey Of Cracking Into The Best Law School Of The Country. We Believe You Will Achieve It Under Our Guidance. Clearing Judicial Exam.</div>
            <div>And, Toward Law Entrances, We Offer An Extensive Program For A Result/Goal–Oriented Preparation For All Levels Of Law Entrance Examinations Conducted Across India. Our Simple And Practical Approach Eases Aspirants Into Gaining An Effective Understanding Of The Syllabus And It Enables Them To Develop A Smart Strategy To Succeed.</div>
            <div>Keeping In View The Cut-Throat Competition In Today’s World, We Believe In Delivering Quality Education By The Best Educators Without Any Compromise. By The Edifying Knowledge Of Our Teachers To Guide Every Student And By The Help Of Our Inclusive Exam-Oriented Study Material In The Journey Of Cracking Into The Best Law School Of The Country. We Believe You Will Achieve It Under Our Guidance.</div>
        </div>

        <div class=" flex flex-col gap-2 p-4">
            <div class="text-4xl font-semibold">02</div>
            <div class="text-4xl font-semibold">Our Mission</div>
            <ul class="list-disc pl-5">
                <li>We Want To Provide Education With The Purpose To Contribute To Society Through Excellence In The Emerging Areas Of Law And Judiciary.</li>
                <li>We Are Pledged To Provide Quality Coaching By Vastly Experienced, Dynamic And Dedicated Faculties.</li>
                <li>We Want To Spread The Importance Of Legal Education By Nurturing Students To Meet Limitless Opportunities In The Legal Profession, Judiciary, And Academics.</li>
                <li>We Want Our Students To Imbibe The Winner’s Attitude Necessary For Achieving Success.</li>
                <li>We Want Our Students To Not Only Clear The Examination, But We Also Want Our Students To Inculcate Practical And Honest Knowledge To Be Prepared For The Worldly Competitions</li>
            </ul>



        </div>

        <div class=" flex flex-col gap-2 p-4">
            <div class="text-4xl font-semibold">03</div>
            <div class="text-4xl font-semibold">Our Vision</div>
            <ul class="list-disc pl-5">
                <li>We Wish to Cross Barriers Of Traditional Teaching-Learning Methodology and Want to Give Maximal Manifestation Which is Required For Students.</li>
                <li>To Be Known For Quality Legal Education With The View Of Producing World-Class Professionals, Scholars, And Educators In Law.</li>
                <li>To Be The Preference Of Students And Employees, And Be Recognized For Excellence In The Coaching For Legal Education.</li>
                <li>To Create The Center Of Excellence In The Field Of Legal Education.</li>
                <li>To Develop Skilled, Legal, Analytical And Moral Youth For the Benefit of the Society...</li>
            </ul>



        </div>

        <!--  -->
    </div>
</div>

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