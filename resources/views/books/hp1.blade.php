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
        
    <div class=" pb-2 lg:pb-0 w-full lg:max-w-xs px-3 flex flex-row lg:flex-col md:fl flex-wrap lg:flex-nowrap my-3">
        <!-- control content left -->
        <div class="w-full h-24 min-h-0 min-w-0">
            <div class="bg-blue-200 border rounded-t-md h-auto mx-auto py-2 flex text-center justify-center" title="category" style="font-family:Mukta">
                <h1 class="text-center text-md font-semibold text-gray-700">Book Cover</h1>
            </div>
            <div class="bg-white border h-92 p-2" title="category" style="font-family:Mukta">
                <div class="py-1">
                    <img class="h-46 w-72 px-2 bg-cover bg-center pointer-events-none" src="{{ asset('img/books/0_zD696-uVHN6t2YXW.jpg') }}" alt="avatar">
                </div>
            </div>

            <div class="bg-blue-200 border rounded-t-md h-auto mx-auto h-92 p-2 md:mt-4" title="category" style="font-family:Mukta">
                <h1 class="text-center text-md font-semibold text-gray-700">Buy Books Here</h1>
            </div>
            <div class="bg-white border h-92 p-2" title="category" style="font-family:Mukta">
                <div class="py-2 text-center">
                    <div class="py-2"><a href=""><button class="border bg-gray-100 text-gray-800 hover:bg-gray-200 p-2 px-3 rounded-md shadow-sm">Book Depository</button></a></div>
                    <div class="py-2"><a href=""><button class="border bg-gray-100 text-gray-800 hover:bg-gray-200 p-2 px-3 rounded-md shadow-sm">Amazon</button></a></div>
                    <div><h1 class="text-gray-500 text-xs text-center">*Not available in Malaysia.</h1></div>
                </div>
            </div>
        </div>
    </div>
        
    <div class="h-full w-auto lg:flex-1 px-3 my-3 min-h-0 min-w-0">
        <!-- overflow content right -->
        <div class="bg-gray-100 h-full min-h-0 min-w-0 overflow-auto my-auto">
            <div class="bg-white border h-auto max-h-full mb-2">
                <div class="flex my-3 m-2">
                    <div class="pl-2 my-2 mx-4" style="font-family:Mukta">
                        <h1 class="text-2xl font-semibold">The Rise of Kyoshi</h1>
                        <h1 class="text-lg font-normal">by F.C. Yee, Michael Dante DiMartino</h1>
                        <div class="flex sm:flex-row md:flex-row my-2">
                            <h1 class="text-md font-semibold">4.48 <i class="text-yellow-500 fas fa-star"></i></h1><h1 class="hidden md:block">&nbsp&nbsp|&nbsp&nbspRating details (via GoodReads)</h1>
                        </div>
                        <h1 class="text-md font-normal mb-1">Synopsis:</h1>
                        <p class="hidden md:block text-md md:text-md pb-2 border-b">F. C. Yee’s The Rise of Kyoshi delves into the story of Kyoshi, the Earth Kingdom–born Avatar. The longest-living Avatar in this beloved world’s history, Kyoshi established the brave and respected Kyoshi Warriors, but also founded the secretive Dai Li, which led to the corruption, decline, and fall of her own nation. The first of two novels based on Kyoshi, The Rise of Kyoshi maps her journey from a girl of humble origins to the merciless pursuer of justice who is still feared and admired centuries after she became the Avatar.</p>
                        <h1 class="text-md font-normal mt-2">Details:</h1>
                        <h1 class="text-md font-normal">Hardcover, 442 pages</h1>
                        <h1 class="text-md font-normal pb-2 border-b">Published July 16th 2019</h1>
                    </div>
                </div>
            </div>
            <div class="bg-blue-200 border rounded-t-md">
                <div class="flex my-2 m-2">
                    <div class="flex-1 flex-col items-start top-0 pl-2 my-2 mx-4 justify-between" style="font-family:Mukta">
                        <h1 class="text-md text-center font-semibold text-gray-700">Review</h1>
                    </div>
                </div>
            </div>
            <div class="bg-white border h-auto max-h-96 mb-2 overflow-x-scroll">
                <div class="flex flex-col my-3 m-2">
                @foreach($review1 as $r1)
                    <div class="flex-col border bg-blue-50 rounded-sm p-2 my-2" style="font-family:Mukta">
                        <div class="flex flex-row">
                            <h1 class="text-md mb-2 text-gray-800">By&nbsp <h1 class="font-semibold">{{$r1->rName}}</h1></h1>
                        </div>
                        <div class="flex flex-row">
                            <h1 class="text-md mb-2 text-gray-800">Rate: {{$r1->rRate}}/5 &nbsp <h1 class="text-yellow-500"><i class="fas fa-star"></i></h1></h1>
                        </div>
                        <h1 class="text-md text-gray-800">Review:</h1>
                        <p class="text-md mb-2 text-gray-800 bg-gray-50 rounded-md border p-1">{{$r1->rComment}}</p>
                        <div class="flex flex-row">
                            <h1 class="text-md mb-2 text-gray-800">Suggestion:&nbsp<h1 class="font-semibold">{{$r1->rSuggestion}}</h1></h1>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>

            <div class="bg-blue-200 border rounded-t-md">
                <div class="flex my-2 m-2">
                    <div class="flex-1 flex-col items-start top-0 pl-2 my-2 mx-4 justify-between" style="font-family:Mukta">
                        <h1 class="text-md text-center font-semibold text-gray-700">Leave Your Review Here</h1>
                    </div>
                </div>
            </div>
            <div class="bg-white border h-auto mb-2">
                <div class="flex my-3 m-2">
                    <div class="flex-1 flex-col items-start top-0 pl-2 my-2 mx-4 justify-between" style="font-family:Mukta">
                        @guest
                            @if (Route::has('login'))
                                <h1 class="text-center mb-1">Please login to leave review here</h1>
                                <div class="flex justify-center items-center mx-auto">
                                    <button type="submit" onclick="window.location='{{ route('login') }}'"
                                    class="btn btn-primary bg-blue-600 hover:bg-blue-700 text-center flex mx-auto">
                                    {{ __('Login') }}
                                    </button>
                                </div>
                            @endif
                        @else
                        <form method="POST" action="/book/The_Rise_of_Kyoshi">
                            @csrf
                            
                            <div class="flex flex-col justify-center mx-auto">
                                <label class="flex md:pl-12 text-md font-semibold" for="rComment">Review:</label>
                                <div class="flex mx-auto">
                                    <textarea class="p-2 border-2 border-gray-700 rounded-md" name="rComment" id="rComment" cols="100" rows="10" placeholder="Leave your thought here .."></textarea>
                                </div>
                            </div>

                            <div class="flex flex-col mt-4 mb-2">
                                <div class="flex-initial mx-auto">
                                    <label class="text-md font-semibold" for="rRate">Rate:</label>
                                    <select name="rRate" id="bRate" class="border rounded text-lg">
                                        <option value="1" required>1 star</option>
                                        <option value="2">2 stars</option>
                                        <option value="3">3 stars </option>
                                        <option value="4">4 stars </option>
                                        <option value="5">5 stars </option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex flex-col mt-4 mb-2">
                                <div class="flex-initial mx-auto">
                                    <label class="text-md font-semibold" for="rSuggestion">Suggestion:</label>
                                    <select name="rSuggestion" id="bSuggestion" class="border rounded text-lg">
                                        <option value="Recommeded" required>Recommended</option>
                                        <option value="Not Recommended">Not Recommended</option>
                                    </select>
                                </div>
                            </div>

                            <input type="hidden" name="rName" id="rName" value="{{ Auth::user()->name }}">
                            <input type="hidden" name="bName" id="bName" value="The Rise of Kyoshi">
                            
                            <div class="form-group row mb-0 mt-4">
                                <div class="flex justify-center items-center mx-auto">
                                    <button type="submit" class="btn btn-primary bg-blue-600 hover:bg-blue-700 text-center flex mx-auto">
                                    {{ __('Review') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        @endguest
                    </div>
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