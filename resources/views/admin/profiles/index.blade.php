{{-- filepath: d:\work\app\dokterdito_app\resources\views\admin\profiles\index.blade.php --}}
@extends('admin.layouts.admin')

@section('title', 'Profiles')

@section('content')
<div class="card shadow-sm border-0">
    
    <div class="card-header d-flex justify-content-between align-items-center">
        <h6 class="mb-0">Daftar Profile</h6>
        <a href="{{ route('admin.profiles.create') }}" class="btn btn-primary btn-sm">+ Tambah Profile</a>
    </div>
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-striped align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Gelar</th>
                        <th>Email</th>
                        <th>Ringkasan</th>
                        <th style="width:220px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($profiles as $profile)
                    <tr>
                        <td>{{ $loop->iteration + ($profiles->currentPage() - 1) * $profiles->perPage() }}</td>
                        <td>{{ $profile->full_name }}</td>
                        <td>{{ $profile->titles ?: '-' }}</td>
                        <td>{{ $profile->email ?: '-' }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($profile->summary, 60) ?: '-' }}</td>
                        <td>
                            <a href="{{ route('admin.profiles.show', $profile) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('admin.profiles.edit', $profile) }}" class="btn btn-warning btn-sm">Edit</a>
                            <!-- <form action="{{ route('admin.profiles.destroy', $profile) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus profile ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </form> -->
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="6" class="text-center text-muted">Belum ada data profile.</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>

        @if($profiles->hasPages())
            <div class="d-flex justify-content-center mt-4">
                {{ $profiles->links('pagination::bootstrap-5') }}
            </div>
        @endif
    </div>
</div>
@endsection