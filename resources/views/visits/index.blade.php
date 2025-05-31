@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Daftar Kunjungan Pasien</h2>

    <a href="{{ route('visits.create') }}" class="btn btn-primary mb-3">+ Tambah Kunjungan</a>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Nama Pasien</th>
                <th>Dokter</th>
                <th>Tanggal</th>
                <th>Keluhan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($visits as $visit)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $visit->patient->nama ?? '-' }}</td>
                <td>{{ $visit->doctor->nama ?? '-' }}</td>
                <td>{{ $visit->tanggal }}</td>
                <td>{{ $visit->keluhan }}</td>
                <td>
                    <a href="{{ route('visits.edit', $visit->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{ route('visits.show', $visit->id) }}" class="btn btn-info btn-sm">Lihat Detail</a>
                    <form action="{{ route('visits.destroy', $visit->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">Belum ada data kunjungan.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
