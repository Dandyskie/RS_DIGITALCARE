@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Tindakan untuk Kunjungan</h2>
    <p><strong>Pasien:</strong> {{ $visit->patient->nama }} | <strong>Dokter:</strong> {{ $visit->doctor->nama }}</p>

    <form action="{{ route('visits.storeTreatment', $visit->id) }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="treatment_id" class="form-label">Pilih Tindakan</label>
            <select name="treatment_id" id="treatment_id" class="form-select" required>
                <option value="">-- Pilih Tindakan --</option>
                @foreach($treatments as $t)
                    <option value="{{ $t->id }}">{{ $t->nama_tindakan }} - Rp{{ number_format($t->biaya) }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label for="subtotal" class="form-label">Subtotal (Rp)</label>
            <input type="number" name="subtotal" id="subtotal" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Tambah Tindakan</button>
        <a href="{{ route('visits.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
