@extends('frontend.layouts.app')
@section('home')
    ts-homepage
@endsection

@section('slider')
    <section id="ts-hero" class="text-center mb-0">

        <div class="ts-full-screen ts-center__both">

            <!--Container-->
            <div class="container py-2 py-sm-5">

                <!--Title-->
                <h1 class="mb-2 text-white">Find a Nice Place To Live</h1>

                <!--Subtitle-->
                <h4 class="ts-opacity__50 text-white">Buy or Rent Properties at Great Prices</h4>

                <!--Form-->

                <form action="{{ route('search') }}" id="form-search" class="ts-form" method="post">
                    @csrf
                    <section class="ts-box p-0">
                        <!--PRIMARY SEARCH INPUTS
                                                                                                                                                                                                                                                                                                                                                        =========================================================================================-->
                        <div class="form-row px-4 py-3">

                            <!--Keyword-->
                            <div class="col-sm-12 col-md-10">
                                <div class="form-group my-2">
                                    <input type="text" class="form-control" name="name" placeholder="Address, City or ZIP">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group my-2">
                                    <button type="submit" class="btn btn-primary w-100">Search
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!--end form-row-->

                        <!--MORE OPTIONS - ADVANCED SEARCH
                                                                                                                                                                                                                                                                                                                                                        =========================================================================================-->
                        {{-- <div class="ts-bg-light px-4 py-2 border-top">

                        <!--More Options Button-->
                        <a href="#more-options-collapse" data-toggle="collapse" role="button" aria-expanded="false"
                            aria-controls="more-options-collapse">
                            <i class="fa fa-plus-circle ts-text-color-primary mr-2"></i>
                            More Options
                        </a>

                        <!--Hidden Form-->
                        <div class="collapse" id="more-options-collapse">

                            <!--Padding-->
                            <div class="py-4">

                                <!--Row-->
                                <div class="form-row">

                                    <!--Bedrooms-->
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="bedrooms">Bedrooms</label>
                                            <input type="number" class="form-control" id="bedrooms" name="bedrooms" min="0">
                                        </div>
                                    </div>

                                    <!--Bathrooms-->
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="bathrooms">Bathrooms</label>
                                            <input type="number" class="form-control" id="bathrooms" name="bathrooms"
                                                min="0">
                                        </div>
                                    </div>

                                    <!--Garages-->
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="garages">Garages</label>
                                            <input type="number" class="form-control" id="garages" name="garages" min="0">
                                        </div>
                                    </div>

                                </div>
                                <!--end row-->

                                <!--Checkboxes-->
                                <div id="features-checkboxes" class="w-100">
                                    <h6 class="mb-3">Features</h6>

                                    <div class="ts-column-count-3">

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_1" name="features[]"
                                                value="ch_1">
                                            <label class="custom-control-label" for="ch_1">Air conditioning</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_2" name="features[]"
                                                value="ch_2">
                                            <label class="custom-control-label" for="ch_2">Bedding</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_3" name="features[]"
                                                value="ch_3">
                                            <label class="custom-control-label" for="ch_3">Heating</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_4" name="features[]"
                                                value="ch_4">
                                            <label class="custom-control-label" for="ch_4">Internet</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_5" name="features[]"
                                                value="ch_5">
                                            <label class="custom-control-label" for="ch_5">Microwave</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_6" name="features[]"
                                                value="ch_6">
                                            <label class="custom-control-label" for="ch_6">Smoking allowed</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_7" name="features[]"
                                                value="ch_7">
                                            <label class="custom-control-label" for="ch_7">Terrace</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_8" name="features[]"
                                                value="ch_8">
                                            <label class="custom-control-label" for="ch_8">Balcony</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_9" name="features[]"
                                                value="ch_9">
                                            <label class="custom-control-label" for="ch_9">Iron</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_10" name="features[]"
                                                value="ch_10">
                                            <label class="custom-control-label" for="ch_10">Hi-Fi</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_11" name="features[]"
                                                value="ch_11">
                                            <label class="custom-control-label" for="ch_11">Beach</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ch_12" name="features[]"
                                                value="ch_12">
                                            <label class="custom-control-label" for="ch_12">Parking</label>
                                        </div>

                                    </div>
                                    <!--end ts-column-count-3-->

                                </div>
                                <!--end #features-checkboxes-->

                            </div>
                            <!--end Padding-->
                        </div>
                        <!--end more-options-collapse-->

                    </div> --}}
                        <!--end ts-bg-light-->
                    </section>

                </form>

                <a href="#featured-properties"
                    class="ts-scroll btn btn-outline-light btn-sm mt-5 d-none d-md-inline-block">Show More Properties</a>

            </div>
            <!--end container-->

            <div class="ts-background ts-hero-slider ts-bg-black">
                <div class="ts-background-image ts-opacity__30">

                    <div class="owl-carousel" data-owl-loop="1" data-owl-fadeout="1">
                        <div class="ts-slide" data-bg-image="{{ asset('frontend') }}/assets/img/bg-bedroom.jpg"></div>
                        <div class="ts-slide" data-bg-image="{{ asset('frontend') }}/assets/img/bg-apartment-tv.jpg">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--end ts-full-screen-->

    </section>
