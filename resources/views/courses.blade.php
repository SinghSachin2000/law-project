@extends('master')

@section('content')

<div class="resultsec w-full">
    <div class="topp w-full h-[300px] flex flex-col justify-center pl-20" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
        <div class="text-white font-bold text-6xl">All Courses</div>
        <div class="text-white flex items-center gap-1">
            <a href="/">Home</a>
            <img src="{{ Vite::asset('resources/assets/greaterthan.png') }}" class="w-3 h-4">
            <span>Courses</span>
            <img src="{{ Vite::asset('resources/assets/greaterthan.png') }}" class="w-3 h-4">
            <span>None</span>
        </div>
    </div>
</div>

<div class="flex flex-col justify-center items-center gap-2 mt-4">
    <div class="text-red-500">Our courses</div>
    <div class="text-3xl font-bold ">Let’s Discover All Our Courses</div>
    <div class="flex flex-wrap items-center justify-center">
        @foreach ($courses as $course )
        <a  href="{{ route('courses.show', $course->id) }}" class="block">
            <div class="m-4 border-2 border-slate-200 rounded-lg p-2">
                <div>

                    <div class="curtain-container w-[300px] h-[300px] mx-auto relative overflow-hidden rounded-bl-[120px]">

                        <div class="curtain relative w-full h-full">
                            <div class="curtain-bg absolute inset-0 flex items-center justify-center">
                                <img src="{{$course->bannerUrl}}" class="w-full h-full object-cover">
                            </div>
                            <div class="curtain-overlay absolute inset-0 bg-yellow-700 bg-opacity-50  hover:bg-opacity-50">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="flex justify-evenly pt-10 pb-10 items-center">
                    <div class="text-xl w-[200px] ">{{$course->title}} ({{$course->medium}} Medium)</div>
                    <div class="  bg-blue-100 p-3 rounded-full hover:bg-red-500">
                        <a href="{{ route('courses.show', $course->id) }}" class="block">
                            <img src="{{Vite::asset('resources/assets/diagonalarrow.png')}}" class="hover-white-image">
                        </a>
                    </div>
                </div>
            </div>
        </a>



        @endforeach
    </div>
</div>
<!--  -->
<div class="flex flex-col items-center justify-center text-center mt-12 mb-12">
    <div class="text-red-500 font-bold">INSTRUCTORS</div>
    <div class="text-blue-950 font-bold text-4xl p-2">Meet Our Specialized Instructors</div>
    <a href="/allteachers" class="p-2 bg-blue-950 text-white font-semibold text-xl rounded-lg mt-12 mb-6">VIEW ALL</a>
</div>



<!--  -->
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