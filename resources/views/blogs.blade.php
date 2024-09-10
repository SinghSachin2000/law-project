@extends('master')

@section('content')

<div class="resultsec w-full">
    <div class="topp w-full h-[400px] flex flex-col justify-center pl-20" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
        <div class="text-white font-bold text-6xl">All Blogs</div>
        <div class="text-white flex items-center gap-1">
            <a href="/">Home</a>
            <img src="{{ Vite::asset('resources/assets/greaterthan.png') }}" class="w-3 h-4">
            <a href="/blogs">Blogs</a>

        </div>
    </div>
</div>

<div class="flex flex-col lg:flex-row  mb-12 justify-evenly">
    <div class="lg:w-[50%] w-[100%] flex flex-col items-center">
        <div class=" m-6 flex flex-wrap">
            @foreach ($blogsdata as $data )
            <div class="m-6 border-1 border-gray-400 w-[350px]  rounded-lg">
                <a href="{{ route('fullblog', $data->id) }}">
                    <img src="{{$data->imgurl}}" class="h-[150px] w-full">
                    <div class="flex flex-col p-4 gap-4">
                        <div class=" flex justify-evenly">
                            <div class="border-1 border-slate-500 h-8 pl-2 pr-2 text-center rounded-lg">{{$data->category}}
                            </div>
                            <div class="flex gap-1 items-center">
                                <img src="{{Vite::asset('resources/assets/calenderblack.png')}}" class="w-4">
                                <div>{{$data->publish_date}}</div>
                            </div>
                        </div>

                        <div class="text-xl font-semibold text-slate-700">{{$data->title}}</div>

                        <div class="flex justify-evenly">
                            <img src="https://itcodetech.com/stpeterslaw/media/headers/logo_header.png" class="w-[100px] ">
                            <div class="   text-gray-500">By <span class="  text-slate-800">St.Peter's Law Academy</span></div>
                        </div>

                    </div>
                </a>
            </div>
            @endforeach
        </div>
        @if ($blogsdata->total() > 0)
        <div>{{ $blogsdata->links() }}</div>
        @else
        <div>No blog available.</div>
        @endif

    </div>

    <div class="flex flex-col items-center justify-center lg:w-[40%] w-[100%]">
        <div class="border-2 border-gray-200 rounded-lg p-4 m-6 w-[80%] lg:w-[50%] ">
            <div class="text-2xl font-semibold pl-8">Categories</div>
            <div class="h-1 w-20 bg-blue-900 ml-8"></div>
            <div class="p-4 flex flex-col gap-4">
                @foreach ($categories as $category )

                <div class="flex gap-2 items-center pl-8">
                    <div><img src="{{Vite::asset('resources/assets/rightarrow.png')}}" class="w-3"></div>
                    <a href="{{ route('blogs.index', ['category' => $category->name]) }}" class="cursor-pointer">{{$category->name}} ({{ $categoryCounts->where('category', $category->name)->first()->total ?? 0 }})</a>
                </div>
                <a class="lg:w-[40%] w-[100%] h-[1px] bg-slate-200"></a>
                @endforeach
            </div>
        </div>
        <!--  -->
        <div class="flex flex-col items-center justify-center lg:w-[50%] w-[100%]">
            <div class=" border-2 border-gray-200 rounded-lg p-4 m-6 w-[80%] lg:w-[100%]">
                <div class="text-xl font-semibold">Latest Posts</div>
                <div class="h-1 w-[50px] bg-blue-900 mb-4"></div>
                <div>
                    @foreach($latestblog as $latest )
                    <div class="flex gap-4 items-center">
                        <img src="{{$latest->imgurl}}" class="w-[150px] h-[80px] ">
                        <div class="w-[50%] flex flex-col justify-between p-2 ">
                            <div class=" font-semibold">{{$latest->title}}</div>
                            <div class="flex gap-2">
                                <img src="{{Vite::asset('resources/assets/clockdark.png')}}">
                                <div class="text-slate-500">{{$latest->publish_date}}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex items-center justify-center h-[200px] bg-slate-100">
    <div class="text-center text-4xl font-bold">Why Us</div>
</div>
@endsection