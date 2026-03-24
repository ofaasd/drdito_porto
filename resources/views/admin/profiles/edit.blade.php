{{-- filepath: d:\work\app\dokterdito_app\resources\views\admin\profiles\edit.blade.php --}}
@extends('admin.layouts.admin')

@section('title', 'Edit Profile')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header"><h6 class="mb-0">Edit Profile</h6></div>
    <div class="card-body">
        <form action="{{ route('admin.profiles.update', $profile) }}" method="POST">
            @csrf
            @method('PUT')
            @include('admin.profiles._form', ['profile' => $profile])
            <div class="mt-4">
                <a href="{{ route('admin.profiles.index') }}" class="btn btn-light">Batal</a>
                <button class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection