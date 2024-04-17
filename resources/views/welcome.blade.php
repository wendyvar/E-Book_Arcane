@extends('layouts.app')
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-Book Arcane</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- custom css file link  -->
        <link  href="../css/app.css"  rel="stylesheet">
        <link  href="../js/app.js"  rel="stylesheet">

    </head>
    <body>
    @section('content')
        <section class="bg-gradient-to-r from-purple-50 to-blue-400">
        <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-6 py-4 flex items-center"> <!-- Removed h-screen class -->
            <div class="flex flex-col lg:flex-row w-full"> <!-- Removed h-90vh class -->
                <!-- Text container on the left -->
                <div class="lg:w-1/3 flex items-center text-gray-800 p-6 lg:p-12"> <!-- Adjusted padding -->
                    <div>
                        <h2 class="text-4xl font-bold mb-4">De beste E-Books webwinkel</h2>
                        <p class="mb-8">
                            Vind de beste e-books van je favoriete schrijvers, verken honderden boeken in alle mogelijke categorieën, profiteer van de 50% korting en nog veel meer."</p>



                            <button class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none  focus:ring-opacity-50text-white">
                           E-Books
                        </button>
                    </div>
                </div>

                <!-- Book carousel on the right -->
                <div id="bookCarousel" class="lg:w-2/3 flex overflow-x-auto">
                    <div class="flex items-center space-x-4 py-6 lg:py-12 px-2 lg:px-6"> <!-- Adjusted padding -->
                        <!-- Books go here -->
                        <!-- Add additional padding on the left for the first book -->
                        <div class="shrink-0">
                            <img src="https://m.media-amazon.com/images/I/81TmHlRleJL._AC_UF894,1000_QL80_.jpg" alt="Book 1" class="h-80 transform transition-all duration-300 hover:scale-105" />
                        </div>
                        <!-- Book 2 -->
                        <div class="shrink-0">
                            <img src="https://ashokbookcentre.com/wp-content/uploads/2021/12/81YyraOaX1L.jpg" alt="Book 2" class="h-80 transform transition-all duration-300 hover:scale-105" />
                        </div>
                        <!-- Book 3 -->
                        <div class="shrink-0">
                            <img src="https://s26162.pcdn.co/wp-content/uploads/2021/10/The-Catcher-in-the-Rye-First-Edition-cover-E.-Michael-Mitchell.jpg" alt="Book 3" class="h-80 transform transition-all duration-300 hover:scale-105" />
                        </div>
                        <!-- Add more books as needed -->
                    </div>
                </div>
            </div>
        </div>
    </section>

        <section class="bg-gradient-to-r from-yellow-300 to-orange-700">
            <div class="h-12"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col items-center">
                <!-- Text Centered and more compact -->
                <div class="w-3/4 text-center">

                    <img src="https://cdn3d.iconscout.com/3d/premium/thumb/boy-reading-book-while-sitting-on-couch-4964070-4137619.png" alt="Descriptive Alt Text" style="width: 25%;" class="mx-auto mb-4">
                    <h2 class="text-3xl font-semibold text-white mb-4">Jouw brein houdt van lezen</h2>
                    <p class="text-lg text-white">
                        Ontdek een wereld van kennis en avontuur met onze uitgebreide collectie eBooks. Of je nu op zoek bent naar de nieuwste bestsellers, klassieke literatuur, boeiende non-fictie of leerzame zelfhulpboeken, je vindt het allemaal hier. Onze gebruiksvriendelijke website biedt snelle toegang tot een divers assortiment van titels die je direct kunt downloaden op je favoriete leesapparaat.

                        </p>
                </div>
                <div class="h-12"></div>
            </div>
        </section>


    @endsection

    </body>
</html>
