@extends('layout.master')

@section('title', 'Detail Program Studi')

@section('content')
<main class="app-main" style="background-color:rgb(198, 253, 255);">
    <div class="container">
        <h1 class="mb-4 mt-3 text-dark">{{ $prodi['nama'] }}</h1>

        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('img/' . $prodi['gambar']) }}" class="img-fluid rounded" alt="{{ $prodi['nama'] }}">
            </div>
            <div class="col-md-6 mt-3">
                <h2 class="text-dark">{{ $prodi['nama'] }}</h2>
                <p>{{ $prodi['deskripsi'] }}</p>
                
                <!-- Kembali ke daftar prodi -->
                <a href="{{ route('prodi.index') }}" class="btn btn-secondary">Kembali ke Daftar Program Studi</a>

                <!-- Form Hapus (menggunakan method DELETE) -->
                <form action="{{ route('prodi.destroy', $prodi['id']) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE') <!-- Menggunakan method DELETE untuk penghapusan -->
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus program studi ini?')">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
