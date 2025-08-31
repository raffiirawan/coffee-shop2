<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RAV Products</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen">
    <header>
        @include('components.navbar')
    </header>
    <main class="flex-1">
        <h1 class="my-6 text-center text-4xl font-bold uppercase">Our Best Collection</h1>
            <section class="flex px-5 flex-wrap justify-center gap-5">
                <div class="w-xs bg-black/40 hover:bg-black/20 bg-blend-multiply bg-[url('/resources/img/coffee.jpg')] bg-cover bg-center hover:bg-size-[110%] h-[30vh] rounded-2xl flex items-center justify-center cursor-pointer">
                    <h2 class="text-2xl font-semibold text-white">Coffee</h2>
                </div>
                <div class="w-xs bg-black/40 hover:bg-black/20 bg-blend-multiply bg-[url('/resources/img/mocktail.jpg')] bg-cover bg-center hover:bg-size-[110%] h-[30vh] rounded-2xl flex items-center justify-center cursor-pointer">
                    <h2 class="text-2xl font-semibold text-white">Non-Coffee</h2>
                </div>
                <div class="w-xs bg-black/40 hover:bg-black/20 bg-blend-multiply bg-[url('/resources/img/cake.jpg')] bg-cover bg-center hover:bg-size-[110%] h-[30vh] rounded-2xl flex items-center justify-center cursor-pointer">
                    <h2 class="text-2xl font-semibold text-white">Food</h2>
                </div>
                <div class="w-xs bg-black/40 hover:bg-black/20 bg-blend-multiply bg-[url('/resources/img/coffee-bean.jpg')] bg-cover bg-center hover:bg-size-[110%] h-[30vh] rounded-2xl flex items-center justify-center cursor-pointer">
                    <h2 class="text-2xl font-semibold text-white">Coffee Bean</h2>
                </div>
            </section>
    </main>
    @include('components.footer')
</body>
</html>