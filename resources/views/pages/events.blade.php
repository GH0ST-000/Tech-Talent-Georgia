<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">
<header class="mx-auto" style="max-width: 1500px">
    @include('Header.header')
</header>
<div class=" mx-auto" style="max-width: 1500px;">
    <div class="text-2xl px-4 font-semibold pb-4">
        <h1>Latest Events</h1>
    </div>
    <div class="grid grid-rows-3 grid-flow-col gap-4">
        <div class="row-start-1 row-end-4 rounded bg-white shadow " style="max-width: 350px;">
            <div class="flex items-center py-5 border-b border-gray-100">
                <img class="w-12 h-12 rounded-full ml-5" src="https://s3.eu-central-1.amazonaws.com/public.temicloud.io/images/uploads/0c064a70-52bc-4aee-9e63-31f7512b3427.png?q=80">
                <div class="ml-4">
                    <a href="#" class="text-md font-semibold">Intro To Software Development</a><br>
                    <a class="text-gray-300 mr-24">Digital Institute</a>
                </div>
            </div>
            <div class="flex justify-center items-center text-center mt-10 mx-auto text-sm text-gray-500 ml-3 mr-3" style="max-width:350px;">

                მიიღე სწორი კარიერული გადაწყვეტილება და დარეგისტრირდი Intro To Software Development -ის ორთვიან კურსზე!
                <br>
                <br>
                <br>
                <br>
                გაიჩინე მეტი შემოსავლის წყარო - მოკლე დროში.
                <br>
                <br>
                <br>
                კურსი განკუთვნილია:

                დამწყებთათვის, რომლებსაც სურთ 0-დან ისწავლონ დეველოპმენტი ან/და გაიღრმავონ არსებული ცოდნა ამ სფეროში.
                <br>
                <br>
                <br>
                არ არის საჭირო მათემატიკური ცოდნა
                <br>
                <br>
                <br>

                კურსის გავლის შემდეგ:
                <br>
                <br>
                <br>

                გექნება საბაზისო ცოდნა software development -ის სფეროში;
                <br>
                <br>
                <br>
                ისწავლი HTML, CSS და Javascript ტექნოლოგიებს და შეგეძლება მცირე და საშუალო ზომის ვებ გვერდების აწყობა;
            </div>
            <div class="pb-4 ">
            <button class="px-8 py-2 bg-indigo-700 hover:bg-indigo-900 hover:rounded-md text-white text-center ml-24 rounded-full mt-6 items-center ">Show Detail</button>
            </div>

        </div>
        <div class="row-start-1 row-end-4 " style="max-width: 500px;">
        </div>
        <div class="row-start-1 row-end-4 " style="max-width: 500px;">
        </div>
    </div>
</div>




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
    @include('Footer.footer')
</footer>
