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
                                <li class="breadcrumb-item"><a href="#">slider</a></li>
                                <li class="breadcrumb-item active">Slide</li>
                            </ol>
                        </div>
                        <h4 class="page-title">List slider</h4>
                        <div class="col-md-12">
                            <button type="button" class="btn btn-raised btn-primary" data-toggle="modal"
                                data-target="#tambah">
                                Tambah slider
                            </button>
                            <div class="modal fade" id="tambah" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('slider.store') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="field-1" class="control-label">Name</label>
                                                            <input type="file" class="form-control" name="image"
                                                                placeholder="Nama slider">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="field-1" class="control-label">Status</label>
                                                            <select type="text" class="form-control" name="status"
                                                                placeholder="Nama slider">
                                                                <option value="1">Aktif</option>
                                                                <option value="0">Tidak Aktif</option>
                                                            </select>
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
                @if (count($slider) == 0)
                    <div class="col" style="text-align: center">
                        <h6>Tidak ada desain..</h6>
                    </div>
                @endif
                @foreach ($slider as $item)
                    <div class="col-md-6 col-xl-4">
                        <div class="card bg-white m-b-30">
                            <div class="card-body ">
                                @if (!$item->status == 0)
                                    <i class="mdi mdi-checkbox-blank-circle" style="color: rgb(9, 255, 0);"></i> Aktif
                                @else
                                    <i class="mdi mdi-checkbox-blank-circle" style="color: rgb(255, 0, 0);"></i> Tidak aktif
                                @endif
                                <br><br>
                                <a href="" data-toggle="modal" data-target="#gambar{{ $item->id }}">
                                    <img src="{{ asset('storage/slider/' . $item->image) }}" alt="" width="300px">
                                </a>
                                <br><br>
                                <button type="button" class="btn btn-raised btn-primary" data-toggle="modal"
                                    data-target="#detail{{ $item->id }}">
                                    Edit
                                </button>
                                <button type="button" class="btn btn-raised btn-danger" data-toggle="modal"
                                    data-target="#delete{{ $item->id }}">
                                    Hapus
                                </button>
                                <div class="modal fade bd-example-modal-img" id="gambar{{ $item->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">{{ $item->name }}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ asset('storage/slider/' . $item->image) }}" alt=""
                                                    width="740px">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-raised btn-danger ml-2"
                                                    data-dismiss="modal">Tutup</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                            <form action="{{ route('slider.update', ['slider' => $item->id]) }}"
                                                method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="field-3" class="control-label">Gambar</label>
                                                                <input type="file" class="form-control" id="field-3"
                                                                    name="image" value="{{ $item->image }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="field-1" class="control-label">Status</label>
                                                            <select type="text" class="form-control" name="status"
                                                                placeholder="Nama slider">
                                                                <option value="1">Aktif</option>
                                                                <option value="0">Tidak Aktif</option>
                                                            </select>
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
                                            <form action="{{ route('slider.destroy', ['slider' => $item->id]) }}"
                                                method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-body">
                                                    <h5 class="control-label">Apakah anda yakin menghapus gambar ini?</h5>
                                                    <img src="{{ asset('storage/slider/' . $item->image) }}" alt=""
                                                        width="400px">
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
