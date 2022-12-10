@section('meta')
    <meta name="title" content="Nandini Jungle Resort &amp; Spa">
    <meta name="description" content="A dramatic hideaway nestled in the heart of rainforest Payangan - Ubud, Nandini Jungle Resort and Spa is a captivating destination resort that blends smoothly with its natural surroundings, Situated on the mystical Ayung River, each villa enjoys the embrace of the lush rainforest and offers stunning views from private balcony of the breathtaking Ayung gorge, Reconnect with nature, rekindle your spirit and reignite your Soul in this serene nature haven">
    <title>Nandini Jungle Resort &amp; Spa</title>
    <meta property="og:url" content="https://nandinibali.com">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Nandini Jungle Resort &amp; Spa | Nandini Bali">
    <meta property="og:description" content="A dramatic hideaway nestled in the heart of rainforest Payangan - Ubud, Nandini Jungle Resort and Spa is a captivating destination resort that blends smoothly with its natural surroundings, Situated on the mystical Ayung River, each villa enjoys the embrace of the lush rainforest and offers stunning views from private balcony of the breathtaking Ayung gorge, Reconnect with nature, rekindle your spirit and reignite your Soul in this serene nature haven">
    <meta property="og:image" content="https://nandinibali.com/themes/mindimedia/assets/images/contact.jpg">

    <meta property="twitter:title" content="Nandini Jungle Resort &amp; Spa | Nandini Bali">
    <meta name="twitter:description" content="A dramatic hideaway nestled in the heart of rainforest Payangan - Ubud, Nandini Jungle Resort and Spa is a captivating destination resort that blends smoothly with its natural surroundings, Situated on the mystical Ayung River, each villa enjoys the embrace of the lush rainforest and offers stunning views from private balcony of the breathtaking Ayung gorge, Reconnect with nature, rekindle your spirit and reignite your Soul in this serene nature haven">
    <meta name="twitter:image" content="https://nandinibali.com/themes/mindimedia/assets/images/contact.jpg">
