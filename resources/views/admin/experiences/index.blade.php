@extends('admin.layouts.admin')

@section('title', 'Experiences')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h6 class="mb-0">Daftar Experience</h6>
        <a href="{{ route('admin.experiences.create') }}" class="btn btn-primary btn-sm">+ Tambah Experience</a>
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
                        <th>Posisi</th>
                        <th>Perusahaan</th>
                        <th>Periode</th>
                        <th style="width: 220px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($experiences as $experience)
                    <tr>
                        <td>{{ $loop->iteration + ($experiences->currentPage() - 1) * $experiences->perPage() }}</td>
                        <td>{{ $experience->profile->full_name ?? '-' }}</td>
                        <td>{{ $experience->position }}</td>
                        <td>{{ $experience->company }}</td>
                        <td>
                            {{ $experience->start_date ?: '-' }} -
                            @if($experience->is_current)
                                Sekarang
                            @else
                                {{ $experience->end_date ?: '-' }}
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.experiences.show', $experience) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('admin.experiences.edit', $experience) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.experiences.destroy', $experience) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus experience ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">Belum ada data experience.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        @if($experiences->hasPages())
            <div class="d-flex justify-content-center mt-4">
                {{ $experiences->links('pagination::bootstrap-5') }}
            </div>
        @endif
    </div>
</div>
@endsection
