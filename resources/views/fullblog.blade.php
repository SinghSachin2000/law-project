@extends('master')

@section('content')

<div class="resultsec w-full">
    <div class="topp w-full h-[400px] flex flex-col justify-center pl-20" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
        <div class="text-white font-bold text-6xl">{{ $blog->title }}</div>
        <div class="text-white flex items-center gap-1">
            <a href="/">Home</a>
            <img src="{{ Vite::asset('resources/assets/greaterthan.png') }}" class="w-3 h-4">
            <a href="/blogs">Blogs</a>
            <img src="{{ Vite::asset('resources/assets/greaterthan.png') }}" class="w-3 h-4">
            <span>{{ $blog->category }}</span>
        </div>
    </div>
</div>

<div class="flex flex-col lg:flex-row ">
    <!-- Blog section -->
    <div class="lg:w-[50%] w-[100%] p-6">
        <img src="{{ $blog->imgurl }}" class="w-[80%] mx-auto mt-12 rounded-lg">

        <div class="flex items-center justify-evenly p-4">
            <div>{{ $blog->category }}</div>
            <div>{{ $blog->author }}</div>
            <div class="flex items-center gap-2">
                <img src="{{ Vite::asset('resources/assets/calenderblack.png') }}" class="w-6">
                <div>{{ $blog->publish_date }}</div>
            </div>
            <div class="flex items-center gap-2">
                <img src="{{ Vite::asset('resources/assets/message.png') }}" class="w-6">
                <div>Comments</div>
            </div>
        </div>

        <!-- Dynamic content -->
        <div class="p-6 flex flex-col gap-6">
            @foreach ($blog->content as $section)
            <div class="flex flex-col gap-2">
                <h2 class="text-3xl font-bold text-red-500">{{ $section['main_heading'] }}</h2>
                @foreach ($section['sections'] as $subsection)
                <div>
                    <h3 class="font-semibold">{{ $subsection['heading'] }}</h3>
                    <p>{{ $subsection['content'] ?? '' }}</p>
                    @if (isset($subsection['points']))
                    <ul>
                        @foreach ($subsection['points'] as $point)
                        <li>- {{ $point }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                @endforeach
            </div>
            @endforeach

            <!-- Conclusion Section -->
            @if($blog->conclusion)
            <div>
                <h2 class="text-3xl font-bold text-red-500">Conclusion</h2>
                <p>{{ $blog->conclusion }}</p>
            </div>
            @endif
        </div>

        <div class="flex gap-4 m-6 w-[80%] mx-auto bg-blue-100 h-[150px] items-center rounded-lg">
            <img src="https://itcodetech.com/stpeterslaw/media/headers/logo_header.png" class="w-[200px]">
            <div>
                <div>Author</div>
                <div class="font-semibold">{{ $blog->author }}</div>
            </div>
        </div>

        <!-- Comments Section -->
        <div class="w-[100%] p-2 flex items-center justify-center mb-12">
            <form action="{{ route('comment.submit') }}" method="POST"  class="w-[80%] flex flex-col items-center justify-center bg-slate-300 rounded-lg p-4">
                @csrf
                <div class="text-4xl font-semibold text-gray-800 p-8">Comments</div>
                <div>
                    <input type="text" required name="fullName" placeholder="Full Name" class="p-[15px] rounded-lg border border-slate-700 m-2 w-[260px]">
                    <input type="email" required name="email" placeholder="E-mail" class="p-[15px] rounded-lg border border-slate-700 m-2 w-[260px]">
                </div>
                <textarea name="message" required placeholder="Message" class="p-[15px] rounded-lg border border-slate-700 m-2 w-[90%]"></textarea>
                <button type="submit" class="w-[200px] text-center p-2 font-semibold text-white bg-blue-900">SUBMIT</button>
            </form>
        </div>
    </div>

    <!-- Form section -->
    <div>
        <div class="flex flex-col items-center lg:w-[70%] w-[80%] mx-auto mt-12 mb-12 shadow-lg shadow-black rounded-lg p-4">
            <div class="text-3xl font-bold">Book A Free Demo</div>
            <div class="p-2">Get A Live Demo & Your Questions Answered With One of Our Experts</div>
            <form action="{{ route('demo-class.submit') }}" method="POST" class="flex flex-col items-center justify-center">
                <input type="text" required name="name" placeholder="Full Name" class="p-[15px] rounded-lg border border-slate-700 m-2 w-[280px]">
                <input type="email" required name="email" placeholder="E-mail" class="p-[15px] rounded-lg border border-slate-700 m-2 w-[280px]">
                <input type="number" required name="number" placeholder="Your WhatsApp Number" class="p-[15px] rounded-lg border border-slate-700 m-2 w-[280px]">
                <select name="course" required class="p-[15px] rounded-lg border border-slate-700 m-2 w-[280px]">
                    <option value="D.U LL.B" selected>D.U LL.B</option>
                    <option value="Course 1">Course 1</option>
                    <option value="Course 2">Course 2</option>
                    <option value="Course 3">Course 3</option>
                    <option value="Course 4">Course 4</option>
                    <option value="Course 5">Course 5</option>
                </select>
                <textarea name="message" required placeholder="Message" class="p-[15px] rounded-lg border border-slate-700 m-2 w-[280px]"></textarea>
                <button type="submit" class="bg-blue-900 text-white text-lg w-[280px] p-2 m-4 rounded-lg">BOOK FOR FREE DEMO</button>
            </form>
        </div>

        <!-- Categories and Latest Posts -->
        <div class="flex flex-col items-center  w-[100%]">
            <div class="border-2 border-gray-200 rounded-lg p-4 m-6 w-[80%] lg:w-[70%]">
                <div class="text-2xl font-semibold pl-8">Categories</div>
                <div class="h-1 w-20 bg-blue-900 ml-8"></div>
                <div class="p-4 flex flex-col gap-4">
                    @foreach ($categories as $category)
                    <div class="flex gap-2 items-center pl-8">
                        <div><img src="{{ Vite::asset('resources/assets/rightarrow.png') }}" class="w-3"></div>
                        <a href="{{ route('blogs.index', ['category' => $category->name]) }}" class="cursor-pointer">{{ $category->name }} ({{ $categoryCounts->where('category', $category->name)->first()->total ?? 0 }})</a>
                    </div>
                    <a class=" w-[100%] h-[1px] bg-slate-200"></a>
                    @endforeach
                </div>
            </div>

            <div class="flex flex-col items-center justify-center lg:w-[70%] w-[100%]">
                <div class="border-2 border-gray-200 rounded-lg p-4 m-6 lg:w-[100%]">
                    <div class="text-xl font-semibold">Latest Posts</div>
                    <div class="h-1 w-[50px] bg-blue-900 mb-4"></div>
                    <div>
                        @foreach($latestblog as $latest)
                        <div class="flex gap-4 items-center">
                            <img src="{{ $latest->imgurl }}" class="w-[150px] h-[80px]">
                            <div class="w-[50%] flex flex-col justify-between p-2">
                                <div class="font-semibold">{{ $latest->title }}</div>
                                <div class="flex gap-2">
                                    <img src="{{ Vite::asset('resources/assets/clockdark.png') }}">
                                    <div class="text-slate-500">{{ $latest->publish_date }}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- latest blog -->
<div class="flex flex-col justify-center items-center p-12 latestblog">
    <div class="text-4xl font-semibold m-10">Latest Blogs</div>
    <div class="flex gap-6 flex-wrap flex-col lg:flex-row items-center justify-center">
        @foreach ($latestblog as $blog)
        <div class="w-[500px] h-[500px] flex flex-wrap m-6 border-1 border-slate-600 p-4 rounded-lg">
            <img src="{{$blog->imgurl}}" class="rounded-lg h-[250px] w-full">
            <div class="p-2 flex flex-col gap-4">
                <div class="text-2xl font-semibold">{{$blog->title}}</div>
                <div class="flex">
                    <img src="https://itcodetech.com/stpeterslaw/media/headers/logo_header.png" class="w-[80px]">
                    <div class="text-gray-700">By {{$blog->author}}</div>
                </div>
                <div class="flex justify-between">
                    <a href="/legal-pendency-notice" class="bg-blue-100 text-red-600 p-2 rounded-lg font-medium">READ MODE</a>
                    <div class="flex gap-1 items-center">
                        <img src="{{Vite::asset('resources/assets/calenderblack.png')}}" class="w-4">
                        <div>{{$blog->publish_date}}</div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Request a Call Back -->
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
<!-- impt topics -->
<div class="bg-gray-100">
    <div class="p-12 text-3xl font-semibold text-center">Important Topics</div>
    <div class="flex flex-wrap gap-4 items-center justify-center mb-12">
        <div class="flex gap-2 p-2 items-center w-[300px]">
            <div class="     bg-orange-100 p-2 rounded-full"><img src="{{Vite::asset('resources/assets/righthand.png')}}" class="w-6"></div>
            <div class="text-gray-500">
                Best Coaching for Clat in Delhi</div>
        </div>

        <div class="flex gap-2 p-2 items-center w-[300px]">
            <div class="     bg-orange-100 p-2 rounded-full"><img src="{{Vite::asset('resources/assets/righthand.png')}}" class="w-6"></div>
            <div class="text-gray-500">

                Best Hindi Medium Judiciary Coaching</div>
        </div>

        <div class="flex gap-2 p-2 items-center w-[300px]">
            <div class="     bg-orange-100 p-2 rounded-full"><img src="{{Vite::asset('resources/assets/righthand.png')}}" class="w-6"></div>
            <div class="text-gray-500">
                The Best pcs-j Classes in Delhi</div>
        </div>

        <div class="flex gap-2 p-2 items-center w-[300px]">
            <div class="     bg-orange-100 p-2 rounded-full"><img src="{{Vite::asset('resources/assets/righthand.png')}}" class="w-6"></div>
            <div class="text-gray-500">

                Best Judiciary Coaching in Delhi</div>
        </div>

        <div class="flex gap-2 p-2 items-center w-[300px]">
            <div class="     bg-orange-100 p-2 rounded-full"><img src="{{Vite::asset('resources/assets/righthand.png')}}" class="w-6"></div>
            <div class="text-gray-500">

                Best Law Entrance Coaching in Delhi</div>
        </div>

        <div class="flex gap-2 p-2 items-center w-[300px]">
            <div class="     bg-orange-100 p-2 rounded-full"><img src="{{Vite::asset('resources/assets/righthand.png')}}" class="w-6"></div>
            <div class="text-gray-500">

                Best Judiciary Coaching in India</div>
        </div>

        <div class="flex gap-2 p-2 items-center w-[300px]">
            <div class="     bg-orange-100 p-2 rounded-full"><img src="{{Vite::asset('resources/assets/righthand.png')}}" class="w-6"></div>
            <div class="text-gray-500">

                Best Pcs j Coaching in Delhi</div>
        </div>

        <div class="flex gap-2 p-2 items-center w-[300px]">
            <div class="     bg-orange-100 p-2 rounded-full"><img src="{{Vite::asset('resources/assets/righthand.png')}}" class="w-6"></div>
            <div class="text-gray-500">
                Best Coaching institute Institute for Clat</div>
        </div>


        <div class="flex gap-2 p-2 items-center w-[300px]">
            <div class="     bg-orange-100 p-2 rounded-full"><img src="{{Vite::asset('resources/assets/righthand.png')}}" class="w-6"></div>
            <div class="text-gray-500">

                Best Judiciary crash Crash course Coaching</div>
        </div>

        <div class="flex gap-2 p-2 items-center w-[300px]">
            <div class="     bg-orange-100 p-2 rounded-full"><img src="{{Vite::asset('resources/assets/righthand.png')}}" class="w-6"></div>
            <div class="text-gray-500">

                Best Judiciary coaching-in Mukherjee nagar Delhi</div>
        </div>

        <div class="flex gap-2 p-2 items-center w-[300px]">
            <div class="     bg-orange-100 p-2 rounded-full"><img src="{{Vite::asset('resources/assets/righthand.png')}}" class="w-6"></div>
            <div class="text-gray-500">
                The Best pcs-j Classes in Delhi</div>
        </div>

        <div class="flex gap-2 p-2 items-center w-[300px]">
            <div class="     bg-orange-100 p-2 rounded-full"><img src="{{Vite::asset('resources/assets/righthand.png')}}" class="w-6"></div>
            <div class="text-gray-500">

                Best Judiciary Coaching For mock Interview</div>
        </div>

    </div>
</div>

@endsection