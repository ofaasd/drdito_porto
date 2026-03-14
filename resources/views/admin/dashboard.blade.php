@extends('admin.layouts.admin')

@section('title', 'Overview')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="mb-1">Total Users</h6>
                        <h3 class="mb-0">{{ \App\Models\User::count() }}</h3>
                    </div>
                    <div class="text-muted"><i class="fas fa-users fa-2x"></i></div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="mb-1">Posts</h6>
                        <h3 class="mb-0">{{ \App\Models\Post::count() ?? 0 }}</h3>
                    </div>
                    <div class="text-muted"><i class="fas fa-newspaper fa-2x"></i></div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="mb-1">Specialties</h6>
                        <h3 class="mb-0">{{ \App\Models\Specialty::count() ?? 0 }}</h3>
                    </div>
                    <div class="text-muted"><i class="fas fa-stethoscope fa-2x"></i></div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="mb-1">CVs</h6>
                        <h3 class="mb-0">{{ \App\Models\Profile::count() ?? 0 }}</h3>
                    </div>
                    <div class="text-muted"><i class="fas fa-id-card fa-2x"></i></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Recent Posts</h5>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Published</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(\App\Models\Post::latest()->take(8)->get() as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ optional($post->profile)->name ?? '—' }}</td>
                                        <td>{{ $post->published_at ? $post->published_at->format('Y-m-d') : '—' }}</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-outline-primary">View</a>
                                            <a href="#" class="btn btn-sm btn-outline-secondary">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
