@extends('layout.master')

@section('title', 'Detail Mahasiswa')

@section('content')
<main class="app-main" style="background-color:rgb(178, 228, 228);">
    <div class="container">
        <h1 class="mb-4 mt-3 text-dark">Mahasiswa</h1>
        

        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('img/' . $mhs['gambar']) }}" class="img-fluid rounded" alt="{{ $mhs['nama'] }}">
            </div>
            <div class="col-md-6 mt-3">
                <h2 class="text-dark">{{ $mhs['nama'] }}</h2>
                <p>NPM = {{ $mhs['NPM'] }}</p>

                <a href="{{ route('mhs.index') }}" class="btn btn-secondary">Kembali ke Daftar Mahasiswa</a>

                <!-- Form Hapus (menggunakan method DELETE) -->
                <form action="{{ route('mhs.destroy', $mhs['id']) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE') <!-- Menggunakan method DELETE untuk penghapusan -->
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data mahasiswa ini?')">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
