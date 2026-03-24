@extends('admin.layouts.admin')

@section('title', 'Edit Organization')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header"><h6 class="mb-0">Edit Organization</h6></div>
    <div class="card-body">
        <form action="{{ route('admin.organizations.update', $organization) }}" method="POST">
            @csrf
            @method('PUT')
            @include('admin.organizations._form', ['organization' => $organization])
            <div class="mt-4">
                <a href="{{ route('admin.organizations.index') }}" class="btn btn-light">Batal</a>
                <button class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
