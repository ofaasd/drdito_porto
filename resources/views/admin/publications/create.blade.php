@extends('admin.layouts.admin')

@section('title', 'Tambah Publication')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header"><h6 class="mb-0">Tambah Publication</h6></div>
    <div class="card-body">
        <form action="{{ route('admin.publications.store') }}" method="POST">
            @csrf
            @include('admin.publications._form')
            <div class="mt-4">
                <a href="{{ route('admin.publications.index') }}" class="btn btn-light">Batal</a>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
