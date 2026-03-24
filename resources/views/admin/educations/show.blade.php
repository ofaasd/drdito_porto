@extends('admin.layouts.admin')

@section('title', 'Detail Education')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h6 class="mb-0">Detail Education</h6>
        <a href="{{ route('admin.educations.edit', $education) }}" class="btn btn-warning btn-sm">Edit</a>
    </div>
    <div class="card-body">
        <p class="mb-2"><strong>Profile:</strong> {{ $education->profile->full_name ?? '-' }}</p>
        <p class="mb-2"><strong>Institusi:</strong> {{ $education->institution }}</p>
        <p class="mb-2"><strong>Degree:</strong> {{ $education->degree }}</p>
        <p class="mb-2"><strong>Field of Study:</strong> {{ $education->field_of_study ?: '-' }}</p>
        <p class="mb-2"><strong>Lokasi:</strong> {{ $education->location ?: '-' }}</p>
        <p class="mb-3"><strong>Periode:</strong> {{ $education->start_year ?: '-' }} - {{ $education->end_year ?: '-' }}</p>

        <form action="{{ route('admin.educations.destroy', $education) }}" method="POST" onsubmit="return confirm('Hapus education ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
            <a href="{{ route('admin.educations.index') }}" class="btn btn-light btn-sm">Kembali</a>
        </form>
    </div>
</div>
@endsection
