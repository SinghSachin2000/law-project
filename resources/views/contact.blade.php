@extends('master')

@section('content')

<div class="resultsec w-full">
    <div class="topp w-full h-[400px] flex flex-col justify-center pl-20" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
        <div class="text-white font-bold text-6xl">Contact With Us</div>
        <div class="text-white flex items-center gap-1">
            <a href="/">Home</a>
            <img src="{{ Vite::asset('resources/assets/greaterthan.png') }}" class="w-3 h-4">
            <span>Contact</span>
        </div>
    </div>
</div>

<div class="flex flex-col lg:flex-row lg:justify-evenly">
    <div>
        <div class="p-4 flex flex-col justify-center items-center">
            <div class="">
                <div class="">
                    <div class="text-4xl font-bold">Contact us</div>
                    <div class=" pb-4">Call or contact us for the course,news and for the other details</div>
                </div>
                <div class="flex items-center">
                    <div class="bg-blue-200 rounded-full m-4"><img src="{{Vite::asset('resources/assets/redlocation.png')}}" class="w-10 p-2"></div>
                    <div>
                        <div class="text-xl font-semibold">Address - Delhi(Head Office)</div>
                        <div>632, Dr. Mukherjee Nagar, Delhi 110009</div>
                    </div>
    
                </div>
    
                <div class="flex items-center">
                    <div class="bg-blue-200 rounded-full m-4"><img src="{{Vite::asset('resources/assets/redlocation.png')}}" class="w-10 p-2"></div>
                    <div>
                        <div class="text-xl font-semibold">
                            Address - Delhi</div>
                        <div>B-17,Commercial Complex,Mukherjee Nagar,Delhi,India-110009</div>
                    </div>
    
                </div>
    
                <div class="flex items-center">
                    <div class="bg-blue-200 rounded-full m-4"><img src="{{Vite::asset('resources/assets/redlocation.png')}}" class="w-10 p-2"></div>
                    <div>
                        <div class="text-xl font-semibold">Address - Haryana</div>
                        <div>Gate No.3, Indira Colony, Atlas Road, Subhas Chownk, Sonipat, Haryana 131001</div>
                    </div>
    
                </div>
    
                <div class="flex items-center">
                    <div class="bg-blue-200 rounded-full m-4"><img src="{{Vite::asset('resources/assets/redcall.png')}}" class="w-10 p-2"></div>
                    <div>
                        <div class="text-xl font-semibold">
                            Phone</div>
                        <div><a>91 9911777917</a></div>
                    </div>
    
                </div>
    
                <div class="flex items-center ">
                    <div class="bg-blue-200 rounded-full m-4"><img src="{{Vite::asset('resources/assets/redemail.png')}}" class="w-10 p-2"></div>
                    <div>
                        <div class="text-xl font-semibold">
                            E-mail</div>
                        <div><a>info@stpeterslaw.com</a></div>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
    
    <div class="flex justify-center items-center">
        <div class="flex flex-col justify-center items-center lg:w-[50%] w-[80%]">
         <form action="{{ route('contact.submit') }}" method="POST"  class="bg-blue-100 p-4 rounded-lg border-2 border-zinc-300">
            @csrf
         <div class="m-2">
             <div class="text-xl text-red-400">Give Us a Message</div>
             <div>Your email address will not be published. Required fields are marked *</div>
         </div>
                <textarea name="message" required placeholder="Message" class="  p-[15px] rounded-lg border border-slate-700 m-2  w-[640px] h-[100px]"></textarea>
                <div>
                    <input type="text" required name="name" placeholder="Name" class="  p-[15px] rounded-lg border border-slate-700 m-2 w-[200px]">
        
                    <input type="number" required name="number" placeholder="Phone"
                        class="  p-[15px] rounded-lg border border-slate-700 m-2 w-[200px]">
        
                    <input type="email" required name="email" placeholder="E-mail"
                        class="  p-[15px] rounded-lg border border-slate-700 m-2 w-[200px]">
        
                </div>
        
                <div class="flex items-center space-x-4">
            <input type="checkbox" id="checkbox" name="terms" 
            value="1" class="form-checkbox h-4 ml-2 w-4 text-blue-600" required/>
            <label for="checkbox" class="text-lg">Agree to terms and conditions</label>
        </div>
        
          <button type="submit" class="bg-blue-600 text-center text-white w-[200px] h-10 rounded-lg mt-2 ml-2">SEND ENQUIRY</button>
         </form>
        
        
        </div>
    </div>
</div>

<div class="flex flex-col justify-center items-center p-4 bg-slate-100">
        <div class="text-4xl font-bold p-2 m-8">Why Us</div>
        <div id="map" class="w-full h-[500px] ">
        </div>
</div>

@endsection
