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
                                <button type="button" class="btn btn-raised btn-primary" data-toggle="modal"
                                    data-target="#detail{{ $item->id }}">
                                    edit
                                </button>
                                <button type="button" class="btn btn-raised btn-danger" data-toggle="modal"
                                    data-target="#delete{{ $item->id }}">
                                    Hapus
                                </button>
                                <button type="button" class="btn btn-raised btn-info" data-toggle="modal"
                                    data-target="#gambar{{ $item->id }}">
                                    Lihat Gambar
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
                                                    <span>Informasi Rumah</span>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="field-2" class="control-label">Kategori
                                                                    Properti</label>
                                                                <select request type="text" name="category_id"
                                                                    class="form-control" id="field-2"
                                                                    placeholder="fa fa-whatsapp">
                                                                    <option value="{{ $item->category->id }}" selected>
                                                                        {{ $item->category->name }}
                                                                    </option>
                                                                    @foreach ($kategori as $kategoris)
                                                                        <option value="{{ $kategoris->id }}">
                                                                            {{ $kategoris->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="field-2" class="control-label">Nama
                                                                    Properti</label>
                                                                <input value="{{ $item->name }}" type="text" name="name"
                                                                    class="form-control" id="field-2"
                                                                    placeholder="Nama Properti">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="field-2" class="control-label">Alamat</label>
                                                                <input value="{{ $item->address }}" type="text"
                                                                    name="address" class="form-control" id="field-2"
                                                                    placeholder="Alamat" request>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="field-2" class="control-label">Kota</label>
                                                                <input value="{{ $item->city }}" type="text"
                                                                    class="form-control" name="city" id="field-2"
                                                                    placeholder="Nama Kota" request>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="field-2" class="control-label">Provinsi</label>
                                                                <input type="text" class="form-control" name="province"
                                                                    id="field-2" placeholder="Provinsi"
                                                                    value="{{ $item->province }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="field-2" class="control-label">Kode Pos</label>
                                                                <input type="number" class="form-control" name="zip"
                                                                    id="field-2" placeholder="Kode Pos" request
                                                                    value="{{ $item->zip }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span>Detail Rumah</span>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="field-2" class="control-label">Jumlah Kamar
                                                                    Tidur</label>
                                                                <input request type="number" min="1" name="bedrooms"
                                                                    class="form-control" id="field-2" placeholder=""
                                                                    value="{{ $item->bedrooms }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="field-2" class="control-label">Kamar
                                                                    Tidur</label>
                                                                <input request type="number" min="1" max=""
                                                                    class="form-control" name="bathrooms" id="field-2"
                                                                    placeholder="" value="{{ $item->bathrooms }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="field-2" class="control-label">Luas
                                                                    Tanah</label>
                                                                <input request type="number" min="1" name="area"
                                                                    class="form-control" id="field-2" placeholder=""
                                                                    value="{{ $item->area }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="field-2" class="control-label">Garasi</label>
                                                                <input request type="number" class="form-control"
                                                                    name="garages" id="field-2" placeholder="Jumlah Garasi"
                                                                    value="{{ $item->garages }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="field-2" class="control-label">Harga</label>
                                                                <input request type="number" class="form-control"
                                                                    name="price" id="field-2" placeholder="Harga"
                                                                    value="{{ $item->price }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="field-2" class="control-label">Foto
                                                                    Properti</label>
                                                                <input request type="file" class="form-control" name="image"
                                                                    value="{{ $item->image }}" id="field-2"
                                                                    placeholder="Kode Pos">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="field-2" class="control-label">Google
                                                                    Map</label>
                                                                <input request type="text" class="form-control" name="maps"
                                                                    id="field-2" placeholder="Masukan Link Google Maps"
                                                                    value="{{ $item->maps }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="field-2" class="control-label">Longitude</label>
                                                                <input request type="text" class="form-control" name="longi"
                                                                    id="field-2" placeholder="Masukan Longitude"
                                                                    value="{{ $item->longi }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="field-2" class="control-label">Langitude</label>
                                                                <input request type="text" class="form-control" name="langi"
                                                                    id="field-2" placeholder="Masukan Langitude"
                                                                    value="{{ $item->langi }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="field-2" class="control-label">Deskripsi</label>
                                                                <br>
                                                                <textarea id="elm1"
                                                                    name="description">{{ $item->description }}</textarea>
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
                                                <img src="  {{ asset('storage/image/' . $item->image) }}" alt=""
                                                    width="740px">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-raised btn-danger ml-2"
                                                    data-dismiss="modal">Tutup</button>
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
    <div class="modal fade bd-example-modal-lg" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Tambah Properti</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('proprety.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <span>Informasi Rumah</span>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Nama Properti</label>
                                    <select request type="text" name="category_id" class="form-control" id="field-2"
                                        placeholder="fa fa-whatsapp">
                                        <option>Pilih Kategori</option>
                                        @foreach ($kategori as $kategoris)
                                            <option value="{{ $kategoris->id }}">
                                                {{ $kategoris->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Nama Properti</label>
                                    <input request type="text" name="name" class="form-control" id="field-2"
                                        placeholder="Nama Properti">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Alamat</label>
                                    <input type="text" name="address" class="form-control" id="field-2" placeholder="Alamat"
                                        request>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Kota</label>
                                    <input type="text" class="form-control" name="city" id="field-2" placeholder="Nama Kota"
                                        request>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Provinsi</label>
                                    <input type="text" class="form-control" name="province" id="field-2"
                                        placeholder="Provinsi" request>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Kode Pos</label>
                                    <input type="number" class="form-control" name="zip" id="field-2" placeholder="Kode Pos"
                                        request>
                                </div>
                            </div>
                        </div>
                        <span>Detail Rumah</span>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Jumlah Kamar
                                        Tidur</label>
                                    <input request type="number" min="1" name="bedrooms" class="form-control" id="field-2"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Kamar Tidur</label>
                                    <input request type="number" min="1" max="" class="form-control" name="bathrooms"
                                        id="field-2" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Luas Tanah</label>
                                    <input request type="number" min="1" name="area" class="form-control" id="field-2"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Garasi</label>
                                    <input request type="number" class="form-control" name="garages" id="field-2"
                                        placeholder="Jumlah Garasi">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Harga</label>
                                    <input request type="number" class="form-control" name="price" id="field-2"
                                        placeholder="Harga">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Foto Properti</label>
                                    <input request type="file" class="form-control" name="image" id="field-2"
                                        placeholder="Kode Pos">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Google Map</label>
                                    <input request type="text" class="form-control" name="maps" id="field-2"
                                        placeholder="Masukan Link Google Maps">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Langitude</label>
                                    <input request type="text" class="form-control" name="langi" id="field-2"
                                        placeholder="Masukan Langitude">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Longitude</label>
                                    <input request type="text" class="form-control" name="longi" id="field-2"
                                        placeholder="Masukan Longitude">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Deskripsi</label>
                                    <br>
                                    <textarea id="elm1" name="description" request></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-raised btn-primary ml-2">Tambah</button>
                            <button type="button" class="btn btn-raised btn-danger ml-2" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('css')
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
