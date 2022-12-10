@section('meta')
    <meta name="title" content="Videos">
    <meta name="description" content="">
    <title>Videos</title>
    <meta name="facebook-domain-verification" content="rerz081jusogdfqlqc5stbcd0mfyia" />
    <meta property="og:url" content="https://nandinibali.com/videos">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Videos | Nandini Bali">
    <meta property="og:description" content="">
    <meta property="og:image" content="https://nandinibali.com/storage/app/uploads/public/614/01a/025/61401a02525fd988337317.jpg">

    <meta property="twitter:title" content="Videos | Nandini Bali">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="https://nandinibali.com/storage/app/uploads/public/614/01a/025/61401a02525fd988337317.jpg">
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
        <img src="https://nandinibali.com/storage/app/uploads/public/614/01a/025/61401a02525fd988337317.jpg" class="h-100 w-100 object-fit-cover object-position-center">
    </section>

    <section class="py-90">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="fw-bold text-uppercase mb-5 underline">Videos</h1>

                </div>
            </div>
        </div>
    </section>

    <section class="pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6  mb-4 ">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/zgu6EsjTdnM?rel=0" title="New Normal in Nandini Jungle Resort &amp; Spa 2020" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-12 col-md-6 ">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/ZwVFS08BwIo?rel=0" title="Sungai Spa by Nandini Jungle Resort &amp; Spa" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-nandini>
