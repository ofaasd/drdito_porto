@extends('admin.layouts.admin')

@section('title', 'Certifications')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h6 class="mb-0">Daftar Certification</h6>
        <a href="{{ route('admin.certifications.create') }}" class="btn btn-primary btn-sm">+ Tambah Certification</a>
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
                        <th>Nama</th>
                        <th>Issuer</th>
                        <th>Tahun</th>
                        <th style="width: 220px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($certifications as $certification)
                    <tr>
                        <td>{{ $loop->iteration + ($certifications->currentPage() - 1) * $certifications->perPage() }}</td>
                        <td>{{ $certification->profile->full_name ?? '-' }}</td>
                        <td>{{ $certification->name }}</td>
                        <td>{{ $certification->issuer ?: '-' }}</td>
                        <td>{{ $certification->year ?: '-' }}</td>
                        <td>
                            <a href="{{ route('admin.certifications.show', $certification) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('admin.certifications.edit', $certification) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.certifications.destroy', $certification) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus certification ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">Belum ada data certification.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        @if($certifications->hasPages())
            <div class="d-flex justify-content-center mt-4">
                {{ $certifications->links('pagination::bootstrap-5') }}
            </div>
        @endif
    </div>
</div>
@endsection
