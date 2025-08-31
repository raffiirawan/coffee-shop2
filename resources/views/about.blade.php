<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About RAV</title>
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    @vite('resources/css/app.css')
</head>
<body>
    <main>
        <header>
            @include('components.navbar')
        </header>

        <section class="hero h-[90vh] flex items-center justify-center bg-black/50 bg-blend-multiply bg-[url('/resources/img/bg-about-us.jpg')] bg-fixed bg-cover bg-no-repeat bg-center">
            <h1 class="text-4xl lg:text-6xl font-bold text-white text-center uppercase">Get closer with us</h1>
        </section>

        <section class="mx-10 lg:mx-24 lg:my-10 p-6">
            <div class="my-6 flex flex-col lg:flex-row flex-wrap lg:flex-nowrap items-center gap-4">
                <img src="/assets/coffee.jpg" alt="" class="w-full lg:w-1/4 rounded-2xl">
                <div class="w-full lg:w-3/4 text-center lg:text-left">
                    <h2 class="text-xl lg:text-2xl font-bold">Lebih dari Sekadar Secangkir Kopi</h2>
                    <p>Selamat datang di Rav Coffee, tempat di mana aroma kopi yang kaya berpadu dengan kehangatan suasana yang mengundang. Didirikan dengan cinta dan dedikasi, kami hadir untuk menjadi oase bagi para pencinta kopi, penikmat santai, dan siapa saja yang mencari momen istimewa dalam kesibukan hari.</p>
                </div>
            </div>
            <div class="my-6 flex flex-col lg:flex-row-reverse flex-wrap lg:flex-nowrap items-center gap-4">
                <img src="/assets/coffee-bean2.jpg" alt="" class="w-full lg:w-1/4 rounded-2xl">
                <div class="w-full lg:w-3/4 text-center lg:text-right">
                    <h2 class="text-xl lg:text-2xl font-bold">Perjalanan Rasa yang Dimulai dari Biji Pilihan</h2>
                    <p>Kami percaya bahwa secangkir kopi yang sempurna dimulai dari biji yang luar biasa. Itulah mengapa kami dengan cermat memilih biji kopi terbaik dari berbagai penjuru, baik dari petani lokal yang berdedikasi maupun dari perkebunan internasional yang terkenal. Setiap biji melewati proses roasting yang teliti untuk mengeluarkan profil rasa uniknya, memastikan setiap tegukan adalah sebuah petualangan. Dari single origin yang eksotis hingga blend khas kami, Anda akan menemukan cerita dan karakter dalam setiap seduhan.</p>
                </div>
            </div>
            <div class="my-6 flex flex-col lg:flex-row flex-wrap lg:flex-nowrap items-center gap-4">
                <img src="/assets/beverages.jpg" alt="" class="w-full lg:w-1/4 rounded-2xl">
                <div class="w-full lg:w-3/4 text-center lg:text-left">
                    <h2 class="text-xl lg:text-2xl font-bold">Bukan Hanya Kopi, tapi Pengalaman Menyeluruh</h2>
                    <p>Meskipun kopi adalah jantung kami, kami memahami bahwa pengalaman di coffee shop lebih dari sekadar minuman. Kami juga menyajikan berbagai pilihan minuman non-kopi yang menyegarkan, mulai dari teh premium, cokelat hangat yang memanjakan, hingga minuman signature yang unik.
                        <br>
                    Untuk menemani minuman Anda, kami menyiapkan hidangan lezat yang dibuat dengan penuh perhatian. Nikmati beragam roti panggang renyah, kue-kue manis yang menggoda, dan pilihan camilan lainnya yang sempurna untuk sarapan ringan, makan siang cepat, atau sekadar teman bersantai di sore hari.
                    </p>
                </div>
            </div>
        </section>
        
        <footer>
            @include('components.footer')
        </footer>
    </main>
</body>
</html>