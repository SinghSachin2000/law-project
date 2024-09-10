@extends('master')

@section('content')
<!-- Carousel Section -->
<div class="relative">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ Vite::asset('resources/assets/home1.jpg') }}" class="d-block w-100" alt="Home 1">
            </div>
            <div class="carousel-item">
                <img src="{{ Vite::asset('resources/assets/home2.jpg') }}" class="d-block w-100" alt="Home 2">
            </div>
            <div class="carousel-item">
                <img src="{{ Vite::asset('resources/assets/home3.jpg') }}" class="d-block w-100" alt="Home 3">
            </div>
            <div class="carousel-item">
                <img src="{{ Vite::asset('resources/assets/home4.jpg') }}" class="d-block w-100" alt="Home 4">
            </div>
            <div class="carousel-item">
                <img src="{{ Vite::asset('resources/assets/home5.png') }}" class="d-block w-100" alt="Home 5">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- About Section -->
<div class="relative mt-12 mb-12  flex flex-col lg:flex-row items-center aboutsec lg:h-[600px]">
    <!-- Background Images -->
    <div class="relative w-full max-w-4xl h-64 mb-12">
        <img src="{{ Vite::asset('resources/assets/about1.png') }}" alt="" class="absolute left-[20%] w-[550px] z-0">
        <img src="{{ Vite::asset('resources/assets/aboutn2.png') }}" alt="" class="absolute object-cover left-[30%] z-10 ">

        <!-- Content on top of images -->
        <div class="absolute inset-0 flex justify-center items-center z-20 top-[100%] left-[54%] w-[150px]">
            <div class="relative flex rounded-full justify-center items-center w-[150px] h-[150px] bg-red-600">
                <!-- Trophy Icon -->
                <div class="absolute w-[100px] h-[100px] flex justify-center items-center bg-blue-900 rounded-full p-4">
                    <img src="{{ Vite::asset('resources/assets/trophy.png') }}" alt="Trophy Icon" class="object-cover">
                </div>

                <!-- Rotating Text -->
                <div class="relative w-full h-full flex justify-center items-center">
                    <h6 class="absolute w-full h-full flex items-center justify-center text-center">
                        <span class="text-white text-lg rotate-circle">
                            <span class="rotate-0 translate-x-[75px]">10+</span>
                            <span class="rotate-30 translate-x-[75px]">y</span>
                            <span class="rotate-60 translate-x-[75px]">e</span>
                            <span class="rotate-90 translate-x-[75px]">a</span>
                            <span class="rotate-120 translate-x-[75px]">r</span>
                            <span class="rotate-150 translate-x-[75px]">s</span>
                            <span class="rotate-180 translate-x-[75px]">o</span>
                            <span class="rotate-210 translate-x-[75px]">f</span>
                            <span class="rotate-240 translate-x-[75px]">e</span>
                            <span class="rotate-270 translate-x-[75px]">x</span>
                            <span class="rotate-300 translate-x-[75px]">p</span>
                            <span class="rotate-330 translate-x-[75px]">e</span>
                            <span class="rotate-360 translate-x-[75px]">r</span>
                            <span class="rotate-390 translate-x-[75px]">i</span>
                            <span class="rotate-420 translate-x-[75px]">e</span>
                            <span class="rotate-450 translate-x-[75px]">n</span>
                            <span class="rotate-480 translate-x-[75px]">c</span>
                            <span class="rotate-510 translate-x-[75px]">e</span>
                        </span>
                    </h6>
                </div>
            </div>
        </div>
    </div>

    <div class="w-[90%] flex items-center flex-col mt-[20%] lg:mt-[0%]">
        <div class="text-red-600 font-medium text-lg">What sets up apart in Stpeters</div>
        <div class="text-4xl font-semibold">BEST Judiciary and Law Entrance
            Coaching.</div>
        <div class="flex pt-4">
            <div class="flex ">
                <div class="bg-[#f4d4c9] w-[60px] h-[60px] flex justify-center items-center rounded-md perspective-1000">
                    <div class="flip-container w-full h-full transform-style-preserve-3d transition-transform duration-500 hover:rotate-y-180">
                        <div class="front absolute inset-0 flex justify-center items-center">
                            <img src="{{ Vite::asset('resources/assets/focusarrown.png') }}" alt="" class=" object-cover">
                        </div>
                        <div class="back absolute inset-0 flex justify-center items-center transform rotate-y-180">
                            <img src="{{ Vite::asset('resources/assets/focusarrown.png') }}" alt="" class=" object-cover">
                        </div>
                    </div>
                </div>
                <div class="pl-4">
                    <div class="w-60 text-lg font-semibold">
                        Top Level Exam Oriented Study Material For Judiciary Coaching</div>
                    <div class="w-60">From the basic concepts to advanced frameworks, our study material covers anything and everything.</div>
                </div>
            </div>
            <div class="flex ">
                <div class="bg-[#f4d4c9] w-[60px] h-[60px] flex justify-center items-center rounded-md perspective-1000">
                    <div class="flip-container w-full h-full transform-style-preserve-3d transition-transform duration-500 hover:rotate-y-180">
                        <div class="front absolute inset-0 flex justify-center items-center">
                            <img src="{{ Vite::asset('resources/assets/focusarrown.png') }}" alt="" class=" object-cover">
                        </div>
                        <div class="back absolute inset-0 flex justify-center items-center transform rotate-y-180">
                            <img src="{{ Vite::asset('resources/assets/focusarrown.png') }}" alt="" class=" object-cover">
                        </div>
                    </div>
                </div>
                <div class="pl-4">
                    <div class="w-60 text-lg font-semibold">

                        One-on-one mentorship For judiciary</div>
                    <div class="w-60">By Faculties and the academic mentors To assist, to guide, and to help Achieve.</div>
                </div>
            </div>
        </div>
        <div>
            <div class="pt-4 pb-4 text-slate-600">JOIN US TO GET SPECIALISED TRAINING TO EXCEL IN JUDICIARY EXAMS AND BUILD A BRIGHT CAREER IN LAW</div>
            <a class="bg-red-600  text-white font-medium  rounded-md pl-6 pr-6 pt-2 pb-2 hover:bg-blue-800" href="/aboutus">READ MORE</a>
        </div>

    </div>
