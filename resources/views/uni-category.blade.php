@extends('layouts.homenav')

@section('content')
<!-- Categories -->
<div class="py-2 pt-3 container mx-auto h-auto w-full">
    <!-- Content Start -->
    <div class="bg-white border px-4 py-4 flex flex-col justify-center" style="font-family:Mukta">
        <h1 class="text-gray-800 text-center text-2xl font-bold">Browse by Categories</h1>
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
        
    <div class="h-full w-auto lg:flex-1 px-3 my-3 min-h-0 min-w-0">
        <div class="bg-green-200 h-full min-h-0 min-w-0 overflow-auto">
            <div class="bg-white border h-80"></div>
        </div>
    </div>    
    <div class="hidden md:block pb-2 lg:pb-0 w-full lg:max-w-sm px-3 flex flex-row lg:flex-col md:fl flex-wrap lg:flex-nowrap my-3">
        <div class="w-full h-24 min-h-0 min-w-0">
            <div class="bg-white border h-64 p-2" title="category" style="font-family:Mukta">
                <div class="py-1">
                    test
                </div>
            </div>
        </div>
    </div>
    

</div>

<!-- Top Review -->
<div class="py-2 container mx-auto h-auto w-full">
    <!-- Content Start -->
    <div class="bg-white border px-4 py-4 flex flex-col justify-center" style="font-family:Mukta">
        <h1 class="text-gray-800 text-center text-2xl font-bold">Top Review</h1>
        <div class="bg-gray-50 border-t-2 border-b-2 flex md:flex-row justify-center my-2 text-md text-gray-800 font-bold" style="font-family:Mukta">
            <!-- Start -->
            <div class="w-60 md:transform scale-90 hover:scale-105 cursor-pointer my-4">
                <div class="flex flex-1 bg-white justify-center border-8 rounded-md border m-2 p-2">
                    <div class="bg-black justify-center flex">
                        <h1 class="hidden md:block absolute top-2 left-2 right-2 text-white text-3xl font-extrabold-z-10 text-center mt-32">VIEW</h1>
                        <img class="h-72 bg-cover bg-center hover:opacity-50 z-10 hover:z-0" src="{{ asset('img/books/0_zD696-uVHN6t2YXW.jpg') }}" alt="avatar">
                        <div class="absolute z-20 w-10 bg-red-600 rounded pointer-events-none top-1 left-1 mb-12 justify-center text-center items-center" style="font-family:Mukta">
                            <h1 class="hidden md:block text-3xl text-center font-bold text-white">1</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End -->
            <!-- Start -->
            <div class="hidden md:block md:w-60 md:transform scale-90 hover:scale-105 cursor-pointer my-4">
                <div class="flex flex-1 bg-white justify-center border-8 rounded-md border m-2 p-2">
                    <div class="bg-black justify-center flex">
                        <h1 class="absolute top-2 left-2 right-2 text-white text-3xl font-extrabold-z-10 text-center mt-32">VIEW</h1>
                        <img class="h-72 bg-cover bg-center hover:opacity-50 z-10 hover:z-0" src="{{ asset('img/books/15881._SY475_.jpg') }}" alt="avatar">
                        <div class="absolute z-20 w-10 bg-red-600 rounded pointer-events-none top-1 left-1 mb-12 justify-center text-center items-center" style="font-family:Mukta">
                            <h1 class="hidden md:block text-3xl text-center font-bold text-white">2</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End -->
            <!-- Start -->
            <div class="hidden md:block md:w-60 md:transform scale-90 hover:scale-105 cursor-pointer my-4">
                <div class="flex flex-1 bg-white justify-center border-8 rounded-md border m-2 p-2">
                    <div class="bg-black justify-center flex">
                        <h1 class="absolute top-2 left-2 right-2 text-white text-3xl font-extrabold-z-10 text-center mt-32">VIEW</h1>
                        <img class="h-72 bg-cover bg-center hover:opacity-50 z-10 hover:z-0" src="{{ asset('img/books/25066780.jpg') }}" alt="avatar">
                        <div class="absolute z-20 w-10 bg-red-600 rounded pointer-events-none top-1 left-1 mb-12 justify-center text-center items-center" style="font-family:Mukta">
                            <h1 class="hidden md:block text-3xl text-center font-bold text-white">3</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End -->
            <!-- Start -->
            <div class="hidden md:block md:w-60 md:transform scale-90 hover:scale-105 cursor-pointer my-4">
                <div class="flex flex-1 bg-white justify-center border-8 rounded-md border m-2 p-2">
                    <div class="bg-black justify-center flex">
                        <h1 class="absolute top-2 left-2 right-2 text-white text-3xl font-extrabold-z-10 text-center mt-32">VIEW</h1>
                        <img class="h-72 bg-cover bg-center hover:opacity-50 z-10 hover:z-0" src="{{ asset('img/books/2767052.jpg') }}" alt="avatar">
                        <div class="absolute z-20 w-10 bg-red-600 rounded pointer-events-none top-1 left-1 mb-12 justify-center text-center items-center" style="font-family:Mukta">
                            <h1 class="hidden md:block text-3xl text-center font-bold text-white">4</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start -->
            <div class="hidden md:block md:w-60 md:transform scale-90 hover:scale-105 cursor-pointer my-4">
                <div class="flex flex-1 bg-white justify-center border-8 rounded-md border m-2 p-2">
                    <div class="bg-black justify-center flex">
                        <h1 class="absolute top-2 left-2 right-2 text-white text-3xl font-extrabold-z-10 text-center mt-32">VIEW</h1>
                        <img class="h-72 bg-cover bg-center hover:opacity-50 z-10 hover:z-0" src="{{ asset('img/books/3._SY475_.jpg') }}" alt="avatar">
                        <div class="absolute z-20 w-10 bg-red-600 rounded pointer-events-none top-1 left-1 mb-12 justify-center text-center items-center" style="font-family:Mukta">
                            <h1 class="hidden md:block text-3xl text-center font-bold text-white">5</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End -->
        </div>
    </div>
</div>

<!-- Newly Added -->
<div class="py-2 container mx-auto h-auto w-full">
    <!-- Content Start -->
    <div class="bg-white border px-4 py-4 flex flex-col justify-center" style="font-family:Mukta">
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