@endsection
@push('css')
    <style type="text/css">
        #advantages-slides small {
            font-size: 10px;
            left: 80px;
            letter-spacing: .1em;
        }

        #offers-slides .box-arrows .slick-arrow {
            transition: all cubic-bezier(0.785, 0.135, 0.15, 0.86) 0.7s;
        }

        #offers-slides .box-arrows .slick-arrow:hover {
            background-color: #5A8C14 !important;
            color: #FFF;
            transition: all cubic-bezier(0.785, 0.135, 0.15, 0.86) 0.7s;
        }

        .reviews-element-container {
            position: relative;
            margin: 16rem 1.25rem 0;
            width: 70%;
        }

        .wrap-reviews-element {
            position: absolute;
            width: 95%;
            max-width: 100vw;
            top: -10rem;
            left: 25%;
            height: 100%;
        }

        .reviews-element-title {
            align-self: flex-start;
            text-orientation: mixed;
            writing-mode: vertical-lr;
            transform: rotate(180deg);
            margin-top: 0;
            margin-left: 0;
            font-size: 1.7rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        .reviews-element-quote {
            display: block;
            margin-left: 4rem;
            top: 0;
            position: absolute;
        }

        .reviews-element-line {
            margin: 0;
            margin-left: 1.25rem;
            width: .125rem;
            height: 11.25rem !important;
            margin-bottom: 4rem;
        }

        .reviews-element-icon {
            bottom: 0;
            left: 0;
            font-size: 9.5rem;
            line-height: 2.5rem;
            letter-spacing: -.03em;
        }

        .reviews-element-gray-box {
            background-color: rgba(220, 220, 221, .3);
            height: 15rem;
            position: relative;
        }

        .reviews-box-list {
            width: 55%;
            margin-left: 10.25rem;
            margin-right: 7.5rem;
            margin-top: 0;
            position: absolute !important;
            top: 0;
            z-index: 99 !important;
        }

        .reviews-element-content {
            line-height: 1.75rem;
            margin-bottom: 1rem;
            font-size: .875rem;
            font-style: italic;
            letter-spacing: -.03em;
            text-align: right;
        }

        .reviews-element-guess {
            text-align: right;
            font-size: 1rem;
            line-height: 1.5rem;
        }

        .reviews-box-arrows {
            position: absolute;
            bottom: 14%;
            right: 5%;
            width: 56%;
            display: flex;
            justify-content: space-between;
        }

        .reviews-box-arrows i {
            cursor: pointer;
        }
    </style>
@endpush

@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#BannerPopUp').modal('show');
        });
    </script>
    <script type="text/javascript">
        $('#advantages-slides .sliders').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: true,
            appendArrows: "#advantages-slides .box-arrows",
            prevArrow: "<div class='float-start rounded-circle border border-secondary d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fa fa-chevron-left'></i></div>",
            nextArrow: "<div class='float-end rounded-circle border border-secondary d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fa fa-chevron-right'></i></div>",
        });
        $('#accommodation-slides .sliders').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: true,
            appendArrows: "#accommodation-slides .box-arrows",
            prevArrow: "<div class='float-start rounded-0 bg-white d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fa fa-chevron-left'></i></div>",
            nextArrow: "<div class='float-end rounded-0 bg-white d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fa fa-chevron-right'></i></div>",
        });
        $('#experiences-slides .sliders').slick({
            dots: false,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear',
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
        });
        $('#offers-slides .sliders').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: true,
            appendArrows: "#offers-slides .box-arrows",
            prevArrow: "<div class='float-start rounded-0 bg-white d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fa fa-chevron-left'></i></div>",
            nextArrow: "<div class='float-end rounded-0 bg-white d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fa fa-chevron-right'></i></div>",
        });

        $('.reviews-box-list').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: true,
            appendArrows: ".reviews-box-arrows",
            prevArrow: "<i class='fa fa-long-arrow-left'></i>",
            nextArrow: "<i class='fa fa-long-arrow-right'></i>",
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            }, ]
        });
    </script>
@endpush

