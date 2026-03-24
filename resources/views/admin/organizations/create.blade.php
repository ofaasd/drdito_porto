@extends('admin.layouts.admin')

@section('title', 'Tambah Organization')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header"><h6 class="mb-0">Tambah Organization</h6></div>
    <div class="card-body">
        <form action="{{ route('admin.organizations.store') }}" method="POST">
            @csrf
            @include('admin.organizations._form')
            <div class="mt-4">
                <a href="{{ route('admin.organizations.index') }}" class="btn btn-light">Batal</a>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
