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
                    <li class=" breadcrumb-item active" aria-current="page">Berita</li>
                </ol>
                <!--end breadcrumb-->
            </nav>
            <!--end nav-->
        </div>
        <!--end container-->
    </section>
    <section id="page-title">
        <div class="container">
            <div class="ts-title">
                <h1>List Berita</h1>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <section id="agencies-list">
        <div class="container">

            <!--AGENCIES
                                                                                                                        =================================================================================================-->
            <section id="agencies">

                @foreach ($news as $item)
                    <!--Agency-->
                    <div class="card ts-item ts-item__list ts-item__company ts-card">

                        <!--Ribbon-->
                        <div class="ts-ribbon">
                            <i class="fa fa-thumbs-up"></i>
                        </div>

                        <!--Card Image-->
                        <a href="agency-detail.html" class="card-img">
                            <img width="200px" src="{{ asset('storage/news/' . $item->image) }}"
                                alt="{{ $item->title }}">
                        </a>

                        <!--Card Body-->
                        <div class="card-body">

                            <figure class="ts-item__info">
                                <h4>{{ $item->title }}</h4>
                                <aside>
                                    <i class="fa fa-map-marker mr-2"></i>

                                </aside>
                            </figure>

                            <div class="ts-company-info">

                                <div class="ts-company-contact mb-2 mb-sm-0">
                                    {!! $item->description !!}
                                </div>

                                <div class="ts-description-lists">
                                    <dl>
                                        <i class="fa fa-eye"></i> {{ $item->views }}
                                    </dl>
                                </div>

                            </div>
                        </div>

                        <!--Card Footer-->
                        <div class="card-footer">
                            <a href="{{ route('news.detail', $item->id) }}" class="ts-btn-arrow">Detail</a>
                        </div>

                    </div>
                    <!--end agency-->
                @endforeach
            </section>
            <!--end #agencies-->

            <!--PAGINATION
                                                                                                                        =================================================================================================-->
            {{-- <section id="pagination">
                <div class="container">

                    <!--Pagination-->
                    <nav aria-label="Page navigation">
                        <ul class="pagination ts-center__horizontal">
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link ts-btn-arrow" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </section> --}}

        </div>
        <!--end container-->
    </section>
@endsection
