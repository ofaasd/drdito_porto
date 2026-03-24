@extends('admin.layouts.admin')

@section('title', 'Edit Education')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header"><h6 class="mb-0">Edit Education</h6></div>
    <div class="card-body">
        <form action="{{ route('admin.educations.update', $education) }}" method="POST">
            @csrf
            @method('PUT')
            @include('admin.educations._form', ['education' => $education])
            <div class="mt-4">
                <a href="{{ route('admin.educations.index') }}" class="btn btn-light">Batal</a>
                <button class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
