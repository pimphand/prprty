@extends('admin.layouts.app')
@section('content')
    <div class="page-content-wrapper dashborad-v">

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="btn-group float-right">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Urora</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <!-- end page title end breadcrumb -->
            <div class="row">
                <!-- Column -->
                <div class="col-sm-12 col-md-6 col-xl-4">
                    <div class="card bg-danger m-b-30">
                        <div class="card-body">
                            <div class="d-flex row">
                                <div class="col-3 align-self-center">
                                    <div class="round">
                                        <i class="mdi mdi-google-physical-web"></i>
                                    </div>
                                </div>
                                <div class="col-8 ml-auto align-self-center text-center">
                                    <div class="m-l-10 text-white float-right">
                                        <h5 class="mt-0 round-inner">{{ $view }}</h5>
                                        <p class="mb-0 ">Jumlah Pengunjung</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="card bg-info m-b-30">
                        <div class="card-body">
                            <div class="d-flex row">
                                <div class="col-3 align-self-center">
                                    <div class="round">
                                        <i class="mdi mdi-newspaper"></i>
                                    </div>
                                </div>
                                <div class="col-8 text-center ml-auto align-self-center">
                                    <div class="m-l-10 text-white float-right">
                                        <h5 class="mt-0 round-inner">{{ $berita }}</h5>
                                        <p class="mb-0 ">Jumlah Berita</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="card bg-success m-b-30">
                        <div class="card-body">
                            <div class="d-flex row">
                                <div class="col-3 align-self-center">
                                    <div class="round ">
                                        <i class="mdi mdi-basket"></i>
                                    </div>
                                </div>
                                <div class="col-8 ml-auto align-self-center text-center">
                                    <div class="m-l-10 text-white float-right">
                                        <h5 class="mt-0 round-inner">{{ $prop }}</h5>
                                        <p class="mb-0 ">Jumlah Properti</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
            <div class="row">
                <div class="col-md-12 col-xl-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h5 class="header-title mb-3 mt-0">Pesan Terbaru</h5>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0 w-60">&nbsp;</th>
                                            <th class="border-top-0">Nama</th>
                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">Subject</th>
                                            <th class="border-top-0">Pesan</th>
                                            <th class="border-top-0">Tanggal</th>
                                            <th class="border-top-0">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($message as $pesan)
                                            <tr>
                                                <td>
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td>
                                                    {{ $pesan->name }}
                                                </td>
                                                <td>
                                                    {{ $pesan->email }} </td>
                                                <td>
                                                    {{ $pesan->subject }} </td>
                                                <td>
                                                    {{ $pesan->message }}
                                                </td>
                                                <td> {{ \Carbon\Carbon::parse($pesan->created_at)->format('d/m/Y') }}</td>
                                                @if ($pesan->status == 0)
                                                    <td>
                                                        <form action="{{ route('baca', $pesan->id) }}" method="post">
                                                            @csrf
                                                            <button class="btn btn-info" type="submit">Baca</button>
                                                        </form>
                                                    </td>
                                                @endif
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- container -->
    </div>
    <!-- Page content Wrapper -->
@endsection
