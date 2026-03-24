@extends('admin.layouts.admin')

@section('title', 'Detail Achievement')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h6 class="mb-0">Detail Achievement</h6>
        <a href="{{ route('admin.achievements.edit', $achievement) }}" class="btn btn-warning btn-sm">Edit</a>
    </div>
    <div class="card-body">
        <p class="mb-2"><strong>Judul:</strong> {{ $achievement->title }}</p>
        <p class="mb-2"><strong>Profile:</strong> {{ $achievement->profile->full_name ?? '-' }}</p>
        <p class="mb-2"><strong>Issuer:</strong> {{ $achievement->issuer ?: '-' }}</p>
        <p class="mb-2"><strong>Tahun:</strong> {{ $achievement->year ?: '-' }}</p>
        <hr>
        <p class="mb-3"><strong>Deskripsi:</strong><br>{{ $achievement->description ?: '-' }}</p>

        <form action="{{ route('admin.achievements.destroy', $achievement) }}" method="POST" onsubmit="return confirm('Hapus achievement ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
            <a href="{{ route('admin.achievements.index') }}" class="btn btn-light btn-sm">Kembali</a>
        </form>
    </div>
</div>
@endsection
