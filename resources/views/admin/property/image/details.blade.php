@extends('admin.layouts.app')

@section('content')
    <div class="page-content-wrapper ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="btn-group float-right">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Urora</a></li>
                                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                <li class="breadcrumb-item active">List Proprety</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="modal fade bd-example-modal-lg" id="tambah" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myLargeModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Gambar</label>
                                                <input type="text" id="demo2" class="form-control" name="name"
                                                    placeholder="Nama Ruangan">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="property_id" hidden value="{{ $prop->id }}">
                                                <label for="field-1" class="control-label">Gambar</label>
                                                <input type="file" id="demo2" class="form-control" name="image"
                                                    placeholder="Harga">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-raised btn-primary">Tambah</button>
                                    <button type="button" class="btn btn-raised btn-danger ml-2"
                                        data-dismiss="modal">Batal</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <button type="button" class="btn btn-raised btn-primary" data-toggle="modal" data-target="#tambah">
                        Tambah Foto Ruangan
                    </button>
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">{{ $prop->name }}</h4>
                            </p>
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">nama</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($image as $items)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>
                                                {{ $items->name }}
                                            </td>
                                            <td>
                                                <a href="{{ asset('storage/room/' . $items->image) }}">
                                                    <img src="{{ asset('storage/room/' . $items->image) }}" alt=""
                                                        width="300px">
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{ route('image.destroy', ['image' => $items->id]) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <Button type="submit" class="btn btn-danger">Hapus</Button>
                                                </form>
                                            </td>
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
@endsection
