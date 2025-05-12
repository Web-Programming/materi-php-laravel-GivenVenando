@extends('layout.master')

@section('title', 'Hapus Materi ')

@section('content')
<main class="app-main" style="background-color: #f4f4f4;">
    <div class="container text-center">
        <h1 class="mb-4 mt-3 text-danger">Hapus Materi </h1>
        <p>Apakah Anda yakin ingin menghapus <strong>{{ $prodi['nama'] }}</strong>?</p>

        <form action="{{ route('materi.delete', $materi['id']) }}" method="POST" style="display: inline;">
            @csrf
            @method('POST')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus materi ini?')">Hapus</button>
        </form>
        
        
        <a href="{{ url('/prodi') }}" class="btn btn-secondary">Batal</a>
    </div>
</main>
@endsection
