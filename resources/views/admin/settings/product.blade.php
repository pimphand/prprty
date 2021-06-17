@extends('admin.layouts.app')

@section('content')
    <div class="page-content-wrapper ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="btn-group float-right">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                {{-- <li class="breadcrumb-item"><a href="#">Tables</a></li> --}}
                                <li class="breadcrumb-item active">List Produk </li>
                            </ol>
                        </div>
                        <h4 class="page-title">Produk Ungulan</h4>
                        <button type="button" class="btn btn-raised btn-primary" data-toggle="modal" data-target="#tambah">
                            Tambah Produk
                        </button>
                        <div class="modal fade bd-example-modal-lg" id="tambah" tabindex="-1" role="dialog"
                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myLargeModalLabel">Tambah Produk</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('product.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="field-1" class="control-label">Judul
                                                                Produk </label>
                                                            <select type="text" class="form-control" id="field-2"
                                                                placeholder="Doe" name="property">
                                                                @foreach ($property as $items)
                                                                    <option value="{{ $items->id }}">
                                                                        {{ $items->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="field-2" class="control-label">Status</label>
                                                            <select type="text" class="form-control" id="field-2"
                                                                placeholder="Doe" name="status">
                                                                <option value="0">Aktif</option>
                                                                <option value="1">Tidak Aktif</option>
                                                            </select>
                                                        </div>
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
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                @foreach ($product as $item)
                    <div class="col-md-3 ">
                        <div class="card bg-white m-b-30">
                            <div class="card-body ">
                                <h5 class="header-title">{{ $item->property->name }}</h5>
                                <h5 class="header-title">{{ $item->property->category->name }}</h5>
                                @if ($item->status === 0)
                                    <i class="mdi mdi-checkbox-blank-circle" style="color: rgb(9, 255, 0);"></i> Aktif
                                @else
                                    <i class="mdi mdi-checkbox-blank-circle" style="color: rgb(255, 0, 0);"></i> Tidak aktif
                                @endif
                                <br>
                                <br>
                                <button type="button" class="btn btn-raised btn-primary" data-toggle="modal"
                                    data-target="#detail{{ $item->id }}">
                                    edit
                                </button>
                                <button type="button" class="btn btn-raised btn-danger" data-toggle="modal"
                                    data-target="#delete{{ $item->id }}">
                                    Hapus
                                </button>
                                <button type="button" class="btn btn-raised btn-primary" data-toggle="modal"
                                    data-target="#image{{ $item->id }}">Lihat Gambar</button>

                                <!-- Modal -->
                                <div class="modal fade bd-example-modal-lg" id="detail{{ $item->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myLargeModalLabel">Produk Unggulan</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{ route('product.update', ['product' => $item->id]) }}"
                                                method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="field-1" class="control-label">Judul
                                                                                Produk </label>
                                                                            <select type="text" class="form-control"
                                                                                id="field-2" placeholder="Doe"
                                                                                name="property">
                                                                                @foreach ($property as $items)
                                                                                    <option
                                                                                        value="{{ $item->property->id }}"
                                                                                        {{ $item->property->id ? 'Selected' : '' }}>
                                                                                        {{ $item->property->name }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="field-2"
                                                                                class="control-label">Status</label>
                                                                            <select class="form-control" id="field-2"
                                                                                placeholder="Doe" name="status">
                                                                                <option value="0">Aktif</option>
                                                                                <option value="1">Tidak Aktif</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-raised btn-primary">Edit</button>
                                                    <button type="button" class="btn btn-raised btn-danger ml-2"
                                                        data-dismiss="modal">Batal</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="delete{{ $item->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Produk Unggulan</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{ route('product.destroy', ['product' => $item->id]) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-body">
                                                    <h4>
                                                        Apakah anda yakin menghapus data ini?
                                                    </h4>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-raised btn-primary">Hapus</button>
                                                    <button type="button" class="btn btn-raised btn-danger ml-2"
                                                        data-dismiss="modal">Tidak</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade bd-example-modal-img" tabindex="-1" role="dialog"
                                    id="image{{ $item->id }}" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img src="{{ asset('storage/image/' . $item->property->image) }}" alt=""
                                                    width="740px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
