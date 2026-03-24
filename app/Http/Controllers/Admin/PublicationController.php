<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Publication;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PublicationController extends Controller
{
    public function index(): View
    {
        $publications = Publication::with('profile')->latest()->paginate(10);

        return view('admin.publications.index', compact('publications'));
    }

    public function create(): View
    {
        $profiles = Profile::orderBy('full_name')->get();

        return view('admin.publications.create', compact('profiles'));
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'profile_id' => ['required', 'exists:profiles,id'],
            'title' => ['required', 'string'],
            'category' => ['required', 'string', 'max:255'],
            'year' => ['nullable', 'digits:4'],
            'publisher_or_journal' => ['nullable', 'string', 'max:255'],
            'link' => ['nullable', 'url', 'max:2048'],
        ], [
            'profile_id.required' => 'Profile harus dipilih.',
            'profile_id.exists' => 'Profile tidak valid.',
            'title.required' => 'Judul publication wajib diisi.',
            'category.required' => 'Kategori wajib diisi.',
            'year.digits' => 'Tahun harus 4 digit.',
            'link.url' => 'Link harus berupa URL yang valid.',
        ]);

        Publication::create($data);

        return redirect()
            ->route('admin.publications.index')
            ->with('success', 'Publication berhasil ditambahkan.');
    }

    public function show(Publication $publication): View
    {
        $publication->load('profile');

        return view('admin.publications.show', compact('publication'));
    }

    public function edit(Publication $publication): View
    {
        $profiles = Profile::orderBy('full_name')->get();

        return view('admin.publications.edit', compact('publication', 'profiles'));
    }

    public function update(Request $request, Publication $publication): RedirectResponse
    {
        $data = $request->validate([
            'profile_id' => ['required', 'exists:profiles,id'],
            'title' => ['required', 'string'],
            'category' => ['required', 'string', 'max:255'],
            'year' => ['nullable', 'digits:4'],
            'publisher_or_journal' => ['nullable', 'string', 'max:255'],
            'link' => ['nullable', 'url', 'max:2048'],
        ], [
            'profile_id.required' => 'Profile harus dipilih.',
            'profile_id.exists' => 'Profile tidak valid.',
            'title.required' => 'Judul publication wajib diisi.',
            'category.required' => 'Kategori wajib diisi.',
            'year.digits' => 'Tahun harus 4 digit.',
            'link.url' => 'Link harus berupa URL yang valid.',
        ]);

        $publication->update($data);

        return redirect()
            ->route('admin.publications.index')
            ->with('success', 'Publication berhasil diperbarui.');
    }

    public function destroy(Publication $publication): RedirectResponse
    {
        $publication->delete();

        return redirect()
            ->route('admin.publications.index')
            ->with('success', 'Publication berhasil dihapus.');
    }
}
