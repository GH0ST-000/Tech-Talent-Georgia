@include('Link.link')
<div class="min-h-full">
    <div class="fixed inset-0 flex z-40 lg:hidden" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-600 bg-opacity-75" aria-hidden="true"></div>
    </div>
    <div class="hidden lg:flex lg:flex-col lg:w-64 lg:fixed lg:inset-y-0 lg:border-r lg:border-gray-200 lg:pt-5 lg:pb-4 lg:bg-gray-900 text-white">
        <div class="flex items-center flex-shrink-0 px-6">
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-purple-500-mark-gray-700-text.svg" alt="Workflow">
        </div>
        <div class="mt-6 h-0 flex-1 flex flex-col overflow-y-auto">
            <div class="px-3 relative inline-block text-left">
                <div>
                    <button type="button" class="group w-full bg-gray-100 rounded-md px-3.5 py-2 text-sm text-left font-medium text-gray-700 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-purple-500" id="options-menu-button" aria-expanded="false" aria-haspopup="true">
            <span class="flex w-full justify-between items-center">
              <span class="flex min-w-0 items-center justify-between space-x-3">
                <img class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0" src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" alt="">
                <span class="flex-1 flex flex-col min-w-0">
                  <span class="text-gray-900 text-sm font-medium truncate">{{Auth::user()->name}}</span>
                  <span class="text-gray-500 text-sm truncate">{{Auth::user()->email}}</span>
                </span>
              </span>
            </span>
                    </button>
                </div>
            </div>
            <nav class="px-3 mt-6">
                <div class="space-y-1">
                    <a href="/user/information" class="bg-gray-200 text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md" aria-current="page">
                        <svg class="text-white mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        Dashboard
                    </a>

                    <a href="/user/show-jobs" class="text-white hover:text-gray-900 hover:bg-gray-50 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                        <svg class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                        </svg>
                        My Jobs
                    </a>

                    <a href="/user/latest" class="text-white hover:text-gray-900 hover:bg-gray-50 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                        <svg class="text-white group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Latest Upload
                    </a>
                    <a href="#" class="text-white hover:text-gray-900 hover:bg-gray-50 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-white group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                        </svg>
                        Statistic
                    </a>
                </div>
                <div class="mt-8">
                    <h3 class="px-3 text-xs font-semibold text-white uppercase tracking-wider" id="desktop-teams-headline">
                        Jobs
                    </h3>
                    <div class="mt-1 space-y-1" role="group" aria-labelledby="desktop-teams-headline">
                        <a href="#" class="group flex items-center px-3 py-2 text-sm font-medium text-white rounded-md hover:text-gray-900 hover:bg-gray-50">
                            <span class="w-2.5 h-2.5 mr-4 bg-indigo-500 rounded-full" aria-hidden="true"></span>
                            <span class="truncate">
                            Engineering
                          </span>
                        </a>

                        <a href="#" class="group flex items-center px-3 py-2 text-sm font-medium text-white rounded-md hover:text-gray-900 hover:bg-gray-50">
                            <span class="w-2.5 h-2.5 mr-4 bg-green-500 rounded-full" aria-hidden="true"></span>
                            <span class="truncate">
                                Human Resources
                              </span>
                        </a>

                        <a href="#" class="group flex items-center px-3 py-2 text-sm font-medium text-white rounded-md hover:text-gray-900 hover:bg-gray-50">
                            <span class="w-2.5 h-2.5 mr-4 bg-yellow-500 rounded-full" aria-hidden="true"></span>
                            <span class="truncate">
                            Customer Success
                          </span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="lg:pl-64 flex flex-col">
        <main class="flex-1">
            <div class="hidden mt-8 sm:block">
               <form action="{{route('add-jobs')}}" method="post" enctype="multipart/form-data" class="max-w-screen-sm mx-auto">
                   @csrf
                   <span class="text-center items-center text-gray-700 text-xl">Add New Job</span>
                   <div class="flex justify-center items-center text-center w-full py-6">
                   <div class="block w-full space-y-6">
                       <div class="w-full w-full border-b border-indigo-600">
                           <input type="file" name="image" class="w-full rounded-md border border-gray-300 hover:border-indigo-700 pb-4">
                       </div>
                       <div class="w-full w-full border-b border-indigo-600">
                           <input type="text" name="company_name" class="w-full rounded-md border border-gray-300 hover:border-indigo-700" placeholder="Company Name">
                       </div>
                       <div class=" w-full border-b border-indigo-600">
                           <input type="number" name="salary" class="w-full rounded-md border border-gray-300 hover:border-indigo-700" placeholder="Salary">
                       </div>
                       <div class=" w-full border-b border-indigo-600">
                           <input type="text" name="tags" class="w-full rounded-md border border-gray-300 hover:border-indigo-700" placeholder="#tags">
                       </div>

                       <div class="w-full border-b border-indigo-600">
                           <input type="text" name="fields" class="w-full rounded-md border border-gray-300 hover:border-indigo-700" placeholder="Fields">
                       </div>
                       <div class="w-full border-b border-indigo-600">
                           <input type="text" name="location" class="w-full outline-0 border-gray-300 hover:border-indigo-700" placeholder="Location">
                       </div>
                       <!--Start-->
                       <div class="flex justify-between border-b border-indigo-700" id="plus" >
                           <span class="text-gray-700 px-3">Description</span>
                           <button onclick="openModal()" type="button">
                           <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                           </svg>
                           </button>
                       </div>
                       <div class="w-full space-y-4 hidden" id="description">
                           <div class="w-full border-b border-indigo-600">
                               <input type="text" name="short_description" class="w-full px-3 py-2 border rounded-md hover:border-indigo-700" placeholder="Company Short Description">
                           </div>
                           <div class="w-full border-b border-indigo-600">
                               <textarea placeholder="Long Description" rows="6" type="text" name="long_description" class="w-full rounded-md border border-gray-300 outline-none hover:border-indigo-700"></textarea>
                           </div>
                       </div>
                       <div class="flex justify-between border-b border-indigo-700"id="pluss">
                           <span class="text-gray-700 px-3">Additional</span>
                           <button onclick="CoreDecription()" type="button">
                               <svg id="plus" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                               </svg>
                           </button>
                       </div>
                       <div class="w-full space-y-4 hidden" id="core-description">
                           <div class="w-full border-b border-indigo-600">
                               <input type="text" name="seniority" class="w-full rounded-md border border-gray-300 hover:border-indigo-700" placeholder="Seniority">
                           </div>
                           <div class="w-full border-b border-indigo-600">
                               <input type="text" name="category" class="w-full rounded-md border border-gray-300 hover:border-indigo-700" placeholder="Category">
                           </div>
                           <div class="w-full border-b border-indigo-600">
                               <input type="text" name="commitment" class="w-full rounded-md border border-gray-300 hover:border-indigo-700" placeholder="Commitment">
                           </div>
                       </div>
                       <div class="hover:bg-indigo-500">
                           <button class="w-full py-6 rounded-lg bg-indigo-600 text-white hove:bg-indigo-300">Add New Job</button>
                       </div>
                   </div>
                   </div>
               </form>
            </div>
        </main>
    </div>
</div>
