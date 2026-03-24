@extends('admin.layouts.admin')

@section('title', 'Tambah Experience')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header"><h6 class="mb-0">Tambah Experience</h6></div>
    <div class="card-body">
        <form action="{{ route('admin.experiences.store') }}" method="POST">
            @csrf
            @include('admin.experiences._form')
            <div class="mt-4">
                <a href="{{ route('admin.experiences.index') }}" class="btn btn-light">Batal</a>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
