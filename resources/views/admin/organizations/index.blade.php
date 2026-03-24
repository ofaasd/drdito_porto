@extends('admin.layouts.admin')

@section('title', 'Organizations')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h6 class="mb-0">Daftar Organization</h6>
        <a href="{{ route('admin.organizations.create') }}" class="btn btn-primary btn-sm">+ Tambah Organization</a>
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
                        <th>Role</th>
                        <th>Organisasi</th>
                        <th>Periode</th>
                        <th style="width: 220px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($organizations as $organization)
                    <tr>
                        <td>{{ $loop->iteration + ($organizations->currentPage() - 1) * $organizations->perPage() }}</td>
                        <td>{{ $organization->profile->full_name ?? '-' }}</td>
                        <td>{{ $organization->role }}</td>
                        <td>{{ $organization->organization_name }}</td>
                        <td>{{ $organization->period ?: '-' }}</td>
                        <td>
                            <a href="{{ route('admin.organizations.show', $organization) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('admin.organizations.edit', $organization) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.organizations.destroy', $organization) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus organization ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">Belum ada data organization.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        @if($organizations->hasPages())
            <div class="d-flex justify-content-center mt-4">
                {{ $organizations->links('pagination::bootstrap-5') }}
            </div>
        @endif
    </div>
</div>
@endsection
