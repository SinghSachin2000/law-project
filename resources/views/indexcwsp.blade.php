@extends('master')

@section('content')

<div class="resultsec w-full">
    <div class="topp w-full h-[400px] flex flex-col justify-center pl-20" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
        <div class="text-white font-bold text-6xl">Career</div>
        <div class="text-white flex items-center gap-1">
            <a href="/">Home</a>
            <img src="{{ Vite::asset('resources/assets/greaterthan.png') }}" class="w-3 h-4">
            <span>About</span>
            <img src="{{ Vite::asset('resources/assets/greaterthan.png') }}" class="w-3 h-4">
            <span>Career</span>
        </div>
    </div>
</div>

<div class="flex flex-col justify-center items-center">
    <div class="flex flex-col items-center gap-1 p-4">
        <div class="text-2xl font-semibold text-red-500">WANT TO JOIN OUR TEAM?</div>
        <div class="text-4xl font-semibold">Send In Your Resume Or Write To Us</div>
        <div class="text-4xl font-medium text-red-500">careerwithstpeters@gmail.com</div>
    </div>

    <div>
    @foreach ($jobs as $job)

        <div class="flex  lg:w-[800px] w-[500px] p-4 border-2 border-stone-800 rounded-lg m-4 gap-2">
            <div class="w-[70%]">
                <div class="text-3xl font-semibold text-sky-950 pb-2">{{$job->name}}</div>

                <div class="flex gap-1 items-center">
                    <img src="{{Vite::asset('resources/assets/rightarrow.png')}}" class="w-6 h-6">
                    <div class="text-2xl font-medium text-sky-950">Location:</div>
                </div>
                <div>{{$job->location}}</div>

                <div class="flex gap-1 items-center">
                <img src="{{Vite::asset('resources/assets/rightarrow.png')}}" class="w-6 h-6">
                <div class="text-2xl font-medium  text-sky-950 pt-2">Experience:</div>
                </div>
                <div>{{$job->experience}}</div>

                <div class="flex gap-1 items-center">
                <img src="{{Vite::asset('resources/assets/rightarrow.png')}}" class="w-6 h-6">
                <div class="text-2xl font-medium  text-sky-950 pt-2"> Position:</div>
                </div>
                <div>{{$job->position}}</div>

                <div class="flex gap-1 items-center">
                <img src="{{Vite::asset('resources/assets/rightarrow.png')}}" class="w-6 h-6">
                <div class="text-2xl font-medium  text-sky-950 pt-2">  Salary:</div>
                </div>
                <div>{{$job->salary}}</div>

                <div class="flex gap-1 items-center">
                <img src="{{Vite::asset('resources/assets/rightarrow.png')}}" class="w-6 h-6">
                <div class="text-2xl font-medium  text-sky-950 pt-2">   About us :</div>
                </div>
                <div>{{$job->aboutus}}</div>

                <div class="flex gap-1 items-center">
                <img src="{{Vite::asset('resources/assets/rightarrow.png')}}" class="w-6 h-6">
                <div class="text-2xl font-medium  text-sky-950 pt-2">  Job Requirements : </div>
                </div>
                <div>{{$job->requirements}}</div>

            </div>

            <button class="  bg-red-500 text-white text-center w-40  h-10 p-2 rounded-lg ">APPLY NOW</button>
   </div>
    @endforeach
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