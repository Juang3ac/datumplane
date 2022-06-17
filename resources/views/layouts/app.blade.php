<html>
    <head>
        <meta charset="UTF-8" lang="es">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Datumplane - @yield('titulo')</title>
        <script src="{{ asset('js/app.js') }}"> </script>

        <link rel="icon" type="image/x-icon" href="{{ asset('img/logos/favicon.png') }}">

        {{-- Google fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

       {{-- Iconos Ionic --}}
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </head>
    <body>

        <nav class="w-full border-background bg-background">
            <div class="py-5 md:py-0 container mx-auto px-6 flex items-center justify-between">
                <div aria-label="Home. logo" role="img">
                    <img class="md:w-96 object-scale-down h-26 w-96" src="{{ asset('img/logos/logo-full.png') }}" alt="logo"/>
                </div>
                <div>
                    <button onclick="toggleMenu(true)" class="dark:bg-white rounded sm:block md:hidden text-gray-500 hover:text-headline font-header dark:text-gray-200 focus:text-headline dark:text-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500">
                        <svg aria-haspopup="true" aria-label="open Main Menu" xmlns="http://www.w3.org/2000/svg" class="md:hidden icon icon-tabler icon-tabler-menu" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round">
                            <path stroke="none" d="M0 0h24v24H0z"></path>
                            <line x1="4" y1="8" x2="20" y2="8"></line>
                            <line x1="4" y1="16" x2="20" y2="16"></line>
                        </svg>
                    </button>
                    <div id="menu" class="md:block lg:block hidden">
                        <button onclick="toggleMenu(false)" class="dark:bg-white rounded block md:hidden lg:hidden text-gray-500 hover:text-headline font-header dark:text-gray-200 focus:text-headline dark:text-gray-200 fixed focus:outline-none focus:ring-2 focus:ring-gray-500 z-30 top-0 mt-6">
                            <svg aria-label="close main menu" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <line x1="18" y1="6" x2="6" y2="18" />
                                <line x1="6" y1="6" x2="18" y2="18" />
                            </svg>
                        </button>
                        <ul class="flex text-3xl md:text-base items-center py-10 md:flex flex-col md:flex-row justify-center fixed md:relative top-0 bottom-0 left-0 right-0 bg-white md:bg-transparent z-20">
                            <li>
                                <a class="cursor-pointer text-base lg:text-lg pt-10 md:pt-0 text-headline hover:text-highlight" href="javascript: void(0)">Feature</a>
                            </li>
                            <li class="text-headline font-header dark:text-gray-200 hover:text-highlight dark:hover:text-gray-300 cursor-pointer text-base lg:text-lg pt-10 md:pt-0 md:ml-5 lg:ml-10">
                                <a class="cursor-pointer text-base lg:text-lg pt-10 md:pt-0 text-headline hover:text-highlight" href="javascript: void(0)">Marketplace</a>
                            </li>
                            <li class="text-headline font-header dark:text-gray-200 hover:text-highlight dark:hover:text-gray-300 cursor-pointer text-base lg:text-lg pt-10 md:pt-0 md:ml-5 lg:ml-10">
                                <a class="cursor-pointer text-base lg:text-lg pt-10 md:pt-0 text-headline hover:text-highlight" href="javascript: void(0)">Company</a>
                            </li>
                            <li class="text-headline font-header dark:text-gray-200 hover:text-highlight dark:hover:text-gray-300 cursor-pointer text-base lg:text-lg pt-10 md:pt-0 md:ml-5 lg:ml-10">
                                <a class="cursor-pointer text-base lg:text-lg pt-10 md:pt-0 text-headline hover:text-highlight" href="javascript: void(0)">Features</a>
                            </li>
                            <li class="text-headline font-header dark:text-gray-200 hover:text-highlight dark:hover:text-gray-300 cursor-pointer text-base lg:text-lg pt-10 md:pt-0 md:ml-5 lg:ml-10">
                                <a class="cursor-pointer text-base lg:text-lg pt-10 md:pt-0 text-headline hover:text-highlight" href="javascript: void(0)">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <button class="ml-4 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-highlight bg-transparent transition duration-150 ease-in-out hover:border-button lg:text-xl lg:font-bold  hover:text-button rounded border border-highlight text-highlight px-4 sm:px-10 py-2 sm:py-4 text-sm">Asesoría gratuita</button>
            </div>
        </nav>

        <div>@yield('contenido')</div>
    </body>
</html>