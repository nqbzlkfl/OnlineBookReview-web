@extends('layouts.homenav')

@section('content')
<!-- Categories -->
<div class="block md:hidden pt-2 pt-3 container mx-auto h-auto w-full">
    <!-- Content Start -->
    <div class="bg-blue-200 border border-b-0 px-4 py-2 flex flex-col justify-center" style="font-family:Mukta">
        <h1 class="text-gray-800 text-center text-2xl font-bold">Category</h1>
    </div>
</div>
<div class="block md:hidden pb-2 container mx-auto h-auto w-full">
    <!-- Content Start -->
    <div class="bg-white border px-4 py-4 flex flex-col justify-center" style="font-family:Mukta">
        <div class="flex md:flex-row justify-center my-2 text-md text-gray-800 font-bold" style="font-family:Mukta">
            <ul class="md:inline-flex text-center md:space-x-4">
                <li class="hidden md:block"><a href="">Art</a></li>
                <li class="hidden md:block">|</li>
                <li class="hidden md:block"><a href="">Business</a></li>
                <li class="hidden md:block">|</li>
                <li class="hidden md:block"><a href="">Comic</a></li>
                <li class="hidden md:block">|</li>
                <li><a href="">Education</a></li>
                <li class="hidden md:block">|</li>
                <li><a href="">Kids</a></li>
                <li class="hidden md:block">|</li>
                <li><a href="">Non Fiction</a></li>
                <li class="hidden lg:block">|</li>
                <li class="hidden lg:block"><a href="">Romance</a></li>
                <li class="hidden md:block">|</li>
                <li><a href="">Science Fiction</a></li>
                <li class="hidden md:block">|</li>
                <li><a href="">Thriller</a></li>
                <li class="hidden md:block">|</li>
                <li><a href="">More Categories</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="flex flex-1 flex-col lg:flex-row h-full w-full lg:mb-0 lg:min-h-0 lg:min-w-0">
        
    <div class="hidden md:block pb-2 lg:pb-0 w-full lg:max-w-sm px-3 flex flex-row lg:flex-col md:fl flex-wrap lg:flex-nowrap my-3">
        <!-- control content left -->
        
        <div class="w-full h-24 min-h-0 min-w-0">
            <div class="bg-blue-200 border rounded-t-md h-auto p-2" title="category" style="font-family:Mukta">
                <h1 class="text-lg font-semibold text-gray-700">Category</h1>
            </div>
            <div class="bg-white border h-64 p-2" title="category" style="font-family:Mukta">
                <div class="py-1">
                    <div class="flex flex-row">
                        <div class="flex flex-1 flex-col ml-4">
                            <ul class="text-md">
                                <li class="py-1">Art</li>
                                <li class="py-1">Education</li>
                                <li class="py-1">Thriller</li>
                                <li class="py-1">Fiction</li>
                                <li class="py-1">Non Fiction</li>
                                <li class="py-1">Kids</li>
                                <li class="py-1">Romannce</li>
                                <li class="py-1">History</li>
                            </ul>
                        </div>
                        <div class="flex flex-1 flex-col">
                            <ul class="text-md">
                                <li class="py-1">Youth</li>
                                <li class="py-1">Comic</li>
                                <li class="py-1">Classics</li>
                                <li class="py-1">Travel</li>
                                <li class="py-1">Adventures</li>
                                <li class="py-1">Fantasy</li>
                                <li class="py-1">Poetry</li>
                                <li class="py-1">Humor</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <div class="h-full w-auto lg:flex-1 px-3 my-3 min-h-0 min-w-0">
        <!-- overflow content right -->
        <div class="bg-gray-100 h-full min-h-0 min-w-0 overflow-auto my-auto">
            <div class="bg-white border h-64 mb-2">
                <div class="flex my-3 h-56 m-2">
                    <div class="flex-initial flex items-center">
                        <a href="{{ url('book/The_Rise_of_Kyoshi') }}">
                        <img class="h-46 w-40 px-2 bg-cover bg-center pointer-events-none" src="{{ asset('img/books/0_zD696-uVHN6t2YXW.jpg') }}" alt="avatar">
                        </a>
                    </div>
                    <div class="flex-1 flex-col items-start top-0 pl-2 my-2 mx-4 justify-between" style="font-family:Mukta">
                        <a href="{{ url('book/The_Rise_of_Kyoshi') }}"><h1 class="text-2xl font-semibold">The Rise of Kyoshi</h1></a>
                        <h1 class="text-lg font-normal">by F.C. Yee, Michael Dante DiMartino</h1>
                        <div class="flex sm:flex-row md:flex-row my-2">
                            <h1 class="text-md font-semibold">4.48 <i class="text-yellow-500 fas fa-star"></i></h1><h1 class="hidden md:block">&nbsp&nbsp|&nbsp&nbspRating details (via GoodReads)</h1>
                        </div>
                        <p class="h-16 hidden md:block text-sm">F. C. Yee’s The Rise of Kyoshi delves into the story of Kyoshi, the Earth Kingdom–born Avatar. The longest-living Avatar in this beloved world’s history, Kyoshi established the brave and respected Kyoshi Warriors, but also  ...</p>
                        <div class="flex md:mt-0 my-2 w-24 bg-gray-50 rounded-md md:relative">
                            <a href="{{ url('book/The_Rise_of_Kyoshi') }}">
                            <button type="button" class="p-2 px-3 text-sm font-semibold shadow-sm border rounded-md hover:bg-blue-100">View Book</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white border h-64 mb-2">
                <div class="flex my-3 h-56 m-2">
                    <div class="flex-initial flex items-center">
                        <img class="h-46 w-40 px-2 bg-cover bg-center pointer-events-none" src="{{ asset('img/books/new3.jpg') }}" alt="avatar">
                    </div>
                    <div class="flex-1 flex-col items-start top-0 pl-2 my-2 mx-4 justify-between" style="font-family:Mukta">
                        <h1 class="text-2xl font-semibold">M3MES: Top 2021 M3MES 5000+</h1>
                        <h1 class="text-lg font-normal">by Justin Ashrith-MEMES</h1>
                        <div class="flex sm:flex-row md:flex-row my-2">
                            <h1 class="text-md font-semibold">5.00 <i class="text-yellow-500 fas fa-star"></i></h1><h1 class="hidden md:block">&nbsp&nbsp|&nbsp&nbspRating details (via GoodReads)</h1>
                        </div>
                        <p class="h-16 hidden md:block text-sm">Unique M3MES, Funny and Hilarious M3MES, Jokes, Humor, Trolls, Epic Fails, Cute M3MES, Spoof, Parody, Funny Faces, Comedy.</p>
                        <div class="flex md:mt-0 my-2 w-24 bg-gray-50 rounded-md md:relative">
                            <button type="button" class="p-2 px-3 text-sm font-semibold shadow-sm border rounded-md hover:bg-blue-100">View Book</button>
                        </div>
                    </div>
                </div>
            </div><div class="bg-white border h-64 mb-2">
                <div class="flex my-3 h-56 m-2">
                    <div class="flex-initial flex items-center">
                        <img class="h-46 w-40 px-2 bg-cover bg-center pointer-events-none" src="{{ asset('img/books/25066780.jpg') }}" alt="avatar">
                    </div>
                    <div class="flex-1 flex-col items-start top-0 pl-2 my-2 mx-4 justify-between" style="font-family:Mukta">
                        <h1 class="text-2xl font-semibold">Ms. Marvel, Vol. 4: Last Days</h1>
                        <h1 class="text-lg font-normal">by G. Willow Wilson (Author), Adrian Alphona (Illustrator)</h1>
                        <div class="flex sm:flex-row md:flex-row my-2">
                            <h1 class="text-md font-semibold">4.42 <i class="text-yellow-500 fas fa-star"></i></h1><h1 class="hidden md:block">&nbsp&nbsp|&nbsp&nbspRating details (via GoodReads)</h1>
                        </div>
                        <p class="h-16 hidden md:block text-sm">From the moment Kamala put on her costume, she's been challenged. But nothing has prepared her for this: the last days of the Marvel Universe. Lucky she's got the help of Carol "Captain Marvel" ...</p>
                        <div class="flex md:mt-0 my-2 w-24 bg-gray-50 rounded-md md:relative">
                            <button type="button" class="p-2 px-3 text-sm font-semibold shadow-sm border rounded-md hover:bg-blue-100">View Book</button>
                        </div>
                    </div>
                </div>
            </div><div class="bg-white border h-64 mb-2">
                <div class="flex my-3 h-56 m-2">
                    <div class="flex-initial flex items-center">
                        <img class="h-46 w-40 px-2 bg-cover bg-center pointer-events-none" src="{{ asset('img/books/new2.jpg') }}" alt="avatar">
                    </div>
                    <div class="flex-1 flex-col items-start top-0 pl-2 my-2 mx-4 justify-between" style="font-family:Mukta">
                        <h1 class="text-2xl font-semibold">The Island Home</h1>
                        <h1 class="text-lg font-normal">by Libby Page</h1>
                        <div class="flex sm:flex-row md:flex-row my-2">
                            <h1 class="text-md font-semibold">4.00 <i class="text-yellow-500 fas fa-star"></i></h1><h1 class="hidden md:block">&nbsp&nbsp|&nbsp&nbspRating details (via GoodReads)</h1>
                        </div>
                        <p class="h-16 hidden md:block text-sm">A tender and uplifting story from the Sunday Times bestselling author of THE LIDO about friendship, community and finding where you truly belong. Lorna's world is small but safe. She loves her daughter, and the two of them is all that matters  ...</p>
                        <div class="flex md:mt-0 my-2 w-24 bg-gray-50 rounded-md md:relative">
                            <button type="button" class="p-2 px-3 text-sm font-semibold shadow-sm border rounded-md hover:bg-blue-100">View Book</button>
                        </div>
                    </div>
                </div>
            </div><div class="bg-white border h-64 mb-2">
                <div class="flex my-3 h-56 m-2">
                    <a href="{{ url('book/Eternals_2021') }}">
                    <div class="flex-initial flex items-center">
                        <img class="h-46 w-40 px-2 bg-cover bg-center pointer-events-none" src="{{ asset('img/books/new5.jpg') }}" alt="avatar">
                    </div>
                    </a>
                    <div class="flex-1 flex-col items-start top-0 pl-2 my-2 mx-4 justify-between" style="font-family:Mukta">
                        <a href="{{ url('book/Eternals_2021') }}">
                        <h1 class="text-2xl font-semibold">Eternals (2021-) #1</h1>
                        </a>
                        <h1 class="text-lg font-normal">by Kieron Gillen, Esad Ribic (Illustrator & Cover)</h1>
                        <div class="flex sm:flex-row md:flex-row my-2">
                            <h1 class="text-md font-semibold">3.80 <i class="text-yellow-500 fas fa-star"></i></h1><h1 class="hidden md:block">&nbsp&nbsp|&nbsp&nbspRating details (via GoodReads)</h1>
                        </div>
                        <p class="h-16 hidden md:block text-sm">NEVER DIE. NEVER WIN. ETERNALS. What's the point of an eternal battle? For millions of years, one hundred Eternals have roamed the Earth, secret protectors of humanity. Without them, we'd be smears between the teeth of the demon-like Deviants  ...</p>
                        <div class="flex md:mt-0 my-2 w-24 bg-gray-50 rounded-md md:relative">
                            <a href="{{ url('book/Eternals_2021') }}">
                            <button type="button" class="p-2 px-3 text-sm font-semibold shadow-sm border rounded-md hover:bg-blue-100">View Book</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div><div class="bg-white border h-64 mb-2">
                <div class="flex my-3 h-56 m-2">
                    <a href="{{ url('book/Harry_Potter_and_the_Chamber_of_Secrets') }}">
                    <div class="flex-initial flex items-center">
                        <img class="h-46 w-40 px-2 bg-cover bg-center pointer-events-none" src="{{ asset('img/books/15881._SY475_.jpg') }}" alt="avatar">
                    </div>
                    </a>
                    <div class="flex-1 flex-col items-start top-0 pl-2 my-2 mx-4 justify-between" style="font-family:Mukta">
                        <a href="{{ url('book/Harry_Potter_and_the_Chamber_of_Secrets') }}">
                        <h1 class="text-2xl font-semibold">Harry Potter and the Chamber of Secrets</h1>
                        </a>
                        <h1 class="text-lg font-normal">by J.K. Rowling, Mary GrandPré (Illustrator)</h1>
                        <div class="flex sm:flex-row md:flex-row my-2">
                            <h1 class="text-md font-semibold">4.43 <i class="text-yellow-500 fas fa-star"></i></h1><h1 class="hidden md:block">&nbsp&nbsp|&nbsp&nbspRating details (via GoodReads)</h1>
                        </div>
                        <p class="h-16 hidden md:block text-sm">ver since Harry Potter had come home for the summer, the Dursleys had been so mean and hideous that all Harry wanted was to get back to the Hogwarts School for Witchcraft and Wizardry. But just as he’s packing his bags, Harry receives ...</p>
                        <div class="flex md:mt-0 my-2 w-24 bg-gray-50 rounded-md md:relative">
                            <a href="{{ url('book/Harry_Potter_and_the_Chamber_of_Secrets') }}">
                            <button type="button" class="p-2 px-3 text-sm font-semibold shadow-sm border rounded-md hover:bg-blue-100">View Book</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col right-0 mt-2 mb-4">
            <div class="flex text-gray-700 justify-center md:justify-end">
                <div class="h-8 w-8 mr-1 flex justify-center items-center rounded-full bg-gray-200 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left w-4 h-4">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </div>
                <div class="flex h-8 font-medium rounded-full bg-gray-200">
                    <div class="w-8 md:flex justify-center items-center hidden  cursor-pointer leading-5 transition duration-150 ease-in  rounded-full bg-blue-600 text-white ">1</div>
                    <div class="w-8 h-8 md:hidden flex justify-center items-center cursor-pointer leading-5 transition duration-150 ease-in rounded-full bg-blue-600 text-white">1</div>
                </div>
                <div class="h-8 w-8 ml-1 flex justify-center items-center rounded-full bg-gray-200 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right w-4 h-4">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>        

    </div>

