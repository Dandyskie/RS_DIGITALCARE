@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Manajemen Dokter</h2>
    <a href="{{ route('doctors.create') }}" class="btn btn-primary mb-3">Tambah Dokter</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Spesialis</th>
                <th>Jadwal Praktik</th>
                <th>No STR</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($doctors as $doctor)
                <tr>
                    <td>{{ $doctor->nama }}</td>
                    <td>{{ $doctor->spesialis }}</td>
                    <td>{{ $doctor->jadwal_praktek }}</td>
                    <td>{{ $doctor->no_str }}</td>
                    <td>
                        <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Yakin hapus dokter ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
