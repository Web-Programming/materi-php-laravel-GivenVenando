@extends('layout.master')

@section('title', 'Tambah Dosen')

@section('content')
<main class="app-main" style="background-color:rgb(159, 226, 255);">
    <div class="container">
        <h1 class="mb-4 mt-3 text-danger"> Dosen Baru </h1>

        <form action="{{ url('/dosen') }}">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Dosen</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan nam lengkap">
            </div>

            <div class="mb-3">
                <label for="nid" class="form-label">NID</label>
                <input type="text" class="form-control" id="nid" placeholder="Masukkan NID">
            </div>

            <div class="mb-3">
                <label for="program" class="form-label">Program Studi</label>
                <input type="text" class="form-control" id="program" placeholder="Contoh: Teknik Informatika ">
            </div>

             <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" class="form-control" id="jabatan"placeholder="Contoh: Ketua ">
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</main>
@endsection
