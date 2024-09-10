<nav class="">
  <div class=" lg:h-12 h-20 bg-blue-900 text-white flex flex-col lg:flex-row items-center lg:justify-evenly">
    <div class="flex gap-4 p-2 ">

      <div class="flex gap-1">
        <img src="{{ Vite::asset('resources/assets/calling.png') }}" width="20px">
        <span>+91 9911777917</span>
      </div>

      <div class="flex gap-1">
        <img src="{{ Vite::asset('resources/assets/location.png') }}" width="20px">
        <span>Head Office : 632, Dr. Mukherjee Nagar, Delhi 110009</span>
      </div>

    </div>
    <div class="flex gap-4">
      <div class="flex gap-1 blink">
        <img src="{{ Vite::asset('resources/assets/reddot.png') }}" width="20px" heigth="10px">
        <span class="text-[#f70015]">LIVE CLASSES</span>
      </div>
      <div class="flex gap-1">
        <img src="{{ Vite::asset('resources/assets/mailicon.png') }}" width="20px" heigth="18px">
        <span>info@stpeterslaw.com</span>
      </div>
      <div class="flex gap-1">
        <img src="{{ Vite::asset('resources/assets/clockicon.png') }}" width="20px" heigth="10px">
        <span>Mon-Sun: 09:00AM - 08:00PM</span>
      </div>
    </div>
  </div>

  <div class="flex p-2 justify-between lg:justify-normal">
    <a href="/">
      <img src="{{ Vite::asset('resources/assets/logolaw.png') }}" width="240px">
    </a>

    <div class=" w-full   hidden lg:flex lg:justify-between ">
      <ul class="  p-2  hidden lg:flex">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/courses" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" onclick="window.location.href='/courses'">
            Courses
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="/courses/judiciary">Judiciary</a></li>
            <li><a class="dropdown-item" href="/courses/clat">CLAT</a></li>
            <li><a class="dropdown-item" href="/courses/cuet">CUET</a></li>
            <li><a class="dropdown-item" href="/swsyllabus">Elearning</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/exams" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" onclick="window.location.href='/exams'">
            Exams
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="/exams/12th">After 12th</a></li>
            <li><a class="dropdown-item" href="/exams/graduation">After Graduation</a></li>
            <li><a class="dropdown-item" href="/exams/llb">After LLB</a></li>
            <li><a class="dropdown-item" href="/exams/law">After Law</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/results">Results</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/blogs">Blogs</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            About us
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="/aboutus">About us</a></li>
            <li><a class="dropdown-item" href="/whyus">Why us</a></li>
            <li><a class="dropdown-item" href="/cwsp">careers At st.peter's</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Free Resources
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="/bare-act">Bare Act</a></li>
            <li><a class="dropdown-item" href="/swsyllabus">State wise syllabus</a></li>
          </ul>
        </li>
      </ul>
      <div class="gap-4 p-2  hidden lg:flex">
        <a class="bg-blue-900 text-white font-medium w-[200px] text-center p-1 rounded-lg cursor-pointer h-8" data-toggle="modal" data-target="#genericModal">QUICK ENQUIRY</a>
        <a class="bg-red-600 text-white font-medium w-[200px] text-center h-8 p-1 rounded-lg cursor-pointer" data-toggle="modal" data-target="#genericModal">DOWNLOAD</a>
      </div>
    </div>

    <div id="openNav" class="p-[10px] shadow-lg w-18  flex flex-col items-center rounded-md lg:hidden float-right  cursor-pointer">
      <div class="flex gap-1 pb-1">
        <div class="w-[6px] h-[6px] bg-red-600 rounded-full"></div>
        <div class="w-[6px] h-[6px] bg-red-600 rounded-full"></div>
        <div class="w-[6px] h-[6px] bg-red-600 rounded-full"></div>
      </div>
      <div class="flex gap-1 pb-1">
        <div class="w-[6px] h-[6px] bg-red-600 rounded-full"></div>
        <div class="w-[6px] h-[6px] bg-red-600 rounded-full"></div>
        <div class="w-[6px] h-[6px] bg-red-600 rounded-full"></div>
      </div>
      <div class="flex gap-1">
        <div class="w-[6px] h-[6px] bg-red-600 rounded-full"></div>
        <div class="w-[6px] h-[6px] bg-red-600 rounded-full"></div>
        <div class="w-[6px] h-[6px] bg-red-600 rounded-full"></div>
      </div>
    </div>
  </div>

  <div class="flex justify-center">
    <div class=" overflow-hidden bg-red-700 w-[90%]">
      <div class="whitespace-nowrap animate-marquee inset-0 flex items-center ">
        <div class="py-2 px-4 text-white">
          New Online & Offline - Batches for Judiciary, CLAT, CUET, and Law Starting Soon | Join Now New Crash Course Batch for Law Entrance Examination | For Registration Call - 89******71 or 89******71 or Send Enquiry.
        </div>
      </div>
    </div>
  </div>

  <!-- Side Navbar -->
  <div id="sideNav" class="fixed top-0 right-0 w-[300px] h-full bg-white transform translate-x-full transition-transform duration-300 lg:hidden z-[60] flex flex-col justify-between shadow-xl shadow-gray-950">
    <div>
      <div class="flex items-center">
        <img src="https://itcodetech.com/stpeterslaw/media/headers/logo_header.png" class="w-[200px] p-2 pt-4">
        <button id="closeNav" class="p-2 font-bold">X</button>
      </div>
      <ul class="mt-8 text-medium" id="navItems">
        <li class="p-2 border-b border-gray-300"><a href="/">Home</a></li>
        <li class="p-2 border-b border-gray-300"><a href="/results">Results</a></li>
        <li class="p-2 border-b border-gray-300"><a href="/blogs">Blogs</a></li>
        <li class="p-2 border-b border-gray-300"><a href="/aboutus">About Us</a></li>
        <li class="p-2 border-b border-gray-300"><a href="/contact">Contact</a></li>
        <li class="p-2 border-b border-gray-300"><a href="/bare-act">Free Resources</a></li>
        <!-- Dropdown Menu -->
        <li class="relative">
  <button class="w-full text-left px-4 py-2 border-b border-gray-300 flex justify-between DropdownMenu" aria-expanded="false">
    <div>Courses</div>
    <div class="bg-gray-500 p-1 text-white rounded-lg w-[30px] text-center">+</div>
  </button>
  <ul class="absolute left-0 hidden bg-white border border-gray-300 mt-1 w-full z-10">
    <li><a class="block px-4 py-2 hover:bg-gray-100" href="/courses">All Courses</a></li>
    <li><a class="block px-4 py-2 hover:bg-gray-100" href="/courses/judiciary">Judiciary</a></li>
    <li><a class="block px-4 py-2 hover:bg-gray-100" href="/courses/clat">CLAT</a></li>
    <li><a class="block px-4 py-2 hover:bg-gray-100" href="/courses/cuet">CUET</a></li>
    <li><a class="block px-4 py-2 hover:bg-gray-100" href="/swsyllabus">Elearning</a></li>
  </ul>
