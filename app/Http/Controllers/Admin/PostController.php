<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    /**
     * Display a listing of posts
     */
    public function index(): View
    {
        $posts = Post::with('category')->latest()->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new post
     */
    public function create(): View
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created post in storage
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'excerpt' => 'nullable|string|max:500',
            'body' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:draft,published',
            'published_at' => 'nullable|date_format:Y-m-d H:i',
        ], [
            'title.required' => 'Judul post diperlukan.',
            'title.max' => 'Judul post maksimal 255 karakter.',
            'category_id.required' => 'Kategori harus dipilih.',
            'category_id.exists' => 'Kategori tidak valid.',
            'body.required' => 'Konten post diperlukan.',
            'image.image' => 'File harus berupa gambar.',
            'image.mimes' => 'Format gambar harus: JPEG, PNG, JPG, atau GIF.',
            'image.max' => 'Ukuran gambar maksimal 2MB.',
            'status.required' => 'Status diperlukan.',
            'status.in' => 'Status harus draft atau published.',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('posts', 'public');
            $validated['image'] = $path;
        }

        // Generate slug from title
        $validated['slug'] = Str::slug($validated['title']);

        // Get or create profile (assuming admin user)
        $profile = \App\Models\Profile::first();
        if (!$profile) {
            $profile = \App\Models\Profile::create([
                'name' => auth()->user()->name,
                'email' => auth()->user()->email,
            ]);
        }
        $validated['profile_id'] = $profile->id;

        // Handle published_at
        if ($validated['status'] === 'published' && !$validated['published_at']) {
            $validated['published_at'] = now();
        }

        Post::create($validated);

        return redirect()
            ->route('admin.posts.index')
            ->with('success', 'Post berhasil dibuat.');
    }

    /**
     * Display the specified post
     */
    public function show(Post $post): View
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified post
     */
    public function edit(Post $post): View
    {
        $categories = Category::all();
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified post in storage
     */
    public function update(Request $request, Post $post): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'excerpt' => 'nullable|string|max:500',
            'body' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:draft,published',
            'published_at' => 'nullable|date_format:Y-m-d H:i',
        ], [
            'title.required' => 'Judul post diperlukan.',
            'title.max' => 'Judul post maksimal 255 karakter.',
            'category_id.required' => 'Kategori harus dipilih.',
            'category_id.exists' => 'Kategori tidak valid.',
            'body.required' => 'Konten post diperlukan.',
            'image.image' => 'File harus berupa gambar.',
            'image.mimes' => 'Format gambar harus: JPEG, PNG, JPG, atau GIF.',
            'image.max' => 'Ukuran gambar maksimal 2MB.',
            'status.required' => 'Status diperlukan.',
            'status.in' => 'Status harus draft atau published.',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($post->image && Storage::disk('public')->exists($post->image)) {
                Storage::disk('public')->delete($post->image);
            }

            $image = $request->file('image');
            $path = $image->store('posts', 'public');
            $validated['image'] = $path;
        }

        // Generate slug from title
        $validated['slug'] = Str::slug($validated['title']);

        // Handle published_at
        if ($validated['status'] === 'published' && !$validated['published_at']) {
            $validated['published_at'] = now();
        } elseif ($validated['status'] === 'draft') {
            $validated['published_at'] = null;
        }

        $post->update($validated);

        return redirect()
            ->route('admin.posts.index')
            ->with('success', 'Post berhasil diperbarui.');
    }

    /**
     * Remove the specified post from storage
     */
    public function destroy(Post $post): RedirectResponse
    {
        // Delete image if exists
        if ($post->image && Storage::disk('public')->exists($post->image)) {
            Storage::disk('public')->delete($post->image);
        }

        $post->delete();

        return redirect()
            ->route('admin.posts.index')
            ->with('success', 'Post berhasil dihapus.');
    }
}
