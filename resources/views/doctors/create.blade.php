@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Tambah Dokter</h2>
    <form action="{{ route('doctors.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Spesialis</label>
            <input type="text" name="spesialis" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jadwal Praktik</label>
            <input type="text" name="jadwal_praktek" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>No STR</label>
            <input type="text" name="no_str" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('doctors.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
