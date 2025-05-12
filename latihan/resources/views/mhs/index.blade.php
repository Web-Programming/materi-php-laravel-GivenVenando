@extends('layout.master')

@section('title', 'Universitas MDP')

@section('content')
<main class="app-main" style="background-image: url('/img/wisuda.jpeg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
    <div class="container">
        <h1 class="mb-4 mt-3 text-light">Mahasiswa di Universitas MDP </h1>

        @foreach($mhs as $mhs)
        <div class="row mb-5 fade-in">
            <div class="col-md-4 ">
                <img src="{{ asset('img/' . $mhs['gambar']) }}" class="img-fluid rounded" alt="{{ $mhs['nama'] }}">
            </div>
            <div class="col-md-5 mt-2">
                <h2 class="text-light">{{ $mhs['nama'] }}</h2>
                
                
                <!-- Tombol Detail -->
                <a href="{{ route('mhs.detail', $mhs['id']) }}" class="btn btn-primary">Detail</a>

                <!-- Tombol Hapus -->
                <form action="{{ route('mhs.destroy', $mhs['id']) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('POST')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus mahasiswa ini?')">Hapus</button>
                </form>
            </div>
        </div>
        @endforeach

        <a href="{{ route('mhs.create') }}" class="btn btn-success mb-5">Tambah Mahasiswa</a>
    </div>
</main>
@endsection
