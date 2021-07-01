<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Plataforma desarrolladores</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <style>
    body {
        font-family: 'Nunito', sans-serif;
    }
    .bg-white {
        opacity: .8;
        border-radius: 0 0 10px 10px;
    }
    </style>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="antialiased">
    <!-- ++++++++++++++++++++ HEADER BEGIN ++++++++++++++++++++ -->
    <div>
        
        <header class="bg-gray-800" x-data="{ isOpen: false }">
            <nav class="container  px-6 py-4 mx-auto md:flex md:justify-between md:items-center">
                <div class="flex items-center justify-between">
                   
                    <img class="w-50" src="{{ asset('/img/prilik.png') }}">
                    <!-- Mobile menu button -->
                    <div @click="isOpen = !isOpen" class="flex md:hidden">
                        <button type="button"
                            class="text-gray-200 hover:text-gray-400 focus:outline-none focus:text-gray-400"
                            aria-label="toggle menu">
                            <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                                <path fill-rule="evenodd"
                                    d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div :class="isOpen ? 'flex' : 'hidden'" class="flex-col mt-2 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
                   
                  
                    @if (Route::has('login'))
                        <div class="hidden  top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <a href="{{ url('/user/profile') }}" class="text-sm text-gray-700 underline">Mi cuenta</a>
                            @else
                                <a href="{{ route('login') }}" class="px-4 py-1 text-sm font-medium text-center text-gray-100 transition-colors duration-300 transform border rounded hover:bg-indigo-800">Inicio sessión</a>
            
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="px-4 py-1 text-sm font-medium text-center text-gray-100 transition-colors duration-300 transform border rounded hover:bg-indigo-800">Registro</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div> 
            </nav>
            <section class="flex items-center justify-center mt-20" style="height: 400px;">
                <img class="w-79 m-10 text-gray-300 img-responsive" src="{{ asset('/img/5469.png') }}">
                <div class="text-center">                   
                   
                    <h3 class="mt-6 text-3xl font-bold text-white md:text-5xl">Construyamos juntos <br> el futuro ¡Postulate!</h3>

                    <div class="flex justify-center mt-8">
                        <a  href="{{ route('register') }}" class="px-8 py-2 text-lg font-medium text-white transition-colors duration-300 transform bg-indigo-600 rounded hover:bg-indigo-500 mr-10" href="#">Postulate a una oferta</a>
                        <a  href="{{ route('register') }}" class="px-8 py-2 text-lg font-medium text-white transition-colors duration-300 transform bg-indigo-600 rounded hover:bg-indigo-500" href="#">Postula una oferta</a>
                    </div>
                </div>              
            </section>
            <!-- ++++++++++++++++++++ FILTER BEGIN ++++++++++++++++++++ -->
            <section>
                <div class="max-w-5xl px-6 pb-6 mx-auto">
                    <div class="container px-6 py-10 mx-auto">
                        <div class="grid gap-8 mt-6 sm:grid-cols-2 md:grid-cols-2">
                            <input class="border-gray-300 focus:outline-none rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">  
                            <button
                                class="px-4 py-2 font-medium tracking-wide text-white capitalize bg-blue-600 rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                Buscar
                            </button>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ++++++++++++++++++++ FILTER CLOSE ++++++++++++++++++++ -->
        </header>
    </div>    <!-- ++++++++++++++++++++ HEADER CLOSE ++++++++++++++++++++ -->
    <!-- ++++++++++++++++++++ ABOUT US BEGIN ++++++++++++++++++++ -->

    <section class="bg-white">
        <div class="max-w-5xl px-6 pt-14 pb-6 mx-auto text-center">
            <h2 class="text-3xl font-semibold text-gray-800">¡Construyamos los sueños juntos!</h2>
           
        </div>
    </section>
    <!-- ++++++++++++++++++++ ABOUT US CLOSE ++++++++++++++++++++ -->

    <!-- ++++++++++++++++++++ cards ++++++++++++++++++++ -->
    <div>
        <livewire:vacancies-list>
    </div>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</body>      
    <!-- ++++++++++++++++++++ FOOTER BEGIN ++++++++++++++++++++ -->
<x-footer />
  


        
