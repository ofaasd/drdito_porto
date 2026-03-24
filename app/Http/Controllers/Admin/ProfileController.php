<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::latest()->paginate(10);
        return view('admin.profiles.index', compact('profiles'));
    }

    public function create()
    {
        return view('admin.profiles.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'titles'    => ['nullable', 'string', 'max:255'],
            'summary'   => ['nullable', 'string'],
            'email'     => [
                'nullable',
                'email',
                'max:255',
                Rule::unique('profiles', 'email')->whereNull('deleted_at'),
            ],
        ]);

        Profile::create($data);

        return redirect()->route('admin.profiles.index')
            ->with('success', 'Profile berhasil ditambahkan.');
    }

    public function show(Profile $profile)
    {
        return view('admin.profiles.show', compact('profile'));
    }

    public function edit(Profile $profile)
    {
        return view('admin.profiles.edit', compact('profile'));
    }

    public function update(Request $request, Profile $profile)
    {
        $data = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'titles'    => ['nullable', 'string', 'max:255'],
            'summary'   => ['nullable', 'string'],
            'email'     => [
                'nullable',
                'email',
                'max:255',
                Rule::unique('profiles', 'email')
                    ->ignore($profile->id)
                    ->whereNull('deleted_at'),
            ],
        ]);

        $profile->update($data);

        return redirect()->route('admin.profiles.index')
            ->with('success', 'Profile berhasil diperbarui.');
    }

    public function destroy(Profile $profile)
    {
        $profile->delete(); // soft delete
        return redirect()->route('admin.profiles.index')
            ->with('success', 'Profile berhasil dihapus.');
    }
}