</div>
</div>

<!-- notification section  -->
<div class="flex justify-center p-6 notifi">
    <div class="p-6 ml-6 shadow-lg   lg:w-[500px] rounded-xl shadow-slate-500 h-[300px] mr-4 flex flex-col gap-y-10  bg-white">
        <div class="text-3xl font-semibold">Latest Notifications</div>
        <div class="flex text-sm">
            <img src="{{ Vite::asset('resources/assets/righthand.png') }}" class="w-8 h-8 pr-2">
            <div>From the basic legal concepts to advanced legal frameworks, our study material covers anything and everything.</div>
        </div>
        <div class="flex text-sm">
            <img src="{{ Vite::asset('resources/assets/righthand.png') }}" class="w-8 h-8  pr-2">
            <div>Join our every saturday and sunday demo class for the Judiciary, DU LL.B and hindi or<a class="font-semibold hover:cursor-pointer"> English medium CLAT Coaching</a> in offline and online mode.</div>
        </div>

    </div>

    <div class=" flex flex-col gap-y-4 notifi2 lg:w-[500px]">
        <div class="flex shadow-lg shadow-slate-500 p-4 rounded-xl">
            <img src="{{ Vite::asset('resources/assets/rightcheck.png') }}" alt="" class="h-6 w-6 mr-2">
            <div>
                <div class="font-semibold"> Exam Oriented Study Material</div>
                <div class="text-">From the basic legal concepts to advanced legal frameworks, our study material covers anything and everything.</div>
            </div>
        </div>

        <div class="flex shadow-lg shadow-slate-500 p-4 rounded-xl">
            <img src="{{ Vite::asset('resources/assets/rightcheck.png') }}" alt="" class="h-6 w-6 mr-2">
            <div>
                <div class="font-semibold"> Exam Oriented Study Material</div>
                <div class="text-">From the basic legal concepts to advanced legal frameworks, our study material covers anything and everything.</div>
            </div>
        </div>

        <div class="flex shadow-lg bg-white shadow-slate-500 p-4 rounded-xl">
            <img src="{{ Vite::asset('resources/assets/rightcheck.png') }}" alt="" class="h-6 w-6 mr-2">
            <div>
                <div class="font-semibold"> Exam Oriented Study Material</div>
                <div class="text-">From the basic legal concepts to advanced legal frameworks, our study material covers anything and everything.</div>
            </div>
        </div>

        <div class="flex shadow-lg bg-white shadow-slate-500 p-4 rounded-xl">
            <img src="{{ Vite::asset('resources/assets/rightcheck.png') }}" alt="" class="h-6 w-6 mr-2">
            <div>
                <div class="font-semibold"> Exam Oriented Study Material</div>
                <div class="text-">From the basic legal concepts to advanced legal frameworks, our study material covers anything and everything.</div>
            </div>
        </div>


    </div>
</div>

