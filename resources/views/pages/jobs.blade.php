<x-link></x-link>
<header class="mx-auto" style="max-width: 1500px">
    <x-main-header></x-main-header>
</header>
<div class=" mx-auto mt-6 bg-gray-50 border-b" style="max-width: 1500px">
  <h1 class=" font-medium text-4xl px-4 py-3">Find a job that suits your passion</h1>
    <div class="flex justify-start items-center mt-10 text-center space-x-12 mx-6">
        <button class="border border-white px-4 py-3 rounded-full p-3 text-white font-mono bg-indigo-700">All</button>
        <button class="border border-white px-4 py-3 rounded-full p-3 text-black font-mono bg-white bg-gray-300">Development</button>
        <button class="border border-white px-4 py-3 rounded-full p-3 text-black font-mono bg-white bg-gray-300">Design</button>
        <button class="border border-white px-4 py-3 rounded-full p-3 text-black font-mono bg-white bg-gray-300">Marketing</button>
        <button class="border border-white px-4 py-3 rounded-full p-3 text-black font-mono bg-white bg-gray-300">Product</button>
        <button class="border border-white px-4 py-3 rounded-full p-3 text-black font-mono bg-white bg-gray-300">Operation</button>
        <button class="border border-white px-4 py-3 rounded-full p-3 text-black font-mono bg-white bg-gray-300">QA</button>
    </div>
    <div class="flex justify-center w-full mt-4" id="form">
        <form class="items-center flex justify-between mx-auto border bg-white mt-4 w-full px-3" id="job">
            <div class="flex justify-center items-center rounded-lg bg-white px-6 py-2">
                <div class="h-8 w-8 rounded-full bg-gray-300 mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search  mt-2 ml-2 text-white" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </div>
                <input class="px-4 py-4 font-mono rounded job" placeholder="Find Your Dream Job">
                <div class="ml-64 px-12 py-4  border-l-2 block">

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
                <div class="ml-32 px-12 py-4  border-l-2" placeholder=" Search">
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
            <button class="mr-10 border-white bg-indigo-600 job px-8 py-5 focus:bg-indigo-500 hover:bg-indigo-700 font-mono">{{$jobs->count()}}</button>
        </form>
    </div>
</div>
@foreach($jobs as $job)
<div class="mx-auto mt-6 flex" style="max-width: 1500px;">
<div class="grid grid-cols-3 gap-3 border px-4 items-center text-center w-full py-4 w-screen" id="jobs">
    <div class="flex items-center">
        <img class="w-12 h-12 rounded-full ml-5" src="{{asset('images/'.$job->company_logo)}}">
        <div class="ml-4 flex space-x-3 text-center items-center">
            <a href="/show-more/{{$job->id}}" class="text-md font-semibold">{{$job->short_description}}</a><br>
            <a class="text-gray-300 left-0">{{$job->company_name}}</a>
        </div>
    </div>
    <div class="flex items-center border-l-2">
        <img class="w-12 h-12 rounded-full ml-5" src="https://s3.eu-central-1.amazonaws.com/public.temicloud.io/images/uploads/0c064a70-52bc-4aee-9e63-31f7512b3427.png?q=80">
        <div class="ml-4">
            <span class="text-sm text-indigo-600">{{$job->tags}}</span><br>
            <div class="w-2 h-2 rounded-full bg-green-300 mt-1 flex justify-start text-center items-center">
            <span class="text-xs text-gray-300 whitespace-nowrap ml-3">{{$job->created_at}}</span>
            </div>
        </div>
    </div>
    <div class="border-l-2 space-x-3 ml-36">
       <button class="px-8 py-3 bg-gray-300 text-white salary">{{$job->salary}}</button>
       <button class="px-8 py-3 bg-indigo-700 text-white salary">Detail</button>
    </div>
</div>

</div>
@endforeach
<div class="mx-auto mt-6 flex text-center items-center" style="max-width: 1500px;">
<button class=" bg-gray-100 border px-4 items-center text-center w-full py-4 w-screen" id="jobs">
   Show More
</button>
</div>



<div class="flex text-center items-center justify-center mt-4">
<p>We are a group of people who are gathered around the same idea and passion.<br>
    We love sharing quality content in our group and help each other grow
</p>
</div>

<div class="flex justify-center items-center mt-12">
    <button class="px-4 py-6 bg-indigo-500 rounded-lg">Register Company</button>
</div>
<div class="flex justify-center items-center mt-8 space-x-8">
    <a href="#" class="font-mono">Jobs</a>
    <a href="#" class="font-mono">Course</a>
    <a href="#" class="font-mono">Event</a>
    <a href="#" class="font-mono">Content</a>
    <a href="#" class="font-mono">Join Now</a>
    </p>
</div>
<footer class="border-t mt-3">
   <x-footer></x-footer>
</footer>
