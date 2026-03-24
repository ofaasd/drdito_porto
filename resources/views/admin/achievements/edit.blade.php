@extends('admin.layouts.admin')

@section('title', 'Edit Achievement')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header"><h6 class="mb-0">Edit Achievement</h6></div>
    <div class="card-body">
        <form action="{{ route('admin.achievements.update', $achievement) }}" method="POST">
            @csrf
            @method('PUT')
            @include('admin.achievements._form', ['achievement' => $achievement])
            <div class="mt-4">
                <a href="{{ route('admin.achievements.index') }}" class="btn btn-light">Batal</a>
                <button class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
