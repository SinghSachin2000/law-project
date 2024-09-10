@extends('master')

@section('content')

<div class="resultsec w-full">
    <div class="topp w-full h-[400px] flex flex-col justify-center pl-20" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
        <div class="text-white font-bold text-6xl">{{$exam->title}}</div>
        <div class="text-white flex items-center gap-1">
            <a href="/">Home</a>
            <img src="{{ Vite::asset('resources/assets/greaterthan.png') }}" class="w-3 h-4">
            <a href="/exams">Exams</a>
            <img src="{{ Vite::asset('resources/assets/greaterthan.png') }}" class="w-3 h-4">
            <span>{{$exam->examDomain}}</span>
        </div>
    </div>
</div>

<div>
    <!-- title + description + form  -->
    <div class="flex flex-col lg:flex-row lg:justify-between">
        <div class="m-6 mt-12 flex flex-col gap-6 lg:w-[50%]">
            <!-- title -->
            <div class="text-4xl font-semibold">{{$exam->title}}</div>
            <!-- description -->
            <div>
                <div>

                    @if ($exam->description)

                    @php
                    $description = json_decode($exam->description, true);
                    @endphp

                    @if ($description)
                    @foreach ($description['description'] as $text)
                    <p class="mb-4">{{ $text }}</p>
                    @endforeach
                    @endif

                    @endif
                </div>
                <!-- tabledata desc. -->
                <div>
                    @if(isset($description['tableData']))
                    <table class="border-4 border-slate-700">
                        <tbody>
                            @foreach ($description['tableData'] as $key => $value)
                            <tr>
                                <td class="p-2 pr-4 w-[30%] border-2 border-slate-700">{{ $key }}</td>
                                <td class="p-2 pr-6 border-2 border-slate-700 w-[30%]">{{ $value }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
                <!-- points -->
                <div>
                    @if(isset($description['points']))
                    <ul>
                        @foreach ($description['points'] as $point)
                        <li>{{ $point }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
            <!-- About Section -->
            <div>
                @if($exam->about)
                @php
                $about = json_decode($exam->about, true);
                @endphp
                <div class="text-4xl font-semibold pb-2">About {{$exam->title}}:</div>
                <!-- Description -->
                @if(isset($about['description']))
                @foreach ($about['description'] as $text)
                <p class="pb-4">{{ $text }}</p>
                @endforeach
                @endif

                <!-- Points -->
                @if(isset($about['points']))
                <ul class="list-disc list-inside">
                    @foreach ($about['points'] as $point)
                    <li>{{ $point }}</li>
                    @endforeach
                </ul>
                @endif

                @endif
            </div>
            <!-- eligibility -->
            <div>
                <div class="text-4xl font-semibold pb-4">Eligibility :</div>
                @if($exam->eligibilityCritieria)
                @php
                $eligibilityCritieria = json_decode($exam->eligibilityCritieria, true);
                @endphp

                <!-- Description -->
                @if(isset($eligibilityCritieria['description']))
                <p>{{ $eligibilityCritieria['description'] }}</p>
                @endif

                <!-- Points -->
                @if(isset($eligibilityCritieria['points']))
                <ul>
                    @foreach ($eligibilityCritieria['points'] as $point)
                    <li>{{ $point }}</li>
                    @endforeach
                </ul>
                @endif
                @endif
            </div>
            <!--  -->
        </div>
        <!-- form  -->
        <div class="lg:w-[40%] m-12">

            <form class="flex flex-col items-center justify-center">
            <div class="text-2xl font-semibold lg:w-[40%]">Fill This Form And Get A Call Back</div>
                <input type="text" required name="fullName" placeholder="Full Name" class="  p-[15px] rounded-lg border border-slate-700 m-2 w-[400px]">
                <input type="email" required name="email" placeholder="E-mail"
                    class="  p-[15px] rounded-lg border border-slate-700 m-2 w-[400px]">
                <input type="number" required name="number" placeholder="Phone"
                    class="  p-[15px] rounded-lg border border-slate-700 m-2 w-[400px]">
                <input type="text" required name="captionCode" placeholder="Put Valid Caption Code" class="  p-[15px] rounded-lg border border-slate-700 m-2 w-[400px]">
                <select name="course" required class="  p-[15px] rounded-lg border border-slate-700 m-2 w-[280px] w-[400px]">
                    <option value="D.U LL.B" selected class="  p-[15px] rounded-lg border border-slate-700 m-2">Courses</option>
                    <option value="Course 1" class="  p-[15px] rounded-lg border border-slate-700 m-2">Python</option>
                    <option value="Course 2" class="  p-[15px] rounded-lg border border-slate-700 m-2">Javascript</option>
                    <option value="Course 3" class="  p-[15px] rounded-lg border border-slate-700 m-2">Flask</option>
                    <option value="Course 4" class="  p-[15px] rounded-lg border border-slate-700 m-2">Django</option>
                    <option value="Course 5" class="  p-[15px] rounded-lg border border-slate-700 m-2">Ruby</option>
                    <option value="Course 6" class="  p-[15px] rounded-lg border border-slate-700 m-2">Flutter</option>
                </select>
                <button type="submit" class="   bg-red-600 text-white w-[100px] p-2 rounded-lg">SUBMIT</button>
            </form>
        </div>
    </div>

    <div>
        <!--  -->
        <div class="m-6">

            @if($exam->examPattern)
            @php
            $examPattern = json_decode($exam->examPattern, true);
            @endphp
            <div class="text-4xl font-semibold"> Exam Pattern: </div>
            <!-- Table Data -->
            @if(isset($examPattern['tableData']))
            <div class="overflow-x-auto m-6">
                <table class="min-w-full bg-white border-4 border-gray-600">
                    <tbody class="">
                        @foreach ($examPattern['tableData'] as $key => $value)
                        <tr>
                            <td class="px-4 py-2 border-2 border-gray-700">{{ $key }}</td>
                            <td class=" px-4 py-2 border-2 border-gray-700">{{ $value }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endif

            <!-- Description at the end -->
            @if(isset($examPattern['description']))
            <p class="mt-4">{{ $examPattern['description'] }}</p>
            @endif

            @endif
        </div>
        <!--  -->
        <div class=" m-6">

            @if($exam->carrerOpportunity)
            @php
            $carrerOpportunity = json_decode($exam->carrerOpportunity, true);
            @endphp
            <div class="text-4xl font-semibold pb-4">Career opportunities after LL.M:</div>
            <!-- Description1 -->
            @if(isset($carrerOpportunity['description1']))
            <p class="mb-4">{{ $carrerOpportunity['description1'] }}</p>
            @endif

            <!-- Points -->
            @if(isset($carrerOpportunity['points']) && count($carrerOpportunity['points']) > 0)
            <ul class="list-disc pl-5 mb-4">
                @foreach ($carrerOpportunity['points'] as $point)
                <li>{{ $point }}</li>
                @endforeach
            </ul>
            @endif

            <!-- Description2 -->
            @if(isset($carrerOpportunity['description2']))
            <p>{{ $carrerOpportunity['description2'] }}</p>
            @endif
            @endif
        </div>
        <!--  -->
        <div class="m-6">
            @if($exam->role)
            @php
            $role = json_decode($exam->role, true);
            @endphp

            @if(isset($role['roles']) && is_array($role['roles']))
            @foreach ($role['roles'] as $title => $description)
            <div class="mb-4">
                @if ($title && $description)

                <div class=" text-4xl font-semibold mb-2">{{ $title}}</div>
                <p>{{ $description }}</p>
                @endif

            </div>
            @endforeach
            @endif

            @endif
        </div>
        <!--  -->
    </div>
</div>
<!-- last section -->
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
<div class="flex flex-col items-center justify-center bg-gray-200 pb-12">
        <div class="text-red-500 font-bold text-lg pt-12">Testimonial
    </div>
    <div class="text-4xl text-blue-950 font-bold pb-6 pt-2">What Our Loving Students Say</div>
    <div class="flex flex-wrap gap-6 items-center justify-center p-6">
        <div class="bg-blue-950 w-[300px] p-4 flex flex-col  items-center h-[350px] rounded-xl relative">
            <div class=" w-[300px] p-4 flex flex-col gap-2 items-center  ">

                <div class="border-2 border-white rounded-full w-[50px]"><img src="https://itcodetech.com/stpeterslaw/media/course_covers/reviews/Screenshot_2024-01-04_at_11.11.48_AM.png" class="w-[50px] h-[50px] rounded-full"></div>
                <div class="text-white font-bold">Kathryn Leonard</div>
                <div class="text-gray-300 font-thin">LAW</div>
                <div class="flex gap-1">
                    <img src="{{Vite::asset('resources/assets/star.png')}}" class="h-6">
                    <img src="{{Vite::asset('resources/assets/star.png')}}" class="h-6">
                    <img src="{{Vite::asset('resources/assets/star.png')}}" class="h-6">
                    <img src="{{Vite::asset('resources/assets/star.png')}}" class="h-6">
                    <img src="{{Vite::asset('resources/assets/star.png')}}" class="h-6">
                </div>
                <div class="text-sm text-gray-300 text-center">Foreign work list. Current near let experience. Source feeling chance or coach.</div>
            </div>
            <div class=" text-[300px] text-sky-900 absolute -bottom-[280px] right-0">"</div>
        </div>

        <div class="bg-blue-950 w-[300px] p-4 flex flex-col  items-center h-[350px] rounded-xl relative">
            <div class=" w-[300px] p-4 flex flex-col gap-2 items-center  ">

                <div class="border-2 border-white rounded-full w-[50px]"><img src="https://itcodetech.com/stpeterslaw/media/course_covers/reviews/Screenshot_2024-01-04_at_11.12.10_AM.png" class="w-[50px] h-[50px] rounded-full"></div>
                <div class="text-white font-bold">Laura Hill</div>
                <div class="text-gray-300 font-thin">LAW</div>
                <div class="flex gap-1">
                    <img src="{{Vite::asset('resources/assets/star.png')}}" class="h-6">
                    <img src="{{Vite::asset('resources/assets/star.png')}}" class="h-6">
                    <img src="{{Vite::asset('resources/assets/star.png')}}" class="h-6">
                    <img src="{{Vite::asset('resources/assets/star.png')}}" class="h-6">
                    <img src="{{Vite::asset('resources/assets/star.png')}}" class="h-6">
                </div>
                <div class="text-sm text-gray-300 text-center">Year beat explain artist upon support light. Want if political range school world certain</div>
            </div>
            <div class=" text-[300px] text-sky-900 absolute -bottom-[280px] right-0">"</div>
        </div>
        <div class="bg-blue-950 w-[300px] p-4 flex flex-col  items-center h-[350px] rounded-xl relative">
            <div class=" w-[300px] p-4 flex flex-col gap-2 items-center  ">

                <div class="border-2 border-white rounded-full w-[50px]"><img src="https://itcodetech.com/stpeterslaw/media/course_covers/reviews/Screenshot_2024-01-04_at_11.12.43_AM.png" class="w-[50px] h-[50px] rounded-full"></div>
                <div class="text-white font-bold">Mark</div>
                <div class="text-gray-300 font-thin">LAW</div>
                <div class="flex gap-1">
                    <img src="{{Vite::asset('resources/assets/star.png')}}" class="h-6">
                    <img src="{{Vite::asset('resources/assets/star.png')}}" class="h-6">
                    <img src="{{Vite::asset('resources/assets/star.png')}}" class="h-6">
                    <img src="{{Vite::asset('resources/assets/star.png')}}" class="h-6">
                    <img src="{{Vite::asset('resources/assets/star.png')}}" class="h-6">
                </div>
                <div class="text-sm text-gray-300 text-center">Foreign work list. Current near let experience. Source feeling chance or coach.</div>
            </div>
            <div class=" text-[300px] text-sky-900 absolute -bottom-[280px] right-0">"</div>
        </div>
    </div>
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