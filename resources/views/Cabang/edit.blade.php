@extends('layouts.layout')

@section('content')
  <section id='form'>
    <div class="container">
      <h1 class="tambahh1">Edit Menu</h1>
      <p class="tambahp">Mengubah Menu makanan yang ada dalam list menu</p>
      <form action="/Cabang/update/{{$admin->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="merk">Cabang</label>
        <input id="brand" name="nama_menu" type="text" value="{{ $admin->cabang }}">
        <label for="merk">Alamat Cabang</label>
        <input id="warna" name="deskripsi_menu" type="text" value="{{ $admin->alamat }}">
        <label for="merk">Kontak</label>
        <input id="tipe" name="tipe_menu" type="text" value="{{ $admin->kontak }}">
        <button class="btn btn-primary" type="submit" style="margin-top: 40px;">Update</button>
      </form>
    </div>
  </section>
@endsection