<x-nandini>
    <!-- Modal -->
    <div class="modal fade" id="BannerPopUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background-color: white; border-radius: 0px!important; top: 70px;">
                <div class="modal-body pb-4">

                    <div class="row">
                        <div class="col-md-12 text-center mb-4">
                            <img class="" src="https://www.nandinibali.com/themes/mindimedia/assets/images/green-logo.png" style="max-width: 180px; margin-bottom:10px;">
                            <img class="" src="https://www.nandinibali.com/storage/app/media/DASHING%20WONDERLAND.jpg" style="max-width: 100%;">
                        </div>
                        <div class="col-md-12 text-center fs-3">
                            <h3 class="">TIS THE SEASON TO CELEBRATE</h3>
                            <p class="mb-3" style="font-size: 16px;">
                                Following the 2022 theme of Wondrous Seventeen,<br>
                                this year, Hanging Gardens Of Bali will cast an Enchanting Wonderland all over the resort, offering an array of magical experiences blends with a dreamy culinary journey by HGI Corporate Executive Chef Ridwan Hakim,<br>
                                starting from Dec 20, 2022 till Jan 8, 2023<br>
                            </p>
                            <a class="btn btn-default text-decoration-none fs-5" href="https://www.nandinibali.com/blog/post/dashing-wonderland-nandini-jungle-resort-spa-bali" target="blank" style="background-color:#6ea027; color:white">VIEW DETAIL</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <section class="vh-100 overflow-hidden position-relative">
        <iframe src="https://www.youtube.com/embed/jot-1ANRZ-s?autoplay=1&mute=1&controls=0&loop=1&rel=0&showinfo=0&iv_load_policy=3&playlist=jot-1ANRZ-s" class="header-iframe-youtube"></iframe>
    </section>

    <section class="py-90 bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="fw-bold text-uppercase mb-2">Nandini<br></h1>
                    <h4 class=" mb-5 underline">Discover a Luxury Jungle Experience</h4>
                    <p>A dramatic hideaway nestled in the heart of the Payangan rainforest - Ubud, Nandini Jungle Resort and Spa is a captivating destination that blends smoothly with its natural surroundings. Situated on the mystical Ayung River, each villa enjoys the embrace of a lush rainforest and offers stunning views from your own private balcony of the breathtaking Ayung gorge. Reconnect with nature, rekindle your spirit and reignite your soul in this serene nature haven.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 border border-secondary py-5 position-relative" id="advantages-slides">
                    <small class="position-absolute top-0 bg-primary fw-bold text-white text-uppercase py-1 px-2">Advantages of Booking</small>
                    <div class="sliders px-4 d-flex justify-content-center align-items-center">
                        <div class="border-end border-primary px-5 d-flex flex-column align-items-start justify-content-center h-100px">
                            <p class="fw-bold mb-2">VIP Treatment</p>
                            <p class="text-primary mb-0 small">on arrival</p>
                        </div>
                        <div class="border-end border-primary px-5 d-flex flex-column align-items-start justify-content-center h-100px">
                            <p class="fw-bold mb-2">Fresh Tropical fruits</p>
                            <p class="text-primary mb-0 small">replenished each day</p>
                        </div>
                        <div class="border-end border-primary px-5 d-flex flex-column align-items-start justify-content-center h-100px">
                            <p class="fw-bold mb-2">Early check in and late check out</p>
                            <p class="text-primary mb-0 small">subject to availability</p>
                        </div>
                        <div class="border-end border-primary px-5 d-flex flex-column align-items-start justify-content-center h-100px">
                            <p class="fw-bold mb-2">Shuttle service to Ubud Town</p>
                            <p class="text-primary mb-0 small">on scheduled</p>
                        </div>
                        <div class="border-end border-primary px-5 d-flex flex-column align-items-start justify-content-center h-100px">
                            <p class="fw-bold mb-2">Turn down service</p>
                            <p class="text-primary mb-0 small">daily basis</p>
                        </div>
                        <div class="border-end border-primary px-5 d-flex flex-column align-items-start justify-content-center h-100px">
                            <p class="fw-bold mb-2">Bathrobe and slippers</p>
                            <p class="text-primary mb-0 small">in the villas</p>
                        </div>
                    </div>
                    <div class="box-arrows position-absolute start-0 w-100 px-3"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 class="fs-2 text-center mb-5 underline">Accommodations</h1>
                    <div class="position-relative" id="accommodation-slides">
                        <div class="sliders with-half-slides overflow-hidden">
                            <div class="position-relative">
                                <div class="ratio ratio-4x3">
                                    <img src="https://nandinibali.com/storage/app/uploads/public/637/8e4/e44/6378e4e449a1f084511274.jpeg" class="w-100 object-fit-cover object-position-center">
                                </div>
                                <div class="position-absolute bottom-0 w-100 h-50 d-flex align-items-end pb-4 bg-black-white-gradient">
                                    <div class="text-white d-flex justify-content-between align-items-center w-100 pe-4">
                                        <div class="leftline position-relative ps-5">
                                            <div class="px-3">
                                                <h2 class="fs-4 fw-bold mb-3">Garden View Royal Suite</h2>
                                                <p class="small mb-0">Our Garden View Royal Suites effortlessly combine the luxury of a five stars room facilities with th...</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="https://nandinibali.com/suites-villas/garden-view-royal-suite" class="btn btn-outline-light rounded-0 px-4 py-2 text-uppercase">Explore</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative">
                                <div class="ratio ratio-4x3">
                                    <img src="https://nandinibali.com/storage/app/uploads/public/637/8e7/825/6378e7825eb80086919609.jpeg" class="w-100 object-fit-cover object-position-center">
                                </div>
                                <div class="position-absolute bottom-0 w-100 h-50 d-flex align-items-end pb-4 bg-black-white-gradient">
                                    <div class="text-white d-flex justify-content-between align-items-center w-100 pe-4">
                                        <div class="leftline position-relative ps-5">
                                            <div class="px-3">
                                                <h2 class="fs-4 fw-bold mb-3">Jungle View Royal Suite</h2>
                                                <p class="small mb-0">Our Jungle Royal Suites effortlessly combine the luxury of a five stars room facilities with the raw...</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="https://nandinibali.com/suites-villas/jungleview-royal-suite" class="btn btn-outline-light rounded-0 px-4 py-2 text-uppercase">Explore</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative">
                                <div class="ratio ratio-4x3">
                                    <img src="https://nandinibali.com/storage/app/uploads/public/637/8e8/a09/6378e8a09a0ed005649383.jpg" class="w-100 object-fit-cover object-position-center">
                                </div>
                                <div class="position-absolute bottom-0 w-100 h-50 d-flex align-items-end pb-4 bg-black-white-gradient">
                                    <div class="text-white d-flex justify-content-between align-items-center w-100 pe-4">
                                        <div class="leftline position-relative ps-5">
                                            <div class="px-3">
                                                <h2 class="fs-4 fw-bold mb-3">Jungle View Villa</h2>
                                                <p class="small mb-0">The Jungle View Villa offers stunning sunrise views over the jungle. With exactly same size as Panor...</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="https://nandinibali.com/suites-villas/jungle-view-villa" class="btn btn-outline-light rounded-0 px-4 py-2 text-uppercase">Explore</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative">
                                <div class="ratio ratio-4x3">
                                    <img src="https://nandinibali.com/storage/app/uploads/public/637/8ea/2a1/6378ea2a1a9ec330025018.jpeg" class="w-100 object-fit-cover object-position-center">
                                </div>
                                <div class="position-absolute bottom-0 w-100 h-50 d-flex align-items-end pb-4 bg-black-white-gradient">
                                    <div class="text-white d-flex justify-content-between align-items-center w-100 pe-4">
                                        <div class="leftline position-relative ps-5">
                                            <div class="px-3">
                                                <h2 class="fs-4 fw-bold mb-3">Panoramic View Villa</h2>
                                                <p class="small mb-0">Our Panoramic View Villa stands with stunning and uninterrupted views over the river gorge and a fee...</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="https://nandinibali.com/suites-villas/panoramic-view-villa" class="btn btn-outline-light rounded-0 px-4 py-2 text-uppercase">Explore</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative">
                                <div class="ratio ratio-4x3">
                                    <img src="https://nandinibali.com/storage/app/uploads/public/637/8f0/04a/6378f004ae06f526686536.jpeg" class="w-100 object-fit-cover object-position-center">
                                </div>
                                <div class="position-absolute bottom-0 w-100 h-50 d-flex align-items-end pb-4 bg-black-white-gradient">
                                    <div class="text-white d-flex justify-content-between align-items-center w-100 pe-4">
                                        <div class="leftline position-relative ps-5">
                                            <div class="px-3">
                                                <h2 class="fs-4 fw-bold mb-3">Sunrise View Villa</h2>
                                                <p class="small mb-0">Surrounded by the serene Rainforest atmosphere, the Sunrise View Villa offers the majestic golden su...</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="https://nandinibali.com/suites-villas/sunrise-view-villa" class="btn btn-outline-light rounded-0 px-4 py-2 text-uppercase">Explore</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative">
                                <div class="ratio ratio-4x3">
                                    <img src="https://nandinibali.com/storage/app/uploads/public/637/8ed/a06/6378eda06e43a328461407.jpeg" class="w-100 object-fit-cover object-position-center">
                                </div>
                                <div class="position-absolute bottom-0 w-100 h-50 d-flex align-items-end pb-4 bg-black-white-gradient">
                                    <div class="text-white d-flex justify-content-between align-items-center w-100 pe-4">
                                        <div class="leftline position-relative ps-5">
                                            <div class="px-3">
                                                <h2 class="fs-4 fw-bold mb-3">Presidential Suite</h2>
                                                <p class="small mb-0">Our magnificent Presidential Suite is a true definition of luxury.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="https://nandinibali.com/suites-villas/presidential-suite" class="btn btn-outline-light rounded-0 px-4 py-2 text-uppercase">Explore</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-arrows position-absolute w-100"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row" id="experiences-slides">
                <div class="col-12 text-center sliders">
                    <div class="row d-flex">
                        <div class="col-12 col-md-6 text-center d-flex flex-column justify-content-between">
                            <h1 class="underline pt-4">Experiences</h1>
                            <div class="px-4">
                                <h3 class="text-uppercase fst-italic mb-4">Yoga</h3>
                                <div class="fs-5">
                                    <p>Ubud and yoga is inseparable, the tranquility of rainforest and rice fields bring the great zen that is great for mind and body.</p>
                                    <p>In the middle of Ubud rice fields, there is a 97 square meter Djiwa Shala, designed for meditation and peace. Meditating in th...</p>
                                </div>
                            </div>
                            <div class="pb-4">
                                <a href="https://nandinibali.com/experiences#yoga" class="btn btn-primary text-uppercase px-4 py-3 rounded-0 fw-bold">Discover More</a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="ratio ratio-1x1">
                                <img src="https://nandinibali.com/storage/app/uploads/public/613/db0/8ea/613db08ea3d4d214366378.jpeg" class="w-100 object-fit-cover object-position-center">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex">
                        <div class="col-12 col-md-6 text-center d-flex flex-column justify-content-between">
                            <h1 class="underline pt-4">Experiences</h1>
                            <div class="px-4">
                                <h3 class="text-uppercase fst-italic mb-4">Sungai Spa</h3>
                                <div class="fs-5">
                                    <p>Spa at Nandini Jungle Resort &amp; Spa means: Relax, Rejuvenate and Restore.</p>
                                    <p>Discover a soothing and restorative escape for body and soul, "Spa on the River" by Sungai Spa. The treatment offers the finest in luxury treatments and amenities. Take your spa expe...</p>
                                </div>
                            </div>
                            <div class="pb-4">
                                <a href="https://nandinibali.com/experiences#sungai-spa" class="btn btn-primary text-uppercase px-4 py-3 rounded-0 fw-bold">Discover More</a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="ratio ratio-1x1">
                                <img src="https://nandinibali.com/storage/app/uploads/public/613/dba/212/613dba2120221360151684.jpg" class="w-100 object-fit-cover object-position-center">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex">
                        <div class="col-12 col-md-6 text-center d-flex flex-column justify-content-between">
                            <h1 class="underline pt-4">Experiences</h1>
                            <div class="px-4">
                                <h3 class="text-uppercase fst-italic mb-4">Cooking Class</h3>
                                <div class="fs-5">
                                    <p>You are what you eat. Our executive chef Gustu brings this philosophy to heart and invites all our guests to enjoy the excellence of Balinese cooking made by themselves.</p>
                                    <p>Join Nandini Cooking Class and learn how to cook like a Balinese, bringing a culinary...</p>
                                </div>
                            </div>
                            <div class="pb-4">
                                <a href="https://nandinibali.com/experiences#cooking-class" class="btn btn-primary text-uppercase px-4 py-3 rounded-0 fw-bold">Discover More</a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="ratio ratio-1x1">
                                <img src="https://nandinibali.com/storage/app/uploads/public/613/dbc/104/613dbc104409a847631956.jpeg" class="w-100 object-fit-cover object-position-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row gx-0">
                <div class="col-12 text-center position-relative" id="offers-slides">
                    <h1 class="fs-2 text-center mb-5 underline">Special Offers</h1>
                    <div class="sliders overflow-hidden position-relative" style="z-index: 2;">
                        <div class="mx-1">
                            <div class="position-relative">
                                <div class="ratio ratio-1x1">
                                    <img src="https://nandinibali.com/storage/app/uploads/public/636/388/501/6363885011a12867867519.jpg" class="w-100 object-fit-cover object-position-center">
                                </div>
                                <div class="position-absolute bottom-0 w-100 h-100 d-flex align-items-center bg-hover-overlay">
                                    <div class="text-white w-100">
                                        <div class="h-100 px-5">
                                            <h2 class="fs-5 mb-5"></h2>
                                            <div class="text-center pt-4">
                                                <a href="https://nandinibali.com/offers#november-price-breakers" class="btn btn-outline-light rounded-0 px-4 py-2 text-uppercase">Explore</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mt-4 mb-4 fs-5 fs-xl-4 text-uppercase">November Price Breakers</h4>
                            <a href="https://wa.me/6281236871170" class="btn btn-primary text-uppercase px-4 rounded-0" target="_blank">Book Now</a>
                        </div>
                        <div class="mx-1">
                            <div class="position-relative">
                                <div class="ratio ratio-1x1">
                                    <img src="https://nandinibali.com/storage/app/uploads/public/629/88e/5ee/62988e5ee6a0d589407132.jpeg" class="w-100 object-fit-cover object-position-center">
                                </div>
                                <div class="position-absolute bottom-0 w-100 h-100 d-flex align-items-center bg-hover-overlay">
                                    <div class="text-white w-100">
                                        <div class="h-100 px-5">
                                            <h2 class="fs-5 mb-5">Exclusive Website Deal</h2>
                                            <div class="text-center pt-4">
                                                <a href="https://nandinibali.com/offers#resume-your-adventure" class="btn btn-outline-light rounded-0 px-4 py-2 text-uppercase">Explore</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mt-4 mb-4 fs-5 fs-xl-4 text-uppercase">RESUME YOUR ADVENTURE!</h4>
                            <a href="https://wa.me/6281236871170" class="btn btn-primary text-uppercase px-4 rounded-0" target="_blank">Book Now</a>
                        </div>
                        <div class="mx-1">
                            <div class="position-relative">
                                <div class="ratio ratio-1x1">
                                    <img src="https://nandinibali.com/storage/app/uploads/public/629/894/4f8/6298944f8e3dd684609238.jpg" class="w-100 object-fit-cover object-position-center">
                                </div>
                                <div class="position-absolute bottom-0 w-100 h-100 d-flex align-items-center bg-hover-overlay">
                                    <div class="text-white w-100">
                                        <div class="h-100 px-5">
                                            <h2 class="fs-5 mb-5">Love blooms at the heart of mystical Ubud rainforest</h2>
                                            <div class="text-center pt-4">
                                                <a href="https://nandinibali.com/offers#ultimate-romantic-package" class="btn btn-outline-light rounded-0 px-4 py-2 text-uppercase">Explore</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mt-4 mb-4 fs-5 fs-xl-4 text-uppercase">Ultimate Romantic Package</h4>
                            <a href="https://wa.me/6281236871170" class="btn btn-primary text-uppercase px-4 rounded-0" target="_blank">Book Now</a>
                        </div>
                    </div>
                    <div class="box-arrows position-absolute" style="left: -2.75rem; right: -2.75rem; z-index: 1;"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-90">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="reviews-element-container">
                        <div class="wrap-reviews-element">
                            <p class="reviews-element-title">
                                Reviews
                            </p>
                            <div class="reviews-element-quote">
                                <hr class="reviews-element-line">
                                <h1 class="reviews-element-icon">“</h1>
                            </div>
                            <div class="reviews-box-list">
                                <div class="px-2">
                                    <div class="reviews-element-content">
                                        <div class="KgQgP MC _S b S6 H5 _a" dir="ltr" data-test-target="review-title"><strong>Luxury in the rainforest.</strong></div>
                                        <div class="vTVDc">
                                            <div class="_T FKffI">
                                                <div class="fIrGe _T"><q class="QewHA H4 _a">Incredible jungle location. Worth all of its five stars! The staff are so lovely and helpful. The food is superb. Breakfast has a great variety of top quality options, including local titbits. We had room 25 and it was opulent with a relaxing balcony and a bathroom with a deep bath to soak in.</q></div>
                                                <div class="fIrGe _T"><q class="QewHA H4 _a">Luxurious!</q></div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="reviews-element-guess fw-bold">By Scott S, August 2022</p>
                                </div>
                                <div class="px-2">
                                    <div class="reviews-element-content">
                                        <div class="KgQgP MC _S b S6 H5 _a" dir="ltr" data-test-target="review-title"><strong>Staycation at Nandini jungle Resort</strong></div>
                                        <div class="vTVDc">
                                            <div class="_T FKffI">
                                                <div class="fIrGe _T"><q class="QewHA H4 _a">Amazing hospitality, serene jungle location. The morning trek with Satyavan was an amazing experience. The Spa is a must try with the Mesmerising jungle view . Highly recommended ✌🏻The property staff makes you feel so special in every aspect .</q></div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="reviews-element-guess fw-bold">By Divya J, August 2022</p>
                                </div>
                                <div class="px-2">
                                    <div class="reviews-element-content">
                                        <div class="KgQgP MC _S b S6 H5 _a" dir="ltr" data-test-target="review-title"><strong>Tranquil Santurary</strong></div>
                                        <div class="vTVDc">
                                            <div class="_T FKffI">
                                                <div class="fIrGe _T"><q class="QewHA H4 _a">. I LOVE Nadini in the Jungles. It is literally a dream staying here. The people are beyond friendly/ accommodating/ genuine/ hardworking. The room itself with the view is just jaw dropping. I feel as if 5 days here, my entire body rejuvenated. So peaceful. So beautiful. I loves Putu at the spa. Her Balianese massage is beyond Heaven. You get massaged by the river. Every staff who came in gave me food, water i am so beyond grateful. The service is excellent. The restaurant is great too. i did yoga with kiwi and it was amazing. I love the tram. It was delightful. The wild animals, the sounds of the jungle, their patio deck by the river. Woww!&rsquo; I will be back over and over. Thank U&rsquo;</q></div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="reviews-element-guess fw-bold">By Jenc3185, August 2022</p>
                                </div>
                                <div class="px-2">
                                    <div class="reviews-element-content">
                                        <div class="KgQgP MC _S b S6 H5 _a" dir="ltr" data-test-target="review-title"><strong>Nandini review</strong></div>
                                        <div class="vTVDc">
                                            <div class="_T FKffI">
                                                <div class="fIrGe _T"><q class="QewHA H4 _a">Im so happy when im stay in here, this view in here is so good with the jungle vibes, im stay in panoramic view villa, this room is perfect view to the jungle, in here have a many spot for photoshot and my fav spot in sungai spa, view in sungai spa this so epic, you must try if you go to nandini, services in here is so good and very friendly, at the restaurant have a many good menu</q></div>
                                            </div>
                                        </div>
                                        <div id="ag-translate-icon" style="user-select: none; top: 21px; left: -25px;">&nbsp;</div>
                                    </div>
                                    <p class="reviews-element-guess fw-bold">By Wika A, July 2022</p>
                                </div>
                                <div class="px-2">
                                    <div class="reviews-element-content">
                                        <div class="KgQgP MC _S b S6 H5 _a" dir="ltr" data-test-target="review-title"><strong>A luxurious jungle holiday.</strong></div>
                                        <div class="vTVDc">
                                            <div class="_T FKffI">
                                                <div class="fIrGe _T"><q class="QewHA H4 _a">I had a fantastic time, the hotel was set in the Jungle, away from the crowds of Ubud. The staff were very helpful and friendly, nothing was too much trouble. The rooms were massive and the views were spectacular! The food was delicious and the cocktails fabulous!</q></div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="reviews-element-guess fw-bold">By Mark J, July 2022</p>
                                </div>
                                <div class="px-2">
                                    <div class="reviews-element-content">
                                        <div class="KgQgP MC _S b S6 H5 _a" dir="ltr" data-test-target="review-title"><strong>Lovely place, lovely staff</strong></div>
                                        <div class="vTVDc">
                                            <div class="_T FKffI">
                                                <div class="fIrGe _T"><q class="QewHA H4 _a">We really, really enjoyed our stay. Great food, great service, beautiful rooms, beautiful views, lovely resort all round. Spa by the river was absolutely amazing!!!!! Will definitely return. Highly recommended.</q></div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="reviews-element-guess fw-bold">By Jayden D, July 2022</p>
                                </div>
                                <div class="px-2">
                                    <div class="reviews-element-content">
                                        <p><strong>Nice Jungle Experience</strong></p>
                                        <p>"Nice experience in middle of jungle. The surrounding area so fresh and green.<br />The room also so spacious. They provide nice decor on the bed for my birthday. When we were enjoy afternoon tea at the restaurant, the staff also did a surprise with delicious choco cake. Even on the next day, the give us free nasi goreng for our daughter.<br />All the staff so friendly!"</p>
                                    </div>
                                    <p class="reviews-element-guess fw-bold">By Agung P, August 2021</p>
                                </div>
                                <div class="px-2">
                                    <div class="reviews-element-content">
                                        <div class="fpMxB MC _S b S6 H5 _a" dir="ltr" data-test-target="review-title"><strong>Gorgeous Jungle View</strong></div>
                                        <div class="dovOW">
                                            <div class="duhwe _T bOlcm">
                                                <div class="pIRBV _T"><q class="XllAv H4 _a">The jungle view was awesome! At night, the sky was so clear that we could see lots of stars. I stayed at the room that's right in front of the pool. The room was clean and neat. I'm not sure what they put in the room and surrounding area but there's no mosquitoes at all hahaha perhaps it's the flowers. The staff were very helpful and friendly.</q></div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="reviews-element-guess fw-bold">By Ivana, June 2021</p>
                                </div>
                                <div class="px-2">
                                    <div class="reviews-element-content">
                                        <div class="fpMxB MC _S b S6 H5 _a" dir="ltr" data-test-target="review-title"><strong>Best Villa in Ubud!</strong></div>
                                        <div class="dovOW">
                                            <div class="duhwe _T bOlcm">
                                                <div class="pIRBV _T"><q class="XllAv H4 _a">Perfect view with great hospitality. Wake up in a middle of jungle will give you unforgetable memories. Fresh air and perfect food from the chef will make your stay even better. Highly recommended! Must try experience.</q></div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="reviews-element-guess fw-bold">By Jaqueline, May 2021</p>
                                </div>
                            </div>
                        </div>
                        <div class="reviews-element-gray-box">
                            <div class="reviews-box-arrows"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="d-block text-center pt-5">
        <a href="https://www.instagram.com/nandinijungleresort/" class="btn btn-outline-secondary rounded-0 mb-4" style="width: 250px;"><i class="fa fa-instagram"></i> @nandinijungleresort</a>
        <!-- SnapWidget -->
        <script src="https://snapwidget.com/js/snapwidget.js"></script>
        <iframe src="https://snapwidget.com/embed/961982" class="snapwidget-widget border-0 overflow-hidden w-100" allowtransparency="true" frameborder="0" scrolling="no"></iframe>
    </div>


</x-nandini>
