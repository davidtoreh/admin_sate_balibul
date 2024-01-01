@extends('layouts.layout')

@if (session('success'))
    <p class="alert alert-success">{{ session('success') }}</p>
@endif

@section('content')

<a href="/Admin/create" type="button" class="btn btn-primary mt-4 mb-2 ms-4">Tambah</a>
<div class="card card-default px-4">
    <div class="card-body mt-4 p-0 table-responsive">
        <table class="table table-bordered table-striped table-hover mb-0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Cabang</th>
                    <th style="max-width: 2px">Alamat</th>
                    <th>Nomor Kontak</th>
                </tr>
            </thead>
            <?php $no = 1 ?>
            @foreach($cabang as $cabangs)
            <tr>
                <td>{{ $no++ }}</td>
                <td style="max-width: 20rem">{{ $cabangs->menu }}</td>
                <td>{{ $cabangs->alamat }}</td>
                <td>{{ $cabangs->kontak }}</td>
                <td class="d-flex flex-col gap-3 justify-items-center">
                    <a class="btn btn-sm btn-warning" href="{{ route('cabang.edit', $cabang->id) }}">Ubah</a>
                    <form method="post" action="{{ route('cabang.delete', $cabang->id) }}" style="display: inline-block;">
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