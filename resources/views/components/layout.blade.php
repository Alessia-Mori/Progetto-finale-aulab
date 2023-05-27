<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- AOS --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    {{-- lord icon --}}
    <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
    {{-- fontawsome --}}
    <script src="https://kit.fontawesome.com/37fda1f3ee.js" crossorigin="anonymous"></script>
    
    <title>Document</title>

    @livewireStyles
</head>

<body class="gradient-three-colors">
    <x-navbar></x-navbar>

    @if (session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif


    {{$slot}}


    

    {{-- AOS --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    @livewireScripts
</body>

</html>