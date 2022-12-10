@section('meta')
    <meta name="title" content="Awards">
    <meta name="description" content="We are honored that our philosophy of service excellence is recognized by many leading publications of the travel, hospitality and lifestyle sectors both in the Indonesia and Internationally">
    <title>Awards</title>
    <meta name="facebook-domain-verification" content="rerz081jusogdfqlqc5stbcd0mfyia" />
    <meta property="og:url" content="https://nandinibali.com/awards">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Awards | Nandini Bali">
    <meta property="og:description" content="We are honored that our philosophy of service excellence is recognized by many leading publications of the travel, hospitality and lifestyle sectors both in the Indonesia and Internationally">
    <meta property="og:image" content="https://nandinibali.com/themes/mindimedia/assets/images/contact.jpg">

    <meta property="twitter:title" content="Awards | Nandini Bali">
    <meta name="twitter:description" content="We are honored that our philosophy of service excellence is recognized by many leading publications of the travel, hospitality and lifestyle sectors both in the Indonesia and Internationally">
    <meta name="twitter:image" content="https://nandinibali.com/themes/mindimedia/assets/images/contact.jpg">
@endsection

@push('css')
@endpush

@push('js')
    <script type="text/javascript">
        $('.sliders').slick({
            dots: false,
            infinite: true,
            speed: 500,
            centerMode: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: true,
            appendArrows: ".box-arrows",
            prevArrow: "<div class='float-start rounded-0 bg-white d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fa fa-chevron-left'></i></div>",
            nextArrow: "<div class='float-end rounded-0 bg-white d-flex align-items-center justify-content-center' role='button' tabindex='0'><i class='fa fa-chevron-right'></i></div>",
        });
    </script>
@endpush

<x-nandini>
    <section class="vh-100">
        <img src="https://nandinibali.com/themes/mindimedia/assets/images/awards.jpg" class="h-100 w-100 object-fit-cover object-position-center">
    </section>

    <section class="py-90">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="fw-bold text-uppercase mb-5 underline">Awards</h1>
                    <p>We are honored that our philosophy of service excellence is recognized by many leading publications of the travel, hospitality and lifestyle sectors both in the Indonesia and Internationally.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light-gray">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="position-relative">
                        <div class="sliders overflow-hidden">
                            <div class="card d-flex justify-content-center align-items-center mx-3 box-shadow">
                                <div class="ratio ratio-1x1">
                                    <img src="https://nandinibali.com/storage/app/uploads/public/614/028/2ab/6140282abd0df810591186.png" class="w-100 h-100 object-fit-contain object-position-center">
                                </div>
                            </div>
                            <div class="card d-flex justify-content-center align-items-center mx-3 box-shadow">
                                <div class="ratio ratio-1x1">
                                    <img src="https://nandinibali.com/storage/app/uploads/public/614/028/2b1/6140282b171fa754568646.png" class="w-100 h-100 object-fit-contain object-position-center">
                                </div>
                            </div>
                            <div class="card d-flex justify-content-center align-items-center mx-3 box-shadow">
                                <div class="ratio ratio-1x1">
                                    <img src="https://nandinibali.com/storage/app/uploads/public/614/028/2c4/6140282c499ec983202799.png" class="w-100 h-100 object-fit-contain object-position-center">
                                </div>
                            </div>
                            <div class="card d-flex justify-content-center align-items-center mx-3 box-shadow">
                                <div class="ratio ratio-1x1">
                                    <img src="https://nandinibali.com/storage/app/uploads/public/614/028/2c8/6140282c8998a466321938.jpeg" class="w-100 h-100 object-fit-contain object-position-center">
                                </div>
                            </div>
                            <div class="card d-flex justify-content-center align-items-center mx-3 box-shadow">
                                <div class="ratio ratio-1x1">
                                    <img src="https://nandinibali.com/storage/app/uploads/public/614/028/2d1/6140282d122b3144036513.jpeg" class="w-100 h-100 object-fit-contain object-position-center">
                                </div>
                            </div>
                            <div class="card d-flex justify-content-center align-items-center mx-3 box-shadow">
                                <div class="ratio ratio-1x1">
                                    <img src="https://nandinibali.com/storage/app/uploads/public/614/028/2d5/6140282d5f4d3161571569.png" class="w-100 h-100 object-fit-contain object-position-center">
                                </div>
                            </div>
                        </div>
                        <div class="box-arrows position-absolute w-100"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-nandini>
