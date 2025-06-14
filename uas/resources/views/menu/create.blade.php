@extends('layout.master')

@section('title', 'Tambah Menu')

@section('content')
<div class="container mt-4">
    <h2>Tambah Menu Baru</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('menu.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Menu</label>
            <input type="text" name="name" class="form-control" placeholder="Nama menu" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control" placeholder="Deskripsi menu"></textarea>
        </div>
        <div class="mb-3">
            <label>Harga (Rp)</label>
            <input type="number" name="price" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Image URL</label>
            <input type="url" name="image_url" class="form-control" placeholder="https://..." required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Menu</button>
        <a href="{{ route('menu.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection