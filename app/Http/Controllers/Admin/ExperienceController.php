<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\Profile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ExperienceController extends Controller
{
    public function index(): View
    {
        $experiences = Experience::with('profile')->latest()->paginate(10);

        return view('admin.experiences.index', compact('experiences'));
    }

    public function create(): View
    {
        $profiles = Profile::orderBy('full_name')->get();

        return view('admin.experiences.create', compact('profiles'));
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'profile_id' => ['required', 'exists:profiles,id'],
            'position' => ['required', 'string', 'max:255'],
            'company' => ['required', 'string', 'max:255'],
            'location' => ['nullable', 'string', 'max:255'],
            'start_date' => ['nullable', 'string', 'max:255'],
            'end_date' => ['nullable', 'string', 'max:255'],
            'is_current' => ['nullable', 'boolean'],
            'description' => ['nullable', 'string'],
        ], [
            'profile_id.required' => 'Profile harus dipilih.',
            'profile_id.exists' => 'Profile tidak valid.',
            'position.required' => 'Posisi wajib diisi.',
            'company.required' => 'Perusahaan wajib diisi.',
        ]);

        $data['is_current'] = $request->boolean('is_current');

        Experience::create($data);

        return redirect()
            ->route('admin.experiences.index')
            ->with('success', 'Experience berhasil ditambahkan.');
    }

    public function show(Experience $experience): View
    {
        $experience->load('profile');

        return view('admin.experiences.show', compact('experience'));
    }

    public function edit(Experience $experience): View
    {
        $profiles = Profile::orderBy('full_name')->get();

        return view('admin.experiences.edit', compact('experience', 'profiles'));
    }

    public function update(Request $request, Experience $experience): RedirectResponse
    {
        $data = $request->validate([
            'profile_id' => ['required', 'exists:profiles,id'],
            'position' => ['required', 'string', 'max:255'],
            'company' => ['required', 'string', 'max:255'],
            'location' => ['nullable', 'string', 'max:255'],
            'start_date' => ['nullable', 'string', 'max:255'],
            'end_date' => ['nullable', 'string', 'max:255'],
            'is_current' => ['nullable', 'boolean'],
            'description' => ['nullable', 'string'],
        ], [
            'profile_id.required' => 'Profile harus dipilih.',
            'profile_id.exists' => 'Profile tidak valid.',
            'position.required' => 'Posisi wajib diisi.',
            'company.required' => 'Perusahaan wajib diisi.',
        ]);

        $data['is_current'] = $request->boolean('is_current');

        $experience->update($data);

        return redirect()
            ->route('admin.experiences.index')
            ->with('success', 'Experience berhasil diperbarui.');
    }

    public function destroy(Experience $experience): RedirectResponse
    {
        $experience->delete();

        return redirect()
            ->route('admin.experiences.index')
            ->with('success', 'Experience berhasil dihapus.');
    }
}
