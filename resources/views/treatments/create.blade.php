@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Tindakan Medis</h2>

    <form action="{{ route('treatments.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama Tindakan</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="number" name="harga" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
