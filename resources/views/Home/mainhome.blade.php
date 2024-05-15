<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>Main Home</title>
</head>



<body>

    <div class="flex flex-col gap-5">
        @include('Layout.navbar')
        {{-- carousel --}}
        <div class="flex flex-col sm:flex-row justify-center gap-5">
            <div class="flex w-full sm:w-[500px] aspect-video border">
                <div id="controls-carousel" class="relative w-full h-full" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="h-full w-full overflow-hidden">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out w-full h-full overflow-hidden" data-carousel-item>
                            <img src="/assets/paket lighting.jpg" class="w-full h-full object-center object-contain"
                                alt="...">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out w-full h-full overflow-hidden"
                            data-carousel-item="active">
                            <img src="/assets/LogoKr.jpeg" class="w-full h-full object-center object-contain"
                                alt="...">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out w-full h-full overflow-hidden" data-carousel-item>
                            <img src="/assets/LogoKr.jpeg" class="w-full h-full object-center object-contain"
                                alt="...">
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-700 ease-in-out w-full h-full overflow-hidden" data-carousel-item>
                            <img src="/assets/LogoKr.jpeg" class="w-full h-full object-center object-contain"
                                alt="...">
                        </div>
                        <!-- Item 5 -->
                        <div class="hidden duration-700 ease-in-out w-full h-full overflow-hidden" data-carousel-item>
                            <img src="/assets/LogoKr.jpeg" class="w-full h-full object-center object-contain"
                                alt="...">
                        </div>
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>

            <div class="flex flex-col gap-3">
                <div class="flex flex-row gap-3">
                    <img src="/assets/whatsappLogo.png" class="w-14 h-w-14" />
                    <div class="flex flex-col">
                        <p class="text-black font-bold">Gratis konsultasi</p>
                        <p class="text-black font-normal">Via email, whatsapp, dan telepon</p>
                    </div>
                </div>
                <div class="flex flex-row gap-3">
                    <img src="/assets/kurir (2).png" class="w-14 h-w-14" />
                    <div class="flex flex-col">
                        <p class="text-black font-bold">Gratis ongkos kirim</p>
                        <p class="text-black font-normal">Wilayah Bogor, Depok, dan Jakarta</p>
                    </div>
                </div>
                <div class="flex flex-row gap-3">
                    <img src="/assets/Trusted.png" class="w-14 h-w-14" />
                    <div class="flex flex-col">
                        <p class="text-black font-bold">Jaminan kepuasan</p>
                        <p class="text-black font-normal">Kualitas dan pelayanan yang terbaik</p>
                    </div>
                </div>

            </div>
        </div>

        {{-- Garis pertama --}}
        <div class="flex flex-col gap-5">
            <div class="flex py-2 px-10 items-center justify-between border-separate bg-red-900">
                <P class="text-white">produk</P>
                <button class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded shadow-md">
                    Lihat produk
                </button>

            </div>

            {{-- card baris pertama pada garis pertama --}}
            <div class="flex flex-wrap justify-center gap-4">
                <!-- Card 1 -->
                <div
                    class="bg-white shadow-md rounded-lg w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 h-96 border border-black">
                </div>
                <!-- Card 2 -->
                <div
                    class="bg-white shadow-md rounded-lg w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 h-96 border border-black">
                </div>
                <!-- Card 3 -->
                <div
                    class="bg-white shadow-md rounded-lg w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 h-96 border border-black">
                </div>
                <!-- Card 4 -->
                <div
                    class="bg-white shadow-md rounded-lg w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 h-96 border border-black">
                </div>
            </div>

            {{-- card baris kedua garis pertama --}}
            <div class="flex flex-wrap justify-center gap-4">
                <!-- Card 1 -->
                <div
                    class="bg-white shadow-md rounded-lg w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 h-96 border border-black">
                </div>
                <!-- Card 2 -->
                <div
                    class="bg-white shadow-md rounded-lg w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 h-96 border border-black">
                </div>
                <!-- Card 3 -->
                <div
                    class="bg-white shadow-md rounded-lg w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 h-96 border border-black">
                </div>
                <!-- Card 4 -->
                <div
                    class="bg-white shadow-md rounded-lg w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 h-96 border border-black">
                </div>
            </div>

            {{-- card baris ketiga garis pertama --}}
            <div class="flex flex-wrap justify-center gap-4">
                <!-- Card 1 -->
                <div
                    class="bg-white shadow-md rounded-lg w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 h-96 border border-black">
                </div>
                <!-- Card 2 -->
                <div
                    class="bg-white shadow-md rounded-lg w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 h-96 border border-black">
                </div>
                <!-- Card 3 -->
                <div
                    class="bg-white shadow-md rounded-lg w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 h-96 border border-black">
                </div>
                <!-- Card 4 -->
                <div
                    class="bg-white shadow-md rounded-lg w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 h-96 border border-black">
                </div>
            </div>
        </div>

        {{-- Garis kedua --}}
        <div class="flex flex-col gap-5">
            <div class="flex py-2 px-10 items-center justify-between border-separate bg-red-900">

                <P class="text-white">artikel</P>
                <button class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded shadow-md">
                    Lihat artikel
                </button>

            </div>

            {{-- card baris pertama pada garis kedua --}}
            <div class="flex flex-wrap justify-center gap-4">
                <!-- Card 1 -->
                <div
                    class="bg-white shadow-md rounded-lg w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 h-96 border border-black">
                </div>
                <!-- Card 2 -->
                <div
                    class="bg-white shadow-md rounded-lg w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 h-96 border border-black">
                </div>
                <!-- Card 3 -->
                <div
                    class="bg-white shadow-md rounded-lg w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 h-96 border border-black">
                </div>
                <!-- Card 4 -->
                <div
                    class="bg-white shadow-md rounded-lg w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 h-96 border border-black">
                </div>
            </div>
        </div>

    </div>









</body>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const carousel = document.querySelector('[data-carousel="static"]');
        const prevButton = carousel.querySelector('[data-carousel-prev]');
        const nextButton = carousel.querySelector('[data-carousel-next]');
        const items = carousel.querySelectorAll('[data-carousel-item]');
        let currentItemIndex = Array.from(items).findIndex(item => item.dataset.carouselItem === 'active');
        let intervalId;

        const showItem = (index) => {
            if (index < 0 || index >= items.length) {
                return;
            }
            items[currentItemIndex].classList.add('hidden');
            items[currentItemIndex].classList.remove('block');
            items[index].classList.remove('hidden');
            items[index].classList.add('block');
            currentItemIndex = index;
        };

        const showPrevItem = () => {
            showItem(currentItemIndex - 1);
        };

        const showNextItem = () => {
            showItem(currentItemIndex + 1);
        };

        const autoSlide = () => {
            intervalId = setInterval(() => {
                showNextItem();
            }, 3000); // Change 3000 to adjust the interval time (in milliseconds)
        };

        autoSlide(); // Start auto sliding

        prevButton.addEventListener('click', () => {
            clearInterval(intervalId); // Stop auto sliding when manual navigation is used
            showPrevItem();
        });

        nextButton.addEventListener('click', () => {
            clearInterval(intervalId); // Stop auto sliding when manual navigation is used
            showNextItem();
        });
    });
</script>



</html>
