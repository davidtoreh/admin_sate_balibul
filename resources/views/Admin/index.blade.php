@extends('layouts.layout')

@section('content')
  <section id="list">
    <div class="container">
      <h1>Menu list</h1>
      @if (count($admin) > 0)
        <div class="table-responsive">
          <table class="table-striped table">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Tipe</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($admin as $menu)
                <tr>
                  <td>{{ $menu->nama_menu }}</td>
                  <td>{{ $menu->deskripsi_menu }}</td>
                  <td>{{ $menu->tipe_menu }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      @else
        <p>Tidak ada list menu.</p>
      @endif
    </div>
  </section>
@endsection