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
                    <li class="breadcrumb-item"><a href="{{ route('news') }}">Berita</a></li>
                    <li class=" breadcrumb-item active" aria-current="page">Detail Berita</li>
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
                <h1>{{ $news->title }}</h1>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <section id="agent-info">
        <div class="container">

            <!--Box-->
            <div class="ts-box ts-has-talk-arrow">

                <!--Ribbon-->
                <div class="ts-ribbon">
                    <i class="fa fa-thumbs-up"></i>
                </div>

                <!--Row-->
                <div class="row">

                    <!--Brand-->
                    <div class="col-md-4 ts-center__both">
                        <a href="{{ asset('storage/news/' . $news->image) }}" class="ts-zoom popup-image">
                            <div class="ts-circle__xxl ts-shadow__md"
                                data-bg-image="{{ asset('storage/news/' . $news->image) }}"></div>
                        </a>
                    </div>

                    <!--Description-->
                    <div class="col-md-8">

                        <div class="py-4">

                            <!--Title-->
                            <div class="ts-title mb-2">
                                <h2 class="mb-1">{{ $news->title }}</h2>
                                {{-- <h5>
                                    <i class="fa fa-map-marker mr-2"></i>
                                    London
                                </h5> --}}
                            </div>

                            <!--Row-->
                            <div class="row">

                                <div class="col-md-7">
                                    {!! $news->description !!}
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                        <!--end p-4-->

                        <div
                            class="ts-bg-light p-3 ts-border-radius__md d-block d-sm-flex ts-center__vertical justify-content-between ts-xs-text-center">
                            <span class="btn btn-outline-secondary btn-sm d-block d-sm-inline-block mb-2 mb-sm-0">
                                Dilihat <i class="fa fa-eye"></i> {{ $news->views }}</span>
                            <small class="ts-opacity__50">tanggal publish: {{ $news->updated_at }}</small>
                        </div>

                    </div>
                    <!--end col-md-8-->
                </div>
                <!--end row-->
            </div>
            <!--end ts-box-->

        </div>
        <!--end container-->
    </section>
    <!--end #agent-info-->

    <!--ITEMS LISTING & SEARCH
                                                                                                        =========================================================================================================-->
@endsection
