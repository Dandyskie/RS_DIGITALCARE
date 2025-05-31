@extends('layouts.app')

@section('content')
<h2>Edit Pasien</h2>

<form action="{{ route('patients.update', $patient->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" value="{{ $patient->nama }}" required>
    </div>
    <div class="mb-3">
        <label>NIK</label>
        <input type="text" name="nik" class="form-control" value="{{ $patient->nik }}" required>
    </div>
    <div class="mb-3">
        <label>Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" class="form-control" value="{{ $patient->tgl_lahir }}" required>
    </div>
    <div class="mb-3">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control" required>{{ $patient->alamat }}</textarea>
    </div>
    <div class="mb-3">
        <label>No HP</label>
        <input type="text" name="no_hp" class="form-control" value="{{ $patient->no_hp }}" required>
    </div>
    <button class="btn btn-primary">Update</button>
    <a href="{{ route('patients.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
