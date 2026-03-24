@extends('admin.layouts.admin')

@section('title', 'Edit Publication')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header"><h6 class="mb-0">Edit Publication</h6></div>
    <div class="card-body">
        <form action="{{ route('admin.publications.update', $publication) }}" method="POST">
            @csrf
            @method('PUT')
            @include('admin.publications._form', ['publication' => $publication])
            <div class="mt-4">
                <a href="{{ route('admin.publications.index') }}" class="btn btn-light">Batal</a>
                <button class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
