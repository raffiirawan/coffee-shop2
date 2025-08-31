<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAV Coffee</title>
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    @vite('resources/css/app.css')
</head>
<body>
    <main>
        <header>
            @include('components.navbar')
        </header>

        {{-- Hero Section --}}
        <section class="h-[90vh] flex items-center bg-black/50 bg-blend-multiply bg-[url('/resources/img/bg-hero.jpg')] bg-fixed bg-cover bg-no-repeat bg-center pl-[10vw]">
            <div>
                <h1 class="text-6xl font-bold text-white">Hey!! <br> enjoy your coffee time</h1>
                <p class="text-white text-3xl">We serve the best <br> coffee in this world</p>
                <button class="mt-4 px-6 py-2 bg-dark-choc text-white rounded-full hover:bg-darkest-choc cursor-pointer">
                    <a href="/contact">Order Now</a></button>
            </div>
        </section>

        {{-- Menu --}}
            <section class="mx-6 sm:mx-16 my-8 py-6 rounded-2xl flex flex-wrap flex-col bg-stone-400 text-center items-center">
                <h2 class="w-full text-2xl sm:text-3xl font-bold uppercase text-black">What We Can Offers You</h2>
                <div class="flex flex-wrap justify-center gap-4 mt-6">
                    <div class="menu-image-card">
                        <img src="/assets/ice-coffee.jpg" alt="" class="h-[40vh] w-full object-cover rounded-t-2xl">
                        <div class="px-8 py-6">
                            <h3 class="text-xl font-bold">Coffee</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni maiores molestias, nobis perspiciatis sunt excepturi vero molestiae praesentium dolores a!</p>
                        </div>
                    </div>
                    <div class="menu-image-card">
                        <img src="/assets/mocktail.jpg" alt="" class="h-[40vh] w-full object-cover rounded-t-2xl">
                        <div class="px-8 py-6">
                            <h3 class="text-xl font-bold">Beverages</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni maiores molestias, nobis perspiciatis vero molestiae praesentium dolores a!</p>
                        </div>
                    </div>
                    <div class="menu-image-card">
                        <img src="/assets/toast.jpg" alt="" class="h-[40vh] w-full object-cover rounded-t-2xl">
                        <div class="px-8 py-6">
                            <h3 class="text-xl font-bold">Food</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni maiores molestias, sunt excepturi vero molestiae praesentium dolores a!</p>
                        </div>
                    </div>
                    <div class="menu-image-card">
                        <img src="/assets/coffee-bean.jpg" alt="" class="h-[40vh] w-full object-cover rounded-t-2xl">
                        <div class="px-8 py-6">
                            <h3 class="text-xl font-bold">Coffee Beans</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni maiores molestias, nobis perspiciatis sunt excepturi</p>
                        </div>
                    </div>
                </div>
                <button class="mt-4 px-6 py-3 w-fit bg-dark-choc text-white rounded-full hover:bg-darkest-choc cursor-pointer">
                    <a href="/products" class="text-lg">Discover More</a>
                </button>
            </section>


        {{-- CTA --}}
        <section class="h-[40vh] mx-6 sm:mx-16 my-8 py-6 rounded-2xl bg-black/50 bg-blend-multiply bg-[url('/resources/img/bg-cta.jpg')] bg-cover bg-no-repeat bg-center">
            <div class="px-8 flex flex-col items-center justify-center h-full text-center">
                <h3 class="text-white text-3xl sm:text-4xl font-semibold">Get Your Best Coffee</h3>
                <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi sunt odit laboriosam ea amet quos corporis est iure sit saepe.</p>
                <button class="mt-4 px-6 py-2 bg-dark-choc text-white text-xl rounded-full hover:bg-darkest-choc cursor-pointer">
                    <a href="/products">Discover More</a>
                </button>
            </div>
        </section>
        
            @include('components.footer')
    </main>
</body>
</html>