@extends('admin.layouts.admin')

@section('title', 'Tambah Achievement')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header"><h6 class="mb-0">Tambah Achievement</h6></div>
    <div class="card-body">
        <form action="{{ route('admin.achievements.store') }}" method="POST">
            @csrf
            @include('admin.achievements._form')
            <div class="mt-4">
                <a href="{{ route('admin.achievements.index') }}" class="btn btn-light">Batal</a>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
