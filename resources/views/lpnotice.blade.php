@extends('master')

@section('content')


<div class="bg-blue-950 text-white flex lg:flex-row flex-col items-center justify-center legalpage">
    <!--  -->
    <div class="flex flex-col items-center justify-center  p-6">
        <div class="text-4xl font-semibold">Legal Pendency Notice</div>
        <div class="w-[80%]">Regretfully, the page you are seeking is currently in a legal state of limbo, awaiting due process and refinement. Kindly retry, and if the endeavor proves futile, we humbly request your patience as we diligently work towards a verdict. Just as justice takes time, so does our webpage perfection!</div>
    </div>
    <!--  -->
    <div class=" w-[80%] m-6 p-6 rounded-lg bg-blue-100  text-sky-950">
        <!--  -->
        <div>
            <div class="text-3xl font-semibold pb-2 pt-6">Contact us</div>
            <div class="pb-2">While we intricately shape legal knowledge, seize the moment to connect with us. Fill in your details below, and let the legal discourse begin. Be assured, your information is safeguarded within the bounds of legal confidentiality.
            </div>
        </div>
        <!--  -->
        <form action="{{ route('enquiry.store') }}" method="POST" method="POST">
            @csrf

            <div> <textarea name="message" required placeholder="Message" class="p-2 rounded-lg border border-slate-700 w-[100%] h-[100px]"></textarea></div>

            <div class="flex flex-wrap gap-4 p-2 items-center justify-center">
                <input type="text" required name="name" id="name" placeholder="Your Name" class="p-2 rounded-lg border border-slate-700 w-[200px]">

                <input type="number" required name="mobile" id="mobile" placeholder="Your mobile" class="p-2 rounded-lg border border-slate-700 w-[200px]">

                <input type="email" required name="email" id="email" placeholder="E-mail" class="p-2 rounded-lg border border-slate-700 w-[200px]">

                <select name="course" id="course" required class="p-2 rounded-lg border border-slate-700 w-[200px]">
                    <option value="D.U LL.B" selected>D.U LL.B</option>
                    <option value="Course 1">Course 1</option>
                    <option value="Course 2">Course 2</option>
                    <option value="Course 3">Course 3</option>
                    <option value="Course 4">Course 4</option>
                    <option value="Course 5">Course 5</option>
                </select>

                <select name="medium" id="medium" required class="p-2 rounded-lg border border-slate-700 w-[200px]">
                    <option value="English" selected>English</option>
                    <option value="Hindi">Hindi</option>
                    <option value="other">Other lang.</option>
                </select>

                <select name="mode" id="mode" required class="p-2 rounded-lg border border-slate-700 w-[200px]">
                    <option value="Online" selected>Online</option>
                    <option value="Offline">Offline</option>
                    <option value="Hybrid">Hybrid</option>
                </select>
            </div>
            <button class="m-2 bg-blue-950 text-white rounded-lg p-2 text-center mb-6" type="submit">SEND ENQUIRY</button>
        </form>

    </div>

</div>
@endsection