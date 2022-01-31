<x-link></x-link>
<header style="max-width: 1200px;" class="mx-auto">
    <x-main-header></x-main-header>
</header>
<main style="height: 100%">
   <div class="w-full bg-blue-200 " id="show_job">
       <div class="flex justify-start px-64 py-16">
           <h1 class="text-2xl">More Than Company</h1>
       </div>
       <div class="bg-white absolute mx-auto mr-24 right-0 h-full w-1/4 rounded-md ">
           <div class="grid grid-cols-2 gap-2 shadow-md pb-4">
               <div class="ml-4 mt-4 w-12 h-12 rounded-full bg-slate-600 ">
                   <x-svg.field/>
                   <div class="absolute top-0 mt-4 ml-4">
                   <span class="text-gray-300 ml-12">Fields</span><br>
                   <span class="font-semibold ml-12">{{$jobs->fields}}</span>
                   </div>
               </div>
               <div class="ml-4 mt-4 w-12 h-12 rounded-full bg-slate-600 ">
                   <x-svg.field/>
                   <div class="absolute top-0 mt-4 ml-4">
                   <span class="text-gray-300 ml-12">Category</span><br>
                   <span class="font-semibold ml-12">{{$jobs->category}}</span>
                   </div>
               </div>
               <div class="ml-4 mt-4 w-12 h-12 rounded-full bg-slate-600 ">
                   <x-svg.location/>
                   <div class="absolute top-0 mt-20 ml-4">
                   <span class="text-gray-300 ml-12">Location</span><br>
                   <span class="font-semibold ml-12">{{$jobs->location}}</span>
                   </div>
               </div>
               <div class="ml-4 mt-4 w-12 h-12 rounded-full bg-slate-600 ">
                   <x-svg.commitment/>
                   <div class="absolute top-0 mt-20 ml-4">
                   <span class="text-gray-300 ml-12">Commitment</span><br>
                   <span class="font-semibold ml-12">{{$jobs->commitment}}</span>
                   </div>
               </div>
               <div class="ml-4 mt-4 w-12 h-12 rounded-full bg-slate-600 ">
                   <x-svg.seniority/>
                   <div class="absolute top-0 mt-40 ml-4">
                   <span class="text-gray-300 ml-12">Seniority</span><br>
                   <span class="font-semibold ml-12">{{$jobs->seniority}}</span>
                   </div>
               </div>
               <div class="ml-4 mt-4 w-12 h-12 rounded-full bg-slate-600 ">
                   <x-svg.salary></x-svg.salary>
                   <div class="absolute top-0 mt-40 ml-4">
                   <span class="text-gray-300 ml-12">Salary</span><br>
                   <span class="font-semibold ml-12">{{$jobs->salary}}</span>
                   </div>
               </div>
               <div class="flex justify-between items-center text-center">
                       <button class="text-white bg-gray-300 hover:bg-gray-500 flex justify-between items-center text-center px-10 py-3 mt-6 ml-6 rounded-full border space-x-3">
                           <x-svg.share></x-svg.share>
                           <span>Share</span>
                       </button>
                   <a href="applied/{{$jobs->id}}" class="text-white bg-indigo-600 hover:bg-indigo-900 flex justify-between py-3 items-center text-center px-10 whitespace-nowrap mt-6 ml-12 rounded-full border space-x-3">
                       <span>Aply Now</span>
                   </a>
               </div>
           </div>
       </div>
       <div class="ml-64 w-1/2 bg-white rounded-md border" >
           <div class="ml-4 mt-1 flex border-b-2 pb-4">
            <img class="w-28 h-28 rounded-md" src="{{asset('images/'.$jobs->company_logo)}}">
               <div class="block ml-4">
               <p class="text-green-600 text-xl mt-2">{{$jobs->company_name}}</p>
               <p class="font-semibold text-2xl mt-1 whitespace-nowrap">{{$jobs->short_description}}</p>
               <p class="text-blue-600 mt-6">{{$jobs->tags}}</p>
               </div>
               <button id="company" class="hover:bg-indigo-500 focus:bg-indigo-500 px-4 h-12 py-2 bg-gray-300 mr-10 text-white rounded-md mt-10 absolute "> Company</button>
           </div>
           <span class="absolute mt-4  ml-8 font-semibold">Lorem ipsum dolor sit amet.</span>
           <nav class="mt-16 text-sm ml-4">
               <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, vitae.consectetur adipisicing elit. Omnis, vitae</li>
               <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, vitae.consectetur adipisicing elit. Omnis, vitae</li>
               <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, vitae.consectetur adipisicing elit. Omnis, vitae</li>
               <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, vitae.consectetur adipisicing elit. Omnis, vitae</li>
               <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, vitae.consectetur adipisicing elit. Omnis, vitae</li>
               <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, vitae.consectetur adipisicing elit. Omnis, vitae</li>
           </nav>
           <span class="absolute mt-4  ml-8 font-semibold">Lorem ipsum dolor sit amet.</span>
           <nav class="mt-16 text-sm ml-4">
               <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, vitae .</li>
               <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, vitae.</li>
               <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, vitae.</li>
               <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, vitae.</li>
               <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, vitae.</li>
               <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, vitae.</li>
               <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, vitae.</li>
               <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, vitae.</li>
               <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, vitae.</li>
               <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, vitae.</li>
               <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, vitae.</li>
           </nav>
           <span class="absolute mt-4  ml-8 font-semibold">Lorem ipsum dolor sit amet.</span>
           <nav class="mt-16 text-sm ml-4 pb-4">
               <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, vitae.</li>
               <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, vitae.</li>
               <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, vitae.</li>
               <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, vitae.</li>
               <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, vitae.</li>
               <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, vitae.</li>
               <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, vitae.</li>
               <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, vitae.</li>
               <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, vitae.</li>
               <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, vitae.</li>
               <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, vitae.</li>
               <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, vitae.</li>
           </nav>
       </div>
   </div>
   </div>
</main>
<footer class="mt-32">
    <x-footer></x-footer>
</footer>