</li>

<li class="relative">
  <button class="w-full text-left px-4 py-2 border-b border-gray-300 flex justify-between DropdownMenu" aria-expanded="false">
    <div>Exams</div>
    <div class="bg-gray-500 p-1 text-white rounded-lg w-[30px] text-center">+</div>
  </button>
  <ul class="absolute left-0 hidden bg-white border border-gray-300 mt-1 w-full z-10">
    <li><a class="block px-4 py-2 hover:bg-gray-100" href="/exams">All Exams</a></li>
    <li><a class="block px-4 py-2 hover:bg-gray-100" href="/exams/12th">After 12th</a></li>
    <li><a class="block px-4 py-2 hover:bg-gray-100" href="/exams/graduation">After Graduation</a></li>
    <li><a class="block px-4 py-2 hover:bg-gray-100" href="/exams/llb">After LLB</a></li>
    <li><a class="block px-4 py-2 hover:bg-gray-100" href="/exams/law">After Law</a></li>
  </ul>
</li>


        <!--  -->
      </ul>
    </div>
    <div class="p-4">
      <div class="flex flex-col items-center ">
        <a class="text-red-500 cursor-pointer hover:text-blue-900">info@stpeterslaw.com</a>
        <a class="text-red-500 cursor-pointer hover:text-blue-900">+91 9911777917</a>
      </div>
      <div class="flex gap-1 items-center justify-center">
        <img src="{{Vite::asset('resources/assets/facebookred.png')}}" alt="" class="w-6">
        <img src="{{Vite::asset('resources/assets/xred.png')}}" alt="" class="w-6">
        <img src="{{Vite::asset('resources/assets/instared.png')}}" alt="" class="w-6">
        <img src="{{Vite::asset('resources/assets/linkedinred.png')}}" alt="" class="w-6">
        <img src="{{Vite::asset('resources/assets/ytred.png')}}" alt="" class="w-6">
      </div>
    </div>
  </div>


</nav>