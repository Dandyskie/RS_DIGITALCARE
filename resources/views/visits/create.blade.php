@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Tambah Kunjungan Pasien</h2>
    <form action="{{ route('visits.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="patient_id" class="form-label">Pasien</label>
            <select class="form-select" name="patient_id" required>
                @foreach ($patients as $patient)
                    <option value="{{ $patient->id }}">{{ $patient->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="doctor_id" class="form-label">Dokter</label>
            <select class="form-select" name="doctor_id" required>
                @foreach ($doctors as $doctor)
                    <option value="{{ $doctor->id }}">{{ $doctor->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="tgl_kunjungan" class="form-label">Tanggal Kunjungan</label>
            <input type="date" class="form-control" name="tgl_kunjungan" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('visits.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