<div>
    <div class="flex bg-[#ebdbd5] p-12 items-center justify-evenly flex-wrap">
        <div class="flex items-center gap-2 p-2 ">
            <div class=" w-[80px] h-[60px] flex justify-center items-center rounded-md perspective-1000">
                <div class="flip-container w-full h-full transform-style-preserve-3d transition-transform duration-500 hover:rotate-y-180">
                    <div class="front absolute inset-0 flex justify-center items-center">
                        <img src="{{ Vite::asset('resources/assets/profile.png') }}" alt="" class=" object-cover w-20">
                    </div>
                    <div class="back absolute inset-0 flex justify-center items-center transform rotate-y-180">
                        <img src="{{ Vite::asset('resources/assets/profile.png') }}" alt="" class=" object-cover">
                    </div>
                </div>
            </div>
            <div>
                <div class="text-6xl">8+</div>
                <div class="">CLASS ROOMS</div>
            </div>
        </div>

        <div class="flex items-center gap-2  p-2">
            <div class=" w-[80px] h-[60px] flex justify-center items-center rounded-md perspective-1000">
                <div class="flip-container w-full h-full transform-style-preserve-3d transition-transform duration-500 hover:rotate-y-180">
                    <div class="front absolute inset-0 flex justify-center items-center">
                        <img src="{{ Vite::asset('resources/assets/smile.png') }}" alt="" class=" object-cover w-20">
                    </div>
                    <div class="back absolute inset-0 flex justify-center items-center transform rotate-y-180">
                        <img src="{{ Vite::asset('resources/assets/smile.png') }}" alt="" class=" object-cover">
                    </div>
                </div>
            </div>
            <div>
                <div class="text-6xl">200+</div>
                <div class="">STUDENTS</div>
            </div>
        </div>

        <div class="flex items-center gap-2 p-2">
            <div class=" w-[80px] h-[60px] flex justify-center items-center rounded-md perspective-1000">
                <div class="flip-container w-full h-full transform-style-preserve-3d transition-transform duration-500 hover:rotate-y-180">
                    <div class="front absolute inset-0 flex justify-center items-center">
                        <img src="{{ Vite::asset('resources/assets/clock.png') }}" alt="" class=" object-cover w-20">
                    </div>
                    <div class="back absolute inset-0 flex justify-center items-center transform rotate-y-180">
                        <img src="{{ Vite::asset('resources/assets/clock.png') }}" alt="" class=" object-cover">
                    </div>
                </div>
            </div>
            <div>
                <div class="text-6xl">14+</div>
                <div class="">BATCHES</div>
            </div>
        </div>

        <div class="flex items-center gap-2 p-2 ">
            <div class=" w-[80px] h-[60px] flex justify-center items-center rounded-md perspective-1000">
                <div class="flip-container w-full h-full transform-style-preserve-3d transition-transform duration-500 hover:rotate-y-180">
                    <div class="front absolute inset-0 flex justify-center items-center">
                        <img src="{{ Vite::asset('resources/assets/trophy2.png') }}" alt="" class=" object-cover w-20">
                    </div>
                    <div class="back absolute inset-0 flex justify-center items-center transform rotate-y-180">
                        <img src="{{ Vite::asset('resources/assets/trophy2.png') }}" alt="" class=" object-cover">
                    </div>
                </div>
            </div>
            <div>
                <div class="text-6xl">95%+</div>
                <div class="">RESULTS</div>
            </div>
        </div>
    </div>

    <!-- book a demo section  -->
    <div class="flex lg:flex-row flex-col items-center  lg:justify-evenly p-4 lg:w-[80%] lg:mx-auto">
        <div class="lg:w-[60%] w-[80%] mt-20">
            <img src="{{ Vite::asset('resources/assets/demo.jpg')}}" class="rounded-lg">
        </div>
        <div class="flex flex-col items-center lg:w-[25%] w-[80%] mx-auto mt-12 mb-12 shadow-lg shadow-black rounded-lg p-4 ">
            <div class="text-3xl font-bold">Book A Free Demo</div>
            <div class="p-2">Get A Live Demo & Your Questions Answered With One of Our Experts</div>
            <form action="{{ route('demo-class.submit') }}" method="POST" class="flex flex-col items-center justify-center">
                @csrf
                <input type="text" required name="name" placeholder="Full Name" class="  p-[15px] rounded-lg border border-slate-700 m-2 w-[280px]">
                <input type="email" required name="email" placeholder="E-mail"
                    class="  p-[15px] rounded-lg border border-slate-700 m-2 w-[280px]">
                <input type="number" required name="number" placeholder="Your WhatsApp Number"
                    class="  p-[15px] rounded-lg border border-slate-700 m-2 w-[280px]">
                <select name="course" required class="  p-[15px] rounded-lg border border-slate-700 m-2 w-[280px]">
                    <option value="D.U LL.B" selected class="  p-[15px] rounded-lg border border-slate-700 m-2">D.U LL.B</option>
                    <option value="Course 1" class="  p-[15px] rounded-lg border border-slate-700 m-2">Course 1</option>
                    <option value="Course 2" class="  p-[15px] rounded-lg border border-slate-700 m-2">Course 2</option>
                    <option value="Course 3" class="  p-[15px] rounded-lg border border-slate-700 m-2">Course 3</option>
                    <option value="Course 4" class="  p-[15px] rounded-lg border border-slate-700 m-2">Course 4</option>
                    <option value="Course 5" class="  p-[15px] rounded-lg border border-slate-700 m-2">Course 5</option>
                </select>
                <textarea name="message" required placeholder="Message" class="  p-[15px] rounded-lg border border-slate-700 m-2 w-[280px]"></textarea>
                <button type="submit" class=" bg-blue-900 text-white text-lg w-[280px]  p-2 m-4 rounded-lg">BOOK FOR FREE DEMO</button>
            </form>

        </div>
    </div>

    <!-- events section  -->

    <div class="flex flex-col items-center justify-center eventsec">
        <div class="flex flex-col items-center">
            <div class="text-red-600 font-medium p-2">OUR EVENTS</div>
            <div class="text-4xl font-semibold p-2">Seminars / Webinars</div>
        </div>

        <div class="flex">
            <!-- cards   -->
            @foreach ($events as $event)
            <div class="card-container w-[30%] m-4 rounded-xl overflow-hidden relative">
                <div class="card-image">
                    <img src="{{$event->image}}" class="w-full h-full object-cover">
                </div>
                <div class="card-glass absolute inset-0 bg-gradient-to-t from-[#5b6475] to-transparent"></div>
                <div class="card-heading absolute bottom-0 left-0 right-0 text-white  bg-opacity-50 p-2 ">
                    <div>
                        {{$event->heading}}
                    </div>
                    <div class="flex  gap-1 items-center">
                        <div class="flex p-2 gap-1 items-center">
                            <div><img src="{{Vite::asset('resources/assets/calender.png')}}" alt="" class="w-6"></div>
                            <div>{{$event->event_date}}</div>
                        </div>

                        <div class="flex gap-1 items-center">
                            <div><img src="{{Vite::asset('resources/assets/location.png')}}" alt="" class="w-6"></div>
                            <div>{{$event->location}}</div>
                        </div>

                    </div>
                    <a href="/contact" class="p-2 bg-red-600 rounded-lg mb-2 mt-2">REGISTER NOW</a>
                </div>
            </div>

            @endforeach
        </div>

    </div>

    <!-- growth section  -->
    <div class="flex flex-col-reverse  lg:flex-row justify-center items-center bg-blue-900 text-white p-4 gap-2 growthsec mt-12">

        <!-- Content Section -->
        <div class="w-[50%] lg:w-[100%]">
            <div class="text-xl text-red-500 pb-2">Best Judiciary Coaching</div>
            <div class="text-4xl font-semibold pb-4">Our Stats Prove This</div>
            <div class="   text-zinc-100 max-w-[700px]">St Peter's Law Academy is the best judiciary coaching in Delhi. Student's interest is our topmost priority. We have a team of best mentors who are committed to making learning easier for our students.</div>

            <!-- Flip Cards Section -->
            <div>
                <!-- First Flip Card -->
                <div class="flex items-center gap-2 p-2 mt-10 w-[600px]">
                    <div class="w-[200px] flex justify-center items-center rounded-md perspective-1000 mr-2">
                        <div class="flip-container w-full h-full transform-style-preserve-3d transition-transform duration-500 hover:rotate-y-180">
                            <div class="front absolute inset-0 flex justify-center items-center">
                                <img src="{{ Vite::asset('resources/assets/rocket.png') }}" alt="" class="object-cover">
                            </div>
                            <div class="back absolute inset-0 flex justify-center items-center transform rotate-y-180">
                                <img src="{{ Vite::asset('resources/assets/rocket.png') }}" alt="" class="object-cover ">
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="text-2xl font-medium">Top Level Exam Oriented Study Material</div>
                        <div class="">We provide thorough study material in the form of ready reckoner, digest–practice questions, and topic-wise notes, which are constantly updated in light of the constant evolution of law by way of amendments and judgments</div>
                    </div>
                </div>

                <!-- Second Flip Card -->
                <div class="flex items-center gap-2 p-2 mt-10 w-[600px]">
                    <div class="w-[100px]  flex justify-center items-center rounded-md perspective-1000">
                        <div class="flip-container w-full h-full transform-style-preserve-3d transition-transform duration-500 hover:rotate-y-180">
                            <div class="front absolute inset-0 flex justify-center items-center">
                                <img src="{{ Vite::asset('resources/assets/handshake.png') }}" alt="" class="object-cover w-[80px] ">
                            </div>
                            <div class="back absolute inset-0 flex justify-center items-center transform rotate-y-180">
                                <img src="{{ Vite::asset('resources/assets/handshake.png') }}" alt="" class="object-cover w-[80px] ">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="text-2xl font-medium">Experienced Faculty</div>
                        <div class="">With the best faculties of India we have a dedicated team of Academic Mentors</div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Images Section -->
        <div class="relative flex w-[80%] h-[600px] mb-12 mx-auto">
            <img src="{{Vite::asset('resources/assets/growth2.jpg')}}" class="absolute top-[100px] left-0 lg:w-[80%] w-[100%] z-10 rounded-lg">
            <img src="{{Vite::asset('resources/assets/growth3.png')}}" class="absolute top-[400px] left-0 z-20 successimg rounded-lg">
            <img src="{{Vite::asset('resources/assets/growth4.png')}}" class="absolute z-2 top-[450px] left-[200px] dotimg">
        </div>
    </div>
    <!-- our courses -->
    <div class="coursehome">
        <div class="flex flex-col justify-center items-center gap-2 mt-4">
            <div class="text-red-500">Our courses</div>
            <div class="text-3xl font-bold ">Let’s Discover All Our Courses</div>
            <div class="flex flex-wrap items-center justify-center">
                @foreach ($courses as $course )
                <a href="{{ route('courses.show', $course->id) }}" class="block">
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
                            <div class="  bg-blue-100 p-3 rounded-full hover:bg-red-600">
                                <a href="{{ route('courses.show', $course->id) }}" class="block">
                                    <img src="{{Vite::asset('resources/assets/diagonalarrow.png')}}" class="hover-white-image">
                                </a>
                            </div>
                        </div>
                    </div>
                </a>



                @endforeach
            </div>
            <a href="/courses" class="bg-red-500 text-white text-center p-2 rounded-lg mb-12 font-semibold">SEE ALL COURSES</a>
        </div>
    </div>
    <!--  -->


    <!--testimonial  -->
    <div class="video-section bg-gray-100 pb-12 mb-0">
        <div class="title text-lg pt-12 text-red-500 font-bold">Testimonial</div>
        <div class="subtitle text-4xl font-bold pb-10 pt-6">Video Testimonial</div>

        <div class="video-container flex gap-6 flex-wrap justify-center">
            <!-- Video 1 -->
            <div class="video-item w-[350px] h-[200px] p-3 bg-white">
                <iframe
                    width="100%"
                    height="100%"
                    src="https://www.youtube.com/embed/EDcaBJgkM58"
                    title="YouTube video 1"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>

            <!-- Video 2 -->
            <div class="video-item w-[350px] h-[200px] p-3 bg-white">
                <iframe
                    width="100%"
                    height="100%"
                    src="https://www.youtube.com/embed/m66CIt1eqek"
                    title="YouTube video 2"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>

    <!--  -->
    <div class="flex flex-col items-center justify-center">
        <div class="text-red-500 font-bold text-lg pt-12">Testimonial
    </div>
    <div class="text-4xl text-blue-950 font-bold pb-6 pt-2">What Our Loving Students Say</div>
    <div class="flex flex-wrap gap-6 items-center justify-center p-6">
        <div class="bg-blue-950 w-[300px] p-4 flex flex-col  items-center h-[600px] rounded-xl relative">
            <div class=" w-[300px] p-4 flex flex-col gap-2 items-center  ">

                <div class="border-2 border-white rounded-full w-[50px]"><img src="https://itcodetech.com/stpeterslaw/media/testimonals/Jyoti.png" class="w-[50px] h-[50px] rounded-full"></div>
                <div class="text-white font-bold">Jyoti</div>
                <div class="text-gray-300 font-thin">CLAT</div>
                <div class="flex gap-1">
                    <img src="{{Vite::asset('resources/assets/star.png')}}" class="h-6">
                    <img src="{{Vite::asset('resources/assets/star.png')}}" class="h-6">
                    <img src="{{Vite::asset('resources/assets/star.png')}}" class="h-6">
                    <img src="{{Vite::asset('resources/assets/star.png')}}" class="h-6">
                    <img src="{{Vite::asset('resources/assets/star.png')}}" class="h-6">
                </div>
                <div class="text-sm text-gray-300 text-center">Every teacher here is the best as the efforts they make via quizzes, class tests, and what not. It makes the difficult things so easy that it becomes very easy to memorize them. ALSO THIS IS THE BEST. My Sister got selected in Maharashtra by the guidance and the education provided here. Now I too will.</div>
            </div>
            <div class=" text-[300px] text-sky-900 absolute -bottom-[280px] right-0">"</div>
        </div>

        <div class="bg-blue-950 w-[300px] p-4 flex flex-col  items-center h-[600px] rounded-xl relative">
            <div class=" w-[300px] p-4 flex flex-col gap-2 items-center  ">

                <div class="border-2 border-white rounded-full w-[50px]"><img src="https://itcodetech.com/stpeterslaw/media/testimonals/Krishna.png" class="w-[50px] h-[50px] rounded-full"></div>
                <div class="text-white font-bold">Krishan (Sangeeta’s BJS)</div>
                <div class="text-gray-300 font-thin">Judicial preparation</div>
                <div class="flex gap-1">
                    <img src="{{Vite::asset('resources/assets/star.png')}}" class="h-6">
                    <img src="{{Vite::asset('resources/assets/star.png')}}" class="h-6">
                    <img src="{{Vite::asset('resources/assets/star.png')}}" class="h-6">
                    <img src="{{Vite::asset('resources/assets/star.png')}}" class="h-6">
                    <img src="{{Vite::asset('resources/assets/star.png')}}" class="h-6">
                </div>
                <div class="text-sm text-gray-300 text-center">Hello Everyone who will read this. This is the place for your Judicial preparation. Thankyou for all the tiny and major efforts you people have put in for my sister. She qualified Bihar Judicial Services and all this has become possible because of you all. Flourish everyday and make every deserving candidates dream come true. Every single thing is best about this place.</div>
            </div>
            <div class=" text-[300px] text-sky-900 absolute -bottom-[280px] right-0">"</div>
        </div>
        <div class="bg-blue-950 w-[300px] p-4 flex flex-col  items-center h-[600px] rounded-xl relative">
            <div class=" w-[300px] p-4 flex flex-col gap-2 items-center  ">

                <div class="border-2 border-white rounded-full w-[50px]"><img src="https://itcodetech.com/stpeterslaw/media/testimonals/Sumit.png" class="w-[50px] h-[50px] rounded-full"></div>
                <div class="text-white font-bold">Sumit</div>
                <div class="text-gray-300 font-thin">Judiciary</div>
                <div class="flex gap-1">
                    <img src="{{Vite::asset('resources/assets/star.png')}}" class="h-6">
                    <img src="{{Vite::asset('resources/assets/star.png')}}" class="h-6">
                    <img src="{{Vite::asset('resources/assets/star.png')}}" class="h-6">
                    <img src="{{Vite::asset('resources/assets/star.png')}}" class="h-6">
                    <img src="{{Vite::asset('resources/assets/star.png')}}" class="h-6">
                </div>
                <div class="text-sm text-gray-300 text-center">Anyone can perform averagely on their own but to achieve exellence one has to have an excellent mentor and that is exactly what i got in ST.PETER'S LAW ACADEMY. Special efforts by all faculty's led to my intellectual and scholarly advancement. Guys there is no sense in wasting your time and years of your life. I will recommend everyone to join ST. PETER'S and you will know the difference. I have a great experience overall. And special thanks to amal sir who keeps motivating us and never let us be concerned about anything which would let us down.</div>
            </div>
            <div class=" text-[300px] text-sky-900 absolute -bottom-[280px] right-0">"</div>
        </div>
    </div>
