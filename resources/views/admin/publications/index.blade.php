@extends('admin.layouts.admin')

@section('title', 'Publications')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h6 class="mb-0">Daftar Publication</h6>
        <a href="{{ route('admin.publications.create') }}" class="btn btn-primary btn-sm">+ Tambah Publication</a>
    </div>

    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-striped align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Profile</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Tahun</th>
                        <th style="width: 220px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($publications as $publication)
                    <tr>
                        <td>{{ $loop->iteration + ($publications->currentPage() - 1) * $publications->perPage() }}</td>
                        <td>{{ $publication->profile->full_name ?? '-' }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($publication->title, 60) }}</td>
                        <td>{{ $publication->category }}</td>
                        <td>{{ $publication->year ?: '-' }}</td>
                        <td>
                            <a href="{{ route('admin.publications.show', $publication) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('admin.publications.edit', $publication) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.publications.destroy', $publication) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus publication ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">Belum ada data publication.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        @if($publications->hasPages())
            <div class="d-flex justify-content-center mt-4">
                {{ $publications->links('pagination::bootstrap-5') }}
            </div>
        @endif
    </div>
</div>
@endsection
