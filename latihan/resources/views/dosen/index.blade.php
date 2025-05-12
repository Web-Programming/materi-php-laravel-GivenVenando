@extends('layout.master')

@section('title', 'Universitas MDP')

@section('content')
<main class="app-main" style="background-image: url('/img/kampus1.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
    <div class="container">
        <h1 class="mb-4 mt-3 text-dark">Dosen di Universitas MDP </h1>

        @foreach($dosen as $dos)
        <div class="row mb-5 ml-10 fade-in">
            <div class="col-md-4 ">
                <img src="{{ asset('img/' . $dos['gambar']) }}" class="img-fluid rounded" alt="{{ $dos['nama'] }}">
            </div>
            <div class="col-md-5 mt-2">
                <h2 class="text-light">{{ $dos['nama'] }}</h2>
                
                <!-- Tombol Detail -->
                <a href="{{ route('dosen.detail', $dos['id']) }}" class="btn btn-primary">Detail</a>

                <!-- Tombol Hapus -->
                <form action="{{ route('dosen.destroy', $dos['id']) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('POST')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus dosen ini?')">Hapus</button>
                </form>
            </div>
        </div>
        @endforeach

        <a href="{{ route('dosen.create') }}" class="btn btn-success mb-5">Tambah Dosen</a>
    </div>
</main>
@endsection
