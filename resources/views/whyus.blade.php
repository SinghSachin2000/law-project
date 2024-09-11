@extends('master')

@section('content')

<div class="resultsec w-full">
    <div class="topp w-full h-[400px] flex flex-col justify-center pl-20" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
        <div class="text-white font-bold text-6xl">Why Us</div>
        <div class="text-white flex items-center gap-1">
            <a href="/">Home</a>
            <img src="{{ Vite::asset('resources/assets/greaterthan.png') }}" class="w-3 h-4">
            <span>About</span>
            <img src="{{ Vite::asset('resources/assets/greaterthan.png') }}" class="w-3 h-4">
            <span>Why Us</span>
        </div>
    </div>
</div>

<div class="flex flex-col-reverse lg:flex-row justify-center items-center lg:items-start p-12 lg:justify-evenly">
    <div class="w-[90%] lg:w-[35%]">
        <div class="font-semibold text-red-500 pb-2">ST.PETER'S LAW ACADEMY</div>
        <div>
            <div class="text-4xl pb-8 font-semibold">Why Choose Us</div>
            <div class="flex flex-col gap-4 mb-12">
              <div>We will help you strengthen your foundation to achieve what you have desired. We will put in all our efforts on you to help you achieve the dream you have wanted to live for so long. It's you who has to decide if you want to turn your dream into reality and live it or give up halfway.</div>
              <div>It's easy to give up, but now that you have gathered the strength to pursue your desire to become a judge don't stop here. Do it! help us guide you in the right direction. You must know clearing the exam is not hard or impossible. It is just you who has to start by setting small goals to reach there and achieve it. Once you decide to make it and dedicate yourself to it, you will make it and you won't even know when you became a judge. The journey is going to be challenging but not impossible. What makes us different from others and gives us the edge is our faculties. By the help and the guidance of our faculties who know and understand the nuts and bolts of these exams. They will make it easy for you, with the right amount of fuel and right direction to your destination you will certainly make it.</div>
              <div>With years and years of experience. We have brought together the best courses with the best possible study material and test series for you to achieve your dream.</div>
              <div>“<b>FROM SCHOOL TO LAW SCHOOL TO COURTROOM</b>" We have you covered.</div>
            </div>
        </div>
      
        <div class="pb-2 text-slate-800 font-semibold">
        Why Us :
        </div>
        <div>
        <ol class="list-decimal list-inside space-y-2">
            <li>Classes By Expert & Experienced Faculties</li>
            <li>Complete Course Competition From Prelims To Mains To Personality Test</li>
            <li>Top level inclusive & Exam Oriented Study Material</li>
            <li>Regular Doubt Clearing Session</li>
            <li>Small Batches of Strength</li>
            <li>Competitive Environment to Imbibe The Winner's Attitude Necessary For Achieving</li>
            <li>Regular Tests For Practice and Performance Tracking</li>
            <li>Goal-oriented Approach</li>
            <li>Interactive and Detailed Classes/Lectures</li>
            <li>AI-Equipped Learning Management System (LMS) for Edge in Test Preparation with Smart Progress Tracking Report</li>
            <li>One-on-One Mentorship</li>
            <li>Small Batches of 50 Students to Help Students Final Edge in Hearing</li>
            <li>Extensive Test Series</li>
            <li>State-Specific Test Series</li>
            <li>Exam-Oriented Study Material</li>
            <li>Video Solutions of Tests (Exp)</li>
            <li>Weekly Classes</li>
            <li>Recorded Classes with Unlimited Views Valid for the Entire Duration of the Course</li>
            <li>"Samadhan" Magazine for All Current Affairs and G.K.</li>
            <li>"Law Express" The Monthly Legal Update</li>
        </ol>
        </div>

    </div>

    <div class="">
    <div class="whyusimg w-[600px] h-[600px] rounded-2xl flex items-center justify-center">
    <div class="relative flex items-center justify-center bg-white w-[450px] h-[130px] rounded-lg p-2 transform -rotate-[270deg] -top-4 right-[190px] shadow-2xl border-2 border-slate-300">
        <div class="bg-[#fae6d8] p-4 rounded-lg mr-4">
            <img src="{{Vite::asset('resources/assets/trophy2.png')}}" alt="Trophy" class="w-12"> 
        </div>
        <div>
            <div class="text-5xl font-bold">15+ Awards</div>
            <div class="pl-2">BEST LAW COACHING</div>
        </div>
    </div>
   </div>

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