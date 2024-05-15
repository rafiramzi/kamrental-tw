<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Produk details</title>
</head>

<body>

    <div class="flex flex-col gap-3">
        @include('Layout.navbar')

        <div class="container flex gap-5 mx-auto">
            @include('Layout.sidebar')
            <div class="flex flex-col gap-5 w-full">
                <p class="text-white items-center text-center py-3 border-separate bg-red-900 w-full h-fit">Produkdetails
                </p>
                <p class="text-white items-center text-center py-3 border-separate bg-red-900 w-full h-fit">
                    Produkdetails</p>

                <div class="flex gap-10">
                    {{-- Image and items spesification --}}
                    <div class="flex flex-col gap-10">
                        <div class="bg-white shadow-md rounded-lg p-2 aspect-square h-96 border border-black">
                            <img src="/assets/LogoKr.jpeg" alt="">
                        </div>
                        <div class="bg-red-900 shadow-md rounded-lg p-2 border border-black w-full">
                            <p class="text-white">Rp. 500,000 / unit / Hari</p>
                            <p class="text-gray-500">*Min. Pesanan 2 Units/Hari</p>
                        </div>
                    </div>

                    {{-- price --}}
                    <div class="flex flex-col gap-5 w-full">
                        <div class="bg-white shadow-md rounded-lg p-2 w-full h-96 border border-black cols">
                            Description of this product
                        </div>
                        <div class="bg-white rounded-lg p-2 w-full cols ">
                            <div class="flex justify-end gap-5">

                                <div class="flex gap-5 border border-black rounded-lg">
                                    <button
                                        class=" hover:bg-gray-200 text-green-400 font-bold py-2 px-4 rounded">+</button>
                                    <div class="bg-white rounded-lg p-2 w-10">
                                        <p class="flex justify-center items-center">3</p>

                                    </div>
                                    <button
                                        class=" hover:bg-gray-200 text-red-600 font-bold py-2 px-4 rounded">-</button>
                                </div>

                                <p class="bg-green-500 text-white font-medium py-2 px-4 rounded">Rp.500.000</p>
                                <p
                                    class="flex bg-yellow-500 hover:bg-yellow-700 text-white font-medium py-2 px-4 rounded w-52 h-10 justify-center">
                                    Add to cart</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="flex gap-10">
                    <div
                        class="flex flex-row justify-start bg-white shadow-md rounded-lg p-2 w-full h-96 border border-black gap-5">
                        <p
                            class="flex bg-yellow-500 hover:bg-yellow-700 text-white font-medium py-2 px-4 rounded w-52 h-10 justify-center">
                            Items to supply</p>
                        <p
                            class="flex bg-yellow-500 hover:bg-yellow-700 text-white font-medium py-2 px-4 rounded w-52 h-10 justify-center">
                            Recomended</p>
                        <p
                            class="flex bg-yellow-500 hover:bg-yellow-700 text-white font-medium py-2 px-4 rounded w-52 h-10 justify-center">
                            Privacy policy</p>
                        <p
                            class="flex bg-yellow-500 hover:bg-yellow-700 text-white font-medium py-2 px-4 rounded w-52 h-10 justify-center">
                            Others</p>
                    </div>
                </div>
            </div>

        </div>




    </div>
</body>

</html>
