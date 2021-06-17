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
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
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

                        <h3>Location</h3>

                        <div class="ts-box p-0">
                            <div class="ts-map ts-map__detail" id="ts-map-simple"
                                data-ts-map-leaflet-provider="https://cartodb-basemaps-{s}.global.ssl.fastly.net/light_all/{z}/{x}/{y}{r}.png"
                                data-ts-map-zoom="12" data-ts-map-center-latitude="{{ $prop->langi }}"
                                data-ts-map-center-longitude="{{ $prop->longi }}" data-ts-map-scroll-wheel="1"
                                data-ts-map-controls="0"></div>
                            <div class="p-3 ts-text-color-light">
                                <a href="{{ $prop->maps }}"><i class="fa fa-map-marker mr-2"></i>
                                    1496 Apple Lane
                                    San Jose, IL 62682
                                </a>
                            </div>
                        </div>

                    </section>

                    <!--CONTACT THE AGENT
                                                                                                                                                                                                =========================================================================================-->
                    <section class="contact-the-agent">
                        <h3>Contact the Agent</h3>

                        <div class="ts-box">

                            <!--Agent Image & Phone-->
                            <div class="ts-center__vertical mb-4">

                                <!--Image-->
                                <a href="agent-detail-01.html" class="ts-circle p-5 mr-4 ts-shadow__sm"
                                    data-bg-image="{{ asset('frontend') }}/assets/img/img-person-05.jpg"></a>

                                <!--Phone contact-->
                                <figure class="mb-0">
                                    <h5 class="mb-0">Jane Brown</h5>
                                    <p class="mb-0">
                                        <i class="fa fa-phone-square ts-opacity__50 mr-2"></i>
                                        +1 602-862-1673
                                    </p>
                                </figure>
                            </div>

                            <!--Agent contact form-->
                            <form id="form-agent" class="ts-form">

                                <!--Name-->
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                </div>

                                <!--Email-->
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Your Email">
                                </div>

                                <!--Message-->
                                <div class="form-group">
                                    <textarea class="form-control" id="form-contact-message" rows="3" name="message"
                                        placeholder="Hi, I want to have more information about property #156461"></textarea>
                                </div>

                                <!--Submit button-->
                                <div class="form-group clearfix mb-0">
                                    <button type="submit" class="btn btn-primary float-right" id="form-contact-submit">Send
                                        a Message
                                    </button>
                                </div>

                            </form>

                        </div>
                    </section>

                    <!--ACTIONS
                                                                                                                                                                                            =============================================================================================-->
                    <section id="actions">

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

                    </section>

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
                            <dd class="border-bottom pb-2">{{ $prop->code }}#adfasd</dd>

                            <dt>Category:</dt>
                            <dd class="border-bottom pb-2">{{ $prop->category->name }}</dd>

                            <dt>Status:</dt>
                            <dd class="border-bottom pb-2">Sale</dd>

                            <dt>Area:</dt>
                            <dd class="border-bottom pb-2">{{ $prop->area }}<sup>2</sup></dd>

                            <dt>Rooms:</dt>
                            <dd class="border-bottom pb-2">{{ $prop->room }} 1</dd>

                            <dt>Bathrooms:</dt>
                            <dd class="border-bottom pb-2">{{ $prop->bathrooms }}</dd>

                            <dt>Bedrooms:</dt>
                            <dd class="border-bottom pb-2">{{ $prop->bedrooms }}</dd>

                            <dt>Garages:</dt>
                            <dd class="border-bottom pb-2">{{ $prop->garages }}</dd>

                        </dl>

                    </section>

                    <!--FLOOR PLANS
                                                                                                                                                                                                =========================================================================================-->
                    <section id="floor-plans">

                        <h3>Floor Plans</h3>

                        <!--1st Floor-->
                        <a href="#collapse-floor-1" class="ts-box d-block mb-2 py-3" data-toggle="collapse" role="button"
                            aria-expanded="true" aria-controls="collapse-floor-1">
                            1st Floor
                            <div class="collapse show" id="collapse-floor-1">
                                <img src="{{ asset('frontend') }}/assets/img/img-floor-plan-01.jpg" alt="" class="w-100">
                            </div>
                        </a>

                        <!--2nd Floor-->
                        <a href="#collapse-floor-2" class="ts-box d-block py-3" data-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="collapse-floor-2">
                            2nd Floor
                            <div class="collapse" id="collapse-floor-2">
                                <img src="{{ asset('frontend') }}/assets/img/img-floor-plan-02.jpg" alt="" class="w-100">
                            </div>
                        </a>

                    </section>

                    <!--FEATURES
                                                                                                                                                                                                =========================================================================================-->
                    <section id="features">

                        <h3>Features</h3>

                        <ul class="list-unstyled ts-list-icons ts-column-count-4 ts-column-count-sm-2 ts-column-count-md-2">
                            <li>
                                <i class="fa fa-bell"></i>
                                Door Bell
                            </li>
                            <li>
                                <i class="fa fa-wifi"></i>
                                Wi-Fi
                            </li>
                            <li>
                                <i class="fa fa-utensils"></i>
                                Restaurant Nearby
                            </li>
                            <li>
                                <i class="fa fa-plug"></i>
                                230V Plugs
                            </li>
                            <li>
                                <i class="fa fa-wheelchair"></i>
                                Accessible
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                Phone
                            </li>
                            <li>
                                <i class="fa fa-train"></i>
                                Train Station
                            </li>
                            <li>
                                <i class="fa fa-key"></i>
                                Secured Key
                            </li>
                        </ul>

                    </section>

                    <!--VIDEO
                                                                                                                                                                                            =============================================================================================-->

                    <section id="video">

                        <h3>Video</h3>

                        <div class="embed-responsive embed-responsive-16by9 rounded ts-shadow__md">
                            <iframe src="https://player.vimeo.com/video/9799783?color=ffffff&title=0&byline=0&portrait=0"
                                width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen
                                allowfullscreen></iframe>
                        </div>

                    </section>

                    <!--AMENITIES
                                                                                                                                                                                                =========================================================================================-->
                    <section id="amenities">

                        <h3>Amenities</h3>

                        <ul class="ts-list-colored-bullets ts-text-color-light ts-column-count-3 ts-column-count-md-2">
                            <li>Air Conditioning</li>
                            <li>Swimming Pool</li>
                            <li>Central Heating</li>
                            <li>Laundry Room</li>
                            <li>Gym</li>
                            <li>Alarm</li>
                            <li>Window Covering</li>
                            <li>Internet</li>
                        </ul>

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

                    <hr class="mb-5">

                    <h3>Similar Properties</h3>
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
                                    <h4>Big Luxury Apartment</h4>
                                    <aside>
                                        <i class="fa fa-map-marker mr-2"></i>
                                        1350 Arbutus Drive
                                    </aside>
                                </figure>

                                <div class="ts-item__info-badge">
                                    $350,000
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