</div>

<!-- Top Review -->
<div class="py-2 container mx-auto h-auto w-full">
    <!-- Content Start -->
    <div class="bg-white border shadow-sm px-4 py-4 flex flex-col justify-center" style="font-family:Mukta">
        <h1 class="text-gray-800 text-center text-2xl font-bold">Top Review</h1>
        <div class="bg-gray-50 border-t-2 border-b-2 flex md:flex-row justify-center my-2 text-md text-gray-800 font-bold" style="font-family:Mukta">
            <!-- Start -->
            <div class="w-60 md:transform scale-90 hover:scale-105 cursor-pointer my-4">
                <a href="{{ url('book/The_Rise_of_Kyoshi') }}">
                <div class="flex flex-1 bg-white justify-center border-8 rounded-md border m-2 p-2">
                    <div class="bg-black justify-center flex">
                        <h1 class="hidden md:block absolute top-2 left-2 right-2 text-white text-3xl font-extrabold-z-10 text-center mt-32">VIEW</h1>
                        <img class="h-72 bg-cover bg-center hover:opacity-50 z-10 hover:z-0" src="{{ asset('img/books/0_zD696-uVHN6t2YXW.jpg') }}" alt="avatar">
                        <div class="absolute z-20 w-10 bg-red-600 rounded pointer-events-none top-1 left-1 mb-12 justify-center text-center items-center" style="font-family:Mukta">
                            <h1 class="hidden md:block text-3xl text-center font-bold text-white">1</h1>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <!-- End -->
            <!-- Start -->
            <div class="hidden md:block md:w-60 md:transform scale-90 hover:scale-105 cursor-pointer my-4">
                <div class="flex flex-1 bg-white justify-center border-8 rounded-md border m-2 p-2">
                    <a href="{{ url('book/Harry_Potter_and_the_Chamber_of_Secrets') }}">
                    <div class="bg-black justify-center flex">
                        <h1 class="absolute top-2 left-2 right-2 text-white text-3xl font-extrabold-z-10 text-center mt-32">VIEW</h1>
                        <img class="h-72 bg-cover bg-center hover:opacity-50 z-10 hover:z-0" src="{{ asset('img/books/15881._SY475_.jpg') }}" alt="avatar">
                        <div class="absolute z-20 w-10 bg-red-600 rounded pointer-events-none top-1 left-1 mb-12 justify-center text-center items-center" style="font-family:Mukta">
                            <h1 class="hidden md:block text-3xl text-center font-bold text-white">2</h1>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <!-- End -->
            <!-- Start -->
            <div class="hidden md:block md:w-60 md:transform scale-90 hover:scale-105 cursor-pointer my-4">
                <div class="flex flex-1 bg-white justify-center border-8 rounded-md border m-2 p-2">
                    <a href="{{ url('book/Ms_Marvel_Vol4_Last_Days') }}">
                    <div class="bg-black justify-center flex">
                        <h1 class="absolute top-2 left-2 right-2 text-white text-3xl font-extrabold-z-10 text-center mt-32">VIEW</h1>
                        <img class="h-72 bg-cover bg-center hover:opacity-50 z-10 hover:z-0" src="{{ asset('img/books/25066780.jpg') }}" alt="avatar">
                        <div class="absolute z-20 w-10 bg-red-600 rounded pointer-events-none top-1 left-1 mb-12 justify-center text-center items-center" style="font-family:Mukta">
                            <h1 class="hidden md:block text-3xl text-center font-bold text-white">3</h1>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <!-- End -->
            <!-- Start -->
            <div class="hidden md:block md:w-60 md:transform scale-90 hover:scale-105 cursor-pointer my-4">
                <div class="flex flex-1 bg-white justify-center border-8 rounded-md border m-2 p-2">
                    <a href="{{ url('book/The_Hunger_Games') }}">
                    <div class="bg-black justify-center flex">
                        <h1 class="absolute top-2 left-2 right-2 text-white text-3xl font-extrabold-z-10 text-center mt-32">VIEW</h1>
                        <img class="h-72 bg-cover bg-center hover:opacity-50 z-10 hover:z-0" src="{{ asset('img/books/2767052.jpg') }}" alt="avatar">
                        <div class="absolute z-20 w-10 bg-red-600 rounded pointer-events-none top-1 left-1 mb-12 justify-center text-center items-center" style="font-family:Mukta">
                            <h1 class="hidden md:block text-3xl text-center font-bold text-white">4</h1>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <!-- Start -->
            <div class="hidden md:block md:w-60 md:transform scale-90 hover:scale-105 cursor-pointer my-4">
                <div class="flex flex-1 bg-white justify-center border-8 rounded-md border m-2 p-2">
                    <a href="{{ url('book/The_Hunger_Games') }}">
                    <div class="bg-black justify-center flex">
                        <h1 class="absolute top-2 left-2 right-2 text-white text-3xl font-extrabold-z-10 text-center mt-32">VIEW</h1>
                        <img class="h-72 bg-cover bg-center hover:opacity-50 z-10 hover:z-0" src="{{ asset('img/books/3._SY475_.jpg') }}" alt="avatar">
                        <div class="absolute z-20 w-10 bg-red-600 rounded pointer-events-none top-1 left-1 mb-12 justify-center text-center items-center" style="font-family:Mukta">
                            <h1 class="hidden md:block text-3xl text-center font-bold text-white">5</h1>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <!-- End -->
        </div>
    </div>
