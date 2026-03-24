@extends('admin.layouts.admin')

@section('title', 'Detail Publication')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h6 class="mb-0">Detail Publication</h6>
        <a href="{{ route('admin.publications.edit', $publication) }}" class="btn btn-warning btn-sm">Edit</a>
    </div>
    <div class="card-body">
        <p class="mb-2"><strong>Profile:</strong> {{ $publication->profile->full_name ?? '-' }}</p>
        <p class="mb-2"><strong>Kategori:</strong> {{ $publication->category }}</p>
        <p class="mb-2"><strong>Tahun:</strong> {{ $publication->year ?: '-' }}</p>
        <p class="mb-2"><strong>Publisher / Journal:</strong> {{ $publication->publisher_or_journal ?: '-' }}</p>
        <p class="mb-2"><strong>Judul:</strong><br>{{ $publication->title }}</p>
        <p class="mb-3"><strong>Link:</strong>
            @if($publication->link)
                <a href="{{ $publication->link }}" target="_blank" rel="noopener noreferrer">{{ $publication->link }}</a>
            @else
                -
            @endif
        </p>

        <form action="{{ route('admin.publications.destroy', $publication) }}" method="POST" onsubmit="return confirm('Hapus publication ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
            <a href="{{ route('admin.publications.index') }}" class="btn btn-light btn-sm">Kembali</a>
        </form>
    </div>
</div>
@endsection
