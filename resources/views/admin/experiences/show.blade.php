@extends('admin.layouts.admin')

@section('title', 'Detail Experience')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h6 class="mb-0">Detail Experience</h6>
        <a href="{{ route('admin.experiences.edit', $experience) }}" class="btn btn-warning btn-sm">Edit</a>
    </div>
    <div class="card-body">
        <p class="mb-2"><strong>Profile:</strong> {{ $experience->profile->full_name ?? '-' }}</p>
        <p class="mb-2"><strong>Posisi:</strong> {{ $experience->position }}</p>
        <p class="mb-2"><strong>Perusahaan:</strong> {{ $experience->company }}</p>
        <p class="mb-2"><strong>Lokasi:</strong> {{ $experience->location ?: '-' }}</p>
        <p class="mb-2"><strong>Periode:</strong> {{ $experience->start_date ?: '-' }} - {{ $experience->is_current ? 'Sekarang' : ($experience->end_date ?: '-') }}</p>
        <p class="mb-3"><strong>Deskripsi:</strong><br>{{ $experience->description ?: '-' }}</p>

        <form action="{{ route('admin.experiences.destroy', $experience) }}" method="POST" onsubmit="return confirm('Hapus experience ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
            <a href="{{ route('admin.experiences.index') }}" class="btn btn-light btn-sm">Kembali</a>
        </form>
    </div>
</div>
@endsection
