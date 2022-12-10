@section('meta')
    <meta name="title" content="Gallery">
    <meta name="description" content="">
    <title>Gallery</title>
    <meta property="og:url" content="https://nandinibali.com/gallery">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Gallery | Nandini Bali">
    <meta property="og:description" content="">
    <meta property="og:image" content="https://nandinibali.com/storage/app/uploads/public/615/543/eab/615543eabc977592178039.jpg">

    <meta property="twitter:title" content="Gallery | Nandini Bali">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="https://nandinibali.com/storage/app/uploads/public/615/543/eab/615543eabc977592178039.jpg">
@endsection

@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/lightgallery/1.3.7/css/lightgallery.min.css">
    <style type="text/css">
        ul.navigation-gallery-left {
            display: block;
            list-style-type: disc;
            -webkit-margin-before: 0;
            -webkit-margin-after: 1em;
            -webkit-margin-start: 0px;
            -webkit-margin-end: 0px;
            -webkit-padding-start: 0px;
        }

        ul.navigation-gallery-left li {
            width: 100%;
            text-align: left;
        }

        /*isotope*/
        .gallery {
            margin-bottom: 20px;
        }

        .grid-item,
        .grid-sizer {
            width: 50%
        }

        .grid-item {
            margin-top: 0px;
            padding: 0px
        }

        .grid-item img {
            width: 100%;
            display: block;
            height: auto;
            cursor: pointer;
        }

        .lg-backdrop,
        .lg-outer {
            z-index: 99999
        }

        .filter-button-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .filter-button {
            display: inline-block;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 12px;
            padding: 10px 15px;
            margin: 0px 5px;
            border-bottom: 1px solid rgb(204, 204, 204);
            opacity: .8;
            background: #e4c568;
        }

        .filter-button a {
            display: block;
            padding: 7px
        }

        .filter-button.is-checked {
            color: rgb(255, 255, 255);
            border-color: #002639;
            background: #002639 !important;
            opacity: 1;
        }

        .filter-button:hover {
            cursor: pointer;
        }

        .gallery-container p {
            font-size: 19px;
            margin-bottom: 50px;
        }

        @media screen and (min-width: 768px) {
            .gallery-container {
                padding: 0px 25px;
            }
        }

        @media screen and (min-width: 992px) {

            .grid-item,
            .grid-sizer {
                width: 25%;
            }

            .grid-item {
                margin-top: 0px;
                padding: 5px;
            }

            .gallery-container p {
                color: rgba(0, 0, 0, 0.40);
                width: 700px;
                margin-left: auto;
                margin-right: auto;
            }

            .activities-txt {
                padding-top: 50px;
            }
        }

        @media screen and (max-width: 500px) {
            .grid-item img {
                padding: 3px;
            }

            .filter-button {
                display: block;
            }
        }
    </style>
@endpush

@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.1/isotope.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/lightgallery/1.3.7/js/lightgallery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.3/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.1/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/lightgallery/1.3.7/js/lightgallery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var $grid = $('.grid').isotope({
                stagger: 30,
                sortBy: 'random',
                itemSelector: '.grid-item',
                percentPosition: true,
                masonry: {
                    columnWidth: '.grid-sizer'
                }
            });
            $grid.imagesLoaded().progress(function() {
                $grid.isotope('layout');
            });
            $('.filter-button-group').on('click', '.filter-button', function() {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
            });
            $('.button-group').each(function(i, buttonGroup) {
                var $buttonGroup = $(buttonGroup);
                $buttonGroup.on('click', '.filter-button', function() {
                    $buttonGroup.find('.is-checked').removeClass('is-checked');
                    $(this).addClass('is-checked');
                });
            });
            $('#gallery').lightGallery({
                selector: '.grid-item'
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var $grid = $('.grid').isotope({
                transitionDuration: '0',
                itemSelector: '.grid-item',
                percentPosition: true,
                masonry: {
                    columnWidth: '.grid-sizer'
                }
            });
            $grid.imagesLoaded().progress(function() {
                $grid.isotope('layout');
            });
            $('.filter-button-group').on('click', '.filter-button', function() {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
            });
            $('.button-group').each(function(i, buttonGroup) {
                var $buttonGroup = $(buttonGroup);
                $buttonGroup.on('click', '.filter-button', function() {
                    $buttonGroup.find('.is-checked').removeClass('is-checked');
                    $(this).addClass('is-checked');
                });
            });
            $('#gallery').lightGallery({
                selector: '.grid-item'
            });
        });
    </script>
@endpush

