<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Sound System</title>
</head>

<body>

    <div class="flex flex-col gap-3">
        @include('Layout.navbar')
        
        <div class="flex flex-col justify-center md:flex-row">
            <div class="flex flex-row justify-center md:justify-start gap-3">
                @include('Layout.sidebar')
                <div class="flex flex-col flex-grow">
                    <div class="flex justify-center items-center border-separate bg-red-900 w-full h-10">
                        <P class="text-white">Sound System</P>
                    </div>
                    
                    <div class="flex flex-wrap justify-center gap-4 mt-4">
                        <!-- Card 1 -->
                        <div class="bg-white shadow-md rounded-lg p-36 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 h-96 border border-black"></div>
                        <!-- Card 2 -->
                        <div class="bg-white shadow-md rounded-lg p-36 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 h-96 border border-black"></div>
                        <!-- Card 3 -->
                        <div class="bg-white shadow-md rounded-lg p-36 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 h-96 border border-black"></div>
                    </div>
                    <div class="flex flex-wrap justify-center gap-4 mt-4">
                        <!-- Card 1 -->
                        <div class="bg-white shadow-md rounded-lg p-36 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 h-96 border border-black"></div>
                        <!-- Card 2 -->
                        <div class="bg-white shadow-md rounded-lg p-36 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 h-96 border border-black"></div>
                        <!-- Card 3 -->
                        <div class="bg-white shadow-md rounded-lg p-36 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 h-96 border border-black"></div>
                    </div>
                    <div class="flex flex-wrap justify-center gap-4 mt-4">
                        <!-- Card 1 -->
                        <div class="bg-white shadow-md rounded-lg p-36 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 h-96 border border-black"></div>
                        <!-- Card 2 -->
                        <div class="bg-white shadow-md rounded-lg p-36 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 h-96 border border-black"></div>
                        <!-- Card 3 -->
                        <div class="bg-white shadow-md rounded-lg p-36 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 h-96 border border-black"></div>
                    </div>
                </div>
            </div>
        </div>

       
    </div>
</body>

</html>
