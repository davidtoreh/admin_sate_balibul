@extends('layouts.layout')

@if(session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif

@section('content')

<div class="card card-default">
    <div class="card-header">
        <form class="form-inline">
            <div class="form-group mr-1">
                <a class="btn btn-primary" href="{{ route('admin.create') }}">Tambah</a>
            </div>
        </form>
    </div>
    <div class="card-body p-0 table-responsive">
        <table class="table table-bordered table-striped table-hover mb-0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Menu</th>
                    <th>Deskripsi Menu</th>
                    <th>Tipe Menu</th>
                </tr>
            </thead>
            <?php $no = 1 ?>
            @foreach($admin as $menu)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $menu->nama_menu }}</td>
                <td>{{ $menu->deskripsi_menu }}</td>
                <td>{{ $menu->tipe_menu }}</td>
                <td>
                    <a class="btn btn-sm btn-warning" href="{{ route('admin.edit', $menu->id) }}">Ubah</a>
                    <form method="post" action="{{ route('admin.delete', $menu->id) }}" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection