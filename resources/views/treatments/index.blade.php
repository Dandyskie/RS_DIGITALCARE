@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Tindakan Medis</h2>

    <a href="{{ route('treatments.create') }}" class="btn btn-success mb-3">Tambah Tindakan</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($treatments as $treatment)
            <tr>
                <td>{{ $treatment->nama }}</td>
                <td>Rp{{ number_format($treatment->harga) }}</td>
                <td>
                    <a href="{{ route('treatments.edit', $treatment->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('treatments.destroy', $treatment->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
