{{-- filepath: d:\work\app\dokterdito_app\resources\views\admin\profiles\show.blade.php --}}
@extends('admin.layouts.admin')

@section('title', 'Detail Profile')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h6 class="mb-0">Detail Profile</h6>
        <a href="{{ route('admin.profiles.edit', $profile) }}" class="btn btn-warning btn-sm">Edit</a>
    </div>
    <div class="card-body">
        <p class="mb-2"><strong>Nama:</strong> {{ $profile->full_name }}</p>
        <p class="mb-2"><strong>Gelar:</strong> {{ $profile->titles ?: '-' }}</p>
        <p class="mb-2"><strong>Email:</strong> {{ $profile->email ?: '-' }}</p>
        <hr>
        <p class="mb-0"><strong>Ringkasan:</strong><br>{{ $profile->summary ?: '-' }}</p>
    </div>
</div>
@endsection