@extends('admin.layouts.admin')

@section('title', 'Edit Experience')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header"><h6 class="mb-0">Edit Experience</h6></div>
    <div class="card-body">
        <form action="{{ route('admin.experiences.update', $experience) }}" method="POST">
            @csrf
            @method('PUT')
            @include('admin.experiences._form', ['experience' => $experience])
            <div class="mt-4">
                <a href="{{ route('admin.experiences.index') }}" class="btn btn-light">Batal</a>
                <button class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