@endsection

@section('content')
    <!-- FEATURED PROPERTIES -->
    <section id="featured-properties" class="ts-block pt-5">
        <div class="container">

            <!--Title-->
            <div class="ts-title text-center">
                <h2>Produk Ungulan</h2>
            </div>

            <div class="row">

                @foreach ($featured as $feat)

                    <!--Item-->
                    <div class="col-sm-6 col-lg-4">

                        <div class="card ts-item ts-card ts-item__lg">

                            <!--Ribbon-->
                            <div class="ts-ribbon">
                                <i class="fa fa-thumbs-up"></i>
                            </div>

                            <!--Card Image-->
                            <a href="{{ route('details.proprety', $feat->property->id) }}" class="card-img ts-item__image"
                                data-bg-image="{{ asset('storage/image/' . $feat->property->image) }}">
                                <div class="ts-item__info-badge">Rp. {{ number_format($feat->property->price, 2) }}</div>
                                <figure class="ts-item__info">
                                    <h4>{{ $feat->property->name }}</h4>
                                    <aside>
                                        <i class="fa fa-map-marker mr-2"></i>
                                        {{ $feat->property->city }}, {{ $feat->property->province }}
                                    </aside>
                                </figure>
                            </a>

                            <!--Card Body-->
                            <div class="card-body">
                                <div class="ts-description-lists">
                                    <dl>
                                        <dt>Area</dt>
                                        <dd>{{ $feat->property->area }}<sup>2</sup></dd>
                                    </dl>
                                    <dl>
                                        <dt>Kamar Tidur</dt>
                                        <dd>{{ $feat->property->bedrooms }}</dd>
                                    </dl>
                                    <dl>
                                        <dt>Kamar Mandi</dt>
                                        <dd>{{ $feat->property->bathrooms }}</dd>
                                    </dl>
                                </div>
                            </div>

                            <!--Card Footer-->
                            <a href="{{ route('details.proprety', $feat->property->id) }}" class="card-footer">
                                <span class="ts-btn-arrow">Detail</span>
                            </a>

                        </div>
                        <!--end ts-item-->
                    </div>
                    <!--end Item col-md-4-->
                @endforeach

            </div>
            <!--end row-->


        </div>
        <!--end container-->
    </section>


    <!--LATEST LISTINGS
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                =============================================================================================================-->
    <section id="latest-listings" class="ts-block">
        <div class="container">

            <!--Title-->
            <div class="ts-title">
                <h2>Properti</h2>
            </div>

            <!--Row-->
            <div class="row">

                <!--Item-->
                @foreach ($prop as $item)
                    <div class="col-sm-6 col-lg-3">
                        <div class="card ts-item ts-card">

                            <!--Ribbon-->
                            @if ($item->views >= 100)
                                <div class="ts-ribbon">
                                    <i class="fa fa-thumbs-up"></i>
                                </div>
                            @endif

                            <a href="{{ asset('storage/image/' . $item->image) }}"
                                class="card-img ts-item__image ts-zoom popup-image"
                                data-bg-image="{{ asset('storage/image/' . $item->image) }}">
                                <div class="ts-item__info-badge">
                                    Rp. {{ number_format($item->price, 2) }}
                                </div>
                                <figure class="ts-item__info">
                                    <h4>{{ $item->name }}</h4>
                                    <aside>
                                        <i class="fa fa-map-marker mr-2"></i>
                                        {{ $item->city }}, {{ $item->province }}
                                    </aside>
                                </figure>
                            </a>

                            <!--Card Body-->
                            <div class="card-body">
                                <div class="ts-description-lists">
                                    <dl>
                                        <dt>Area</dt>
                                        <dd>{{ $item->area }}m<sup>2</sup></dd>
                                    </dl>
                                    <dl>
                                        <dt>Kamar Tidur</dt>
                                        <dd>{{ $item->bedrooms }}</dd>
                                    </dl>
                                    <dl>
                                        <dt>Kamar Mandi</dt>
                                        <dd>{{ $item->bathrooms }}</dd>
                                    </dl>
                                </div>
                            </div>
                            <a href="{{ route('details.proprety', $item->id) }}" class="card-footer">
                                <span class="ts-btn-arrow">Detail</span>
                            </a>
                        </div>

                    </div>
                @endforeach
            </div>
            <!--end ts-item ts-card-->

        </div>
        <!--end Item col-md-4-->

    </section>


    <!--ITEM CAROUSEL
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                =============================================================================================================-->
    <section class="ts-block" data-bg-pattern="{{ asset('frontend') }}/assets/img/bg-pattern-dot.png">
        <!--Title-->
        <div class="ts-title text-center">
            <h2>Paling Banyak Dilihat</h2>
        </div>

        <!--Carousel-->
        <div class="owl-carousel ts-items-carousel" data-owl-items="5" data-owl-dots="1">

            @foreach ($view as $views)
                <!--Item-->
                <div class="slide">

                    <div class="card ts-item ts-card ts-item__lg">

                        <!--Ribbon-->
                        @if ($views->views >= 100)
                            <div class="ts-ribbon">
                                <i class="fa fa-thumbs-up"></i>
                            </div>
                        @endif
                        <!--Card Image-->
                        <a href="{{ asset('storage/image/' . $views->image) }}"
                            class="card-img ts-item__image ts-zoom popup-image"
                            data-bg-image="{{ asset('storage/image/' . $views->image) }}">
                            <div class="ts-item__info-badge">
                                Rp. {{ number_format($views->price, 2) }}
                            </div>
                            <figure class="ts-item__info">
                                <h4>{{ $views->name }}</h4>
                                <aside>
                                    <i class="fa fa-map-marker mr-2"></i>
                                    {{ $views->city }}, {{ $views->province }}
                                </aside>
                            </figure>
                        </a>

                        <!--Card Body-->
                        <div class="card-body">
                            <div class="ts-description-lists">
                                <dl>
                                    <dt>Area</dt>
                                    <dd>{{ $views->area }}m<sup>2</sup></dd>
                                </dl>
                                <dl>
                                    <dt>Kamar Tidur</dt>
                                    <dd>{{ $views->bedrooms }}</dd>
                                </dl>
                                <dl>
                                    <dt>Kamar Mandi</dt>
                                    <dd>{{ $views->bathrooms }}</dd>
                                </dl>
                            </div>
                        </div>

                        <!--Card Footer-->
                        <a href="{{ route('details.proprety', $views->id) }}" class="card-footer">
                            <span class="ts-btn-arrow">Detail</span>
                        </a>

                    </div>
                    <!--end ts-item-->
                </div>
                <!--end slide-->
            @endforeach

        </div>
    </section>
    <section id="submit-banner" class="ts-block">
        <div class="container">

            <div class="ts-block-inside text-center ts-separate-bg-element text-white" data-bg-image-opacity=".4"
                data-bg-image="{{ asset('frontend') }}/assets/img/bg-chair.jpg" data-bg-color="#000">
                <figure class="h1 font-weight-light mb-2">Anda butuh rumah?</figure>
                {{-- <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p> --}}
                <a href="{{ route('contact') }}" class="btn btn-light">Hubungi</a>
            </div>

        </div>
    </section>

@endsection
