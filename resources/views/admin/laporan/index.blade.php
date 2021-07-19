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
                                <th scope="col">name</th>
                                <th scope="col">proggram studi</th>
                                <th scope="col">semester</th>
                                <th scope="col">kelas</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no =1;?>
                        @foreach ($data as $k)

                            @if(!$k->kelas == 0)
                                <tr> 
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $k->rfid }}</td>
                                    <td>{{ $k->name }}</td>
                                    <td>{{ $k->prodi }}</td>
                                    <td>{{ $k->semester }}</td>
                                    <td>{{ $k->kelas }}</td>
                                    <td>
                                        <form action="#" method="POST">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{ route('laporan-detail',$k->rfid) }}" class="btn btn-primary btn-sm" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                                        </div>
                                    </form>
                                    </td>
                                </tr>
                                @endif
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