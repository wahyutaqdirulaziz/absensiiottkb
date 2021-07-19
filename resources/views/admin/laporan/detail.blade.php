@extends('admin.layouts.app')

@section('css')
    @include('admin.css.CustomDatatables')
    @include('admin.css.datatables')
    
@endsection

@section('content')
<div class="container-fluid p-0">

    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3>Laporan Anggota</h3>
        </div>

        <div class="col-auto ml-auto text-right mt-n1">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                    <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Laporan</li>
                    <li class="breadcrumb-item active" aria-current="page">Laporan</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                      
                    </h5>
                </div>
                <div class="table-responsive">
                    <table class="table mb-0 table-striped table-hover datatables" id="datatables">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">rfid</th>
                                <th scope="col">masuk</th>
                                <th scope="col">check in</th>

                                <th scope="col">pulang</th>
                                <th scope="col">check out</th>
                                <th scope="col">tanggal</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no =1;?>
                        @foreach ($data as $k)
                                <tr> 
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $k->rfid }}</td>
                                    <td>{{  $k->status_hadir == "undefine" ? "tidak masuk" : "hadir"  }}</td>
                                    <td><span class="badge bg-success">{{ $k->check_in == null ? "belum absen" : $k->check_in }}</span></td>
                                           
                                    <td>{{  $k->status_pulang == "undifine" ? "tidak masuk" : "hadir"  }}</td>
                                    <td><span class="badge bg-success">{{ $k->check_out  == null ? "belum absen" : $k->check_out }}</span></td>
                                    <td>{{ $k->created_at }}</td>
                                 
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