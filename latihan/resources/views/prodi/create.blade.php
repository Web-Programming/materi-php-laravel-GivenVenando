@extends('layout.master')

@section('title', 'Tambah Program Studi')

@section('content')
<main class="app-main" style="background-color:rgb(159, 226, 255);">
    <div class="container">
        <h1 class="mb-4 mt-3 text-danger">Program Studi Baru</h1>

        <form action="{{ url('/prodi') }}">
            <div class="mb-3">
                <label for="nama" class="form-label"> Program Studi</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan nama program studi">
            </div>

            <div class="mb-3">
                <label for="kode" class="kode-label">Kode Program Studi</label>
                <input type="text" class="form-control" id="kode" placeholder="Masukkan kode program studi">
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" rows="3" placeholder="Masukkan deskripsi program studi"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</main>
@endsection
