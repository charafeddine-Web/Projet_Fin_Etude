<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    <!--<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />-->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
 <!---->
<body class= "container   bg-cover bg-center  " style="background-image: url('/wave-haikei.svg') ">

<!-- <div >-->
    <div class="">
        <nav class="">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 rounded-2xl  backdrop bg-black opacity-80">
                <div class="flex items-center justify-between h-16">
                <div class="flex-shrink-0 text-white  ">
               <a href="{{ url('/') }}"> <h2 class="font-bold text-2xl">OF<span class="bg-[#ffffff] text-black px-2 rounded-md">PPT</span></h2></a>
                        
                        </div>
                    <div class="flex items-center">
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-12">
                            <a href="{{ url('/') }}"  class="smky-btn3 relative hover:text-black py-2 px-3 after:absolute after:h-1 after:hover:h-[200%] transition-all duration-500 hover:transition-all hover:duration-500 after:transition-all after:duration-500 after:hover:transition-all after:hover:duration-500 overflow-hidden z-20 after:z-[-20] after:bg-[#42be42] after:rounded-t-full after:w-full after:bottom-0 after:left-0 text-white text-l  " 
                            >Home</a>
                            <a href="{{ route('emploi') }}" class="smky-btn3 relative hover:text-black py-2 px-3 after:absolute after:h-1 after:hover:h-[200%] transition-all duration-500 hover:transition-all hover:duration-500 after:transition-all after:duration-500 after:hover:transition-all after:hover:duration-500 overflow-hidden z-20 after:z-[-20] after:bg-[#42be42]  after:rounded-t-full after:w-full after:bottom-0 after:left-0 text-white text-l"
                            >Emploi</a>
                            <a href="{{ route('About') }}" class="smky-btn3 relative hover:text-black py-2 px-3 after:absolute after:h-1 after:hover:h-[200%] transition-all duration-500 hover:transition-all hover:duration-500 after:transition-all after:duration-500 after:hover:transition-all after:hover:duration-500 overflow-hidden z-20 after:z-[-20] after:bg-[#42be42]  after:rounded-t-full after:w-full after:bottom-0 after:left-0 text-white text-l "
                            >About</a>
                            <a href="{{ route('contact') }}" class="smky-btn3 relative hover:text-black py-2 px-3 after:absolute after:h-1 after:hover:h-[200%] transition-all duration-500 hover:transition-all hover:duration-500 after:transition-all after:duration-500 after:hover:transition-all after:hover:duration-500 overflow-hidden z-20 after:z-[-20] after:bg-[#42be42]  after:rounded-t-full after:w-full after:bottom-0 after:left-0 text-white text-l"
                            >Contact</a>
                            </div>
                        </div>
                    </div>
                      

                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            @if (Route::has('login'))
                            @auth
                            <button class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-black">
                                <span class="sr-only">View notifications</span>
                                <!-- Heroicon name: outline/bell -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                            </button>
                            <!-- Profile dropdown -->
                            <div x-data="{show: false}" x-on:click.away="show = false" class="ml-3 relative">
                                <div>
                                    <button x-on:click="show=!show" type="button" class="max-w-xs  rounded-full flex items-center text-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-black" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-8 w-8 rounded-full" src="/admin.png" alt="">
                                        <div class="text-base font-medium leading-none text-white">{{ auth()->user()->name }}</div></br>
                                    </button>
                                </div>
                                <div x-show="show" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-black ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                                    <a href="{{ route('userprofile') }}" class="block px-4 py-2 text-sm text-gray-100" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
 
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-100" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
 
                                    <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-100" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                                </div>
                            </div>
                            @else
                            <a href="{{ route('login') }}" class="inline-flex items-center px-4 py-2 ml-4 text-green-500 font-bold border border-blue-500 rounded-lg hover:bg-green-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Log in<span aria-hidden="true">&rarr;</span></a>
 
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="inline-flex items-center px-4 py-2 ml-4 text-green-500 font-bold border border-blue-500 rounded-lg  hover:bg-green-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Register<span aria-hidden="true">&rarr;</span></a>
                            @endif
                            @endauth
                            @endif
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden" >
                        <!-- Mobile menu button -->
                        
                        <button type="button" class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-black hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-black" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="md:hidden" id="mobile-menu" >
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                    <a href="{{ url('/') }}" class="   text-white  hover:bg-green-400 hover:text-white  block px-3 py-2 rounded-md text-base font-medium">Home</a>
                    <a href="{{ route('emploi') }}" class="text-gray-300  hover:bg-green-400 hover:text-white   block px-3 py-2 rounded-md text-base font-medium">Emploi</a>
                    <a href="{{ route('About') }}" class="text-gray-300   hover:bg-green-400 hover:text-white  block px-3 py-2 rounded-md text-base font-medium">About</a>
                    <a href="{{ route('contact') }}" class="text-gray-300  hover:bg-green-400 hover:text-white   block px-3 py-2 rounded-md text-base font-medium">Contact</a>

                </div>
                
                <div class="pt-4 pb-3 border-t border-gray-700">
                @if (Route::has('login'))
                @auth
                    <div class="flex items-center px-5">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full" src="/admin.png" alt="">
                        </div>
                        <div class="ml-3">
                            <div class="text-base font-medium leading-none text-white">{{isset( auth()->user()->name )?"Admin":"" }}</div>
                            <div class="text-sm font-medium leading-none text-gray-400">{{isset(auth()->user()->email)?"":""  }}</div>
                        </div>
                        <button class="ml-auto bg-gray-800 flex-shrink-0 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-black">
                            <span class="sr-only">View notifications</span>
                            <!-- Heroicon name: outline/bell -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-3 px-2 space-y-1">
                        <a href="{{ route('userprofile') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Your Profile</a>
 
                        <a href="" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Settings</a>
 
                        <a href="{{ route('logout') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Sign out</a>
                    </div>
                </div>
                @else
                    <a href="{{ route('login') }}" class="inline-flex items-center px-4 py-2 ml-4 text-green-500 hover:bg-green-400 hover:text-white font-bold border border-blue-500 rounded-lg  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Log in<span aria-hidden="true">&rarr;</span></a>
 
                @if (Route::has('register'))
                   <a href="{{ route('register') }}" class="inline-flex items-center px-4 py-2 ml-4 text-green-500 hover:bg-green-400 hover:text-white font-bold border border-blue-500 rounded-lg  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Register<span aria-hidden="true">&rarr;</span></a>
                @endif
                @endauth
                @endif
            </div>
        </nav>

        <main>
            <div class="mt-20"> @yield('contents') </div>
        </main>
        


       <!-- component Footer -->

    <head>
    </head>
    <body class="">    
        <div class="flex flex-col mx-3  rounded-lg">
           <div class="w-full draggable">
    <div class="container flex flex-col mx-auto">
      <div class="flex flex-col items-center w-full my-20">
            <h1 class=" dark:text-white mb-10 text-3xl font-extrabold"> OF<span class="bg-[#2bad3f] text-white px-2 rounded-md">PPT</span></h1>

        <div class="flex flex-col items-center gap-6 mb-8">
          <div class="flex flex-wrap items-center justify-center gap-5 lg:gap-12 gap-y-3 lg:flex-nowrap text-dark-grey-900">
            <a href="{{ url('/') }}" class="text-white hover:text-gray-200">home</a>
            <a href="{{ route('emploi') }}" class="text-white hover:text-gray-200">emploi</a>
            <a href="{{ route('About') }}" class="text-white hover:text-gray-200">about</a>
            <a href="{{ route('contact') }}" class="text-white hover:text-gray-200">contact</a>
    
          </div>
          <div class="flex items-center gap-8">
          <a href="https://github.com/charafeddine-Web" class="text-grey-700 text-white hover:opacity-10">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M12 3C7.0275 3 3 7.13211 3 12.2284C3 16.3065 5.5785 19.7648 9.15375 20.9841C9.60375 21.0709 9.76875 20.7853 9.76875 20.5403C9.76875 20.3212 9.76125 19.7405 9.7575 18.9712C7.254 19.5277 6.726 17.7332 6.726 17.7332C6.3165 16.6681 5.72475 16.3832 5.72475 16.3832C4.9095 15.8111 5.78775 15.8229 5.78775 15.8229C6.6915 15.887 7.16625 16.7737 7.16625 16.7737C7.96875 18.1847 9.273 17.777 9.7875 17.5414C9.8685 16.9443 10.1003 16.5381 10.3575 16.3073C8.35875 16.0764 6.258 15.2829 6.258 11.7471C6.258 10.7399 6.60675 9.91659 7.18425 9.27095C7.083 9.03774 6.77925 8.0994 7.263 6.82846C7.263 6.82846 8.01675 6.58116 9.738 7.77462C10.458 7.56958 11.223 7.46785 11.988 7.46315C12.753 7.46785 13.518 7.56958 14.238 7.77462C15.948 6.58116 16.7017 6.82846 16.7017 6.82846C17.1855 8.0994 16.8818 9.03774 16.7917 9.27095C17.3655 9.91659 17.7142 10.7399 17.7142 11.7471C17.7142 15.2923 15.6105 16.0725 13.608 16.2995C13.923 16.5765 14.2155 17.1423 14.2155 18.0071C14.2155 19.242 14.2043 20.2344 14.2043 20.5341C14.2043 20.7759 14.3617 21.0647 14.823 20.9723C18.4237 19.7609 21 16.3002 21 12.2284C21 7.13211 16.9703 3 12 3Z" fill="currentColor"/>
              </svg>
            </a>
            <a href="javascript:void(0)" class="text-grey-700 text-blue-600 hover:opacity-10">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                <path d="M16.2 0H1.8C0.81 0 0 0.81 0 1.8V16.2C0 17.19 0.81 18 1.8 18H16.2C17.19 18 18 17.19 18 16.2V1.8C18 0.81 17.19 0 16.2 0ZM5.4 15.3H2.7V7.2H5.4V15.3ZM4.05 5.67C3.15 5.67 2.43 4.95 2.43 4.05C2.43 3.15 3.15 2.43 4.05 2.43C4.95 2.43 5.67 3.15 5.67 4.05C5.67 4.95 4.95 5.67 4.05 5.67ZM15.3 15.3H12.6V10.53C12.6 9.81004 11.97 9.18 11.25 9.18C10.53 9.18 9.9 9.81004 9.9 10.53V15.3H7.2V7.2H9.9V8.28C10.35 7.56 11.34 7.02 12.15 7.02C13.86 7.02 15.3 8.46 15.3 10.17V15.3Z" fill="currentColor"/>
              </svg>
            </a>
            <a href="javascript:void(0)" class="text-grey-700 text-red-500 hover:opacity-10">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.60063 2.18182H16.3991C19.3873 2.18182 21.8183 4.61281 21.8182 7.60074V16.3993C21.8182 19.3872 19.3873 21.8182 16.3991 21.8182H7.60063C4.6127 21.8182 2.18182 19.3873 2.18182 16.3993V7.60074C2.18182 4.61281 4.6127 2.18182 7.60063 2.18182ZM16.3993 20.0759C18.4266 20.0759 20.0761 18.4266 20.0761 16.3993H20.0759V7.60074C20.0759 5.57348 18.4265 3.92405 16.3991 3.92405H7.60063C5.57336 3.92405 3.92405 5.57348 3.92405 7.60074V16.3993C3.92405 18.4266 5.57336 20.0761 7.60063 20.0759H16.3993ZM6.85714 12.0001C6.85714 9.16424 9.16418 6.85714 12 6.85714C14.8358 6.85714 17.1429 9.16424 17.1429 12.0001C17.1429 14.8359 14.8358 17.1429 12 17.1429C9.16418 17.1429 6.85714 14.8359 6.85714 12.0001ZM8.62798 12C8.62798 13.8593 10.1407 15.3719 12 15.3719C13.8593 15.3719 15.372 13.8593 15.372 12C15.372 10.1406 13.8594 8.6279 12 8.6279C10.1406 8.6279 8.62798 10.1406 8.62798 12Z" fill="currentColor"/>
                <mask id="mask0_3320_6487" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="2" y="2" width="20" height="20">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.60063 2.18182H16.3991C19.3873 2.18182 21.8183 4.61281 21.8182 7.60074V16.3993C21.8182 19.3872 19.3873 21.8182 16.3991 21.8182H7.60063C4.6127 21.8182 2.18182 19.3873 2.18182 16.3993V7.60074C2.18182 4.61281 4.6127 2.18182 7.60063 2.18182ZM16.3993 20.0759C18.4266 20.0759 20.0761 18.4266 20.0761 16.3993H20.0759V7.60074C20.0759 5.57348 18.4265 3.92405 16.3991 3.92405H7.60063C5.57336 3.92405 3.92405 5.57348 3.92405 7.60074V16.3993C3.92405 18.4266 5.57336 20.0761 7.60063 20.0759H16.3993ZM6.85714 12.0001C6.85714 9.16424 9.16418 6.85714 12 6.85714C14.8358 6.85714 17.1429 9.16424 17.1429 12.0001C17.1429 14.8359 14.8358 17.1429 12 17.1429C9.16418 17.1429 6.85714 14.8359 6.85714 12.0001ZM8.62798 12C8.62798 13.8593 10.1407 15.3719 12 15.3719C13.8593 15.3719 15.372 13.8593 15.372 12C15.372 10.1406 13.8594 8.6279 12 8.6279C10.1406 8.6279 8.62798 10.1406 8.62798 12Z" fill="white"/>
                </mask>
                <g mask="url(#mask0_3320_6487)">
                </g>
              </svg>
            </a>
          </div>
        </div>
        <div class="flex items-center">
          <p class="text-base font-normal leading-7 text-center text-white">2024 Ista Taza. All rights reserved--Version:{{env('APP_VERSION')}}</p>
        </div>
      </div>
    </div>
  </footer>
        </div>
      </div>


    </div>
  </div>
    </div>
       
</div>
   
</body>
 
</html>