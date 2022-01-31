<x-link></x-link>
<header class="mx-auto" style="max-width: 1300px;">
    <x-main-header></x-main-header>
</header>
<form class="mx-auto flex w-1/3 space-y-12">
    @csrf
    <div class="block w-full space-y-8">
        <span class="text-center text-gray-300 text-xl mx-auto">Start Your Carrier Now</span>
    <div class=" border-b border-indigo-500">
    <input class="w-full rounded-md" type="text" name="firstname" value="" placeholder="User Firstname">
    </div>
    <div class="border-b border-indigo-500">
        <input class="rounded-md w-full" type="text" name="lastname" value="" placeholder="User Lastname">
    </div>
        <div class="border-b border-indigo-500">
            <input class="rounded-md w-full" type="text" name="firstname" value="" placeholder="User Firstname">
        </div>
        <div class="border-b border-indigo-500">
            <input class="rounded-md w-full" type="file" name="pdf" value="" placeholder="Upload CV">
        </div>
        <div class="w-full py-4">
            <a href="#" class="rounded-md w-64 bg-indigo-600 text-white px-4 py-3">Submit</a>
        </div>
    </div>
</form>
<div class="flex justify-center items-center mt-16">
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
<footer  class="mx-auto" style="max-width: 1800px;">
    <x-footer></x-footer>
</footer>
