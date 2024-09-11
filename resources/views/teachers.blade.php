@extends('master')

@section('content')

<div class="resultsec w-full">
    <div class="topp w-full h-[300px] flex flex-col justify-center pl-20" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
    <div class="text-white font-bold text-6xl">List Of Teachers</div>
        <div class="text-white flex items-center gap-1">
            <a href="/">Home</a>
            <img src="{{ Vite::asset('resources/assets/greaterthan.png') }}" class="w-3 h-4">
            <div>Teachers Details</div>
            
        </div>
    </div>
</div>
<!--  -->
<div class="flex flex-wrap items-center justify-center">
    @foreach ($teachers as $teacher)
       <div class="border-1 border-slate-700 m-4 rounded-xl w-[350px]">
        <img src="{{$teacher->imgurl}}" class="rounded-bl-[50%] rounded-t-xl w-full">
        <div class="p-2 mt-6 mb-6">
            <a  href="{{ route('teachers.alldetailsteacher', ['id' => $teacher->id]) }}" class="block text-2xl font-bold p-2 cursor-pointer">{{$teacher->name}}</a>
            <div class="p-2">{{$teacher->description}}</div>
        </div>
       </div>
    @endforeach
</div>
<!--  -->
<div class="flex items-center justify-center h-[200px] bg-slate-100">
    <div class="text-center text-4xl font-bold">Why Us</div>
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