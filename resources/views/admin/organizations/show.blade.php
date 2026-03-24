@extends('admin.layouts.admin')

@section('title', 'Detail Organization')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h6 class="mb-0">Detail Organization</h6>
        <a href="{{ route('admin.organizations.edit', $organization) }}" class="btn btn-warning btn-sm">Edit</a>
    </div>
    <div class="card-body">
        <p class="mb-2"><strong>Profile:</strong> {{ $organization->profile->full_name ?? '-' }}</p>
        <p class="mb-2"><strong>Role:</strong> {{ $organization->role }}</p>
        <p class="mb-2"><strong>Nama Organisasi:</strong> {{ $organization->organization_name }}</p>
        <p class="mb-3"><strong>Periode:</strong> {{ $organization->period ?: '-' }}</p>

        <form action="{{ route('admin.organizations.destroy', $organization) }}" method="POST" onsubmit="return confirm('Hapus organization ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
            <a href="{{ route('admin.organizations.index') }}" class="btn btn-light btn-sm">Kembali</a>
        </form>
    </div>
</div>
@endsection