</div>

<!-- Newly Added -->
<div class="py-2 container mx-auto h-auto w-full">
    <!-- Content Start -->
    <div class="bg-white border shadow-sm px-4 py-4 flex flex-col justify-center" style="font-family:Mukta">
        <h1 class="text-gray-800 text-center text-2xl font-bold">Recently Added</h1>
        <div class="bg-gray-50 border-t-2 border-b-2 flex md:flex-row justify-center my-2 text-md text-gray-800 font-bold" style="font-family:Mukta">
            <!-- Start -->
            <div class="w-60 md:transform scale-90 hover:scale-105 cursor-pointer my-4">
                <div class="flex flex-1 bg-white justify-center border-8 rounded-md border m-2 p-2">
                    <div class="bg-black justify-center flex">
                        <h1 class="hidden md:block absolute top-2 left-2 right-2 text-white text-3xl font-extrabold-z-10 text-center mt-32">VIEW</h1>
                        <img class="h-72 bg-cover bg-center hover:opacity-50 z-10 hover:z-0" src="{{ asset('img/books/new1.jpg') }}" alt="avatar">
                    </div>
                </div>
            </div>
            <!-- End -->
            <!-- Start -->
            <div class="hidden md:block md:w-60 md:transform scale-90 hover:scale-105 cursor-pointer my-4">
                <div class="flex flex-1 bg-white justify-center border-8 rounded-md border m-2 p-2">
                    <div class="bg-black justify-center flex">
                        <h1 class="absolute top-2 left-2 right-2 text-white text-3xl font-extrabold-z-10 text-center mt-32">VIEW</h1>
                        <img class="h-72 bg-cover bg-center hover:opacity-50 z-10 hover:z-0" src="{{ asset('img/books/new2.jpg') }}" alt="avatar">
                    </div>
                </div>
            </div>
            <!-- End -->
            <!-- Start -->
            <div class="hidden md:block md:w-60 md:transform scale-90 hover:scale-105 cursor-pointer my-4">
                <div class="flex flex-1 bg-white justify-center border-8 rounded-md border m-2 p-2">
                    <div class="bg-black justify-center flex">
                        <h1 class="absolute top-2 left-2 right-2 text-white text-3xl font-extrabold-z-10 text-center mt-32">VIEW</h1>
                        <img class="h-72 bg-cover bg-center hover:opacity-50 z-10 hover:z-0" src="{{ asset('img/books/new3.jpg') }}" alt="avatar">
                    </div>
                </div>
            </div>
            <!-- End -->
            <!-- Start -->
            <div class="hidden md:block md:w-60 md:transform scale-90 hover:scale-105 cursor-pointer my-4">
                <div class="flex flex-1 bg-white justify-center border-8 rounded-md border m-2 p-2">
                    <div class="bg-black justify-center flex">
                        <h1 class="absolute top-2 left-2 right-2 text-white text-3xl font-extrabold-z-10 text-center mt-32">VIEW</h1>
                        <img class="h-72 bg-cover bg-center hover:opacity-50 z-10 hover:z-0" src="{{ asset('img/books/new4.jpg') }}" alt="avatar">
                    </div>
                </div>
            </div>
            <!-- Start -->
            <div class="hidden md:block md:w-60 md:transform scale-90 hover:scale-105 cursor-pointer my-4">
                <div class="flex flex-1 bg-white justify-center border-8 rounded-md border m-2 p-2">
                    <div class="bg-black justify-center flex">
                        <h1 class="absolute top-2 left-2 right-2 text-white text-3xl font-extrabold-z-10 text-center mt-32">VIEW</h1>
                        <img class="h-72 bg-cover bg-center hover:opacity-50 z-10 hover:z-0" src="{{ asset('img/books/new5.jpg') }}" alt="avatar">
                    </div>
                </div>
            </div>
            <!-- End -->
        </div>
    </div>
</div>

<!-- Content Part 2 -->
<!-- <div class="py-2">
    <div class="h-auto w-full">
        <div class="container mx-auto">
            <div class="bg-cover bg-top  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://images.unsplash.com/photo-1544144433-d50aff500b91?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80)">
                <p class="font-bold text-sm uppercase">Services</p>
                <p class="text-3xl font-bold">Hello world</p>
                <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
                <a href="#" class="bg-blue-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>
            </div>
        </div> 
    </div>
</div> -->
@endsection