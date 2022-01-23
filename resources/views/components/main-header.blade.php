
<div class="flex justify-between items-center px-4 py-6 bg-white">
<div class="flex justify-between items-center py-4">
    <div class="flex justify-between items-center">
    <img src="{{asset('image/logo.png')}}" class="rounded-full w-12 h-12">
    <a href="/" class="font-mono px-3 text-gray-600 px-2 hover:text-black"><b class="text-black">Tech</b> Employee</a>
    </div>
    <div class="flex justify-between items-center text-center px-4">
        <div class="w-12 h-12 bg-indigo-300 rounded-full justify-center flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="hover:bg-indigo-500 hover:text-white bi bi-journal-check w-8 h-8 rounded-full mt-2 text-black bg-white" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
            </svg>
        </div>
        <a href="/jobs" class="font-mono text-gray-600 px-2 hover:text-black">Jobs</a>
    </div>
    <div class="flex justify-between items-center text-center ml-2">
        <div class="w-12 h-12 bg-indigo-300 rounded-full justify-center flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class=" hover:bg-indigo-500 hover:text-white bi bi-compass w-8 h-8 rounded-full mt-2 text-black bg-white" viewBox="0 0 16 16">
                <path d="m6.94 7.44 4.95-2.83-2.83 4.95-4.949 2.83 2.828-4.95z"/>
            </svg>
        </div>
        <a href="/course" class="font-mono px-3 text-gray-600 hover:text-black">Courses</a>
    </div>
    <div class="flex justify-between items-center text-center px-5 ">
        <div class="w-12 h-12 bg-indigo-300 rounded-full justify-center flex">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-square w-8 h-8 rounded-full mt-2 text-black bg-white hover:bg-indigo-500 hover:text-white" viewBox="0 0 16 16">
          <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
            </svg>
        </div>
        <a href="/events" class="font-mono px-2 text-gray-600 px-2 hover:text-black">Events</a>
    </div>
    <div class="flex justify-between items-center text-center px-5">
        <div class="w-12 h-12 bg-indigo-300 rounded-full justify-center flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="hover:bg-indigo-500 hover:text-white bi bi-calendar2-check w-8 h-8 rounded-full mt-2 text-black bg-white" viewBox="0 0 16 16">
                <path d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
            </svg>
        </div>
        <a href="/content" class="font-mono px-2 text-gray-600 px-2 hover:text-black">Content</a>
    </div>
</div>
<div class="flex justify-center items-center text-center space-x-6">
    @if (Route::has('login'))
                        @auth
                            <div class="w-12 h-12 rounded-full bg-indigo-300  items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 ml-2 mt-2 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <button class="flex justify-between items-center text-center space-x-2 cursor-pointer" onclick="myFunction()" type="button">
                                <a href="{{route('dashboard')}}" class="text-sm text-gray-700 dark:text-gray-500 cursor-pointer text-lg">{{\Illuminate\Support\Facades\Auth::user()->name ?:""}}</a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                            </button>

                            <div class="absolute mt-12 hidden h-4 " id="modal">
                                <div class="flex justify-center rounded-md bg-gray-50 items-center mt-2 text-center ml-10 space-x-3 px-3 py-2 shadow-lg hover:bg-gray-50" id="dropdown">
                                    <div class="block space-y-2">
                                    <div class="flex justify-between items-center space-x-3 text-center hover:bg-gray-200 hover:text-white">
                                        <a href="/logout" class="text-gray-900"> Log-Out</a>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                        </svg>
                                    </div>
                                    <div class="text-center flex space-x-3 justify-between items-center hover:bg-gray-200" id="dropdown">
                                        <a href="{{route('information')}}" class="text-gray-900">Information</a>
                                        <svg xmlns="http://www.w3.org/2000/svg" className="" fill="none" class="text-indigo-600 h-6 w-6" viewBox="0 0 24 24" stroke="currentColor">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                        <div class="text-center flex space-x-3 justify-between items-center hover:bg-gray-200" id="dropdown">
                                            <a href="#" class="text-gray-900">Add Job</a>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-indigo-600 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <a href="{{ route('login') }}" class="w-24 border px-3 py-3 mr-4 rounded-lg font-mono shadow focus:border-indigo-700 hover:border-indigo-800">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="w-24 border px-3 py-3 rounded-lg font-mono bg-indigo-500 text-white mr-10 shadow focus:bg-indigo-400 hover:border-indigo-800">Register</a>
                            @endif
                        @endauth
                @endif
</div>
</div>




