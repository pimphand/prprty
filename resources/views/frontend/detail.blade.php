@extends('frontend.layouts.app')
@section('bokeh')
    ts-has-bokeh-bg
@endsection

@section('stk')
    <!--BREADCRUMB ******************************************************************************************-->
    <section id="breadcrumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('propety') }}">Properti</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Properti</li>
                </ol>
                <!--end breadcrumb-->
            </nav>
            <!--end nav-->
        </div>
        <!--end container-->
    </section>

@endsection
@section('content')
    <section id="gallery-carousel" class="">

        <div class="owl-carousel ts-gallery-carousel ts-gallery-carousel__multi" data-owl-dots="1" data-owl-items="3"
            data-owl-center="1" data-owl-loop="1">
            @foreach ($image as $item)
                <!--Slide-->
                <div class="slide">
                    <div class="ts-image" data-bg-image="{{ asset('storage/room/' . $item->image) }}">
                        <a href="{{ asset('storage/room/' . $item->image) }}" class="ts-zoom popup-image">
                            <i class="fa fa-search-plus"></i>Zoom</a>
                    </div>
                </div>
            @endforeach
        </div>

    </section>

    <!--PAGE TITLE
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    =========================================================================================================-->
    <section id="page-title" class="border-bottom ts-white-gradient">
        <div class="container">

            <div class="d-block d-sm-flex justify-content-between">

                <!--Title-->
                <div class="ts-title mb-0">
                    <h1>{{ $prop->name }}</h1>
                    <h5 class="ts-opacity__90">
                        <i class="fa fa-map-marker text-primary"></i>
                        {{ $prop->city }},{{ $prop->province }}
                    </h5>
                </div>

                <!--Price-->
                <h3>
                    <span class="badge badge-primary p-3 font-weight-normal ts-shadow__sm">Rp.
                        {{ number_format($prop->price, 2) }}</span>
                </h3>

            </div>

        </div>
    </section>

    <!--CONTENT
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    =========================================================================================================-->
    <section id="content">
        <div class="container">
            <div class="row flex-wrap-reverse">

                <!--LEFT SIDE
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                =============================================================================================-->
                <div class="col-md-5 col-lg-4">

                    <!--DETAILS
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    =========================================================================================-->
                    <section id="location">

                        <h3>Lokasi</h3>

                        <div class="ts-box p-0">
                            <div class="ts-map ts-map__detail" id="ts-map-simple"
                                data-ts-map-leaflet-provider="https://cartodb-basemaps-{s}.global.ssl.fastly.net/light_all/{z}/{x}/{y}{r}.png"
                                data-ts-map-zoom="12" data-ts-map-center-latitude="{{ $prop->langi }}"
                                data-ts-map-center-longitude="{{ $prop->longi }}" data-ts-map-scroll-wheel="1"
                                data-ts-map-controls="0">
                            </div>
                            <div class="p-3 ts-text-color-light">
                                <a href="{{ $prop->maps }}"><i class="fa fa-map-marker mr-2"></i>
                                    {{ $prop->city }}, {{ $prop->province }}
                                </a>
                            </div>
                        </div>

                    </section>

                    <!--CONTACT THE AGENT
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    =========================================================================================-->
                    <section class="contact-the-agent">
                        <h3>Whatsapp langsung ke admin</h3>

                        <div class="ts-box">

                            <!--Agent Image & Phone-->
                            <div class="ts-center__vertical mb-4">

                                <!--Image-->
                                {{-- <a href="agent-detail-01.html" class="ts-circle p-5 mr-4 ts-shadow__sm"
                                    data-bg-image="{{ asset('frontend') }}/assets/img/img-person-05.jpg"></a> --}}

                                <!--Phone contact-->
                                <figure class="mb-0">
                                    <h5 class="mb-0">Admin</h5>
                                    <p class="mb-0">
                                        <i class="fa fa-phone-square ts-opacity__50 mr-2"></i>
                                        +62 899-0466-363
                                    </p>
                                </figure>
                            </div>

                            <!--Agent contact form-->
                            <form>

                                <!--Name-->
                                <div class="form-group">
                                    <input type="text" id="wa_nama" class="form-control" name="name"
                                        placeholder="Masukan Nama" required>
                                </div>

                                <!--Email-->
                                {{-- <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Your Email">
                                </div> --}}

                                <!--Message-->
                                <div class="form-group">
                                    <textarea class="form-control" id="wa_bongkar" rows="3"
                                        name="message">Saya tertarik dengan Properti dengan kode {{ $prop->code }}</textarea>
                                </div>

                                <!--Submit button-->
                                <div class="form-group clearfix mb-0">
                                    <a class="tmblpesan" href="javascript:void"><button type="submit"
                                            class="btn btn-primary float-right">Kirim Pesan
                                        </button></a>
                                </div>

                            </form>

                        </div>
                    </section>

                    <!--ACTIONS
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                =============================================================================================-->
                    {{-- <section id="actions">

                        <div class="d-flex justify-content-between">

                            <a href="#" class="btn btn-light mr-2 w-100" data-toggle="tooltip" data-placement="top"
                                title="Add to favorites">
                                <i class="far fa-star"></i>
                            </a>

                            <a href="#" class="btn btn-light mr-2 w-100" data-toggle="tooltip" data-placement="top"
                                title="Print">
                                <i class="fa fa-print"></i>
                            </a>

                            <a href="#" class="btn btn-light mr-2 w-100" data-toggle="tooltip" data-placement="top"
                                title="Add to compare">
                                <i class="fa fa-exchange-alt"></i>
                            </a>

                            <a href="#" class="btn btn-light w-100" data-toggle="tooltip" data-placement="top"
                                title="Share property">
                                <i class="fa fa-share-alt"></i>
                            </a>

                        </div>

                    </section> --}}

                </div>
                <!--end col-md-4-->

                <!--RIGHT SIDE
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                =============================================================================================-->
                <div class="col-md-7 col-lg-8">

                    <!--DESCRIPTION
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    =========================================================================================-->
                    <section id="description">

                        <h3>Deskripsi</h3>

                        <p>
                            {!! $prop->description !!}
                        </p>

                        <dl class="ts-description-list__line mb-0 ts-column-count-2">

                            <dt>ID:</dt>
                            <dd class="border-bottom pb-2">#{{ $prop->code }}</dd>

                            <dt>Kategori:</dt>
                            <dd class="border-bottom pb-2">{{ $prop->category->name }}</dd>

                            <dt>Status:</dt>
                            <dd class="border-bottom pb-2">{{ $prop->status }}</dd>

                            <dt>luas:</dt>
                            <dd class="border-bottom pb-2">{{ $prop->area }}<sup>2</sup></dd>

                            <dt>Ruangan:</dt>
                            <dd class="border-bottom pb-2">{{ $prop->room }} 1</dd>

                            <dt>Kamar Mandi:</dt>
                            <dd class="border-bottom pb-2">{{ $prop->bathrooms }}</dd>

                            <dt>Kamar Tidur:</dt>
                            <dd class="border-bottom pb-2">{{ $prop->bedrooms }}</dd>

                            <dt>Garasi:</dt>
                            <dd class="border-bottom pb-2">{{ $prop->garages }}</dd>

                        </dl>

                    </section>

                    <!--FLOOR PLANS
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    =========================================================================================-->
                    <section id="floor-plans">

                        <h3>Gambar Rumah</h3>

                        <!--1st Floor-->
                        <a href="#collapse-floor-1" class="ts-box d-block mb-2 py-3" data-toggle="collapse" role="button"
                            aria-expanded="true" aria-controls="collapse-floor-1">
                            Foto
                            <div class="collapse show" id="collapse-floor-1">
                                <img src="{{ asset('storage/image/' . $prop->image) }}" alt="" class="w-100">
                            </div>
                        </a>

                        <!--2nd Floor-->

                    </section>

                </div>
                <!--end col-md-8-->

            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <!--SIMILAR PROPERTIES
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                =============================================================================================================-->
    <section id="similar-properties">
        <div class="container">
            <div class="row">

                <div class="offset-lg-4 col-sm-12 col-lg-8">

                    <hr class="mt-0">

                    <h3>Properti yang mirip</h3>
                    @foreach ($similar as $similars)

                        <!--Item-->
                        <div class="card ts-item ts-item__list ts-card">

                            <!--Ribbon-->
                            <div class="ts-ribbon">
                                <i class="fa fa-thumbs-up"></i>
                            </div>

                            <!--Card Image-->
                            <a href="{{ route('details.proprety', $similars->id) }}" class="card-img"
                                data-bg-image="{{ asset('storage/image/' . $similars->image) }}">
                            </a>

                            <!--Card Body-->
                            <div class="card-body">

                                <figure class="ts-item__info">
                                    <h4>{{ $similars->name }}</h4>
                                    <aside>
                                        <i class="fa fa-map-marker mr-2"></i>
                                        {{ $similars->city }}, {{ $similars->province }}
                                    </aside>
                                </figure>

                                <div class="ts-item__info-badge">
                                    Rp.{{ number_format($similars->price, 2) }}
                                </div>

                                <div class="ts-description-lists">
                                    <dl>
                                        <dt>Area</dt>
                                        <dd>325m<sup>2</sup></dd>
                                    </dl>
                                    <dl>
                                        <dt>Bedrooms</dt>
                                        <dd>2</dd>
                                    </dl>
                                    <dl>
                                        <dt>Bathrooms</dt>
                                        <dd>1</dd>
                                    </dl>
                                </div>
                            </div>

                            <!--Card Footer-->
                            <a href="detail-01.html" class="card-footer">
                                <span class="ts-btn-arrow">Detail</span>
                            </a>

                        </div>

                    @endforeach

                </div>

            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="{{ asset('frontend') }}/assets/js/leaflet.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/map-leaflet.js"></script>
    <script>
        $(document).on('click', '.tmblpesan', function() {
            var input_ceknama = document.getElementById('wa_nama');
            var input_cekbongkar = document.getElementById('wa_bongkar');

            /* Whatsapp Settings */
            var walink = 'https://web.whatsapp.com/send',
                phone = '628990466363',
                walink2 = 'Assalamualaikum Wr Wb',
                text_yes = 'Terkirim.',
                text_no = 'Isi semua Formulir !';

            /* Smartphone Support */
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                var walink = 'whatsapp://send';
            }

            if ("" != input_ceknama.value &&
                input_cekbongkar.value) {

                /* Call Input Form */
                var input_name = $("#wa_nama").val(),
                    input_bongkar = $("#wa_bongkar").val();

                /* Final Whatsapp URL */
                var blanter_whatsapp = walink + '?phone=' + phone + '&text=' + walink2 + '%0A%0A' +
                    'Nama : ' + input_name + '%0A%0A' +
                    '' + input_bongkar + '%0A';

                /* Whatsapp Window Open */
                window.open(blanter_whatsapp, '_blank');
                document.getElementById("text-info").innerHTML = '<span class="yes">' + text_yes + '</span>';
            } else {
                document.getElementById("text-info").innerHTML = '<span class="no">' + text_no + '</span>';
            }
        });
    </script>

@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/leaflet.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">
@endsection
