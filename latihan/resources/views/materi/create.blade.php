@extends('layout.master')

@section('title', 'Tambah Materi')

@section('content')
<main class="app-main" style="background-color:rgb(159, 226, 255);">
    <div class="container">
        <h1 class="mb-4 mt-3 text-danger">Tambah Materi</h1>

        <form action="{{ url('/materi') }}">
            <div class="mb-3">
                <label for="nama" class="form-label"> Materi</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan judul Materi">
            </div>

            <div class="mb-3">
                <label for="kode" class="kode-label">Kode Program Studi</label>
                <input type="text" class="form-control" id="kode" placeholder="Masukkan kode program studi">
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</main>
@endsection
