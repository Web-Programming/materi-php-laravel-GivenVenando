@extends('layout.master')

@section('title', 'Hapus Mahasiswa')

@section('content')
<main class="app-main" style="background-color: #f4f4f4;">
    <div class="container text-center">
        <h1 class="mb-4 mt-3 text-danger">Hapus Mahasiswa</h1>
        <p>Apakah Anda yakin ingin menghapus <strong>{{ $mhs['nama'] }}</strong>?</p>

        <form action="{{ route('mhs.delete', $mhs['id']) }}" method="POST" style="display: inline;">
            @csrf
            @method('POST') 
            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data mahasiswa ini?')">Hapus</button>
        </form>
        
        
        <a href="{{ url('/mhs') }}" class="btn btn-secondary">Batal</a>
    </div>
</main>
@endsection
