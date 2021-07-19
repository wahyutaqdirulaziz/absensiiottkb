<div class="mb-3 row">
    <label class="col-form-label col-sm-2 text-sm-right">Nama Prodi</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" placeholder="Nama" name="nama" value="{{ isset($prodi->nama) ? $prodi->nama : old('nama') }}" required>
        @error('nama')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