</div>
<!--  -->
<div class="video-section bg-gray-100 pb-12 mb-0">
    <div class="title text-lg pt-12 text-red-500 font-bold">OUR VIDEOS</div>
    <div class="subtitle text-4xl font-bold pb-10 pt-6">Featured videos</div>

    <div class="video-container flex gap-6 flex-wrap justify-center">
        <!-- Video 1 -->
        <div class="video-item w-[350px] h-[200px] p-3 bg-white">
            <iframe
                width="100%"
                height="100%"
                src="https://www.youtube.com/embed/nutVhrFV2D0"
                title="YouTube video 1"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>

        <!-- Video 2 -->
        <div class="video-item w-[350px] h-[200px] p-3 bg-white">
            <iframe
                width="100%"
                height="100%"
                src="https://www.youtube.com/embed/UlRm35FKedk"
                title="YouTube video 2"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>

        <!-- Video 3 -->
        <div class="video-item w-[350px] h-[200px] p-3 bg-white">
            <iframe
                width="100%"
                height="100%"
                src="https://www.youtube.com/embed/Idbk_sSJ6sE"
                title="YouTube video 3"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
    </div>
</div>


<!--  -->
<div class="flex flex-col justify-center items-center   bg-gray-100 mt-0">
    <div class="text-red-500 font-bold pt-12 text-xl">social platforms</div>
    <div class="text-4xl font-bold pt-2">Our channel Names</div>
    <div class="flex gap-4 flex-wrap w-[70%] justify-center items-center mb-12 mt-12">
        <div class="bg-white w-[400px] shadow-lg shadow-gray-400 rounded-xl p-2"><a href="https://www.youtube.com/channel/UC5SQR_JS8UsCapsZOBEiOJg" class="flex gap-4 items-center cursor-pointer">
                <img src="{{Vite::asset('resources/assets/ytlogo.png')}}" class="w-[70px]">
                <div class="text-2xl font-bold">JUDICIARY (Hindi Medium)</div>
            </a></div>

        <div class="bg-white w-[400px] shadow-lg shadow-gray-600 rounded-xl p-2"><a href="https://www.youtube.com/channel/UCVsgDmqUHansOkca0MFxPLQ" class="flex gap-4 items-center cursor-pointer">
                <img src="{{Vite::asset('resources/assets/ytlogo.png')}}" class="w-[70px]">
                <div class="text-2xl font-bold">JUDICIARY </div>
            </a></div>

        <div class="bg-white w-[400px] shadow-lg shadow-gray-600 rounded-xl p-2"><a href="https://www.youtube.com/@stpeterslawacademyug" class="flex gap-4 items-center cursor-pointer">
                <img src="{{Vite::asset('resources/assets/ytlogo.png')}}" class="w-[70px]">
                <div class="text-2xl font-bold">LAW</div>
            </a></div>

        <div class="bg-white w-[400px] shadow-lg shadow-gray-600 rounded-xl p-2"><a href="https://www.youtube.com/channel/UC5SQR_JS8UsCapsZOBEiOJg" class="flex gap-4 items-center cursor-pointer">
                <img src="{{Vite::asset('resources/assets/telegramlogo.png')}}" class="w-[70px]">
                <div class="text-2xl font-bold">JUDICIARY (Hindi Medium)</div>
            </a></div>

        <div class="bg-white w-[400px] shadow-lg shadow-gray-600 rounded-xl p-2"><a href="https://t.me/stpeterslaw" class="flex gap-4 items-center cursor-pointer">
                <img src="{{Vite::asset('resources/assets/telegramlogo.png')}}" class="w-[70px]">
                <div class="text-2xl font-bold">JUDICIARY </div>
            </a></div>

        <div class="bg-white w-[400px] shadow-lg shadow-gray-600 rounded-xl p-2"><a href="https://t.me/stpeterslawug" class="flex gap-4 items-center cursor-pointer">
                <img src="{{Vite::asset('resources/assets/telegramlogo.png')}}" class="w-[70px]">
                <div class="text-2xl font-bold">LAW UG</div>
            </a></div>


    </div>
