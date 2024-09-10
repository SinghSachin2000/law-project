<!-- Modal Structure -->
<div class="modal fade" id="genericModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- Header -->
            <div class="p-4 flex justify-between">
                <div class="text-xl font-semibold">Quick Enquiry</div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Divider -->
            <div class="h-[1px] w-[90%] mx-auto bg-gray-300 mt-2 mb-2"></div>
            <!-- Body -->
            <form  action="{{ route('enquiry.store') }}" method="POST" class="p-4">
            @csrf
                <div class="flex gap-2 p-2 items-center justify-center">
                    <div class="flex flex-col">
                        <label for="name">Name</label>
                        <input type="text" required name="name" id="name" placeholder="Your Name" class="p-2 rounded-lg border border-slate-700 w-[200px]">
                    </div>
                    <div class="flex flex-col">
                        <label for="mobile">Mobile</label>
                        <input type="number" required name="mobile" id="mobile" placeholder="Your mobile" class="p-2 rounded-lg border border-slate-700 w-[200px]">
                    </div>
                </div>

                <div class="flex gap-2 p-2 items-center justify-center">
                    <div class="flex flex-col">
                        <label for="email">E-mail</label>
                        <input type="email" required name="email" id="email" placeholder="E-mail" class="p-2 rounded-lg border border-slate-700 w-[200px]">
                    </div>
                    <div class="flex flex-col">
                        <label for="course">Course</label>
                        <select name="course" id="course" required class="p-2 rounded-lg border border-slate-700 w-[200px]">
                            <option value="D.U LL.B" selected>D.U LL.B</option>
                            <option value="Course 1">Course 1</option>
                            <option value="Course 2">Course 2</option>
                            <option value="Course 3">Course 3</option>
                            <option value="Course 4">Course 4</option>
                            <option value="Course 5">Course 5</option>
                        </select>
                    </div>
                </div>

                <div class="flex gap-2 p-2 items-center justify-center">
                    <div class="flex flex-col">
                        <label for="medium">Select Course Medium</label>
                        <select name="medium" id="medium" required class="p-2 rounded-lg border border-slate-700 w-[200px]">
                            <option value="English" selected>English</option>
                            <option value="Hindi">Hindi</option>
                            <option value="other">Other lang.</option>
                        </select>
                    </div>
                    <div class="flex flex-col">
                        <label for="mode">Select Delivery Mode</label>
                        <select name="mode" id="mode" required class="p-2 rounded-lg border border-slate-700 w-[200px]">
                            <option value="Online" selected>Online</option>
                            <option value="Offline">Offline</option>
                            <option value="Hybrid">Hybrid</option>
                        </select>
                    </div>
                </div>

                <div class="flex items-center justify-center">
                    <div class="flex flex-col">
                        <label for="message">Message</label>
                        <textarea name="message" required placeholder="Message" class="p-2 rounded-lg border border-slate-700 w-[400px]"></textarea>
                    </div>
                </div>

                <!-- Divider -->
                <div class="h-[1px] w-[90%] mx-auto bg-gray-300 mt-2 mb-2"></div>
                
                <!-- Footer -->
                <div class="flex gap-2 float-right">
                    <button type="button" class="p-2 text-center text-white font-medium bg-red-600 rounded-lg" data-dismiss="modal">CLOSE</button>
                    <button type="submit" class="p-2 text-center text-white font-medium bg-blue-900 rounded-lg">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
</div>
