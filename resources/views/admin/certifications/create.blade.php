@extends('admin.layouts.admin')

@section('title', 'Tambah Certification')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header"><h6 class="mb-0">Tambah Certification</h6></div>
    <div class="card-body">
        <form action="{{ route('admin.certifications.store') }}" method="POST">
            @csrf
            @include('admin.certifications._form')
            <div class="mt-4">
                <a href="{{ route('admin.certifications.index') }}" class="btn btn-light">Batal</a>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
