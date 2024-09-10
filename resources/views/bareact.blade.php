@extends('master')

@section('content')

<div class="resultsec w-full">
    <div class="topp w-full h-[300px] flex flex-col justify-center pl-20" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
        <div class="text-white flex items-center gap-1">
            <a href="/">Home</a>
            <img src="{{ Vite::asset('resources/assets/greaterthan.png') }}" class="w-3 h-4">
            <span>Bare Act</span>
        </div>
    </div>
</div>


<div class="flex flex-col items-center gap-2 mb-12">
    <div class="font-medium pt-16  text-red-500">Syllabus</div>
    <div class="text-4xl font-bold mb-4">Download The Bare Act</div>

    <div class="w-[80%] border-2 border-neutral-900">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">S.No.</th>
                    <th scope="col">State wise Syllabus</th>
                    <th scope="col">Download Link</th>

                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($resources as $index => $resource)
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{ $resource->filename }}</td>
                    <td>
                        <button class="text-center bg-blue-900 text-white p-2 rounded-lg"><a href="{{ $resource->url }}">Click To Download</a></button></td>
                </tr>
                @endforeach

            </tbody>
        </table>
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