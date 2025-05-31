@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Daftar Pasien</h2>
    <a href="{{ route('patients.create') }}" class="btn btn-success">+ Tambah Pasien</a>
</div>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <th>NIK</th>
            <th>Tgl Lahir</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($patients as $patient)
        <tr>
            <td>{{ $patient->nama }}</td>
            <td>{{ $patient->nik }}</td>
            <td>{{ $patient->tgl_lahir }}</td>
            <td>{{ $patient->alamat }}</td>
            <td>{{ $patient->no_hp }}</td>
            <td>
                <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
