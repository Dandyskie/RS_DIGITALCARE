@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Edit Dokter</h2>
    <form action="{{ route('doctors.update', $doctor->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $doctor->nama }}" required>
        </div>
        <div class="mb-3">
            <label>Spesialis</label>
            <input type="text" name="spesialis" class="form-control" value="{{ $doctor->spesialis }}" required>
        </div>
        <div class="mb-3">
            <label>Jadwal Praktik</label>
            <input type="text" name="jadwal_praktek" class="form-control" value="{{ $doctor->jadwal_praktek }}" required>
        </div>
        <div class="mb-3">
            <label>No STR</label>
            <input type="text" name="no_str" class="form-control" value="{{ $doctor->no_str }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('doctors.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
