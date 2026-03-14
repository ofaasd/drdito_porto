@extends('admin.layouts.admin')

@section('title', 'Edit Post')

@section('content')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <h4>Edit Post</h4>
            <p class="text-muted">Update the post information</p>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><i class="fas fa-exclamation-triangle"></i> Validation Error!</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data" id="postForm">
        @csrf
        @method('PUT')
        
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <!-- Title -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Post Title <span class="text-danger">*</span></label>
                            <input 
                                type="text" 
                                class="form-control @error('title') is-invalid @enderror" 
                                id="title" 
                                name="title" 
                                placeholder="Enter post title"
                                value="{{ old('title', $post->title) }}"
                                required
                            >
                            @error('title')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Excerpt -->
                        <div class="mb-3">
                            <label for="excerpt" class="form-label">Excerpt (Summary)</label>
                            <textarea 
                                class="form-control @error('excerpt') is-invalid @enderror" 
                                id="excerpt" 
                                name="excerpt" 
                                rows="3" 
                                placeholder="Brief summary of the post (max 500 characters)"
                            >{{ old('excerpt', $post->excerpt) }}</textarea>
                            <small class="form-text text-muted">Optional. Max 500 characters.</small>
                            @error('excerpt')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Body -->
                        <div class="mb-3">
                            <label for="body" class="form-label">Content <span class="text-danger">*</span></label>
                            <div id="editor-container" style="height: 400px; background: white;" class="@error('body') border border-danger @enderror"></div>
                            <textarea id="body" name="body" style="display:none;">{{ old('body', $post->body) }}</textarea>
                            @error('body')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <!-- Category -->
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Category <span class="text-danger">*</span></label>
                            <select 
                                class="form-select @error('category_id') is-invalid @enderror" 
                                id="category_id" 
                                name="category_id"
                                required
                            >
                                <option value="">-- Select Category --</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" @selected(old('category_id', $post->category_id) == $category->id)>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Status -->
                        <div class="mb-3">
                            <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                            <select 
                                class="form-select @error('status') is-invalid @enderror" 
                                id="status" 
                                name="status"
                                required
                            >
                                <option value="draft" @selected(old('status', $post->status) === 'draft')>Draft</option>
                                <option value="published" @selected(old('status', $post->status) === 'published')>Published</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Published At -->
                        <div class="mb-3">
                            <label for="published_at" class="form-label">Publish Date & Time</label>
                            <input 
                                type="datetime-local" 
                                class="form-control @error('published_at') is-invalid @enderror" 
                                id="published_at" 
                                name="published_at"
                                value="{{ old('published_at', $post->published_at ? $post->published_at->format('Y-m-d\TH:i') : '') }}"
                            >
                            <small class="form-text text-muted">Leave empty to use current time when published.</small>
                            @error('published_at')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Image Upload Card -->
                <div class="card mb-4">
                    <div class="card-header bg-light">
                        <h6 class="mb-0">Featured Image</h6>
                    </div>
                    <div class="card-body">
                        <!-- Current Image -->
                        @if($post->image)
                            <div class="mb-3">
                                <label class="form-label">Current Image</label>
                                <div>
                                    <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" style="max-width:100%; border-radius:5px;">
                                </div>
                            </div>
                        @endif

                        <!-- Image Input -->
                        <div class="mb-3">
                            <label for="image" class="form-label">{{ $post->image ? 'Change Image' : 'Upload Image' }}</label>
                            <input 
                                type="file" 
                                class="form-control @error('image') is-invalid @enderror" 
                                id="image" 
                                name="image"
                                accept="image/jpeg,image/png,image/jpg,image/gif"
                            >
                            @error('image')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Image Info -->
                        <div class="alert alert-info alert-sm" role="alert">
                            <small>
                                <strong><i class="fas fa-info-circle"></i> Upload Requirements:</strong><br>
                                <strong>Allowed Formats:</strong> JPEG, PNG, JPG, GIF<br>
                                <strong>Maximum Size:</strong> 2 MB<br>
                                <strong>Recommended Size:</strong> 1200x600 pixels
                            </small>
                        </div>

                        <!-- Image Preview -->
                        <div id="imagePreview" style="display:none;" class="mt-3">
                            <label class="form-label">New Image Preview</label>
                            <img id="previewImg" src="" alt="Preview" style="max-width:100%; border-radius:5px;">
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-lg">
                        <i class="fas fa-save"></i> Update Post
                    </button>
                    <a href="{{ route('admin.posts.index') }}" class="btn btn-outline-secondary">
                        <i class="fas fa-times"></i> Cancel
                    </a>
                </div>
            </div>
        </div>
    </form>
</div>

<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    // Quill Editor initialization
    const quill = new Quill('#editor-container', {
        theme: 'snow',
        placeholder: 'Write your post content here...',
        modules: {
            toolbar: [
                ['bold', 'italic', 'underline', 'strike'],
                ['blockquote', 'code-block'],
                [{ 'header': 1 }, { 'header': 2 }],
                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                [{ 'color': [] }, { 'background': [] }],
                [{ 'align': [] }],
                ['link', 'image'],
                ['clean']
            ]
        }
    });

    // Set initial content from textarea
    if (document.getElementById('body').value) {
        quill.root.innerHTML = document.getElementById('body').value;
    }

    // Update hidden textarea on form submit
    document.getElementById('postForm').addEventListener('submit', function() {
        document.getElementById('body').value = quill.root.innerHTML;
    });

    // Image preview
    document.getElementById('image').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('previewImg').src = e.target.result;
                document.getElementById('imagePreview').style.display = 'block';
            };
            reader.readAsDataURL(file);
        } else {
            document.getElementById('imagePreview').style.display = 'none';
        }
    });
</script>
@endsection
