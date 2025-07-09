@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Import Data Alokasi Ujian (Excel)</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('allocations.import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="file" class="form-label">Pilih File Excel</label>
            <input type="file" name="file" id="file" class="form-control" required accept=".xlsx,.xls,.csv">
        </div>
        <button type="submit" class="btn btn-primary">Import</button>
    </form>
    <div class="mt-3">
        <p><b>Format kolom Excel:</b></p>
        <code>matakuliah_id, room_id, tanggal, waktu_mulai, waktu_selesai, jumlah_peserta_dialokasikan, status (opsional)</code>
    </div>
</div>
@endsection 