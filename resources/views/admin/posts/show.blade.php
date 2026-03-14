@extends('admin.layouts.admin')

@section('title', 'View Post')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4>{{ $post->title }}</h4>
                    <p class="text-muted mb-0">{{ $post->slug }}</p>
                </div>
                <div>
                    <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-primary">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <a href="{{ route('admin.posts.index') }}" class="btn btn-outline-secondary">
                        Back to List
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <!-- Featured Image -->
            @if($post->image)
                <div class="card mb-4">
                    <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" style="width:100%; object-fit:cover; max-height:400px;">
                </div>
            @endif

            <!-- Content -->
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Content</h5>
                    <div class="content" style="line-height: 1.6;">
                        {!! $post->body !!}
                    </div>
                </div>
            </div>

            <!-- Excerpt -->
            @if($post->excerpt)
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Excerpt</h5>
                        <p>{{ $post->excerpt }}</p>
                    </div>
                </div>
            @endif
        </div>

        <div class="col-md-4">
            <!-- Meta Information -->
            <div class="card">
                <div class="card-header bg-light">
                    <h6 class="mb-0">Post Information</h6>
                </div>
                <div class="card-body">
                    <!-- Category -->
                    <div class="mb-3">
                        <small class="text-muted d-block">Category</small>
                        @if($post->category)
                            <span class="badge bg-info">{{ $post->category->name }}</span>
                        @else
                            <span class="badge bg-secondary">No Category</span>
                        @endif
                    </div>

                    <!-- Author -->
                    <div class="mb-3">
                        <small class="text-muted d-block">Author</small>
                        <strong>
                            @if($post->profile)
                                {{ $post->profile->name }}
                            @else
                                —
                            @endif
                        </strong>
                    </div>

                    <!-- Status -->
                    <div class="mb-3">
                        <small class="text-muted d-block">Status</small>
                        @if($post->status === 'published')
                            <span class="badge bg-success">Published</span>
                        @else
                            <span class="badge bg-warning">Draft</span>
                        @endif
                    </div>

                    <!-- Published At -->
                    <div class="mb-3">
                        <small class="text-muted d-block">Published Date</small>
                        <strong>
                            @if($post->published_at)
                                {{ $post->published_at->format('d M Y, H:i') }}
                            @else
                                <span class="text-muted">Not published</span>
                            @endif
                        </strong>
                    </div>

                    <!-- Created At -->
                    <div class="mb-3">
                        <small class="text-muted d-block">Created</small>
                        <strong>{{ $post->created_at->format('d M Y, H:i') }}</strong>
                    </div>

                    <!-- Updated At -->
                    <div class="mb-3">
                        <small class="text-muted d-block">Last Updated</small>
                        <strong>{{ $post->updated_at->format('d M Y, H:i') }}</strong>
                    </div>

                    <!-- Slug -->
                    <div class="mb-3">
                        <small class="text-muted d-block">Slug</small>
                        <code>{{ $post->slug }}</code>
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="card mt-4">
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-primary">
                            <i class="fas fa-edit"></i> Edit Post
                        </a>
                        <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger w-100" onclick="return confirm('Are you sure?')">
                                <i class="fas fa-trash"></i> Delete Post
                            </button>
                        </form>
                        <a href="{{ route('admin.posts.index') }}" class="btn btn-outline-secondary">
                            Back to List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