</div>

<!--  -->
<div class="flex flex-col justify-center items-center pt-12 pb-12 bg-slate-100 blogteach">
    <div class="text-red-500 font-bold">OUR BLOG UPDATE</div>
    <div class="text-4xl font-bold">Featured News And Insights</div>
    <div class="flex gap-6 flex-wrap items-center justify-center p-12">
        @foreach ($latestblog as $blog)
        <div class="w-[350px] border-1 border-slate-300 rounded-xl bg-white ">
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

<!--  -->
<div class="flex flex-col justify-center items-center gap-4">
    <div class="text-4xl font-bold pt-12 pb-12">Gallery</div>
    <img id="full-image" src="https://itcodetech.com/stpeterslaw/media/gallery/gallery5.png" class=" w-[80%] lg:w-[50%]">
    <div class="flex flex-wrap gap-2">
        <div class="border-4 hover:border-blue-500">
            <img id="img1" src="https://itcodetech.com/stpeterslaw/media/gallery/gallery3.png" class="w-[100px] h-[100px] cursor-pointer opacity-20 hover:opacity-100" onclick="changeImage('https://itcodetech.com/stpeterslaw/media/gallery/gallery3.png', this)">
        </div>
        <div class="border-4 hover:border-blue-500">
            <img id="img2" src="https://itcodetech.com/stpeterslaw/media/gallery/gallery.png" class="w-[100px] h-[100px] cursor-pointer opacity-20 hover:opacity-100" onclick="changeImage('https://itcodetech.com/stpeterslaw/media/gallery/gallery.png', this)">
        </div>
        <div class="border-4 hover:border-blue-500">
            <img id="img3" src="https://itcodetech.com/stpeterslaw/media/gallery/6X4_Brochure_1_page-0007_ddnUbuk.jpg" class="w-[100px] h-[100px] cursor-pointer opacity-20 hover:opacity-100" onclick="changeImage('https://itcodetech.com/stpeterslaw/media/gallery/6X4_Brochure_1_page-0007_ddnUbuk.jpg', this)">
        </div>
        <div class="border-4 hover:border-blue-500">
            <img id="img4" src="https://itcodetech.com/stpeterslaw/media/gallery/6X4_Brochure_1_page-0009.jpg" class="w-[100px] h-[100px] cursor-pointer opacity-20 hover:opacity-100" onclick="changeImage('https://itcodetech.com/stpeterslaw/media/gallery/6X4_Brochure_1_page-0009.jpg', this)">
        </div>
        <div class="border-4 hover:border-blue-500">
            <img id="img5" src="https://itcodetech.com/stpeterslaw/media/gallery/ST_PETERS_LAW__1.jpg" class="w-[100px] h-[100px] cursor-pointer opacity-20 hover:opacity-100" onclick="changeImage('https://itcodetech.com/stpeterslaw/media/gallery/ST_PETERS_LAW__1.jpg', this)">
        </div>
        <div class="border-4 hover:border-blue-500">
            <img id="img6" src="https://itcodetech.com/stpeterslaw/media/gallery/gallery5.png" class="w-[100px] h-[100px] cursor-pointer opacity-20 hover:opacity-100" onclick="changeImage('https://itcodetech.com/stpeterslaw/media/gallery/gallery5.png', this)">
        </div>
    </div>
