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
                                <li class="breadcrumb-item"><a href="#">Kategori</a></li>
                                <li class="breadcrumb-item active">Propreti</li>
                            </ol>
                        </div>
                        <h4 class="page-title">List Kategori Properti</h4>
                        <div class="col-md-12">
                            <button type="button" class="btn btn-raised btn-primary" data-toggle="modal"
                                data-target="#tambah">
                                Tambah Kategori
                            </button>
                            <div class="modal fade" id="tambah" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Tambah Kategori</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('category.store') }}" method="post">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="field-1" class="control-label">Name</label>
                                                            <input type="text" class="form-control" name="name"
                                                                placeholder="Nama Kategori">
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
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                @if (count($kategori) == 0)
                    <div class="col" style="text-align: center">
                        <h6>Tidak ada foto</h6>
                    </div>
                @endif
                @foreach ($kategori as $item)
                    <div class="col-md-6 col-xl-3">
                        <div class="card bg-white m-b-30">
                            <div class="card-body ">
                                <h5 class="header-title">{{ $item->name }}</h5>
                                <button type="button" class="btn btn-raised btn-primary" data-toggle="modal"
                                    data-target="#detail{{ $item->id }}">
                                    Edit
                                </button>
                                <button type="button" class="btn btn-raised btn-danger" data-toggle="modal"
                                    data-target="#delete{{ $item->id }}">
                                    Hapus
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="detail{{ $item->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Edit {{ $item->name }}
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{ route('category.update', ['category' => $item->id]) }}"
                                                method="post">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="field-1" class="control-label">Name</label>
                                                            <input type="text" class="form-control" name="name"
                                                                value="{{ $item->name }}">
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
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{ route('category.destroy', ['category' => $item->id]) }}"
                                                method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-body">
                                                    <h5 class="control-label">Apakah anda yakin menghapus
                                                        {{ $item->name }}?</h5>
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
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
