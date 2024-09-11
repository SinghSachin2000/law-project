@extends('master')

@section('content')

<div class="resultsec w-full">
    <div class="topp w-full h-[300px] flex flex-col justify-center pl-20" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
        <div class="text-white font-bold text-6xl">{{$teacher->name}}</div>
        <div class="text-white flex items-center gap-1">
            <a href="/">Home</a>
            <img src="{{ Vite::asset('resources/assets/greaterthan.png') }}" class="w-3 h-4">
            <div>{{$teacher->name}}</div>

        </div>
    </div>
</div>


<div class="p-12 ">
    <div class="flex flex-col lg:flex-row  m-12 gap-6 lg:items-center">
        <div class="lg:w-[50%] w-[80%]">
            <img src="{{$teacher->imgurl}}" class="w-[400px] rounded-xl lg:mr-10">
        </div>
        <div>
            <div class="text-4xl font-bold ">{{$teacher->name}}</div>
            <div class="font-semibold">{{$teacher->description}}</div>

            <div class="text-red-500 flex flex-col gap-4 m-6">

                <div class="flex items-center gap-2">
                    <div class="bg-blue-100 p-2 rounded-full">
                        <img src="{{Vite::asset('resources/assets/redcall.png')}}" class="w-6">
                    </div>
                    @if ($teacher->number)
                    <div>{{$teacher->number}}</div>
                    @else
                    <div>None</div>
                    @endif
                </div>

                <div class="flex items-center gap-2">
                    <div class="bg-blue-100 p-2 rounded-full">
                        <img src="{{Vite::asset('resources/assets/redemail.png')}}" class="w-6">
                    </div>
                    @if ($teacher->email)
                    <div>{{$teacher->email}}</div>
                    @else
                    <div>None</div>
                    @endif
                </div>

                <div class="flex items-center gap-2">
                    <div class="bg-blue-100 p-2 rounded-full">
                        <img src="{{Vite::asset('resources/assets/redlocation.png')}}" class="w-6">
                    </div>
                    @if ($teacher->address)
                    <div>{{$teacher->address}}</div>
                    @else
                    <div>None</div>
                    @endif
                </div>

                <div class="flex items-center gap-2">
                    <div class="bg-blue-100 p-2 rounded-full">
                        <img src="{{Vite::asset('resources/assets/sharered.png')}}" alt="" class="w-6">
                    </div>
                    <img src="{{Vite::asset('resources/assets/facebookred.png')}}" alt="" class="w-6">
                    <img src="{{Vite::asset('resources/assets/xred.png')}}" alt="" class="w-6">
                    <img src="{{Vite::asset('resources/assets/instared.png')}}" alt="" class="w-6">
                    <img src="{{Vite::asset('resources/assets/linkedinred.png')}}" alt="" class="w-6">
                </div>
            </div>
        </div>
    </div>


    <div class="flex ml-12 ">
        <!--  -->
        @if($teacher->education)

        <div class="">
            @foreach($teacher->education as $item)
            <div class="mb-4">
                <div class="text-3xl font-bold">{{ $item['heading'] }}</div>
                <div class="text-gray-600">{{ $item['description'] }}</div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>

<div class="h-[200px] flex flex-col items-center justify-center bg-gray-200">
    <div class="text-red-500 font-semibold">Testimonial
    </div>
    <div class="text-4xl font-bold text-blue-950">What Our Loving Students Say</div>
</div>

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