@extends('layout.master')

@section('title', 'Struk Pesanan')

@section('content')
<div class="container mt-5 p-4 bg-white rounded shadow" style="max-width: 600px">
  <h3 class="text-center mb-4">🧾 Struk Pesanan</h3>
  <p><strong>Nama Customer:</strong> Richeese Lover</p>
  <p><strong>Tanggal Pesan:</strong> {{ $tanggal }}</p>
  <p><strong>Menu Dipesan:</strong> {{ $data['nama'] }}</p>
  <p><strong>Harga:</strong> {{ $data['harga'] }}</p>
  <p><strong>Keterangan:</strong> {{ $data['deskripsi'] }}</p>
  <a href="{{ url('/dashboard') }}" class="btn btn-danger mt-3">Kembali ke Dashboard</a>
</div>
@endsection