@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Detail Kunjungan</h2>

    <div class="card mb-4">
        <div class="card-body">
            <h5>Informasi Pasien</h5>
            <p><strong>Nama:</strong> {{ $visit->patient->nama }}</p>
            <p><strong>NIK:</strong> {{ $visit->patient->nik }}</p>
            <p><strong>Tanggal Lahir:</strong> {{ $visit->patient->tgl_lahir }}</p>

            <hr>

            <h5>Informasi Dokter</h5>
            <p><strong>Nama:</strong> {{ $visit->doctor->nama }}</p>
            <p><strong>Spesialis:</strong> {{ $visit->doctor->spesialis }}</p>

            <hr>

            <h5>Detail Kunjungan</h5>
            <p><strong>Tanggal:</strong> {{ $visit->tanggal }}</p>
            <p><strong>Keluhan:</strong> {{ $visit->keluhan }}</p>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5>Daftar Tindakan</h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Tindakan</th>
                        <th>Keterangan</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0; @endphp
                    @foreach ($visit->treatments as $tindakan)
                        <tr>
                            <td>{{ $tindakan->nama_tindakan }}</td>
                            <td>{{ $tindakan->pivot->keterangan }}</td>
                            <td>Rp{{ number_format($tindakan->pivot->subtotal, 0, ',', '.') }}</td>
                        </tr>
                        @php $total += $tindakan->pivot->subtotal; @endphp
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="2">Total Biaya</th>
                        <th>Rp{{ number_format($total, 0, ',', '.') }}</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection
