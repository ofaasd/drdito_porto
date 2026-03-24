@extends('admin.layouts.admin')

@section('title', 'Edit Certification')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header"><h6 class="mb-0">Edit Certification</h6></div>
    <div class="card-body">
        <form action="{{ route('admin.certifications.update', $certification) }}" method="POST">
            @csrf
            @method('PUT')
            @include('admin.certifications._form', ['certification' => $certification])
            <div class="mt-4">
                <a href="{{ route('admin.certifications.index') }}" class="btn btn-light">Batal</a>
                <button class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