</div>

<script>
    function changeImage(imageSrc, element) {

        document.getElementById('full-image').src = imageSrc;

        // Reset the border and opacity of all images
        const images = document.querySelectorAll('.cursor-pointer');
        images.forEach(img => {
            img.style.opacity = '0.2';
            img.style.borderColor = 'transparent';
        });

        // Set the selected image's border and opacity
        element.style.opacity = '1';
        element.style.borderColor = '#3b82f6';
    }
</script>

<!--  -->
<div class="flex flex-col justify-center items-center mt-10 mb-10">
    <div class="text-blue-950 text-4xl font-bold pb-6">Our Association</div>
    <div class="flex flex-wrap items-center justify-center gap-10 mb-10 w-[60%]">
        <div class="rounded-full">
            <img src="https://itcodetech.com/stpeterslaw/media/assosiation/collab5.png" class="w-[150px] h-[150px] rounded-full shadow-md shadow-slate-200">
        </div>
        <div>
            <img src="https://itcodetech.com/stpeterslaw/media/assosiation/collab4.png" class="w-[150px] h-[150px] rounded-full shadow-md shadow-slate-200">
        </div>
        <div>
            <img src="https://itcodetech.com/stpeterslaw/media/assosiation/collab3.png" class="w-[150px] h-[150px] rounded-full shadow-md shadow-slate-200">
        </div>
        <div>
            <img src="https://itcodetech.com/stpeterslaw/media/assosiation/collab.png" class="w-[150px] h-[150px] rounded-full shadow-md shadow-slate-200">
        </div>
        <div>
            <img src="https://itcodetech.com/stpeterslaw/media/assosiation/coll1.png" class="w-[150px] h-[150px] rounded-full shadow-md shadow-slate-200">
        </div>

    </div>
