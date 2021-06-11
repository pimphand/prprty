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
                        <h4 class="page-title">List Property</h4>
                        <button type="button" class="btn btn-raised btn-primary" data-toggle="modal" data-target="#tambah">
                            Tambah Properti
                        </button>
                        <div class="modal fade bd-example-modal-lg" id="tambah" tabindex="-1" role="dialog"
                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myLargeModalLabel">Tambah Properti</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('proprety.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <select type="text" class="select2 form-control mb-3 custom-select"
                                                            style="width: 100%; height:36px;" name="kategori">
                                                            <option>Pilih Kategori</option>
                                                            @foreach ($kategori as $kat)
                                                                <option value="{{ $kat->id }}">
                                                                    {{ $kat->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="field-1" class="control-label">Nama Properti</label>
                                                        <input type="text" class="form-control" name="name"
                                                            placeholder="Nama Properti">
                                                    </div>
                                                    <div class="form-group">
                                                        <h5 class="control-label">
                                                            <label for="field-1" class="control-label">Deskripsi</label>
                                                        </h5>
                                                        <textarea id="elm1" name="description"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="field-1" class="control-label">Harga</label>
                                                        <input type="number" id="demo2" class="form-control" name="price"
                                                            placeholder="Harga">
                                                    </div>
                                                    <div class="form-group">
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
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                @foreach ($properti as $item)
                    <div class="col-md-6 col-xl-3">
                        <div class="card bg-white m-b-30">
                            <div class="card-body ">
                                <h5 class="header-title">{{ $item->name }}</h5>
                                {{-- <p class="text-muted">{!! Str::limit($item->description, , ' ...') !!}</p> --}}
                                <br>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-raised btn-primary" data-toggle="modal"
                                    data-target="#detail{{ $item->id }}">
                                    edit
                                </button>
                                <button type="button" class="btn btn-raised btn-danger" data-toggle="modal"
                                    data-target="#delete{{ $item->id }}">
                                    Hapus
                                </button>
                                <!-- Modal -->
                                <div class="modal fade bd-example-modal-lg" id="detail{{ $item->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myLargeModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{ route('proprety.update', ['proprety' => $item->id]) }}"
                                                method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <select type="text"
                                                                    class="select2 form-control mb-3 custom-select"
                                                                    style="width: 100%; height:36px;" name="kategori">
                                                                    <option value="{{ $item->category->id }}">
                                                                        {{ $item->category->name }}</option>
                                                                    @foreach ($kategori as $kat)
                                                                        <option value="{{ $kat->id }}">
                                                                            {{ $kat->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="field-1" class="control-label">Nama
                                                                    Properti</label>
                                                                <input type="text" class="form-control" name="name"
                                                                    value="{{ $item->name }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <h5 class="control-label">
                                                                    <label for="field-1"
                                                                        class="control-label">Deskripsi</label>
                                                                </h5>
                                                                <textarea id="elm1"
                                                                    name="description">{{ $item->description }}</textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="field-1" class="control-label">Harga</label>
                                                                <input type="number" id="demo2" class="form-control"
                                                                    name="price" value="{{ $item->price }}">
                                                            </div>
                                                            {{-- <a
                                                                href="{{ asset('storage/image/' . $item->image->image) }}   ">
                                                                <img src="{{ asset('storage/image/' . $item->image->image) }}"
                                                                    alt="" width="300px"></a> --}}
                                                            <div class="form-group">
                                                                <label for="field-1" class="control-label">Gambar</label>
                                                                <input type="file" id="demo2" class="form-control"
                                                                    name="image" placeholder="Harga" value="">
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
                                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
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

@section('css')
    {{-- <script src="https://pthis.id/public/plugins/tinymce/tinymce.min.js"></script> --}}
    {{-- <script src="{{ asset('backend') }}/assets/tiny.js"></script> --}}
    <script type="text/javascript">
        tinymce.init({
            selector: '#text-editor',
            plugins: 'image imagetools'
        });

    </script>

@endsection

@section('script')
    <script src="{{ asset('backend') }}/assets/plugins/tinymce/tinymce.min.js"></script>
    <script src="{{ asset('backend') }}/assets/pages/form-editor-init.js"></script>
@endsection
