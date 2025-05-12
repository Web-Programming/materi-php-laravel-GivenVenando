@extends('layout.master')

@section('title', 'Universitas MDP')

@section('content')
<main class="app-main" style="background-image: url('/img/tech1.jpeg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
    <div class="container">
        <h1 class="mb-4 mt-3 text-light">Fakultas di Universitas MDP </h1>

        @foreach($fakultas as $fak)
        <div class="row mb-5 fade-in">
            <div class="col-md-4 ">
                <img src="{{ asset('img/' . $fak['gambar']) }}" class="img-fluid rounded" alt="{{ $fak['nama'] }}">
            </div>
            <div class="col-md-5 mt-2">
                <h2 class="text-light">{{ $fak['nama'] }}</h2>
                <p class="text-light">{{ $fak['deskripsi'] }}</p>
                
                <!-- Tombol Detail -->
                <a href="{{ route('fakultas.detail', $fak['id']) }}" class="btn btn-primary">Detail</a>

                <!-- Tombol Hapus -->
                <form action="{{ route('fakultas.destroy', $fak['id']) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('POST')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus fakultas ini?')">Hapus</button>
                </form>
            </div>
        </div>
        @endforeach

        <a href="{{ route('fakultas.create') }}" class="btn btn-success mb-5">Tambah Fakultas</a>
    </div>
</main>
@endsection
