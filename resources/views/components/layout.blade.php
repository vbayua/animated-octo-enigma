<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>

    <x-header />

    <main>
        {{$slot}}

        {{-- <div class="flex justify-center justify-items-center">
            <article class="max-w-3xl py-11 shadow-slate-100">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, commodi! Quidem, enim aliquid.
                    Excepturi
                    minima ea, perspiciatis quam vitae laborum amet aut in nam officiis beatae laudantium facilis
                    neque
                    corporis?</p>
            </article>
        </div> --}}
    </main>
</body>

</html>
