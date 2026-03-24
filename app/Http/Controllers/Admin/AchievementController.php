<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use App\Models\Profile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AchievementController extends Controller
{
    public function index(): View
    {
        $achievements = Achievement::with('profile')->latest()->paginate(10);

        return view('admin.achievements.index', compact('achievements'));
    }

    public function create(): View
    {
        $profiles = Profile::orderBy('full_name')->get();

        return view('admin.achievements.create', compact('profiles'));
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'profile_id' => ['required', 'exists:profiles,id'],
            'title' => ['required', 'string', 'max:255'],
            'issuer' => ['nullable', 'string', 'max:255'],
            'year' => ['nullable', 'digits:4'],
            'description' => ['nullable', 'string'],
        ], [
            'profile_id.required' => 'Profile harus dipilih.',
            'profile_id.exists' => 'Profile tidak valid.',
            'title.required' => 'Judul achievement wajib diisi.',
            'title.max' => 'Judul achievement maksimal 255 karakter.',
            'issuer.max' => 'Nama penerbit maksimal 255 karakter.',
            'year.digits' => 'Tahun harus 4 digit.',
        ]);

        Achievement::create($data);

        return redirect()
            ->route('admin.achievements.index')
            ->with('success', 'Achievement berhasil ditambahkan.');
    }

    public function show(Achievement $achievement): View
    {
        $achievement->load('profile');

        return view('admin.achievements.show', compact('achievement'));
    }

    public function edit(Achievement $achievement): View
    {
        $profiles = Profile::orderBy('full_name')->get();

        return view('admin.achievements.edit', compact('achievement', 'profiles'));
    }

    public function update(Request $request, Achievement $achievement): RedirectResponse
    {
        $data = $request->validate([
            'profile_id' => ['required', 'exists:profiles,id'],
            'title' => ['required', 'string', 'max:255'],
            'issuer' => ['nullable', 'string', 'max:255'],
            'year' => ['nullable', 'digits:4'],
            'description' => ['nullable', 'string'],
        ], [
            'profile_id.required' => 'Profile harus dipilih.',
            'profile_id.exists' => 'Profile tidak valid.',
            'title.required' => 'Judul achievement wajib diisi.',
            'title.max' => 'Judul achievement maksimal 255 karakter.',
            'issuer.max' => 'Nama penerbit maksimal 255 karakter.',
            'year.digits' => 'Tahun harus 4 digit.',
        ]);

        $achievement->update($data);

        return redirect()
            ->route('admin.achievements.index')
            ->with('success', 'Achievement berhasil diperbarui.');
    }

    public function destroy(Achievement $achievement): RedirectResponse
    {
        $achievement->delete();

        return redirect()
            ->route('admin.achievements.index')
            ->with('success', 'Achievement berhasil dihapus.');
    }
}
