@extends('frontend.layouts.app')

@section('content')
    <section id="breadcrumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                </ol>
            </nav>
        </div>
    </section>

    <!--PAGE TITLE
                                                                                                                        =========================================================================================================-->
    <section id="page-title">
        <div class="container">
            <div class="ts-title">
                <h1>Contact</h1>
            </div>
        </div>
    </section>

    <!--MAP
                                                                                                                        =========================================================================================================-->
    <section id="map-address">

        <div class="container mb-5">
            <div class="ts-contact-map ts-map ts-shadow__sm position-relative">

                <!--Address on map-->
                <address class="position-absolute ts-bottom__0 ts-left__0 text-white m-3 p-4 ts-z-index__2"
                    data-bg-color="rgba(0,0,0,.8)">
                    <strong>Universitas PGRI Madiun</strong>
                    <br>
                    Jl. Setia Budi No.85, Kanigoro,
                    <br>
                    Kec. Kartoharjo, Kota Madiun, Jawa Timur 63118
                </address>

                <!--Map-->
                <div id="ts-map-simple" class="h-100 ts-z-index__1"
                    data-ts-map-leaflet-provider="https://cartodb-basemaps-{s}.global.ssl.fastly.net/light_all/{z}/{x}/{y}{r}.png"
                    data-ts-map-zoom="14" data-ts-map-center-latitude="-7.634065649385351"
                    data-ts-map-center-longitude="111.54202276908003" data-ts-map-scroll-wheel="1" data-ts-map-controls="0">
                </div>
            </div>

    </section>

    <!--CONTACT INFO & FORM
                                                                                                                        =========================================================================================================-->
    <section id="contact-form">
        <div class="container">
            <div class="row">

                <!--CONTACTS (LEFT SIDE)
                                                                                                                                    =============================================================================================-->
                <div class="col-md-4">

                    <!--Title-->
                    <h3>Get In Touch</h3>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec placerat tempor sapien.
                        In lobortis posuere tincidunt.
                    </p>

                    <!--Phone-->
                    <figure class="ts-center__vertical">
                        <i class="fa fa-phone ts-opacity__50 mr-3 mb-0 h4 font-weight-bold"></i>
                        <dl class="mb-0">
                            <dt>Phone</dt>
                            <dd class="ts-opacity__50">+1 321-978-5552</dd>
                        </dl>
                    </figure>

                    <!--Email-->
                    <figure class="ts-center__vertical">
                        <i class="fa fa-envelope ts-opacity__50 mr-3 mb-0 h4 font-weight-bold"></i>
                        <dl class="mb-0">
                            <dt>Email</dt>
                            <dd class="ts-opacity__50">
                                <a href="#">hello@example.com</a>
                            </dd>
                        </dl>
                    </figure>

                    <!--Skype-->
                    <figure class="ts-center__vertical">
                        <i class="fab fa-skype ts-opacity__50 mr-3 mb-0 h4 font-weight-bold"></i>
                        <dl class="mb-0">
                            <dt>Skype</dt>
                            <dd class="ts-opacity__50">
                                <a href="#">real.estate.agency</a>
                            </dd>
                        </dl>
                    </figure>

                </div>
                <!--end col-md-4-->

                <!--FORM (RIGHT SIDE)
                                                                                                                                    =============================================================================================-->
                <div class="col-md-8">

                    <!--Title-->
                    <h3>Contact Form</h3>

                    <!--Form-->
                    <form action="{{ route('sendMessage') }}" method="post" class="clearfix ts-form ts-form-email">
                        @csrf
                        <!--Row-->
                        <div class="row">

                            <!--Name-->
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="form-contact-name">Name *</label>
                                    <input type="text" class="form-control" id="form-contact-name" name="name"
                                        placeholder="Your Name" required>
                                </div>
                            </div>

                            <!--Email-->
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="form-contact-email">Email *</label>
                                    <input type="email" class="form-control" id="form-contact-email" name="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>

                        </div>
                        <!--end row -->

                        <!--Subject-->
                        <div class="form-group">
                            <label for="form-contact-email">Subject*</label>
                            <input type="text" class="form-control" id="form-contact-subject" name="subject"
                                placeholder="Subject" required>
                        </div>

                        <!--Message-->
                        <div class="form-group">
                            <label for="form-contact-message">Message *</label>
                            <textarea class="form-control" id="form-contact-message" rows="5" name="messages"
                                placeholder="Your Message" required></textarea>
                        </div>

                        <!--Submit button-->
                        <div class="form-group clearfix">
                            <button type="submit" class="btn btn-primary float-right">Send
                                a Message
                            </button>
                        </div>

                        <div class="form-contact-status"></div>

                    </form>
                    <!--end form-contact -->
                </div>
                <!--end col-md-8-->

            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    </main>
    <!--end #ts-main-->

    <!--*********************************************************************************************************-->
    <!--************ FOOTER *************************************************************************************-->
    <!--*********************************************************************************************************-->
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/leaflet.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">
@endsection

@section('script')
    <script src="{{ asset('frontend') }}/assets/js/leaflet.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/map-leaflet.js"></script>

@endsection
@section('bokeh')
    ts-has-bokeh-bg
@endsection
