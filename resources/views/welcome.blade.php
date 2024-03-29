<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <title>Tech Tallant Goergia</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="shortcut icon" href="{{asset('image/logo.png')}}">
        <script src="{{asset('js/profile.js')}}"></script>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
            <body >
            <header class="mx-auto" style="max-width: 1400px;">
             <x-main-header></x-main-header>
            </header>
            <main>
                <div class="main" style="height: 500px">
                    <div class="flex items-center  justify-center text-center py-24">
                        <div class="space-x-6" >
                            <button class="border border-white px-4 py-3 rounded-full p-3 text-white font-mono">All</button>
                            <button class="border border-white px-4 py-3 rounded-full p-3 text-black font-mono bg-white">Development</button>
                            <button class="border border-white px-4 py-3 rounded-full p-3 text-black font-mono bg-white">Design</button>
                            <button class="border border-white px-4 py-3 rounded-full p-3 text-black font-mono bg-white">Marketing</button>
                            <button class="border border-white px-4 py-3 rounded-full p-3 text-black font-mono bg-white">Product</button>
                            <button class="border border-white px-4 py-3 rounded-full p-3 text-black font-mono bg-white">Operation</button>
                            <button class="border border-white px-4 py-3 rounded-full p-3 text-black font-mono bg-white">QA</button>
                        </div>
                    </div>
                    <form class="items-center flex justify-center mx-auto border bg-white rounded-full mt-4" style="max-width: 1200px;">
                        <div class="flex justify-center items-center rounded-lg bg-white px-6 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                            <input class="px-4 py-4 font-mono rounded job" placeholder="Find Your Dream Job">
                            <div class="ml-3 px-12 py-4  border-l-2 block">

                                <select class="px-12 border-white focus:bg-gray-100 rounded-lg font-mono focus:border-white hover:bg-white" >
                                    <option class="">Seniority</option>
                                    <option>Intern</option>
                                    <option>Junior</option>
                                    <option>Middle</option>
                                    <option>Senior</option>
                                    <option>Team Lead</option>
                                    <option>Head</option>
                                </select>
                            </div>
                            <div class="ml-3 px-12 py-4  border-l-2" placeholder=" Search">
                                <select class="px-12 border-white focus:bg-gray-100 rounded-lg font-mono focus:border-white " >
                                    <option>Location</option>
                                    <option>All</option>
                                    <option>Remote</option>
                                    <option>Tbilisi</option>
                                    <option>Kutaisi</option>
                                    <option>Batumi</option>
                                    <option>Relocation</option>
                                </select>
                            </div>
                        </div>
                        <button class="ml-8  border-white bg-indigo-600 rounded-full px-8 py-5 focus:bg-indigo-500 hover:bg-indigo-700 font-mono">Jobs 0</button>
                    </form>
                </div>
                <div class="font-mono text-2xl ml-32 py-8 px-24">
                    <h2>Latest Jobs</h2>
                    <div class="flex justify-start items-center  space-x-16">
                      @foreach($jobs as $job)
                        <div class="flex justify-center items-center mt-8">
                            <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                                <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
                                    <div class="w-full flex items-center justify-between p-6 space-x-6">
                                        <div class="flex-1 truncate">
                                            <div class="flex items-center space-x-3">
                                                <a href="jobs/{{$job->id}}" class="text-gray-900 text-sm font-medium truncate">{{$job->company_name}}</a>
                                                <span class="flex-shrink-0 inline-block px-2 py-0.5 text-green-800 text-xs font-medium bg-green-100 rounded-full">Admin</span>
                                            </div>
                                            <p class="mt-1 text-gray-500 text-sm truncate">{{$job->description}}</p>
                                        </div>
                                        <img class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0" src="{{asset('images/'.$job->company_logo)}}" alt="">
                                    </div>
                                    <div>
                                        <div class="-mt-px flex divide-x divide-gray-200">
                                            <div class="w-0 flex-1 flex">
                                                <a href="mailto:janecooper@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                                                    <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                                    </svg>
                                                    <span class="ml-3">Email</span>
                                                </a>
                                            </div>
                                            <div class="-ml-px w-0 flex-1 flex">
                                                <a href="tel:+1-202-555-0170" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                                                    <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                                    </svg>
                                                    <span class="ml-3">Call</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    @endforeach
                    </div>
                    <button class="mt-6 bg-gray-200 rounded-full text-center items-center w-5/6 ml-6 text-sm py-4 hover:bg-gray-100">Show All</button>
                </div>
                <div class="flex justify-center items-center">
                    <h1 class="text-3xl text-center font-semibold">Welcome to Our Community</h1>
                </div>
                <div class="flex justify-center items-center mt-4">
                    <p>We are a group of people who are gathered around the same idea and passion.<br>
                        We love sharing quality content in our group and help each other grow
                    </p>
                </div>

                <div class="flex justify-center items-center mt-12">
                    <button class="px-4 py-6 bg-indigo-500 rounded-lg">Register Company</button>
                </div>
                <div class="flex justify-center items-center mt-8 space-x-8">
                    <a href="/jobs" class="font-mono">Jobs</a>
                    <a href="/course" class="font-mono">Course</a>
                    <a href="/event" class="font-mono">Event</a>
                    <a href="/content" class="font-mono">Content</a>
                    <a href="#" class="font-mono">Join Now</a>
                    </p>
                </div>

            </main>
            <footer>
                <x-footer></x-footer>
            </footer>
            </body>
</html>
