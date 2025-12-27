<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Job Ocean</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
       
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..600;1,100..600&display=swap" rel="stylesheet">
        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
           
        @endif
    </head>
    <body class="bg-image font-archivo bg-fixed">
        <nav class='px-6 p-2 bg-space border-b border-sky/50 flex justify-between text-white text-sm font-semibold items-center'>
            <div>
                <a href="/" class="hover:text-sky/80 flex items-center space-x-2">
                    <img src="{{Vite::asset('resources/images/logo.svg')}}" class="w-8">
                    <span class="flex flex-col justify-start space-y-0 font-light text-xs">
                        <p>JOB</p>
                        <p>OCEAN</p>
                    </span>
                </a>
            </div>
            <ul class="flex space-x-6">
                <li>
                    <a href="#" class="hover:underline">Jobs</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Career</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Salaries</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Companies</a>
                </li>
            </ul>
            <div>
                <a href="#" class="hover:underline flex items-center space-x-2">
                    <x-dot/>
                    <p>Post a Job</p>
                </a>
            </div>
        </nav>
        <main class="container mt-10 max-w-[960] mx-auto text-white bg-black/70 rounded-xl p-5">
            {{ $slot }}
        </main>
    </body>
</html>         