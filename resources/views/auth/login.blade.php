@extends('frontend.layouts.app')
@section('bokeh')
    ts-has-bokeh-bg
@endsection

@section('stk')
    <section id="breadcrumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">login</li>
                </ol>
            </nav>
        </div>
    </section>

@endsection
@section('content')
    <!--PAGE TITLE
                                                        =========================================================================================================-->
    <section id="page-title">
        <div class="container">
            <div class="ts-title">
                <h1>Login</h1>
            </div>
        </div>
    </section>

    <!--LOGIN / REGISTER SECTION
                                                        =========================================================================================================-->
    <section id="login-register">
        <div class="container">
            <div class="row">

                <div class="offset-md-2 col-md-8 offset-lg-3 col-lg-6">
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <div class="tab-content">
                        <div class="tab-pane active" id="login" role="tabpanel" aria-labelledby="login-tab">

                            <!--Login form-->
                            <form class="ts-form" action="{{ route('login') }}" method="post">
                                @csrf
                                <!--Email-->
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="login-email"
                                        placeholder="Email" required>
                                </div>

                                <!--Password-->
                                <div class="input-group ts-has-password-toggle">
                                    <input type="password" name="password" class="form-control border-right-0"
                                        placeholder="Password" password="password" required>
                                    <div class="input-group-append">
                                        <a href="#" class="input-group-text bg-white border-left-0 ts-password-toggle">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>

                                <!--Checkbox and Submit button-->
                                <div class="ts-center__vertical justify-content-between">


                                    <!--Submit button-->
                                    <button type="submit" class="btn btn-primary">Login</button>

                                </div>

                                <hr>

                                {{-- <!--Forgot password link-->
                                <a href="#" class="ts-text-small">
                                    <i class="fa fa-sync-alt ts-text-color-primary mr-2"></i>
                                    <span class="ts-text-color-light">I have forgot my password</span>
                                </a> --}}

                            </form>

                        </div>
                        <!--end #login.tab-pane-->
                    </div>
                    <!--end tab-content-->

                </div>
                <!--end offset-4.col-md-4-->

            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
@endsection
