<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tech Talent Georgia</title>
    <x-link></x-link>
</head>
<body>
@auth
<div class="min-h-full">
  <x-sidebar></x-sidebar>
    <div class="lg:pl-64 flex flex-col">
        <main class="flex-1">
            <x-header></x-header>
            <div class="hidden mt-8 sm:block">
                <div class="align-middle inline-block min-w-full border-b border-gray-200">
                    <table class="min-w-full">
                        <thead>
                        <tr class="border-t border-gray-200">
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <span class="lg:pl-2">Project</span>
                            </th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Members
                            </th>
                            <th class="hidden md:table-cell px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Last updated
                            </th>
                            <th class="pr-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-100">
                        <tr>
                            <td class="px-6 py-3 max-w-0 w-full whitespace-nowrap text-sm font-medium text-gray-900">
                                <div class="flex items-center space-x-3 lg:pl-2">
                                    <div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-pink-600" aria-hidden="true"></div>
                                    <a href="#" class="truncate hover:text-gray-600">
                      <span>
                        GraphQL API
                        <span class="text-gray-500 font-normal">in Engineering</span>
                      </span>
                                    </a>
                                </div>
                            </td>
                            <td class="px-6 py-3 text-sm text-gray-500 font-medium">
                                <div class="flex items-center space-x-2">
                                    <div class="flex flex-shrink-0 -space-x-1">
                                        <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Dries Vincent">

                                        <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Lindsay Walton">

                                        <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Courtney Henry">

                                        <img class="max-w-none h-6 w-6 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Tom Cook">
                                    </div>

                                    <span class="flex-shrink-0 text-xs leading-5 font-medium">+8</span>
                                </div>
                            </td>
                            <td class="hidden md:table-cell px-6 py-3 whitespace-nowrap text-sm text-gray-500 text-right">
                                March 17, 2020
                            </td>
                            <td class="px-6 py-3 whitespace-nowrap text-right text-sm font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>
@else
    <div class="rounded-full bg-gray-900 text-white p-4 max-w-2xl mx-auto mt-32">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-white ml-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-16">
                <h3 class="text-sm font-medium text-white">
                    There Are 2 Reason You Must Do
                </h3>
                <div class="mt-2 text-sm text-white">
                    <ul role="list" class="list-disc pl-5 space-y-1">
                        <li>
                            Go To Login <a class="text-blue-600" href="{{route('login')}}">Here</a>
                        </li>
                        <li>
                            Or Register From <a class="text-blue-600" href="{{route('register')}}">Here</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endauth
</body>
</html>
