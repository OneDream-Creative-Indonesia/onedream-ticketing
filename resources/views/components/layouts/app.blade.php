<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />

        <meta name="application-name" content="{{ config('app.name') }}" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>{{ $title ?? config('app.name') }}</title>

        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>

        @filamentStyles
        @vite('resources/css/app.css')
    </head>

    <body class="antialiased">
        <header id="home">
            <!-- Start Navigation -->
            <nav class="p-6 text-white shadow-lg" style="background-color: #01013D">
                <div class="container flex items-center justify-between px-4 py-2 mx-auto">
                    <!-- Start Header Navigation -->
                    <div class="flex items-center">
                        <a class="text-xl font-bold" href="https://onedream.id">
                            <img src="../../assets/img/logo one dream putih.svg" class="h-10" alt="Logo">
                        </a>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="hidden space-x-4 md:flex">
                        <a href="https://onedream.id/" class="hover:text-gray-300">Beranda</a>
                        <a href="https://onedream.id/about" class="hover:text-gray-300">Profil</a>
                        <a href="https://onedream.id/portfolio" class="hover:text-gray-300">Portfolio</a>
                        <a href="https://onedream.id/service" class="hover:text-gray-300">Layanan</a>
                        <a href="https://onedream.id/contact" class="hover:text-gray-300">Kontak</a>
                    </div>
                    <button class="flex items-center md:hidden" id="navbar-toggle">
                        <i class="text-white fa fa-bars"></i>
                    </button>
                </div>
                <div class="hidden px-4 py-2 space-y-2 text-white bg-gray-800 md:hidden" id="navbar-menu">
                    <a href="https://onedream.id/" class="block hover:text-gray-300">Beranda</a>
                    <a href="https://onedream.id/about" class="block hover:text-gray-300">Profil</a>
                    <a href="https://onedream.id/portfolio" class="block hover:text-gray-300">Portfolio</a>
                    <a href="https://onedream.id/service" class="block hover:text-gray-300">Layanan</a>
                    <a href="https://onedream.id/contact" class="block hover:text-gray-300">Kontak</a>
                </div>
            </nav>
            <!-- End Navigation -->
        </header>
        {{ $slot }}

        @filamentScripts
        @vite('resources/js/app.js')

        <footer class="text-white" style="background-color: #01013D">
            <div class="container px-4 py-8 mx-auto">
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full px-4 mb-4 md:w-1/4 md:mb-0">
                        <img src="../../assets/img/logo one dream putih.svg" alt="Logo" class="w-32">
                    </div>
                    <div class="w-full px-4 mb-4 md:w-1/4 md:mb-0">
                        <h4 class="mb-4 text-lg font-semibold">Kantor Kami</h4>
                        <ul>
                            <li class="flex items-center mb-2">
                                <img src="../../assets/img/Icon/placeholder.png" class="h-8 mr-2" alt="Location">
                                <span>Taman Lopang Indah Blok F43, No 10 Kota Serang-Banten</span>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full px-4 mb-4 md:w-1/4 md:mb-0">
                        <h4 class="mb-4 text-lg font-semibold">Kontak Kami</h4>
                        <ul>
                            <li class="flex items-center mb-2">
                                <img src="../../assets/img/Icon/mail.png" class="h-8 mr-2" alt="Email">
                                <a href="mailto:hello@onedream.id" class="hover:text-gray-300">hello@onedream.id</a>
                            </li>
                            <li class="flex items-center mb-2">
                                <img src="../../assets/img/Icon/call.png" class="h-8 mr-2" alt="Phone">
                                <a href="https://wa.me/6281213369843" class="hover:text-gray-300">+628 12 1336 9843</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full px-4 mb-4 md:w-1/4 md:mb-0">
                        <h4 class="mb-4 text-lg font-semibold">Ikuti Kami</h4>
                        <ul class="flex space-x-2">
                            <li>
                                <a href="https://www.instagram.com/onedreamcreative" target="_blank" class="hover:text-gray-300">
                                    <img src="../../assets/img/Icon/instagram.png" class="h-8" alt="Instagram">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCnPvqX6LhC2d017MikicrZg" target="_blank" class="hover:text-gray-300">
                                    <img src="../../assets/img/Icon/youtube.png" class="h-8" alt="YouTube">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tiktok.com/@onedreamcreative" target="_blank" class="hover:text-gray-300">
                                    <img src="../../assets/img/Icon/tiktok.png" class="h-8" alt="TikTok">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/onedreamcreative/" target="_blank" class="hover:text-gray-300">
                                    <img src="../../assets/img/Icon/linkedin.png" class="h-8" alt="LinkedIn">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mt-8 text-center">
                    © One Dream Creative Indonesia
                </div>
            </div>
        </footer>
    </body>

    <script>
        document.getElementById('navbar-toggle').addEventListener('click', function () {
            document.getElementById('navbar-menu').classList.toggle('hidden');
        });
    </script>
</html>
