<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact RAV</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/2.2.0/uicons-brands/css/uicons-brands.css">
</head>
<body>
    <header>
        @include('components.navbar')
    </header>
    <main>
        <div class="w-screen h-[40vh] flex items-center justify-center bg-black/50 bg-blend-multiply bg-[url('/resources/img/bg-cta.jpg')] bg-fixed bg-cover bg-no-repeat bg-bottom">
            <h1 class="text-white text-6xl font-bold uppercase">Get in Touch with Us</h1>
        </div>

        <section class="contact-container mx-6 sm:mx-16 my-8 py-6 rounded-2xl text-center">
            <div class="m-4">
                <h2 class="text-2xl font-bold">Our Information</h2>
                <p>If you have any questions, feedback, or just want to say hello, feel free to reach out to us through the channels below.</p>
                <p><strong>Email:</strong> <a href="mailto:contact@ravcoffee.com">contact@ravcoffee.com</a></p>
                <p><strong>Phone:</strong> <a href="tel:+621234567890">+62 123 4567 890</a></p>
            </div>
            <div class="flex flex-wrap items-center justify-center m-4 gap-x-8 gap-y-2">
                <h2 class="text-2xl font-bold w-full">Contact & Follow Us</h2>
                <a href="#"><i class="fi fi-brands-whatsapp text-2xl hover:text-dark-choc transition-colors"></i></a>
                <a href="#"><i class="fi fi-brands-instagram text-2xl hover:text-dark-choc transition-colors"></i></a>
                <a href="#"><i class="fi fi-brands-facebook text-2xl hover:text-dark-choc transition-colors"></i></a>
                <a href="#"><i class="fi fi-brands-tik-tok text-2xl hover:text-dark-choc transition-colors"></i></a>
            </div>
        </section>
    </main>
    @include('components.footer')
</body>
</html>