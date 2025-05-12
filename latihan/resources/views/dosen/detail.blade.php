@extends('layout.master')

@section('title', 'Detail Dosen')

@section('content')
<main class="app-main" style="background-color:rgb(253, 253, 253);">
    <div class="container">
        <h1 class="mb-4 mt-3 text-dark"> Dosen </h1>

        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('img/' . $dosen['gambar']) }}" class="img-fluid rounded" alt="{{ $dosen['nama'] }}">
            </div>
            <div class="col-md-6 mt-3">
                <h2 class="text-danger">{{ $dosen['nama'] }}</h2>
                <p>{{ $dosen['jabatan'] }}</p>
                
                <!-- Kembali ke daftar dosen -->
                <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Kembali ke Daftar Dosen</a>

                <!-- Form Hapus (menggunakan method DELETE) -->
                <form action="{{ route('dosen.destroy', $dosen['id']) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE') <!-- Menggunakan method DELETE untuk penghapusan -->
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data dosen ini?')">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