<x-nandini>
    <section class="vh-100">
        <img src="https://nandinibali.com/storage/app/uploads/public/615/543/eab/615543eabc977592178039.jpg" class="h-100 w-100 object-fit-cover object-position-center">
    </section>

    <section class="py-90">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="fw-bold text-uppercase mb-5 underline">Gallery</h1>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid gallery">
            <div class="container">
                <div class="gallery-container">
                    <div class="row">
                        <div class="button-group filter-button-group gallery-menu col-md-12 text-center">
                            <div class="filter-button is-checked" data-filter="*">All</div>
                            <div class="filter-button" data-filter=".station-item">The Station</div>
                            <div class="filter-button" data-filter=".aerial-item">Aerial</div>
                            <div class="filter-button" data-filter=".villa-item">Villa</div>
                            <div class="filter-button" data-filter=".pool-item">pool</div>
                            <div class="filter-button" data-filter=".experience-item">experience</div>
                            <div class="filter-button" data-filter=".restaurant-item">restaurant</div>
                        </div>
                        <div class="col-sm-12">
                            <div id="gallery" class="grid">
                                <div class="grid-sizer"></div>
                                <div data-src="https://nandinibali.com/storage/app/uploads/public/637/9ed/374/6379ed3748187429471680.jpg" class="grid-item station-item"><img src="https://nandinibali.com/storage/app/uploads/public/637/9ed/374/thumb_275_600_338_0_0_auto.jpg"></div>
                                <div data-src="https://nandinibali.com/storage/app/uploads/public/637/9ed/390/6379ed390e699097311371.jpg" class="grid-item station-item"><img src="https://nandinibali.com/storage/app/uploads/public/637/9ed/390/thumb_276_600_338_0_0_auto.jpg"></div>
                                <div data-src="https://nandinibali.com/storage/app/uploads/public/637/9ed/3e9/6379ed3e94820903932052.jpg" class="grid-item station-item"><img src="https://nandinibali.com/storage/app/uploads/public/637/9ed/3e9/thumb_277_600_338_0_0_auto.jpg"></div>
                                <div data-src="https://nandinibali.com/storage/app/uploads/public/619/dec/74d/619dec74d60cf851793444.jpg" class="grid-item aerial-item"><img src="https://nandinibali.com/storage/app/uploads/public/619/dec/74d/thumb_177_600_338_0_0_auto.jpg"></div>
                                <div data-src="https://nandinibali.com/storage/app/uploads/public/619/dec/76a/619dec76a70a8498737010.jpg" class="grid-item aerial-item"><img src="https://nandinibali.com/storage/app/uploads/public/619/dec/76a/thumb_178_600_338_0_0_auto.jpg"></div>
                                <div data-src="https://nandinibali.com/storage/app/uploads/public/619/dec/784/619dec7846b56900513316.jpg" class="grid-item aerial-item"><img src="https://nandinibali.com/storage/app/uploads/public/619/dec/784/thumb_179_600_338_0_0_auto.jpg"></div>
                                <div data-src="https://nandinibali.com/storage/app/uploads/public/619/dec/78d/619dec78d35a6793941479.jpg" class="grid-item aerial-item"><img src="https://nandinibali.com/storage/app/uploads/public/619/dec/78d/thumb_180_600_338_0_0_auto.jpg"></div>
                                <div data-src="https://nandinibali.com/storage/app/uploads/public/619/dec/797/619dec79754f0239410789.jpg" class="grid-item aerial-item"><img src="https://nandinibali.com/storage/app/uploads/public/619/dec/797/thumb_181_600_338_0_0_auto.jpg"></div>
                                <div data-src="https://nandinibali.com/storage/app/uploads/public/619/dec/7a3/619dec7a3b8f5508237871.jpg" class="grid-item aerial-item"><img src="https://nandinibali.com/storage/app/uploads/public/619/dec/7a3/thumb_182_600_338_0_0_auto.jpg"></div>
                                <div data-src="https://nandinibali.com/storage/app/uploads/public/619/dec/7aa/619dec7aa8621889288250.jpg" class="grid-item aerial-item"><img src="https://nandinibali.com/storage/app/uploads/public/619/dec/7aa/thumb_183_600_338_0_0_auto.jpg"></div>
                                <div data-src="https://nandinibali.com/storage/app/uploads/public/613/ed2/1d7/613ed21d79de4660497960.jpg" class="grid-item villa-item"><img src="https://nandinibali.com/storage/app/uploads/public/613/ed2/1d7/thumb_52_600_338_0_0_auto.jpg"></div>
                                <div data-src="https://nandinibali.com/storage/app/uploads/public/613/ed2/1d8/613ed21d8612f718453533.jpg" class="grid-item villa-item"><img src="https://nandinibali.com/storage/app/uploads/public/613/ed2/1d8/thumb_53_600_338_0_0_auto.jpg"></div>
                                <div data-src="https://nandinibali.com/storage/app/uploads/public/613/ed2/1eb/613ed21eb11a1924410810.jpg" class="grid-item villa-item"><img src="https://nandinibali.com/storage/app/uploads/public/613/ed2/1eb/thumb_54_600_338_0_0_auto.jpg"></div>
                                <div data-src="https://nandinibali.com/storage/app/uploads/public/613/ed2/1ec/613ed21ec4509659004229.jpg" class="grid-item villa-item"><img src="https://nandinibali.com/storage/app/uploads/public/613/ed2/1ec/thumb_55_600_338_0_0_auto.jpg"></div>
                                <div data-src="https://nandinibali.com/storage/app/uploads/public/613/ed2/1fb/613ed21fb033a301445533.jpg" class="grid-item villa-item"><img src="https://nandinibali.com/storage/app/uploads/public/613/ed2/1fb/thumb_56_600_338_0_0_auto.jpg"></div>
                                <div data-src="https://nandinibali.com/storage/app/uploads/public/613/ed2/204/613ed2204e0eb676808855.jpg" class="grid-item villa-item"><img src="https://nandinibali.com/storage/app/uploads/public/613/ed2/204/thumb_57_600_338_0_0_auto.jpg"></div>
                                <div data-src="https://nandinibali.com/storage/app/uploads/public/613/ed2/20c/613ed220c155b743167304.jpg" class="grid-item villa-item"><img src="https://nandinibali.com/storage/app/uploads/public/613/ed2/20c/thumb_58_600_338_0_0_auto.jpg"></div>
                                <div data-src="https://nandinibali.com/storage/app/uploads/public/613/ed2/214/613ed221499d1583367725.jpg" class="grid-item villa-item"><img src="https://nandinibali.com/storage/app/uploads/public/613/ed2/214/thumb_59_600_338_0_0_auto.jpg"></div>
                                <div data-src="https://nandinibali.com/storage/app/uploads/public/613/ed2/5a1/613ed25a1981e745416175.jpg" class="grid-item pool-item"><img src="https://nandinibali.com/storage/app/uploads/public/613/ed2/5a1/thumb_60_600_338_0_0_auto.jpg"></div>
                                <div data-src="https://nandinibali.com/storage/app/uploads/public/613/ed2/5a6/613ed25a668e8655796354.jpg" class="grid-item pool-item"><img src="https://nandinibali.com/storage/app/uploads/public/613/ed2/5a6/thumb_61_600_338_0_0_auto.jpg"></div>
                                <div data-src="https://nandinibali.com/storage/app/uploads/public/613/ed2/5b9/613ed25b919b2353751307.jpg" class="grid-item pool-item"><img src="https://nandinibali.com/storage/app/uploads/public/613/ed2/5b9/thumb_62_600_338_0_0_auto.jpg"></div>
                                <div data-src="https://nandinibali.com/storage/app/uploads/public/613/ed2/6f1/613ed26f163cf738849750.jpg" class="grid-item pool-item"><img src="https://nandinibali.com/storage/app/uploads/public/613/ed2/6f1/thumb_63_600_338_0_0_auto.jpg"></div>
                                <div data-src="https://nandinibali.com/storage/app/uploads/public/613/ed2/b1d/613ed2b1d80bd299638825.jpg" class="grid-item experience-item"><img src="https://nandinibali.com/storage/app/uploads/public/613/ed2/b1d/thumb_64_600_338_0_0_auto.jpg"></div>
                                <div data-src="https://nandinibali.com/storage/app/uploads/public/613/ed2/b24/613ed2b24d471980785966.jpg" class="grid-item experience-item"><img src="https://nandinibali.com/storage/app/uploads/public/613/ed2/b24/thumb_65_600_338_0_0_auto.jpg"></div>
                                <div data-src="https://nandinibali.com/storage/app/uploads/public/613/ed2/d8f/613ed2d8f32ce883550473.jpg" class="grid-item restaurant-item"><img src="https://nandinibali.com/storage/app/uploads/public/613/ed2/d8f/thumb_66_600_338_0_0_auto.jpg"></div>
                                <div data-src="https://nandinibali.com/storage/app/uploads/public/613/ed2/d91/613ed2d915424973878348.jpg" class="grid-item restaurant-item"><img src="https://nandinibali.com/storage/app/uploads/public/613/ed2/d91/thumb_67_600_338_0_0_auto.jpg"></div>
                                <div data-src="https://nandinibali.com/storage/app/uploads/public/613/ed2/db0/613ed2db0e848296554621.jpg" class="grid-item restaurant-item"><img src="https://nandinibali.com/storage/app/uploads/public/613/ed2/db0/thumb_68_600_338_0_0_auto.jpg"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-nandini>
