@extends('admin/layouts/app')


@section('content')
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3>Proggram Studi</h3>
            </div>

            <div class="col-auto ml-auto text-right mt-n1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                        <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Proggram studi</li>
                        <li class="breadcrumb-item"><a href="#">Proggram Studi</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Proggram Studi</li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">
                            Form Tambah Proggram Studi
                        </h5>
                    </div>
                    <div class="card-body">
                      <form action="{{ route('prodi-store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            @include('admin/prodi/fields')
                            <div class="mb-3 row">
                                <div class="col-sm-10 ml-sm-auto">
                                    <button type="submit" class="btn btn-primary btn-simpan">Simpan</button>
                                    <a href="{{ route('prodi') }}" class="btn btn-danger btn-batal">Batal</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endSection