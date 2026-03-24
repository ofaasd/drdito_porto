{{-- filepath: d:\work\app\dokterdito_app\resources\views\admin\profiles\create.blade.php --}}
@extends('admin.layouts.admin')

@section('title', 'Tambah Profile')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header"><h6 class="mb-0">Tambah Profile</h6></div>
    <div class="card-body">
        <form action="{{ route('admin.profiles.store') }}" method="POST">
            @csrf
            @include('admin.profiles._form')
            <div class="mt-4">
                <a href="{{ route('admin.profiles.index') }}" class="btn btn-light">Batal</a>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection