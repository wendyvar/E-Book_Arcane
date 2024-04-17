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

    <section class="py-8 bg-gradient-to-r from-yellow-500 to-orange-400">
        <div class="h-12"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center">
            <!-- Image Section -->
            <div class="w-1/2">
                <img src="https://static.vecteezy.com/system/resources/previews/018/742/266/non_2x/3d-minimal-opened-book-flying-with-another-books-back-to-school-concept-3d-illustration-free-png.png" alt="E-Books" style="width: 50%;" class="mx-auto mb-4 h-auto">
            </div>
            <!-- Text Section -->
            <div class="w-1/2 flex flex-col items-center justify-center">
                <h2 class="text-3xl font-semibold text-white mb-4 text-center">E-Books</h2>
                <p class="text-center text-white leading-relaxed">
                    Ontdek een wereld van literaire diversiteit op onze website, waar we een uitgebreide verzameling boeken aanbieden, variërend van klassieke romans tot eigentijdse fictie.
                    Of je nu fan bent van epische fantasie, meeslepende thrillers, hartverwarmende romans of spannende manga en comics, je vindt hier gegarandeerd iets dat bij je smaak past.
                    Duik in de rijke verhalen van populaire auteurs en ontdek nieuwe werelden en personages om te verkennen.
                   <br> Welkom bij jouw bestemming voor een avontuurlijke leeservaring!
                </p>
            </div>
        </div>
        <div class="h-12"></div>
    </section>

    <section class="py-8 bg-gradient-to-r from-gray-600 to-gray-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Card 1 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="https://img.buzzfeed.com/buzzfeed-static/static/2020-12/21/0/asset/f69da90b1e93/sub-buzz-5094-1608511484-18.jpg" alt="Book 1" class="w-full h-auto">
            <div class="p-4">
                <h3 class="text-lg font-semibold mb-2">Boek Titel 1</h3>
                <p class="text-gray-600 mb-2">Auteur Naam</p>
               <div class="flex items-center justify-between">
                    <span class="text-xl font-bold">€19.99</span>
                    <button class="text-gray-600 hover:text-blue-600">
                        <img src="https://cdn-icons-png.flaticon.com/512/34/34627.png" alt="Add to Cart" class="w-6 h-6">
                    </button>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="https://m.media-amazon.com/images/I/81TmHlRleJL._AC_UF894,1000_QL80_.jpg" alt="Book 2" class="w-full h-auto">
            <div class="p-4">
                <h3 class="text-lg font-semibold mb-2">Boek Titel 2</h3>
                <p class="text-gray-600 mb-2">Auteur Naam</p>
            <div class="flex items-center justify-between">
                    <span class="text-xl font-bold">€14.99</span>
                    <button class="text-gray-600 hover:text-blue-600">
                        <img src="https://cdn-icons-png.flaticon.com/512/34/34627.png" alt="Add to Cart" class="w-6 h-6">
                    </button>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="https://s26162.pcdn.co/wp-content/uploads/2021/10/The-Catcher-in-the-Rye-First-Edition-cover-E.-Michael-Mitchell.jpg" alt="Book 3" class="w-full h-auto">
            <div class="p-4">
                <h3 class="text-lg font-semibold mb-2">Boek Titel 3</h3>
                <p class="text-gray-600 mb-2">Auteur Naam</p>
                <div class="flex items-center justify-between">
                    <span class="text-xl font-bold">€24.99</span>
                    <button class="text-gray-600 hover:text-blue-600">
                        <img src="https://cdn-icons-png.flaticon.com/512/34/34627.png" alt="Add to Cart" class="w-6 h-6">
                    </button>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="https://ashokbookcentre.com/wp-content/uploads/2021/12/81YyraOaX1L.jpg" alt="Book 4" class="w-full h-auto">
            <div class="p-4">
                <h3 class="text-lg font-semibold mb-2">Boek Titel 4</h3>
                <p class="text-gray-600 mb-2">Auteur Naam</p>
              <div class="flex items-center justify-between">
                    <span class="text-xl font-bold">€29.99</span>
                    <button class="text-gray-600 hover:text-blue-600">
                        <img src="https://cdn-icons-png.flaticon.com/512/34/34627.png" alt="Add to Cart" class="w-6 h-6">
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="h-12"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 ">
        <!-- Card 5 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="https://m.media-amazon.com/images/I/71WSzS6zvCL._AC_UF894,1000_QL80_.jpg" alt="Book 1" class="w-full h-auto">
            <div class="p-4">
                <h3 class="text-lg font-semibold mb-2">Boek Titel 1</h3>
                <p class="text-gray-600 mb-2">Auteur Naam</p>
              <div class="flex items-center justify-between">
                    <span class="text-xl font-bold">€19.99</span>
                    <button class="text-gray-600 hover:text-blue-600">
                        <img src="https://cdn-icons-png.flaticon.com/512/34/34627.png" alt="Add to Cart" class="w-6 h-6">
                    </button>
                </div>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="https://m.media-amazon.com/images/I/71t4GuxLCuL._AC_UF894,1000_QL80_.jpg" alt="Book 2" class="w-full h-auto">
            <div class="p-4">
                <h3 class="text-lg font-semibold mb-2">Boek Titel 2</h3>
                <p class="text-gray-600 mb-2">Auteur Naam</p>
              <div class="flex items-center justify-between">
                    <span class="text-xl font-bold">€14.99</span>
                    <button class="text-gray-600 hover:text-blue-600">
                        <img src="https://cdn-icons-png.flaticon.com/512/34/34627.png" alt="Add to Cart" class="w-6 h-6">
                    </button>
                </div>
            </div>
        </div>

        <!-- Card 7 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="https://m.media-amazon.com/images/I/71KWpItR2kL._AC_UF894,1000_QL80_.jpg" alt="Book 3" class="w-full h-auto">
            <div class="p-4">
                <h3 class="text-lg font-semibold mb-2">Boek Titel 3</h3>
                <p class="text-gray-600 mb-2">Auteur Naam</p>
                <div class="flex items-center justify-between">
                    <span class="text-xl font-bold">€24.99</span>
                    <button class="text-gray-600 hover:text-blue-600">
                        <img src="https://cdn-icons-png.flaticon.com/512/34/34627.png" alt="Add to Cart" class="w-6 h-6">
                    </button>
                </div>
            </div>
        </div>

        <!-- Card 8 -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="https://m.media-amazon.com/images/I/71Nw3BYd6EL._AC_UF894,1000_QL80_.jpg" alt="Book 4" class="w-full h-auto">
            <div class="p-4">
                <h3 class="text-lg font-semibold mb-2">Boek Titel 4</h3>
                <p class="text-gray-600 mb-2">Auteur Naam</p>
              <div class="flex items-center justify-between">
                    <span class="text-xl font-bold">€29.99</span>
                    <button class="text-gray-600 hover:text-blue-600">
                        <img src="https://cdn-icons-png.flaticon.com/512/34/34627.png" alt="Add to Cart" class="w-6 h-6">
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="h-12"></div>
    </section>
@endsection
</body>
</html>
