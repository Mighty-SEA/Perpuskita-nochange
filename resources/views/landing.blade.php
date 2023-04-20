<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from empathy.co/resources/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Apr 2023 03:49:54 GMT -->

<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True" />
    <meta name="theme-color" content="#243d48">
    <meta name="MobileOptimized" content="320" />



    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://empathy.co/favicon.ico" sizes="32x32" />


    <meta name="description"
        content="Download our guides, reports, case studies, product overviews and white papers." />
    <meta prefix="og: http://ogp.me/ns#" property="og:description"
        content="Download our guides, reports, case studies, product overviews and white papers." />
    <meta name="twitter:description"
        content="Download our guides, reports, case studies, product overviews and white papers." />




    <meta name="keywords" content="Empathy Resources, Empathy.co Resources,  Resources">


    <meta prefix="og: http://ogp.me/ns#" property="og:image" content="./media/logo/logo-animated-padding.gif">
    <meta prefix="og: http://ogp.me/ns#" property="og:image:secure_url"
        content="./media/logo/logo-animated-padding.gif">
    <meta prefix="og: http://ogp.me/ns#" property="og:title" content="Our Resources" />
    <meta prefix="og: http://ogp.me/ns#" property="og:url" content="index.html" />
    <meta prefix="og: http://ogp.me/ns#" property="og:site_name" content="empathy.co" />
    <meta name="Date" content="">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="https://empathy.co/">
    <meta name="twitter:site" content="empathy.co" />

    <meta name="twitter:creator" content="https://twitter.com/empathyco_" />
    <link rel="stylesheet" type="text/css" href="./fonts/empathy-icons/style.css" />
    <link rel="stylesheet" type="text/css" href="./fonts/empathy-typography/style.css" />
    <link rel="stylesheet" type="text/css" href="./styles/css/resources.css" />

    <title>Perpuskita</title>


    <script src="./js/common.js" type="text/javascript"></script>
    <script src="https://cdn.tailwindcss.com"></script>

</head>


