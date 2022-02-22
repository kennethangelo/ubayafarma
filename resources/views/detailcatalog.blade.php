<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Sample Product">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Detail Catalog</title>
    <link rel="stylesheet" href="{{ asset('css/nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/detailcatalog.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ asset('js/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('js/nicepage.js') }}" defer=""></script>
    <meta name="generator" content="Nicepage 4.5.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


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

<body data-home-page="Home.html" data-home-page-title="Home" class="u-body u-xl-mode">
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
    <section class="u-align-center u-clearfix u-section-1" id="sec-f2ae">
        <div
            class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
            <!--product-->
            <!--product_options_json-->
            <!--{"source":""}-->
            <!--/product_options_json-->
            <!--product_item-->
            <div class="u-container-style u-expanded-width u-product u-product-1">
                <div class="u-container-layout u-container-layout-1">
                    <div
                        class="u-align-center u-border-3 u-border-grey-30 u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-shape-rectangle u-group-1">
                        <div class="u-container-layout u-valign-middle-xl u-container-layout-2">
                            <!--product_title-->
                            <h2 class="u-product-control u-text u-text-1">
                                <a class="u-product-title-link" href="#">
                                    <!--product_title_content-->
                                    @if ($id == 1)
                                        Paracetamol
                                    @elseif($id == 2)
                                        Panadol
                                    @elseif($id == 3)
                                        Aspirin
                                    @elseif($id == 4)
                                        Stetoskop
                                    @elseif($id == 5)
                                        Masker KN-95
                                    @elseif($id == 6)
                                        Kursi Roda
                                    @endif
                                    <!--/product_title_content-->
                                </a>
                            </h2>
                            <!--/product_title-->
                            <!--product_content-->
                            <div class="u-product-control u-product-desc u-text u-text-default u-text-2">
                                <!--product_content_content-->
                                <p>
                                    @if ($id == 1)
                                        Paracetamol adalah obat untuk meredakan demam dan nyeri, termasuk nyeri haid
                                        atau sakit gigi.
                                    @elseif($id == 2)
                                        Panadol adalah obat yang digunakan untuk meredakan gejala dan keluhan, seperti
                                        demam, flu, sakit kepala, hidung tersumbat, batuk tidak berdahak, dan
                                        bersin-bersin.
                                    @elseif($id == 3)
                                        Aspirin adalah obat untuk meredakan nyeri, demam, dan peradangan.
                                    @elseif($id == 4)
                                        Stetoskop adalah alat medis yang fungsinya tidak hanya untuk mendengar suara
                                        detak jantung saja, tetapi juga untuk mendengarkan suara organ lain yang berada
                                        di dalam tubuh.
                                    @elseif($id == 5)
                                        Masker N95 adalah masker yang dianggap sebagai standar emas penutup wajah di
                                        dunia medis, dan bahkan dalam industri konstruksi.
                                    @elseif($id == 6)
                                        Kursi roda adalah alat bantu yang digunakan oleh orang yang mengalami kesulitan
                                        berjalan menggunakan kaki, baik dikarenakan oleh penyakit, cedera, maupun cacat.
                                    @endif
                                </p>
                                <!--/product_content_content-->
                            </div>
                            <!--/product_content-->
                            <!--product_price-->
                            <div class="u-product-control u-product-price u-product-price-1">
                                <div class="u-price-wrapper u-spacing-10">
                                    <!--product_old_price-->
                                    <div class="u-price u-text-palette-2-base"
                                        style="font-size: 1.875rem; font-weight: 700;">
                                        <!--product_regular_price_content-->
                                        @if ($id == 1)
                                            Rp50.000,00
                                        @elseif($id == 2)
                                            Rp30.000,00
                                        @elseif($id == 3)
                                            Rp40.000,00
                                        @elseif($id == 4)
                                            Rp150.000,00
                                        @elseif($id == 5)
                                            Rp300.000,00
                                        @elseif($id == 6)
                                            Rp4.000.000,00
                                        @endif
                                        <!--/product_regular_price_content-->
                                    </div>
                                    <!--/product_regular_price-->
                                </div>
                            </div>
                            <!--/product_price-->
                            <!--product_button-->
                            <!--options_json-->
                            <!--{"clickType":"add-to-cart","content":""}-->
                            <!--/options_json-->
                            <a href=""
                                class="u-border-2 u-border-grey-30 u-btn u-button-style u-hover-grey-25 u-none u-product-control u-text-hover-white u-text-palette-2-base u-btn-1">
                                <!--product_button_content-->Add to Cart
                                <!--/product_button_content-->
                            </a>
                            <!--/product_button-->
                        </div>
                    </div>
                    <!--product_image-->
                    <img alt=""
                        class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-image u-image-default u-product-control u-image-1"
                        data-image-width="2000" data-image-height="1333" src="{{ asset("img/$id.png") }}">
                    <!--/product_image-->
                </div>
            </div>
            <!--/product_item-->
            <!--/product-->
        </div>
    </section>

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