</div>
<!--  -->
<div class="flex flex-col justify-center items-center mt-10 mb-10">
    <div class="text-blue-950 text-4xl font-bold pb-6">Featured In</div>
    <div class="flex flex-wrap items-center justify-center gap-4 w-[50%]">
        <img src="https://itcodetech.com/stpeterslaw/media/FeaturedIn/Screenshot_2023-12-30_at_4.14.03_PM_AozE3BB.png" class="w-[200px] shadow-md shadow-slate-200">
        <img src="https://itcodetech.com/stpeterslaw/media/FeaturedIn/Screenshot_2023-12-30_at_4.13.39_PM.png" class="w-[200px] shadow-md shadow-slate-200">
        <img src="https://itcodetech.com/stpeterslaw/media/FeaturedIn/Screenshot_2023-12-30_at_4.14.26_PM.png" class="w-[200px] shadow-md shadow-slate-200">
        <img src="https://itcodetech.com/stpeterslaw/media/FeaturedIn/Screenshot_2023-12-30_at_4.15.28_PM.png" class="w-[200px] shadow-md shadow-slate-200">

    </div>
</div>


<!-- best law coaching in delhi -->
<div class="bg-gray-100 pb-12 flex flex-col gap-4 items-center ">
    <div class="text-4xl font-bold pt-12">Best Law Coaching In Delhi, India</div>
    <div class="w-[80%] flex flex-col gap-2 justify-center items-center text-blue-950">
        <div>St Peter’s Law Academy is the best law coaching in Delhi to crack all the law exams including judiciary, CLAT, DU LLB, CUET due to the reasons listed below:</div>
        <div><b>Flexible Modes:</b>To ensure that students are at ease, we provide them with an option to opt for coaching in offline, online, or hybrid mode. We not only have an offline setup but also offer a class facility with an AI learning management system that students can use to take classes remotely.</div>
        <div><b>Exhaustive study material: </b> We provide thorough study material in the form of ready reckoner, digest–practice questions, and topic-wise notes, which are constantly updated in light of the constant evolution of law by way of amendments and judgments.</div>
        <div><b>Marathon Test Series:</b>To keep a check on our student’s performance, we offer extensive test series in the form of mock tests, subject wise tests, topic wise tests that are prepared by our mentors having experience of more than 20 years.</div>
        <div><b>State-Specific Preparation:</b>We have state-specific programs that aid students in targeting the states they intend to crack with the right strategies and methods to ace their exam.</div>
        <div><b>Regular Doubt Clearing Sessions: </b>Doubts can act as a hurdle in the aspirant's way to achieving their dreams. We thus organize regular doubt-clearing sessions so that they get clarity regarding all the intricacies involved in the topics. Additionally, we also have special remedial classes that we arrange for all our students after completion of the course.</div>
        <div><b>Best Judiciary Coaching in Delhi: </b>St. Peter's Law Academy excels in judiciary coaching in Delhi due to its expert faculty, comprehensive study materials, and successful track record.</div>
        <div><b>Best Judiciary Coaching in India: </b>St. Peter's Law Academy is renowned nationwide for its superior faculty, tailored materials, and high success rates in judiciary coaching.

        </div>
        <div><b>Best Judiciary Coaching in Mukherjee Nagar: </b>St. Peter's Law Academy shines as Mukherjee Nagar's top judiciary coaching with expert faculty, bespoke materials, and a proven success record.</div>
        <div><b>Best PCSJ Coaching in Delhi:</b>In Delhi, St. Peter's Law Academy leads in PCSJ coaching, offering unparalleled mentorship, innovative strategies, and a track record of excellence.</div>
        <div><b>Best PCSJ Coaching in India:</b>Across India, St. Peter's Law Academy distinguishes itself in PCSJ coaching through its unique teaching methodology, comprehensive resources, and consistent achievement.

        </div>
        <div><b>Best PCSJ Coaching in Mukherjee Nagar:</b>St. Peter's Law Academy is the top choice for PCSJ coaching in Mukherjee Nagar, known for its dedicated instruction, specialized content, and outstanding outcomes.</div>
        <div><b>Best Civil Judge Coaching in Delhi: </b>In Delhi, St. Peter's Law Academy is celebrated for Civil Judge coaching, with its personalized guidance, strategic curriculum, and impressive track record of success.</div>
        <div><b>Best Civil Judge Coaching in India:</b>Nationally, St. Peter's Law Academy excels in Civil Judge coaching, thanks to its expert educators, comprehensive courseware, and high success rates.</div>
        <div><b>Best Civil Judge Coaching in Mukherjee Nagar: </b>St. Peter's Law Academy stands out in Mukherjee Nagar for Civil Judge coaching, featuring targeted teaching, in-depth materials, and a strong history of success.</div>
        <div><b>Best CLAT Coaching in Delhi: </b>In Delhi, St. Peter's Law Academy leads in CLAT preparation, emphasizing interactive learning, personalized support, and fostering a competitive environment for success.</div>
        <div><b>Best CLAT Coaching in India:</b>Across India, St. Peter's Law Academy sets the benchmark for CLAT coaching, with its holistic approach, state-of-the-art resources, and a supportive community driving student success.</div>
        <div><b>Best CLAT Coaching in Mukherjee Nagar: </b>St. Peter's Law Academy dominates Mukherjee Nagar's CLAT coaching scene, renowned for its strategic focus, rigorous practice sessions, and a nurturing atmosphere for aspirants.</div>
        <div><b>Best CUET-Law Coaching in Delhi: </b>In Delhi, St. Peter's Law Academy excels in CUET-Law coaching, distinguished by its innovative teaching techniques, custom study plans, and strong mentorship for aspirant achievement.</div>
        <div><b>Best CUET-Law Coaching in India: </b>Nationally, St. Peter's Law Academy leads in CUET-Law coaching with its comprehensive curriculum, advanced learning tools, and a supportive academic environment for nationwide aspirants.</div>
        <div><b>Best CUET-Law Coaching in Mukherjee Nagar:</b>St. Peter's Law Academy is the premier choice for CUET-Law coaching in Mukherjee Nagar, offering targeted preparation, expert guidance, and a proven formula for success.

        </div>
        <div><b>Best Online Judiciary Coaching in Delhi: </b>For online judiciary coaching in Delhi, St. Peter's Law Academy stands out with its interactive virtual classrooms, personalized feedback, and access to a wealth of digital resources.</div>
        <div><b>Best Online Judiciary Coaching in India:</b>St. Peter's Law Academy is a leader in online judiciary coaching across India, providing flexible learning options, comprehensive e-materials, and live sessions with legal experts.</div>
        <div><b>Best Offline Judiciary Coaching in Delhi:</b>In Delhi, St. Peter's Law Academy excels in offline judiciary coaching, featuring immersive classroom experiences, direct mentorship, and extensive mock trial practices.</div>
        <div><b>Best Offline Judiciary Coaching in India:</b>St. Peter's Law Academy is recognized across India for its outstanding offline judiciary coaching, offering in-depth lectures, interactive case studies, and personalized coaching sessions.</div>
    </div>
