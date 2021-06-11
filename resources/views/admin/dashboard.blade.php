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
                                        <h5 class="mt-0 round-inner">0</h5>
                                        <p class="mb-0">Jumlah Kunjungan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="card bg-info m-b-30">
                        <div class="card-body">
                            <div class="d-flex row">
                                <div class="col-3 align-self-center">
                                    <div class="round">
                                        <i class="mdi mdi-account-multiple-plus"></i>
                                    </div>
                                </div>
                                <div class="col-8 text-center ml-auto align-self-center">
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
                                        <h5 class="mt-0 round-inner">{{ $berita }}</h5>
                                        <p class="mb-0 ">Jumlah Berita</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
        </div>
        <!-- container -->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myLargeModalLabel">Tambah Sosial Media</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <form action="{{ route('social.store') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Icon</label>
                                        <input type="text" name="icon" class="form-control" id="field-2"
                                            placeholder="fa fa-whatsapp">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Nama Sosisal Media</label>
                                        <input type="text" name="name" class="form-control" id="field-2"
                                            placeholder="Instagram">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Link</label>
                                        <input type="text" class="form-control" name="link" id="field-2"
                                            placeholder="instagram.com">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-raised btn-primary ml-2">Tambah</button>
                            <button type="button" class="btn btn-raised btn-danger ml-2" data-dismiss="modal">Close</button>
                            <a href="https://fontawesome.com/v5.15/icons?d=gallery&p=2" target="_blank">
                                <button type="button" class="btn btn-raised btn-info ml-2">Link Icon</button>
                            </a>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-xl-12">
                            <div class="card m-b-30">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">List Sosial Media</h4>

                                    <table class="table table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Icon</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Link</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($sos as $item)
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td> {{ $item->icon }}</td>
                                                    <td> {{ $item->name }}</td>
                                                    <td>{{ $item->link }}</td>
                                                    <td>
                                                        <form action="{{ route('social.destroy', $item->id) }}"
                                                            method="post">
                                                            @csrf
                                                            <button type="submit" class="btn btn-warning">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                </div>
            </div>
        </div>
    @endsection
