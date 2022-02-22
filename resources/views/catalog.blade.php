<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Available Colors">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Catalog</title>
    <link rel="stylesheet" href="{{ asset('css/nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/Home.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ asset('js/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('js/nicepage.js') }}" defer=""></script>
    <meta name="generator" content="Nicepage 4.5.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,200,300,400,500,600,700,800,900">



    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "",
            "logo": "images/default-logo.png"
        }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode">
    <header class="u-clearfix u-header u-header" id="sec-f168">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <a href="/" class="u-image u-logo u-image-1">
                <img src="{{ asset('img/logoubayafarma.png') }}" class="u-logo-image u-logo-image-1">
            </a>
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
                <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                    <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                        href="#">
                        <svg class="u-svg-link" viewBox="0 0 24 24">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                        </svg>
                        <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px"
                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <rect y="1" width="16" height="2"></rect>
                                <rect y="7" width="16" height="2"></rect>
                                <rect y="13" width="16" height="2"></rect>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="u-nav-container">
                    <ul class="u-nav u-unstyled u-nav-1">
                        <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="/" style="padding: 10px 20px;">Home</a>
                        </li>
                        <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="{{ route('aboutus') }}" style="padding: 10px 20px;">About</a>
                        </li>
                    </ul>
                </div>
                <div class="u-nav-container-collapse">
                    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-inner-container-layout u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="/">Home</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="{{ route('aboutus') }}">About</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>
    </header>
    @if ($type == 'Medicines')
        <section class="u-clearfix u-section-1" id="carousel_ef5d">
            <div class="u-clearfix u-sheet u-sheet-1">
                <div class="u-align-center u-container-style u-group u-group-1">
                    <div class="u-container-layout u-valign-middle u-container-layout-1">
                        <h2 class="u-custom-font u-font-roboto-slab u-text u-text-1">Our Medicines</h2>
                        <h6 class="u-text u-text-custom-color-2 u-text-2">Find Your Needs</h6>
                    </div>
                </div>
                <div class="u-clearfix u-gutter-20 u-layout-wrap u-layout-wrap-1">
                    <div class="u-layout">
                        <div class="u-layout-row">
                            <div
                                class="u-container-style u-expand-resize u-layout-cell u-left-cell u-size-20 u-size-20-md u-layout-cell-1">
                                <a href="/medicine/1">
                                    <div class="u-container-layout u-container-layout-2">
                                        <img class="u-image u-image-1" src="{{ asset('img/1.png') }}">
                                        <h4 class="u-align-center u-text u-text-custom-color-2 u-text-3">Paracetamol
                                        </h4>
                                        <p class="u-align-center u-text u-text-4">Rp50.000,00</p>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="u-container-style u-expand-resize u-layout-cell u-size-20 u-size-20-md u-layout-cell-2">
                                <a href="/medicine/2">
                                    <div class="u-container-layout u-container-layout-3">
                                        <img class="u-image u-image-2" src="{{ asset('img/2.png') }}">
                                        <h4 class="u-align-center u-text u-text-custom-color-2 u-text-5">Panadol</h4>
                                        <p class="u-align-center u-text u-text-6">Rp30.000,00</p>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="u-container-style u-expand-resize u-layout-cell u-right-cell u-size-20 u-size-20-md u-layout-cell-3">
                                <a href="/medicine/3">
                                    <div class="u-container-layout u-container-layout-4">
                                        <img class="u-image u-image-3" src="{{ asset('img/3.png') }}">
                                        <h4 class="u-align-center u-text u-text-custom-color-2 u-text-7">Aspirin</h4>
                                        <p class="u-align-center u-text u-text-8">Rp40.000,00</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @elseif ($type == 'Medical Equipments')
        <section class="u-clearfix u-section-1" id="carousel_ef5d">
            <div class="u-clearfix u-sheet u-sheet-1">
                <div class="u-align-center u-container-style u-group u-group-1">
                    <div class="u-container-layout u-valign-middle u-container-layout-1">
                        <h2 class="u-custom-font u-font-roboto-slab u-text u-text-1">Our Medical Equipments</h2>
                        <h6 class="u-text u-text-custom-color-2 u-text-2">Find Your Needs</h6>
                    </div>
                </div>
                <div class="u-clearfix u-gutter-20 u-layout-wrap u-layout-wrap-1">
                    <div class="u-layout">
                        <div class="u-layout-row">
                            <div
                                class="u-container-style u-expand-resize u-layout-cell u-left-cell u-size-20 u-size-20-md u-layout-cell-1">
                                <a href="/equipment/4">
                                    <div class="u-container-layout u-container-layout-2">
                                        <img class="u-image u-image-1" src="{{ asset('img/4.png') }}">
                                        <h4 class="u-align-center u-text u-text-custom-color-2 u-text-3">Stetoskop</h4>
                                        <p class="u-align-center u-text u-text-4">Rp150.000,00</p>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="u-container-style u-expand-resize u-layout-cell u-size-20 u-size-20-md u-layout-cell-2">
                                <a href="/equipment/5">
                                    <div class="u-container-layout u-container-layout-3">
                                        <img class="u-image u-image-2" src="{{ asset('img/5.png') }}">
                                        <h4 class="u-align-center u-text u-text-custom-color-2 u-text-5">Masker KN-95
                                        </h4>
                                        <p class="u-align-center u-text u-text-6">Rp300.000,00</p>
                                    </div>
                                </a>
                            </div>
                            <div
                                class="u-container-style u-expand-resize u-layout-cell u-right-cell u-size-20 u-size-20-md u-layout-cell-3">
                                <a href="/equipment/6">
                                    <div class="u-container-layout u-container-layout-4">
                                        <img class="u-image u-image-3" src="{{ asset('img/6.png') }}">
                                        <h4 class="u-align-center u-text u-text-custom-color-2 u-text-7">Kursi Roda</h4>
                                        <p class="u-align-center u-text u-text-8">Rp4.000.000,00</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif


    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-068f">
        <div class="u-clearfix u-sheet u-sheet-1">
            <p class="u-small-text u-text u-text-variant u-text-1">Dibuat pada tahun 2022, milik UbayaFarma</p>
        </div>
    </footer>
    <section class="u-backlink u-clearfix u-grey-80">
        <a class="u-link" href="/" target="_blank">
            <span>Website UbayaFarma</span>
        </a>
        <p class="u-text">
            <span>created with</span>
        </p>
        <a class="u-link" href="/" target="_blank">
            <span>Laravel</span>
        </a>.
    </section>
</body>

</html>
