@extends('frontend.layouts.app')
@section('bokeh')
    ts-has-bokeh-bg
@endsection

@section('stk')
    <section id="breadcrumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="Properti">Data</li>
                </ol>
            </nav>
        </div>
    </section>

    <!--PAGE TITLE
                                                                                                                                                                                                                                                                                                    =========================================================================================================-->
    <section id="page-title">
        <div class="container">

            <div class="ts-title">
                <h1>Properti</h1>
            </div>

        </div>
    </section>
@endsection
@section('content')
    <section id="search-form">
        <div class="container">

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
            <!--end #form-search-->

        </div>
        <!--end container-->
    </section>
    <!--end #search-form-->

    <!--DISPLAY CONTROL
                                                                                                                                                                                                                                                                                            =========================================================================================================-->

    <!--ITEMS LISTING
                                                                                                                                                                                                                                                                                            =========================================================================================================-->
    <section id="items-grid">
        <div class="container">

            <!--Row-->
            <div class="row">
                @foreach ($prop as $item)

                    <!--Item-->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card ts-item ts-card">

                            <!--Ribbon-->
                            {{-- <div class="ts-ribbon">
                                <i class="fa fa-thumbs-up"></i>
                            </div> --}}

                            <!--Card Image-->
                            <a href="detail-01.html" class="card-img ts-item__image"
                                data-bg-image="{{ asset('storage/image/' . $item->image) }}">
                                <div class="ts-item__info-badge">
                                    Rp. {{ $item->price }}
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
                                        <dd>{{ $item->area }}<sup>2</sup></dd>
                                    </dl>
                                    <dl>
                                        <dt>Bedrooms</dt>
                                        <dd>{{ $item->bedrooms }}</dd>
                                    </dl>
                                    <dl>
                                        <dt>Bathrooms</dt>
                                        <dd>{{ $item->bathrooms }}</dd>
                                    </dl>
                                </div>
                            </div>

                            <!--Card Footer-->
                            <a href="{{ route('details.proprety', $item->id) }}" class="card-footer">
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

    <!--PAGINATION
                                                                                                                                                                                                                                                                                            =========================================================================================================-->
    <section id="pagination">
        <div class="container">

            <!--Pagination-->
            <nav aria-label="Page navigation">
                <ul class="pagination ts-center__horizontal">
                    {!! $prop->render('pagination::bootstrap-4') !!}
                </ul>
            </nav>

        </div>
    </section>
@endsection
