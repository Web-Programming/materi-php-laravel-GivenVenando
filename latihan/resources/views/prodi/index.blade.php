@extends('layout.master')

@section('title', 'Universitas MDP')

@section('content')
<main class="app-main" style="background-image: url('/img/kampusA1.png'); background-size: cover; background-repeat: no-repeat; background-position: center;">
    <div class="container">
        <h1 class="mb-4 mt-3 text-dark">User Universitas MDP </h1>

        @foreach($prodi as $prod)
        <div class="row mb-5 fade-in">
            <div class="col-md-4 ">
                <img src="{{ asset('img/' . $prod['gambar']) }}" class="img-fluid rounded" alt="{{ $prod['nama'] }}">
            </div>
            <div class="col-md-5 mt-2">
                <h2 class="text-light">{{ $prod['nama'] }}</h2>
                
                <!-- Tombol Detail -->
                <a href="{{ route('prodi.detail', $prod['id']) }}" class="btn btn-primary">Detail</a>

                <!-- Tombol Hapus -->
                <form action="{{ route('prodi.destroy', $prod['id']) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('POST')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus program studi ini?')">Hapus</button>
                </form>
            </div>
        </div>
        @endforeach

        <a href="{{ route('prodi.create') }}" class="btn btn-success mb-5">Tambah Program Studi</a>
    </div>
</main>
@endsection
