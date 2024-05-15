<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">

    <div class="flex flex-col gap-3">
        @include('Layout.navbar')

        <div class="container mx-auto flex flex-col md:flex-row gap-5">
            <div class="w-full md:w-1/4">
                @include('Layout.sidebar')
            </div>
            <div class="w-full md:w-3/4">
                <div class="flex flex-col gap-5">
                    <div class="bg-white p-4 rounded-lg shadow">
                        <h2 class="flex flex-col justify-center items-center text-xl font-bold mb-3">Cart</h2>
    
                        <div class="flex flex-col gap-5">
                            <div class="border-b border-gray-300 pb-5">
                                <h3 class="text-lg font-bold mb-2">Date/Time order</h3>
                                <div class="flex justify-between">
                                    <p>Date:</p>
                                    <p>Time:</p>
                                </div>
                            </div>
    
                            <div class="border-b border-gray-300 pb-5">
                                <h3 class="text-lg font-bold mb-2">Date/Time loading</h3>
                                <div class="flex justify-between">
                                    <p>Date: </p>
                                    <p>Time:</p>
                                </div>
                            </div>
    
                            <div class="border-b border-gray-300 pb-5">
                                <h3 class="text-lg font-bold mb-2">Date/Time unloading</h3>
                                <div class="flex justify-between">
                                    <p>Date: </p>
                                    <p>Time:</p>
                                </div>
                            </div>
    
                            <div class="flex flex-col lg:flex-row justify-between items-center">
    
                                <a href="#"
                                    class="flex flex-col h-auto items-center bg-white border border-gray-200 rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                    <img class="object-cover w-full h-48 md:w-48 md:h-auto md:rounded-l-lg md:rounded-t-none"
                                        src="/assets/LogoKr.jpeg" alt="">
                                    <div class="flex flex-col p-4 leading-normal">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">
                                            Noteworthy technology acquisitions 2021
                                        </h5>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                            Here are the biggest enterprise technology acquisitions of 2021 so far, in
                                            reverse chronological order.
                                        </p>
                                    </div>
                                </a>
    
                                <!-- Input Number -->
                                <div class="flex flex-row py-2 px-3 bg-white border border-gray-200 rounded-lg"
                                    data-hs-input-number="">
                                    <div class="w-96 md:w-60 flex-col md:flex-row flex justify-between items-center gap-x-3">
                                        <div class="flex items-center gap-x-1.5">
                                            <button type="button"
                                                class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                                data-hs-input-number-decrement="">
                                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M5 12h14"></path>
                                                </svg>
                                            </button>
                                            <input
                                                class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0"
                                                type="text" value="0" data-hs-input-number-input="">
                                            <button type="button"
                                                class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                                data-hs-input-number-increment="">
                                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M5 12h14"></path>
                                                    <path d="M12 5v14"></path>
                                                </svg>
                                            </button>
                                        </div>
    
                                        <div>
                                            <span class="block font-medium text-sm text-gray-800">
                                                Harga barang :
                                            </span>
                                            <span class="block text-xs text-gray-500">
                                                Rp. 1.000.000
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Input Number -->
                            </div>

                            <div class="flex flex-col lg:flex-row justify-between items-center">
    
                                <a href="#"
                                    class="flex flex-col h-auto items-center bg-white border border-gray-200 rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                    <img class="object-cover w-full h-48 md:w-48 md:h-auto md:rounded-l-lg md:rounded-t-none"
                                        src="/assets/LogoKr.jpeg" alt="">
                                    <div class="flex flex-col p-4 leading-normal">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">
                                            Noteworthy technology acquisitions 2021
                                        </h5>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                            Here are the biggest enterprise technology acquisitions of 2021 so far, in
                                            reverse chronological order.
                                        </p>
                                    </div>
                                </a>
    
                                <!-- Input Number -->
                                <div class="flex flex-row py-2 px-3 bg-white border border-gray-200 rounded-lg"
                                    data-hs-input-number="">
                                    <div class="w-96 md:w-60 flex-col md:flex-row flex justify-between items-center gap-x-3">
                                        <div class="flex items-center gap-x-1.5">
                                            <button type="button"
                                                class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                                data-hs-input-number-decrement="">
                                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M5 12h14"></path>
                                                </svg>
                                            </button>
                                            <input
                                                class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0"
                                                type="text" value="0" data-hs-input-number-input="">
                                            <button type="button"
                                                class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                                data-hs-input-number-increment="">
                                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M5 12h14"></path>
                                                    <path d="M12 5v14"></path>
                                                </svg>
                                            </button>
                                        </div>
    
                                        <div>
                                            <span class="block font-medium text-sm text-gray-800">
                                                Harga barang :
                                            </span>
                                            <span class="block text-xs text-gray-500">
                                                Rp. 1.000.000
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Input Number -->
                            </div>
                        </div>
    
    
                    </div>
      
                    <div class="flex flex-col gap-4">
                        <div class="bg-white p-4 rounded-lg shadow pb-5">
                            <h3 class="text-lg font-bold mb-2">PPN(11%)</h3>
                            <div class="flex justify-between">
                                <p>Rp. 550.000</p>
                            </div>
                        </div>
        
                        <div class="bg-white p-4 rounded-lg shadow pb-5">
                            <h3 class="text-lg font-bold mb-2">Discount</h3>
                            <div class="flex justify-between">
                                <p>Rp. 250.000</p>
                            </div>
                        </div>
        
                        <div class="bg-yellow-500 p-4 rounded-lg shadow pb-5">
                            <h3 class="text-lg font-bold mb-2">Total</h3>
                            <div class="flex justify-between">
                                <p>Rp. 1.800.000</p>
                            </div>
                        </div>

                        <div class="flex justify-end items-center w-50 h-20">
                            <a href="https://wa.me/your_phone_number_here" target="_blank"
                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><path fill="white" d="M19.05 4.91A9.816 9.816 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.264 8.264 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.183 8.183 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07c0 1.22.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28"/></svg>
                                Order Now
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>


            
        </div>

        




    </div>
</body>

</html>