<body>

    <header class="header">
        <div class="wrapped-content wrapped-content--column">
            <a href="#" class="header__logo" target="_self">
                <img class="header__logo--image" src="./media/logo/logo-image-animated.gif" alt="Logo part 1">
                <img class="header__logo--text" src="{{ asset('storage/logo/perpuskita.png') }}" alt="Logo part 2">
            </a>
            <nav class="header__menu header-menu">
                <span class="header__close-icon eicon-close"></span>
                <ul class="header-menu__list-items">



                    <li class="header-menu__list-item ">
                        <a class="link    " href="#" target="_self">
                            <span class="link__text">Products</span> </a>

                    </li>

                    <li class="header-menu__list-item ">
                        <a class="link    " href="#" target="_self">
                            <span class="link__text">Booking</span> </a>

                    </li>

                    <li class="header-menu__list-item header-menu__list-item--active">
                        <a class="link    " href="#" target="_self">
                            <span class="link__text">Resources</span> </a>

                    </li>

                    <li class="header-menu__list-item ">
                        <a class="link    " href="#" target="_self">
                            <span class="link__text">Customers</span> </a>

                    </li>

                    <li class="header-menu__list-item ">
                        <a class="link    " href="#" target="_self">
                            <span class="link__text">Partners</span> </a>

                    </li>

                    <li class="header-menu__list-item header-menu__list-item--docs header-menu__list-item--dropdown">
                        <a class="link eicon-down-arrow" href="#/" target="_blank"
                            style="text-transform: inherit; cursor: pointer;">DOCS</a>
                        <ul class="header-menu__subitem-list header-menu__edocs-submenu">
                            <li class="header-menu__subitem"><a href="#" target="_blank">Explore</a></li>
                            <li class="header-menu__subitem"><a href="#" target="_blank">Develop</a></li>
                        </ul>
                    </li>


                    <li class="header-menu__list-item  header-menu__icon header-menu__icon--contact-us"><a
                            href="#" target="_self"><img src="https://empathy.co/assets/media/contact-icon.svg"
                                alt="Contact Us"></a></li>


                </ul>
            </nav>
            <span class="header__open-icon eicon-burger"></span>
        </div>
    </header>

    <main class="resources">
        <div class="resources__title common-block" id="documents">
            <div class="wrapped-content wrapped-content--column wrapped-content--justified text-centered">
                <h1 class="long-title" style="font-size:80px">PERPUS<biru style="color:rgb(92, 128, 245)">Kita</biru>
                </h1>
                <h3 class="resources__subtitle">Layanan penyedia buku terbanyak di seluruh indonesia</h3>
                <h3 style="color:red">gunakan "php artisan db:seed" untuk menampilkan gambarnya ini branch 1</h3>

            </div>
        </div>

        <section class="resources__main-section common-block  resources__main">

            <div class="wrapped-content wrapped-content--column">
                <div class="resources__resource-list">
                    <section class="resources__resource-group resource-group">
                        <h5 class="resource-group__title">Buku Pendidikan</h5>
                        <div class="resource-group__list-wrapper">
                            <ul class="resource-group__list">
                                @foreach ($pendidikan->take(9) as $bp)
                                    <li class="resources__resource-item resource-item">
                                        <a href="" class="resource-item__container">
                                            <figure class="resource-item__image-wrapper">
                                                <img class="resource-item__image"
                                                    src="{{ asset('storage/buku/' . $bp->image) }}"
                                                    alt="Casa del Libro Case Study">
                                            </figure>
                                            <div class="resource-item__content">
                                                <p>{{ $bp->pengarang }}</p>
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </section>

                    <section class="resources__resource-group resource-group">
                        <h5 class="resource-group__title">Novel</h5>
                        <div class="resource-group__list-wrapper">
                            <ul class="resource-group__list">


                                @foreach ($novel->take(9) as $bp)
                                    <li class="resources__resource-item resource-item">
                                        <a href="" class="resource-item__container">
                                            <figure class="resource-item__image-wrapper">
                                                <img class="resource-item__image"
                                                    src="{{ asset('storage/buku/' . $bp->image) }}"
                                                    alt="Casa del Libro Case Study">
                                            </figure>
                                            <div class="resource-item__content">
                                                <p>{{ $bp->pengarang }}</p>
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach


                            </ul>
                        </div>
                    </section>

                    <section class="resources__resource-group resource-group">
                        <h5 class="resource-group__title">Komik</h5>
                        <div class="resource-group__list-wrapper">
                            <ul class="resource-group__list">

                                @foreach ($komik->take(9) as $bp)
                                    <li class="resources__resource-item resource-item">
                                        <a href="" class="resource-item__container">
                                            <figure class="resource-item__image-wrapper">
                                                <img class="resource-item__image"
                                                    src="{{ asset('storage/buku/' . $bp->image) }}"
                                                    alt="Casa del Libro Case Study">
                                            </figure>
                                            <div class="resource-item__content">
                                                <p>{{ $bp->pengarang }}</p>
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach


                            </ul>
                        </div>
                    </section>
                </div>

                <div class="resources__view-more-documents">
                    <div class="resources__animated-lines-wrapper">
                        <div>
                            <div class="bg-animated-lines  " line-duration="4" line-duration-incremental="2"
                                line-delay="0" line-delay-incremental="1" line-y-coordinate="0.5">
                                <svg class="bg-animated-lines_svg" viewBox="0 0 120 28">
                                    <defs>
                                        <path id="wave"
                                            d="M0,0c30,0,30,1.5,60,1.5S90,0,120,0s30,1.5,60,1.5S210,0,240,0" />
                                    </defs>
                                </svg>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>

        {{-- semua buku --}}
        <section class=" resources__podcasts">
            <div class="">




                <div class="max-w-screen-xl p-5 mx-auto dark:text-gray-100">
                    <div class="grid grid-cols-1 gap-5 lg:grid-cols-4 sm:grid-cols-2">
                        @foreach ($popular->take(12) as $p)
                            <div class="relative flex items-end justify-start w-full text-left bg-center bg-cover h-96 dark:bg-gray-500"
                                style="background-image: url({{ asset('storage/buku/' . $p->image) }});">
                                <div
                                    class="absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-b dark:via-transparent dark:from-gray-900 dark:to-gray-900">
                                </div>
                                <div class="absolute top-0 left-0 right-0 flex items-center justify-between mx-5 mt-3">
                                    <a rel="noopener noreferrer" href="#"
                                        class="px-3 py-2 text-xs font-semibold tracking-wider uppercase dark:text-gray-100 bgundefined">{{ $p->kategori->kategori }}</a>
                                    <div class="flex flex-col justify-start text-center dark:text-gray-100">
                                        <span class="leading-none uppercase">{{ $p->viewed }} views</span>
                                    </div>
                                </div>
                                <h2 class="z-10 p-5">
                                    <a rel="noopener noreferrer" href="#"
                                        class="font-medium text-md hover:underline dark:text-gray-100">
                                        {{ $p->judul }}</a>
                                </h2>
                            </div>
                        @endforeach


                    </div>
                </div>
                <center>
                    <button id="btnPodcast" class="btn  btn--cta   resources__podcast-more-button">View all</button>
                </center>
            </div>

        </section>


        <div>
            <div class="resources__breadcrumb resources__breadcrumb--desktop">
                <ul>
                    <li class="resources__breadcrumb-item resources__breadcrumb-item--active" data-link=""><span
                            class="resources__breadcrumb-label"><a href="index.html"
                                class="resources__documents-link"></a></span></li>
                    <li class="resources__breadcrumb-progress resources__breadcrumb-progress--main"><span
                            class="resources__breadcrumb-progress-bar resources__breadcrumb-progress-bar--main"></span>
                    </li>
                    <li class="resources__breadcrumb-item" data-link="podcasts"><span
                            class="resources__breadcrumb-label"><a href="index.html#podcasts"></a></span></li>
                    <li class="resources__breadcrumb-progress"><span
                            class="resources__breadcrumb-progress-bar"></span></li>
                    <li class="resources__breadcrumb-item" data-link="blog"><span
                            class="resources__breadcrumb-label"><a href="index.html#blog"></a></span></li>
                </ul>
            </div>

            <div class="resources__breadcrumb resources__breadcrumb--mobile">
                <ul>
                    <li class="resources__breadcrumb-item resources__breadcrumb-item--active" data-link="documents">
                        <span class="resources__breadcrumb-label"><a href="https://empathy.co/"
                                class="resources__documents-link"></a></span>
                    </li>
                    <li class="resources__breadcrumb-progress"><span
                            class="resources__breadcrumb-progress-bar"></span></li>
                    <li class="resources__breadcrumb-item" data-link="podcasts"><span
                            class="resources__breadcrumb-label"><a href="#podcasts"></a></span></li>
                    <li class="resources__breadcrumb-progress"><span
                            class="resources__breadcrumb-progress-bar"></span></li>
                    <li class="resources__breadcrumb-item" data-link="blog"><span
                            class="resources__breadcrumb-label"><a href="#blog"></a></span></li>
                </ul>
            </div>

        </div>
    </main>

    <div class="go-top go-top--hidden">
        <span class="eicon-down-arrow go-top__arrow"></span>
    </div>

    <script src="./js/go-top-arrow.js"></script>
    <footer class="footer">
        <main class="wrapped-content footer__direct-links-container">
            <section class="">
                <div
                    class="container flex flex-col items-center justify-center p-4
                mx-auto space-y-8 sm:p-10">
                    <h1 class="text-4xl font-bold leading-none text-center sm:text-5xl">Kelompok 3</h1>
                    <p class="max-w-2xl text-center dark:dark:text-gray-400">Halaman ini dibuat oleh kelompok 3 untuk
                        memenuhi Tugas Pemrograman Lanjut</p>
                    <div class="flex flex-row flex-wrap-reverse justify-center">
                        <div class="flex flex-col justify-center m-8 text-center">
                            <img alt=""
                                class="self-center flex-shrink-0 w-24 h-24 mb-4 bg-center bg-cover rounded-full dark:dark:bg-gray-500"
                                src="{{ asset('storage/logo/hibban.jpg') }}">
                            <p class="text-xl font-semibold leading-tight">HIBBAN HABIBURRAHMAN</p>
                            <p class="dark:dark:text-gray-400">IF2021006</p>
                        </div>
                        <div class="flex flex-col justify-center m-8 text-center">
                            <img alt=""
                                class="self-center flex-shrink-0 w-24 h-24 mb-4 bg-center bg-cover rounded-full dark:dark:bg-gray-500"
                                src="{{ asset('storage/logo/april.jpg') }}">
                            <p class="text-xl font-semibold leading-tight">APRILA RIZKIANTI</p>
                            <p class="dark:dark:text-gray-400">IF2021004</p>
                        </div>
                        <div class="flex flex-col justify-center m-8 text-center">
                            <img alt=""
                                class="self-center flex-shrink-0 w-24 h-24 mb-4 bg-center bg-cover rounded-full dark:dark:bg-gray-500"
                                src="{{ asset('storage/logo/fikri.jpg') }}">
                            <p class="text-xl font-semibold leading-tight">FIKRI ZULKARNAIN</p>
                            <p class="dark:dark:text-gray-400">IF2021</p>
                        </div>
                        <div class="flex flex-col justify-center m-8 text-center">
                            <img alt=""
                                class="self-center flex-shrink-0 w-24 h-24 mb-4 bg-center bg-cover rounded-full dark:dark:bg-gray-500"
                                src="{{ asset('storage/logo/zahra.jpg') }}">
                            <p class="text-xl font-semibold leading-tight">ZAHRA</p>
                            <p class="dark:dark:text-gray-400">IF2021</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <section class="footer__copyright-container">
            <div class="wrapped-content">
                <span>@2023 Perpuskita.com</span>
                <span class="row-container footer__cookies-and-privacy-container">
                    <span class="link"><a href="https://empathy.whistlelink.com/" target="_blank">EU Whistleblowing
                            Directive</a></span>
                    <span class="tool link footer__cookies-popup"
                        data-tip="Looking for a cookie disclaimer? We don't use cookies so relax and browse away."
                        tabindex="1">Cookie Policy</span>
                    <a class="link link--white   " href="https://empathy.co/privacy-policy/" target="_self">
                        <span class="link__text">Privacy Policy</span> </a>

                </span>
            </div>
        </section>
    </footer>

</body>
<script src="./js/fathom-analytics-snippet.js" id="DUMMBTBZ"></script>

<script src="./js/header-menu.js"></script>
<script src="./js/footer-menu.js"></script>





<script src="./js/resources.js"></script>

<script src="./js/randomize-background-lines.js"></script>






<script src="./js/lightbox.js"></script>




<!-- Mirrored from empathy.co/resources/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Apr 2023 03:50:23 GMT -->

</html>
