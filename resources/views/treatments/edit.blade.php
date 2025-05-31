@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Tindakan Medis</h2>

    <form action="{{ route('treatments.update', $treatment->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nama Tindakan</label>
            <input type="text" name="nama" value="{{ $treatment->nama }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="number" name="harga" value="{{ $treatment->harga }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection
