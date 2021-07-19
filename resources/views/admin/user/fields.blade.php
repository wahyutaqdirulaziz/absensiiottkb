<div class="mb-3 row">
    <label class="col-form-label col-sm-2 text-sm-right">Nama akun</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" placeholder="Nama" name="name" value="{{ isset($user->name) ? $user->name : old('name') }}" required>
        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="mb-3 row">
    <label class="col-form-label col-sm-2 text-sm-right">NIM</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" placeholder="Nomor Induk Mahasiswa" name="nim" value="{{ isset($user->nim) ? $user->nim : old('nim') }}" required>
        @error('nim')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<div class="mb-3 row">
    <label class="col-form-label col-sm-2 text-sm-right">Card ID</label>
    <div class="col-sm-8">
      <select class="form-control" name="rfid" id="">
      <option value="">- Pilih Rfid -</option>
      @foreach($rfid as $p)     
        <option value="{{ $p->uid }}" {{ ($p->uid == isset($user->rfid)? $user->rfid : "")? "selected" : "" }}>{{ $p->uid }}</option>
      @endforeach
      </select>
        @error('rfid')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="mb-3 row">
    <label class="col-form-label col-sm-2 text-sm-right">Semester</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" placeholder="Semester" name="semester" value="{{ isset($user->semester) ? $user->semester :  ''  }}" required>
        @error('semester')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="mb-3 row">
    <label class="col-form-label col-sm-2 text-sm-right">Email</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" placeholder="Email" name="email" value="{{ isset($user->email) ? $user->email : old('email') }}" required>
        @error('email')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<div class="mb-3 row">
    <label class="col-form-label col-sm-2 text-sm-right">Proggram Studi</label>
    <div class="col-sm-8">
      <select class="form-control" name="prodi" id="">
      <option value="">- Pilih Proggram Studi -</option>
      @foreach($prodi as $p)     
        <option value="{{ $p->nama }}" {{ ($p->nama == isset($user->prodi)? $user->prodi : "")? "selected" : "" }}>{{ $p->nama }}</option>
      @endforeach
      </select>
        @error('prodi')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<div class="mb-3 row">
    <label class="col-form-label col-sm-2 text-sm-right">Proggram Studi</label>
    <div class="col-sm-8">
      <select class="form-control" name="kelas" id="">
      <option value="">- Pilih Kelas -</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
        <option value="F">F</option>
      </select>
        @error('kelas')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="mb-3 row">
    <label class="col-form-label col-sm-2 text-sm-right">Role</label>
    <div class="col-sm-8">
      <select class="form-control" name="role" id="">
      <option value="">- Pilih Hak Akses -</option>
      @foreach($data as $r)     
        <option value="{{ $r->name }}" {{ ($r->name == isset($user->role_name)? $user->role_name : "")? "selected" : "" }}>{{ $r->name }}</option>
      @endforeach
      </select>
        @error('role')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<div class="mb-3 row">
    <label class="col-form-label col-sm-2 text-sm-right">Password</label>
    <div class="col-sm-8">
        <input type="password" class="form-control" placeholder="Password" name="password" {{ isset($user) ? '' : 'required' }}>
        @error('password')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="mb-3 row">
    <label class="col-form-label col-sm-2 text-sm-right">Konfirmasi Password</label>
    <div class="col-sm-8">
        <input type="password" class="form-control" placeholder="Konfirmasi Password" name="password_confirmation" {{ isset($user) ? '' : 'required' }} >
        @error('ulangi_password')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>