</div>

<!-- why us -->
<div class="bg-gray-100 pb-12">
    <div class="p-12 text-3xl font-semibold text-center">Why Us</div>
    <div class="flex flex-wrap gap-4 items-center justify-center mb-12">

        <div class="flex gap-2 p-2 items-center w-[300px] bg-slate-200 rounded-xl border-2 border-slate-300 shadow-lg shadow-gray-400">
            <div class=" bg-orange-100 p-2 rounded-full"><img src="{{Vite::asset('resources/assets/righthand.png')}}" class="w-6"></div>
            <div class="text-gray-500">
                Best Coaching for Clat in Delhi</div>
        </div>

        <div class="flex gap-2 p-2 items-center w-[300px] bg-slate-200 rounded-xl border-2 border-slate-300 shadow-lg shadow-gray-400">
            <div class="     bg-orange-100 p-2 rounded-full"><img src="{{Vite::asset('resources/assets/righthand.png')}}" class="w-6"></div>
            <div class="text-gray-500">

                Best Hindi Medium Judiciary Coaching</div>
        </div>

        <div class="flex gap-2 p-2 items-center w-[300px] bg-slate-200 rounded-xl border-2 border-slate-300 shadow-lg shadow-gray-400">
            <div class="     bg-orange-100 p-2 rounded-full"><img src="{{Vite::asset('resources/assets/righthand.png')}}" class="w-6"></div>
            <div class="text-gray-500">
                The Best pcs-j Classes in Delhi</div>
        </div>

        <div class="flex gap-2 p-2 items-center w-[300px] bg-slate-200 rounded-xl border-2 border-slate-300 shadow-lg shadow-gray-400">
            <div class="     bg-orange-100 p-2 rounded-full"><img src="{{Vite::asset('resources/assets/righthand.png')}}" class="w-6"></div>
            <div class="text-gray-500">

                Best Judiciary Coaching in Delhi</div>
        </div>

        <div class="flex gap-2 p-2 items-center w-[300px] bg-slate-200 rounded-xl border-2 border-slate-300 shadow-lg shadow-gray-400">
            <div class="     bg-orange-100 p-2 rounded-full"><img src="{{Vite::asset('resources/assets/righthand.png')}}" class="w-6"></div>
            <div class="text-gray-500">

                Best Law Entrance Coaching in Delhi</div>
        </div>

        <div class="flex gap-2 p-2 items-center w-[300px] bg-slate-200 rounded-xl border-2 border-slate-300 shadow-lg shadow-gray-400">
            <div class="     bg-orange-100 p-2 rounded-full"><img src="{{Vite::asset('resources/assets/righthand.png')}}" class="w-6"></div>
            <div class="text-gray-500">

                Best Judiciary Coaching in India</div>
        </div>
    </div>
</div>

<!--faq  -->
<div class="flex flex-col justify-center items-center mb-12 mt-12">
    <div class="p-4 text-4xl font-bold">Frequently Asked Questions</div>
    <div class="w-[80%]">
        <div>
            <div class="accordion-header cursor-pointer p-2 border-2  bg-blue-950 text-white rounded-lg" data-content-id="content1" onclick="toggleAccordion('content1')">
                Can I avail of the Academy's courses from other states?
            </div>
            <div id="content1" class="accordion-content">
                Yes, St. Peter's Law Academy offers online courses and study materials for students across India. Distance is not a barrier to receiving quality education from the Academy.
            </div>
        </div>

        <div>
            <div class="accordion-header cursor-pointer p-2 border-2 border-blue-100 bg-blue-950 text-white rounded-lg" data-content-id="content2" onclick="toggleAccordion('content2')">
                Are there any scholarships available for students?
            </div>
            <div id="content2" class="accordion-content">
                St. Peter's Law Academy believes in providing equal opportunities to all deserving candidates. The Academy offers scholarships and financial aid programs to support students with financial constraints.
            </div>
        </div>

        <div>
            <div class="accordion-header cursor-pointer p-2 border-2 border-blue-100 bg-blue-950 text-white rounded-lg" data-content-id="content3" onclick="toggleAccordion('content3')">
                Do you offer coaching services for Class 11 students preparing for the AILET (All India Law Entrance Test)?
            </div>
            <div id="content3" class="accordion-content">
                Yes, we do have a 2-year program for students of class 11th.
            </div>
        </div>

        <div>
            <div class="accordion-header cursor-pointer p-2 border-2 border-blue-100 bg-blue-950 text-white rounded-lg" data-content-id="content4" onclick="toggleAccordion('content4')">
                What sets St. Peter's Law Academy apart from others academy?
            </div>
            <div id="content4" class="accordion-content">
                The Academy's proven track record of producing successful judges and lawyers further strengthens its position as the best choice for aspiring legal professionals.
            </div>
        </div>

        <div>
            <div class="accordion-header cursor-pointer p-2 border-2 border-blue-100 bg-blue-950 text-white rounded-lg" data-content-id="content5" onclick="toggleAccordion('content5')">
                Do you have options for coaching in Hindi Medium?
            </div>
            <div id="content5" class="accordion-content">
                Yes, we provide coaching in both Hindi & English Medium.
            </div>
        </div>
    </div>
</div>


<!-- imp -->
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
<!-- req a call back -->
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
<!--  -->
@endsection