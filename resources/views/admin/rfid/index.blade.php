@extends('admin.layouts.app')

@section('css')
    @include('admin.css.CustomDatatables')
    @include('admin.css.datatables')
    
@endsection

@section('content')
<div class="container-fluid p-0">

    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3>Daftar Card ID</h3>
        </div>

        <div class="col-auto ml-auto text-right mt-n1">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                    <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Card</li>
                    <li class="breadcrumb-item active" aria-current="page">Card</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        <a href="{{ route('tap') }}" class="btn btn-primary"><i data-feather="plus"></i>{{ $tap->status == "aktif" ? "NONAKTIFKAN TAP KARTU" : "AKTIFKAN TAP KARTU" }}</a>
                    </h5>
                </div>
                <div class="table-responsive">
                    <table class="table mb-0 table-striped table-hover datatables" id="datatables">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">UID</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no =1;?>
                        @foreach ($data as $k)
                                <tr> 
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $k->uid }}</td>
                                </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
    
@endsection

@section('script')
    @include('admin.js.datatables')
    <script>
       $(function(){
            $('.datatables').DataTable({
                "processing": true,
                "order" : [["0", "asc"]]
            });
        });
    </script>
    
@endsection