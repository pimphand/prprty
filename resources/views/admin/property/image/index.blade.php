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
                        <h4 class="page-title">List Foto Ruangan</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                @foreach ($properti as $item)
                    <div class="col-md-6 col-xl-3">
                        <div class="card bg-white m-b-30">
                            <div class="card-body ">
                                <h6 class="header-title">Kategori: {{ $item->category->name }}</h6>
                                <h6 class="header-title">Propreti: {{ $item->name }}</h6>
                                <a href="{{ route('image.edit', ['image' => $item->id]) }}">
                                    <button type="button" class="btn btn-raised btn-primary">
                                        Details
                                    </button>
                                </a>
                                <button type="button" class="btn btn-raised btn-danger" data-toggle="modal"
                                    data-target="#delete{{ $item->id }}">
                                    Hapus
                                </button>
                                <!-- Modal -->
                                @foreach ($gambar as $items)
                                    <div class="modal fade bd-example-modal-lg" id="detail{{ $items->property->id }}"
                                        tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myLargeModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                {{-- <form action="{{ route('proprety.update', ['proprety' => $item->id]) }}"
                                                method="post" enctype="multipart/form-data"> --}}
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <table class="table mb-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Gambar</th>
                                                                        <th scope="col">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    <tr>
                                                                        <th scope="row">{{ $loop->iteration }}</th>
                                                                        <td>
                                                                            <a
                                                                                href="{{ asset('storage/image/' . $items->property->image) }}">
                                                                                <img src="{{ asset('storage/image/' . $items->property->image) }}"
                                                                                    alt="" width="300px">
                                                                            </a>
                                                                        </td>
                                                                        <td>button</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
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
                                @endforeach
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
