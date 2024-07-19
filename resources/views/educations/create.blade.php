@extends('layouts.admin')

@section('main-content')
    <div class="container">
        <h1>Create Education</h1>

        <form action="{{ route('education.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="tahun_mulai">Tahun Mulai</label>
                <input type="number" name="tahun_mulai" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tahun_selesai">Tahun Selesai</label>
                <input type="number" name="tahun_selesai" class="form-control">
            </div>
            <div class="form-group">
                <label for="sekolah">Sekolah</label>
                <input type="text" name="sekolah" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <input type="text" name="lokasi" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="status_kelulusan">Status Kelulusan</label>
                <input type="text" name="status_kelulusan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" class="form-control">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection