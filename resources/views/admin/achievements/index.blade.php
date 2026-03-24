@extends('admin.layouts.admin')

@section('title', 'Achievements')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h6 class="mb-0">Daftar Achievement</h6>
        <a href="{{ route('admin.achievements.create') }}" class="btn btn-primary btn-sm">+ Tambah Achievement</a>
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
                        <th>Judul</th>
                        <th>Profile</th>
                        <th>Issuer</th>
                        <th>Tahun</th>
                        <th style="width: 220px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($achievements as $achievement)
                    <tr>
                        <td>{{ $loop->iteration + ($achievements->currentPage() - 1) * $achievements->perPage() }}</td>
                        <td>{{ $achievement->title }}</td>
                        <td>{{ $achievement->profile->full_name ?? '-' }}</td>
                        <td>{{ $achievement->issuer ?: '-' }}</td>
                        <td>{{ $achievement->year ?: '-' }}</td>
                        <td>
                            <a href="{{ route('admin.achievements.show', $achievement) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('admin.achievements.edit', $achievement) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.achievements.destroy', $achievement) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus achievement ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">Belum ada data achievement.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        @if($achievements->hasPages())
            <div class="d-flex justify-content-center mt-4">
                {{ $achievements->links('pagination::bootstrap-5') }}
            </div>
        @endif
    </div>
</div>
@endsection
