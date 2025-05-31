@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Kunjungan</h2>

    <form action="{{ route('visits.update', $visit->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="pasien_id" class="form-label">Pasien</label>
            <select name="pasien_id" class="form-control">
                @foreach ($patients as $patient)
                    <option value="{{ $patient->id }}" {{ $patient->id == $visit->pasien_id ? 'selected' : '' }}>
                        {{ $patient->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="dokter_id" class="form-label">Dokter</label>
            <select name="dokter_id" class="form-control">
                @foreach ($doctors as $doctor)
                    <option value="{{ $doctor->id }}" {{ $doctor->id == $visit->dokter_id ? 'selected' : '' }}>
                        {{ $doctor->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="{{ $visit->tanggal }}">
        </div>

        <div class="mb-3">
            <label for="keluhan" class="form-label">Keluhan</label>
            <textarea name="keluhan" class="form-control">{{ $visit->keluhan }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection
