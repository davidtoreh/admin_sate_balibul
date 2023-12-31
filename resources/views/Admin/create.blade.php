@extends('layouts.layout')

@section('content')
  <section id='form'>
    <div class="container">
      <h1 class="tambahh1">Tambah Menu</h1>
      <p class="tambahp">Tambah Menu makanan ke dalam list menu</p>
      <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="merk">Nama Menu</label>
        <input id="brand" name="nama" type="text" required placeholder="Masukkan Nama Menu">
        <label for="merk">Deskripsi Menu</label>
        <input id="warna" name="deskripsi" type="text" required placeholder="Masukkan Deskripsi Menu">
        <label for="merk">Tipe Menu</label>
        <input id="tipe" name="tipe" type="text" required placeholder="Masukkan Tipe Menu">
        <button class="btn btn-primary" type="submit" style="margin-top: 40px;">Tambah</button>
      </form>
    </div>
  </section>
@endsection
