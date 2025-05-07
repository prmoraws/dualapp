<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>403 - Área Restrita</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* Your existing CSS styles here */
        </style>
    @endif
</head>

<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
    <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
        @if (Route::has('login'))
            <nav class="flex items-center justify-end gap-4">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                        Dashboard
                    </a>
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();"
                            class="hover:bg-blue-100">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                @else
                    <a href="{{ route('login') }}"
                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>
    <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
        <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
            <div class="flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] rounded-bl-lg rounded-br-lg lg:rounded-tl-lg lg:rounded-br-none">
                <div class="flex flex-col items-center justify-center h-full min-h-[60vh]">
                    <!-- 403 - Extremely large and responsive -->
                    <h1 class="text-[15rem] md:text-[25rem] lg:text-[30rem] leading-none font-bold text-[#f53003] dark:text-[#FF4433]">403</h1>
                    <!-- "Área Restrita" -->
                    <p class="text-4xl md:text-5xl lg:text-6xl font-medium text-[#706f6c] dark:text-[#A1A09A] mt-4">Área Restrita</p>
                    <!-- Optional message -->
                    <p class="mt-6 text-lg text-[#706f6c] dark:text-[#A1A09A] max-w-md mx-auto">
                        Você não tem permissão para acessar esta página.
                    </p>
                </div>
            </div>
            <div class="relative lg:-ml-px -mb-px lg:mb-0 rounded-t-lg lg:rounded-t-none lg:rounded-r-lg aspect-[335/376] lg:aspect-auto w-full lg:w-[438px] shrink-0 overflow-hidden">
                <div class="flex flex-col items-center h-full">
                    <!-- Moraws Logo - Responsive SVG -->
                    <div class="w-full max-w-[400px] lg:max-w-none">
                        <svg viewBox="0 0 9525 1719.78" fill="none" xmlns="http://www.w3.org/2000/svg" 
                             class="w-full h-auto transition-all translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-6"
                             preserveAspectRatio="xMidYMid meet">
                            <path d="M30.92 1656.51V65.6h197.99l572.62 668.12L1374.92 65.6h198v1590.91h-221.29V414.6l-550.1 640.95L252.2 414.6v1241.91z" fill="#99f" />
                            <path id="1" d="M2069.44 862.61c0 81.13 15.14 158.78 45.42 232.15s74.15 138.59 130.83 195.66c55.52 56.68 120.35 100.55 195.28 131.22 74.53 30.67 152.56 46.2 233.7 46.2 83.08 0 161.5-15.14 234.87-45.04 72.99-29.89 138.6-74.15 196.05-132.38 56.68-57.07 100.55-122.29 131.22-195.66 30.67-73.37 46.2-151.02 46.2-232.15 0-81.14-15.14-157.62-45.42-230.22-30.28-72.2-75.32-138.59-134.33-198.37-56.68-58.62-121.9-102.88-195.66-133.55-73.37-30.67-151.01-46.2-232.93-46.2-79.19 0-155.28 15.53-229.43 46.59-73.77 31.05-140.54 75.31-199.55 133.16-56.68 55.12-100.55 119.95-130.83 194.49-30.28 74.15-45.42 152.18-45.42 234.1zm-242.25-8.54c0-105.99 21.74-209.25 64.84-309.02 43.09-100.16 104.82-188.68 184.4-265.16 81.14-78.03 172.76-137.42 275.25-178.58 102.1-40.76 210.02-61.33 322.99-61.33 114.91 0 224.39 20.57 328.04 62.11 103.27 41.15 194.5 100.55 273.31 177.8 82.69 80.36 144.8 170.04 186.73 268.26 41.54 98.61 62.5 205.76 62.5 321.06 0 108.31-21.35 212.35-64.44 312.12-42.7 99.77-103.65 187.51-182.46 263.21-82.69 78.81-174.7 138.6-276.8 178.97-102.1 40.76-211.19 60.95-326.88 60.95-112.97 0-221.28-20.96-324.94-62.5-103.26-41.93-194.49-100.94-273.3-177.42-81.91-79.58-144.03-169.65-185.96-269.42-42.31-100.16-63.28-207.31-63.28-321.05z" fill="#99f" />
                            <path id="2" d="M3776.43 1656.51V65.6h465.86c160.72 0 284.95 38.04 372.3 113.75 87.35 75.7 130.83 183.23 130.83 321.83 0 104.82-24.07 189.06-71.82 252.73-48.14 63.66-123.45 111.41-227.11 143.25 26.79 14.36 51.63 33.38 75.32 57.45 23.68 23.69 53.96 63.67 91.23 119.96l386.27 581.94h-275.24l-272.92-417.33c-81.91-125.79-147.91-206.15-198.38-240.7-50.08-34.94-110.25-52.41-179.74-52.41h-68.33v710.44h-228.27zm228.27-901.44h188.67c105.99 0 185.18-20.57 237.98-61.34 52.41-41.15 78.81-103.65 78.81-187.89 0-86.58-24.85-149.08-74.93-188.29-50.08-39.21-130.83-58.62-241.86-58.62H4004.7v496.14z" fill="#99f" />
                            <path id="3" d="M5398.01 983.34h495.75l-251.18-573.01-244.57 573.01zm-524.48 673.17L5563 65.6h165.77l698.4 1590.91h-235.26l-204.98-468.19H5309.1l-202.26 468.19h-233.31z" fill="#99f" />
                            <path id="4" d="M6884.87 1668.16 6295.56 65.6h235.26l389.38 1085.84L7348.79 65.6h144.42l424.32 1088.17L8312.74 65.6h230.6l-598.63 1602.56h-51.25L7418.28 442.94l-479.83 1225.22z" fill="#99f" />
                            <path id="5" d="M8592.64 1532.28v-299.7c72.21 82.69 140.93 142.08 206.53 178.58 65.61 36.1 135.49 54.35 209.64 54.35 78.81 0 140.92-18.25 186.35-55.13 45.42-36.88 68.32-86.57 68.32-149.46 0-51.64-15.14-97.06-45.81-135.88-30.67-39.21-104.04-95.5-219.73-168.87-180.13-116.08-292.71-206.15-338.91-269.81-45.81-63.67-68.72-139.76-68.72-227.5 0-123.84 43.87-225.16 131.22-304.75 87.74-79.19 200.71-118.79 338.53-118.79 61.33 0 121.9 8.93 181.68 26.78 59.4 17.86 119.57 45.43 180.13 82.69v258.56c-69.87-56.29-133.93-97.06-193.33-122.68-59.01-25.23-118.02-38.05-177.02-38.05-71.44 0-129.67 17.47-174.7 52.8-45.04 35.33-67.55 80.75-67.55 136.27 0 78.8 93.56 176.64 280.29 293.49l34.16 20.57c152.57 94.73 252.73 178.2 299.71 250.4 46.97 72.6 70.65 162.28 70.65 269.04 0 121.12-43.87 221.28-131.99 300.48-88.13 79.19-200.71 118.79-338.14 118.79-85.79 0-163.05-12.03-232.15-36.49-69.1-24.07-135.49-62.5-199.16-115.69z" fill="#99f" />
                        </svg>
                    </div>

                    <!-- Light Mode JM SVG -->
                    <div class="w-full max-w-[400px] dark:hidden">
                        <svg viewBox="0 0 440 376" fill="none" xmlns="http://www.w3.org/2000/svg"
                             class="w-full h-auto transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4"
                             preserveAspectRatio="xMidYMid meet">
                            <g>
                                <path d="M 56.53 6.41 h 152.93 v 366.88 L 70.37 178.11 h 62.28 l 33.07 45.89 V 69.06 H 74.71 l -9.85 13.81 L 87.53 115.2 l -62.43 0.5 L 2 84 z" style="fill:#99f" />
                                <path d="M229.93 6.29h152.83l54.2 76.26-72.48 101.38-0.18-87.61 9.85-13.31-9.67-13.81-23.22-0.25-0.35 148.54-43.63 61.17-1.76-206.77H271.3l1.05 239.85-45.03 61.17z" style="fill:#99f;fill-opacity:.811765" />
                            </g>
                        </svg>
                    </div>

                    <!-- Dark Mode JM SVG -->
                    <div class="w-full max-w-[448px] hidden dark:block">
                        <svg viewBox="0 0 440 376" fill="none" xmlns="http://www.w3.org/2000/svg"
                             class="w-full h-auto transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4"
                             preserveAspectRatio="xMidYMid meet">
                            <g>
                                <path d="M 56.53 6.41 h 152.93 v 366.88 L 70.37 178.11 h 62.28 l 33.07 45.89 V 69.06 H 74.71 l -9.85 13.81 L 87.53 115.2 l -62.43 0.5 L 2 84 z" style="fill:#ffffff" />
                                <path d="M229.93 6.29h152.83l54.2 76.26-72.48 101.38-0.18-87.61 9.85-13.31-9.67-13.81-23.22-0.25-0.35 148.54-43.63 61.17-1.76-206.77H271.3l1.05 239.85-45.03 61.17z" style="fill:#ffffff" />
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="absolute inset-0 rounded-t-lg lg:rounded-t-none lg:rounded-r-lg"></div>
            </div>
        </main>
    </div>

    @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif
    <!-- Footer -->
    <footer class="bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-sm text-gray-500 dark:text-gray-400">
            Desenvolvido com 
            <svg class="inline-block size-4" xmlns="http://www.w3.org/2000/svg" fill="#38BDF8" viewBox="0 0 24 24">
                <path
                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
            </svg> por J.M.Moraes 
            © {{ date('Y') }}
        </div>
    </footer>
</body>

</html>