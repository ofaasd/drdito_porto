@extends('admin.layouts.admin')

@section('title', 'Educations')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h6 class="mb-0">Daftar Education</h6>
        <a href="{{ route('admin.educations.create') }}" class="btn btn-primary btn-sm">+ Tambah Education</a>
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
                        <th>Institusi</th>
                        <th>Degree</th>
                        <th>Periode</th>
                        <th style="width: 220px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($educations as $education)
                    <tr>
                        <td>{{ $loop->iteration + ($educations->currentPage() - 1) * $educations->perPage() }}</td>
                        <td>{{ $education->profile->full_name ?? '-' }}</td>
                        <td>{{ $education->institution }}</td>
                        <td>{{ $education->degree }}</td>
                        <td>{{ $education->start_year ?: '-' }} - {{ $education->end_year ?: '-' }}</td>
                        <td>
                            <a href="{{ route('admin.educations.show', $education) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('admin.educations.edit', $education) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.educations.destroy', $education) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus education ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">Belum ada data education.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        @if($educations->hasPages())
            <div class="d-flex justify-content-center mt-4">
                {{ $educations->links('pagination::bootstrap-5') }}
            </div>
        @endif
    </div>
</div>
@endsection
