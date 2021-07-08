<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="icon" href="{{ asset('img/bookreview-icon.ico') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BookReview</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- <style>
    #myBtn {
        display: none; 	
    }
    </style> -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mukta&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

</head>
<body class="antialiased bg-gray-100">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-blue-800 shadow-sm ">
            <div class="container md:mx-18 lg:mx-20">
                <a class="navbar-brand inline-flex text-white font-semibold hover:opacity-95" href="{{ url('/') }}">
                    <img class="pointer-events-none w-8 h-8 my-auto" src="{{ asset('img/bookreview.png') }}" alt="BookReview">
                    <h1 class="my-auto pt-1 text-yellow-400" style="font-family:Varela Round;">Book</h1>
                    <h1 class="my-auto pt-1 text-white" style="font-family:Varela Round;">Review</h1>
                </a>
                <!-- <div class="w-10 h-10">
                    <img class="w-10 h-10" src="{{ asset('img/bookreview.png') }}" alt="">
                </div> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                            <a class="nav-link text-white pl-2 md:transform scale-100 font-normal hover:scale-110 hover:font-bold" 
                               href="{{ url('/') }}">{{ __('Home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white pl-2 md:transform scale-100 font-normal hover:scale-110 hover:font-bold" 
                               href="{{ route('login') }}">{{ __('Category') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto space-x-2">
                        
                        <!-- Search -->
                        <div class="relative my-auto text-gray-600 hidden md:block">
                            <input type="search" name="serch" placeholder="Search" class="bg-white h-8 px-5 pr-10 rounded-full text-sm focus:outline-none md:transform scale-100 hover:scale-105 focus:shadow-xl focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                            <button type="submit" class="absolute right-0 top-0 mt-2 mr-4 sm">
                                <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                                <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                                </svg>
                            </button>
                        </div>

                        <li class="nav-item block md:hidden">
                            <a class="nav-link text-white md:transform scale-100 font-normal hover:scale-110 hover:font-bold" 
                                href="#">{{ __('Search') }}</a>
                        </li>
                        
    
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-white md:transform scale-100 font-normal hover:scale-110 hover:font-bold" 
                                       href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white md:transform scale-100 font-normal hover:scale-110 hover:font-bold" 
                                       href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        
    
    <button class="hidden md:block flex-row rounded-lg py-0.5 px-2 z-10 right-4 bottom-4 text-lg text-gray-500 font-semibold fixed" 
            onclick="topFunction()" id="myBtn" title="Back to top">
            <i class="fas fa-arrow-circle-up mr-1"></i>
            <h1 class="text-gray-500 font-semibold text-xs">Back to Top</h1>
    </button>
    
    <main class="py-0 bg-gray-100 md:mx-18 lg:mx-24">
        @yield('content')
    </main>
    </div>
    
    <!-- Footer 1-->
    <!-- Footer 1-->
    <footer class="footer inset-x-0 bottom-0 relative">
        <div class="footer border-t mt-2 pb-4 bg-white relative md:px-4">
            <div class="mt-2 container mx-auto h-auto w-full">
                <div class="px-0 pt-2 flex flex-col md:mx-auto justify-center">
                    <div class="sm:mt-0 mb-2 sm:w-full flex flex-col md:flex-row md:mx-auto md:w-full justify-between md:justify-center space-y-4 md:space-y-0 md:space-x-12">
                        <div class="flex flex-col md:flex-1 md:w-2/3 md:ml-24">
                            <span class="font-bold text-gray-700 uppercase my-2 md:mt-0 mb-2">About</span>
                            <div class="inline-flex text-white text-lg font-semibold mb-2 -ml-0.5">
                                <img class="pointer-events-none h-10 w-10" src="{{ asset('img/bookreview.png') }}" alt="BookReview">
                                <h1 class="my-auto pt-2 text-yellow-400" style="font-family:Varela Round;">Book</h1>
                                <h1 class="my-auto pt-2 text-gray-500" style="font-family:Varela Round;">Review</h1>
                            </div>
                            <p class="text-sm text-gray-700 font-semibold">
                            Book Review is a web based application build with <a class="font-bold hover:no-underline" href="https://laravel.com/" target="_blank">Laravel Framework</a>,
                            specially created for Final Project BCS3453 Integrated Application Development Framework.
                            </p>
                            <p class="mt-1 text-sm text-gray-700 font-semibold">
                            Designed with <a class="font-bold hover:no-underline" href="https://tailwindcss.com/" target="_blank">Tailwind CSS</a> and <a class="font-bold hover:no-underline" href="https://github.com/alpinejs/alpine" target="_blank">Alphine.js</a>.
                            </p>
                            <p class="mt-1 text-sm text-gray-700 font-semibold">
                            Created by Naqib Zulkifli [CB17051]. 
                            </p>
                        </div>
                        <div class="flex flex-col md:flex-1 md:w-2/3">
                            <span class="font-bold text-gray-700 uppercase my-2 md:mt-0 mb-2">Why need to read?</span>
                            <!-- <div class="inline-flex text-white text-lg font-semibold mb-2 -ml-0.5">
                                <img class="pointer-events-none h-10 w-10" src="{{ asset('img/bookreview.png') }}" alt="BookReview">
                                <h1 class="my-auto pt-2 text-yellow-400" style="font-family:Varela Round;">Book</h1>
                                <h1 class="my-auto pt-2 text-gray-500" style="font-family:Varela Round;">Review</h1>
                            </div> -->
                            <p class="text-sm text-gray-700 font-semibold md:mt-4">
                            Research confirms that student motivation is a key factor in successful reading.
                            However, in order to effectively support reading motivation in the classroom,
                            it is helpful to consider the research on reading motivation and engagement.
                            </p>
                        </div>
                        <div class="flex flex-col md:w-64">
                            <span class="font-bold text-gray-700 uppercase my-2 md:mt-0 mb-2 ">Follow:</span>
                            <a class="hover:no-underline w-4/12" href="https://www.linkedin.com/in/naqibzulkifli/" target="_blank">
                                <p class="text-md mb-1 text-gray-700 hover:text-blue-700 font-semibold">
                                    <i class="fab fa-linkedin mr-1"></i>LinkedIn
                                </p>
                            </a>
                            <a class="hover:no-underline text-gray-700 hover:text-blue-700 w-4/12" href="https://www.instagram.com/naqib_zulkifli" target="_blank">
                                <p class="text-md mb-1 font-semibold">
                                    <i class="fab fa-instagram mr-1"></i>Instagram
                                </p>
                            </a>
                            <a class="hover:no-underline text-gray-700 hover:text-blue-700 w-4/12" href="https://www.facebook.com/nqbzlkfl/" target="_blank">
                                <p class="text-md mb-1 font-semibold">
                                    <i class="fab fa-facebook mr-1"></i>Facebook
                                </p>
                            </a>
                            <span class="font-bold text-gray-700 uppercase my-2 mt-3 md:mt-3 md:mt-0 mb-2">Buy a Book</span>
                            <a class="hover:no-underline hover:text-blue-700 w-4/12" href="https://www.linkedin.com/in/naqibzulkifli/" target="_blank">
                                <p class="text-md mb-1 font-semibold">
                                    Shop here
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer bg-blue-800 relative md:px-4">
            <div class="container mx-auto md:px-4">
                <div class="mt flex flex-col items-center">
                    <div class="sm:w-2/3 text-center py-6 text-white">                    
                    <img class="pointer-events-none mx-4 h-9 w-9 flex mx-auto mb-2 fill-current text-green-600" src="{{ asset('img/nqbzlkfl-w.png') }}" alt="Brand">
                        <p class="text-xs font-semibold mx-2">
                            © 2021 BookReview. All rights reserved. | Privacy Policy | <a class="hover:no-underline" href="https://www.linkedin.com/in/naqibzulkifli/" target="_blank">Contact</a>
                        </p>
                        <p class="text-xs font-semibold mx-2">
                            Purposely created by Naqib Zulkifli for Final Project only.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

<script>

var mybutton = document.getElementById("myBtn");
window.onscroll = function() {scrollFunction()};
/* mybutton.style.display = "none"; */

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.main.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

var cont=0;
function loopSlider(){
  var xx= setInterval(function(){
        switch(cont)
        {
        case 0:{
            $("#slider-1").fadeOut(400);
            $("#slider-2").delay(400).fadeIn(400);
            $("#sButton1").removeClass("bg-blue-800");
            $("#sButton2").addClass("bg-blue-800");
        cont=1;
        
        break;
        }
        case 1:
        {
        
            $("#slider-2").fadeOut(400);
            $("#slider-1").delay(400).fadeIn(400);
            $("#sButton2").removeClass("bg-blue-800");
            $("#sButton1").addClass("bg-blue-800");
           
        cont=0;
        
        break;
        }
        
        
        }},8000);

}

function reinitLoop(time){
clearInterval(xx);
setTimeout(loopSlider(),time);
}

function sliderButton1(){

$("#slider-2").fadeOut(400);
$("#slider-1").delay(400).fadeIn(400);
$("#sButton2").removeClass("bg-blue-800");
$("#sButton1").addClass("bg-blue-800");
reinitLoop(4000);
cont=0
    
}
    
function sliderButton2(){
$("#slider-1").fadeOut(400);
$("#slider-2").delay(400).fadeIn(400);
$("#sButton1").removeClass("bg-blue-800");
$("#sButton2").addClass("bg-blue-800");
reinitLoop(4000);
cont=1
    
}

$(window).ready(function(){
    $("#slider-2").hide();
    $("#sButton1").addClass("bg-blue-800");
        
    loopSlider();
});

</script>
</html>
