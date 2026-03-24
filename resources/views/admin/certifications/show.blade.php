@extends('admin.layouts.admin')

@section('title', 'Detail Certification')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h6 class="mb-0">Detail Certification</h6>
        <a href="{{ route('admin.certifications.edit', $certification) }}" class="btn btn-warning btn-sm">Edit</a>
    </div>
    <div class="card-body">
        <p class="mb-2"><strong>Profile:</strong> {{ $certification->profile->full_name ?? '-' }}</p>
        <p class="mb-2"><strong>Nama:</strong> {{ $certification->name }}</p>
        <p class="mb-2"><strong>Issuer:</strong> {{ $certification->issuer ?: '-' }}</p>
        <p class="mb-3"><strong>Tahun:</strong> {{ $certification->year ?: '-' }}</p>

        <form action="{{ route('admin.certifications.destroy', $certification) }}" method="POST" onsubmit="return confirm('Hapus certification ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
            <a href="{{ route('admin.certifications.index') }}" class="btn btn-light btn-sm">Kembali</a>
        </form>
    </div>
</div>
@endsection
