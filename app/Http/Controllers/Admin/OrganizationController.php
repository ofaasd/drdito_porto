<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Organization;
use App\Models\Profile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrganizationController extends Controller
{
    public function index(): View
    {
        $organizations = Organization::with('profile')->latest()->paginate(10);

        return view('admin.organizations.index', compact('organizations'));
    }

    public function create(): View
    {
        $profiles = Profile::orderBy('full_name')->get();

        return view('admin.organizations.create', compact('profiles'));
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'profile_id' => ['required', 'exists:profiles,id'],
            'role' => ['required', 'string', 'max:255'],
            'organization_name' => ['required', 'string', 'max:255'],
            'period' => ['nullable', 'string', 'max:255'],
        ], [
            'profile_id.required' => 'Profile harus dipilih.',
            'profile_id.exists' => 'Profile tidak valid.',
            'role.required' => 'Role wajib diisi.',
            'organization_name.required' => 'Nama organisasi wajib diisi.',
        ]);

        Organization::create($data);

        return redirect()
            ->route('admin.organizations.index')
            ->with('success', 'Organization berhasil ditambahkan.');
    }

    public function show(Organization $organization): View
    {
        $organization->load('profile');

        return view('admin.organizations.show', compact('organization'));
    }

    public function edit(Organization $organization): View
    {
        $profiles = Profile::orderBy('full_name')->get();

        return view('admin.organizations.edit', compact('organization', 'profiles'));
    }

    public function update(Request $request, Organization $organization): RedirectResponse
    {
        $data = $request->validate([
            'profile_id' => ['required', 'exists:profiles,id'],
            'role' => ['required', 'string', 'max:255'],
            'organization_name' => ['required', 'string', 'max:255'],
            'period' => ['nullable', 'string', 'max:255'],
        ], [
            'profile_id.required' => 'Profile harus dipilih.',
            'profile_id.exists' => 'Profile tidak valid.',
            'role.required' => 'Role wajib diisi.',
            'organization_name.required' => 'Nama organisasi wajib diisi.',
        ]);

        $organization->update($data);

        return redirect()
            ->route('admin.organizations.index')
            ->with('success', 'Organization berhasil diperbarui.');
    }

    public function destroy(Organization $organization): RedirectResponse
    {
        $organization->delete();

        return redirect()
            ->route('admin.organizations.index')
            ->with('success', 'Organization berhasil dihapus.');
    }
}
