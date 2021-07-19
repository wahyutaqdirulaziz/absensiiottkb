
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
					<span class="sidebar-brand-text align-middle">
						IOT
						<sup><small class="badge bg-primary text-uppercase">absensi Online Tk B</small></sup>
					</span>
					
				</a>

                <div class="text-center mt-3">
        <img src="https://png.pngtree.com/png-clipart/20190520/original/pngtree-vector-users-icon-png-image_4144740.jpg" class="img-fluid rounded-circle mb-2" alt="Dosen" width="80"/>
        <div class="text-white mt-2">{{ Auth::user()->name }}</div>
		@if(Auth::user()->hasRole('admin'))
        <small class="text-muted">Administrator</small>
		@else
		<small class="text-muted">Member</small>
		@endif
    </div>
	
				<ul class="sidebar-nav">
				@if(Auth::user()->hasRole('admin'))
					<li class="sidebar-header">
						Pages
					</li>
					<li class="sidebar-item">
						<a href="{{ route('home') }}" class="sidebar-link">
							<i class="align-middle" data-feather="home"></i> <span class="align-middle">Dashboards</span>
						</a>
						
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#pages" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle" data-feather="users"></i> <span class="align-middle">Anggota</span>
						</a>
						<ul id="pages" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="{{ route('user-create') }}">Tambah Anggota</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="{{ route('user') }}">Daftar Anggota</a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#prodi" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle" data-feather="users"></i> <span class="align-middle">Proggram Studi</span>
						</a>
						<ul id="prodi" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="{{ route('prodi-create') }}">Tambah prodi</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="{{ route('prodi') }}">Daftar Prodi</a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#rfid" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle" data-feather="users"></i> <span class="align-middle">List Rfid</span>
						</a>
						<ul id="rfid" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="{{ route('rfid') }}">Daftar Rfid</a></li>
						</ul>
					</li>
					@endif
				

					<li class="sidebar-header">
						Laporan
					</li>
					@if(Auth::user()->hasRole('user'))
					<li class="sidebar-item">
						<a href="{{ route('home') }}" class="sidebar-link">
							<i class="align-middle" data-feather="home"></i> <span class="align-middle">Dashboards</span>
						</a>
						
					</li>
					@endif
					@if(Auth::user()->hasRole('admin'))
					<li class="sidebar-item">
						<a data-bs-target="#ui" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">laporan</span>
						</a>
						<ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="{{ route('laporan') }}">laporan anggota</a></li>
						</ul>
					</li>
					@endif
					
				
				
				
				</ul>

			
			</div>
		