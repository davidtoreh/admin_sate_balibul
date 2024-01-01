@extends('layouts.layout')

@section('content')
  <section id='form'>
    <div class="container">
      <h1 class="tambahh1">Tambah Menu</h1>
      <p class="tambahp">Tambah Menu makanan ke dalam list menu</p>
      <form action="{{ route('cabang.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="merk">Cabang</label>
        <input id="brand" name="nama" type="text" required placeholder="Masukkan Nama Cabang">
        <label for="merk">Alamat Cabang</label>
        <input id="warna" name="deskripsi" type="text" required placeholder="Masukkan Alamat Cabang">
        <label for="merk">Kontak</label>
        <input id="tipe" name="tipe" type="text" required placeholder="Masukkan Nomor Kontak">
        <button class="btn btn-primary" type="submit" style="margin-top: 40px;">Tambah</button>
      </form>
    </div>
  </section>
@endsection
