@extends('admin.layouts.app')

@section('content')
<div class="container-fluid p-0">
    @if(Auth::user()->hasRole('admin'))
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3><strong>Absensi - </strong>Berbasis IoT</h3>
        </div>

        <div class="col-auto ms-auto text-end mt-n1">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                    <li class="breadcrumb-item"><a href="#">Absensi Iot</a></li>
                    <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Teknik Komputer B</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-0">
                                <h5 class="card-title">Jumlah Users</h5>
                            </div>

                            <div class="col-auto">
                                <div class="avatar">
                                    <div class="avatar-title rounded-circle bg-primary-light">
                                       <i data-feather="user"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h1 class="mt-1 mb-3">{{ $user->count() }}</h1>
                        <div class="mb-0">
                          
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-0">
                                <h5 class="card-title">Rfid Terdaftar</h5>
                            </div>

                            <div class="col-auto">
                                <div class="avatar">
                                    <div class="avatar-title rounded-circle bg-primary-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag align-middle"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h1 class="mt-1 mb-3">{{ $rfid->count() }}</h1>
                        <div class="mb-0">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xxl-4 ">
							<div class="card flex-fill">
								<div class="card-header">
                                @if($cek_absen->count() == 0)
                                <a href="{{ route('setup-absen') }}" class="btn btn-primary">Set Absensi Hari ini</a>
                                @endif
                                    
								</div>
								<table class="table table-hover my-0">
									<thead>
										<tr>
											<th>Name</th>
											<th class="d-none d-xl-table-cell">Jam</th>
											<th>Status</th>
											<th class="d-none d-md-table-cell">Aksi</th>
										</tr>
									</thead>
									<tbody>
									
										<tr>
										<td>Masuk</td>
											<td class="d-none d-xl-table-cell">05:00 - 05:60 PM</td>
											<td><span class="badge bg-success">{{ $absen->masuk == "aktif" ? "aktif" : "nonaktif" }}</span></td>
											<td class="d-none d-md-table-cell"><a href="{{ route('masuk') }}" class="btn btn-primary">{{ $absen->masuk == "aktif" ? "Nonaktifkan" : "aktifkan" }}</a></td>
										</tr>	
                                        <td>Pulang</td>
											<td class="d-none d-xl-table-cell">05:00 - 05:60 PM</td>
											<td><span class="badge bg-success">{{ $absen->pulang == "aktif" ? "aktif" : "nonaktif" }}</span></td>
											<td class="d-none d-md-table-cell"><a href="{{ route('pulang') }}" class="btn btn-primary">{{ $absen->pulang == "aktif" ? "Nonaktifkan" : "aktifkan" }}</a></td>
										</tr>	
									</tbody>
								</table>
							</div>
						</div>
                        <div class="col-12 col-lg-6 col-xxl-4 d-flex">
							<div class="card flex-fill">
								<div class="card-header">
                                History Absensi Hari ini                               
								</div>
								<table class="table table-hover my-0">
									<thead>
										<tr>
											<th>Rfid</th>
											<th class="d-none d-xl-table-cell">Jam masuk</th>
											<th>Jam pulang</th>
										
										</tr>
									</thead>
									<tbody>
									@foreach($cek_day as $c)
										<tr>
										<td>{{ $c->rfid }}</td>
											
											<td><span class="badge bg-success">{{ $c->check_in == null ? "belum absen" : $c->check_in }}</span></td>
                                            <td><span class="badge bg-success">{{ $c->check_out  == null ? "belum absen" : $c->check_out }}</span></td>
											
										</tr>	
                                      @endforeach 
									</tbody>
								</table>
							</div>
						</div>
         
  

           
    </div>
    @elseif(Auth::user()->hasRole('user'))
   
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Selamat Datang</strong> {{ Auth::user()->name }}</h3>
            </div>
        </div>
        <div class="container">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="P-3 mt-4 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="mt-5 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <center>
                                    <div class="container" style="margin-right:20px">
                                        <div class="row">
                                            <div class="col">
                                                <img src="{{  asset('images/images/rfid.png')}}" width="10%" alt="">
                                            </div>
                                            <div class="">
                                                <div class="col-md-4">
                                                    <img src="{{  asset('images/images/animasi2.gif')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </center>
                            </div>
                        </div>
                        <div class="p-3 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="items-center">
                                <center>
                                    <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">
                                        Silahkan Tempel Kartu RFID Anda</div>
                                </center>
                            </div>
                            <div>
                                <div class="text-gray-600 dark:text-gray-400 text-sm">
                                    <div class="footer" style="text-align: center">
                                        Kelompok : Kelompok Teknik Komputer B <br>
                                        <strong>UNIVERISTAS HAMZANWADI | FAKULTAS TEKNIK </strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if($cek_absen->count() == 0)

        @else
        <div class="row p-4 ">
						<div class="col-12 col-lg-6 col-xxl-6 d-flex">
							<div class="card flex-fill">
								<div class="card-header">

									<h5 class="card-title mb-0">Jadwal</h5>
								</div>
								<table class="table table-hover my-0">
									<thead>
										<tr>
											<th>Name</th>
											<th class="d-none d-xl-table-cell">Jam</th>
											<th>Status</th>
											<th class="d-none d-md-table-cell">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Masuk</td>
											<td class="d-none d-xl-table-cell">08:00 - 08:60 AM</td>
											
                                            @if($cek_user->status_hadir == "undefine")
                                            <td><span class="badge bg-success">{{ $absen->masuk == "aktif" ? "Open" : "Close" }}</span></td>
											<td class="d-none d-md-table-cell"><a href="{{ route('set-masuk') }}" class="btn btn-primary {{ $absen->masuk == "aktif"? "" : "disabled" }}">{{ $absen->masuk == "aktif" ? "Absen" : "Absen Close" }}</a></td>
                                            @else
                                            <td><span class="badge bg-success">Done</span></td>
                                            <td class="d-none d-md-table-cell"><a href="#" class="btn btn-success disabled">Done</a></td>
                                            @endif
                                        </tr>
										<tr>
										<td>Pulang</td>
  
											<td class="d-none d-xl-table-cell">05:00 - 05:60 PM</td>
                                            @if($cek_user->status_pulang == "undifine")
											<td><span class="badge bg-success">{{ $absen->pulang == "aktif" ? "Open" : "Close" }}</span></td>
											<td class="d-none d-md-table-cell"><a href="{{ route('set-pulang') }}" class="btn btn-primary {{ $absen->pulang == "aktif" ? "" : "disabled" }}">{{ $absen->pulang == "aktif" ? "Absen" : "Absen Close" }}</a></td>
                                            @else
                                            <td><span class="badge bg-success">Done</span></td>
                                            <td class="d-none d-md-table-cell"><a href="#" class="btn btn-success disabled">Done</a></td>
                                            @endif
                                        </tr>	
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Informasi Penting !</h5>
								</div>
								<div class="card-body">
									<p class="card-text">Jika mahasiswa tidak mempunyai rfid silahkan menggunakan absen manual tunggu waktu ato status open pada tabel lalu klik tombol absen mohon maaf  jika masih ada banyak kekurangan di sistem ini </p>
								</div>
							</div>
						</div>
					</div>


          @endif          
    </div>

    
    @endif
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