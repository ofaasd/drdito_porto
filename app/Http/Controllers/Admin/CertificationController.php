<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certification;
use App\Models\Profile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CertificationController extends Controller
{
    public function index(): View
    {
        $certifications = Certification::with('profile')->latest()->paginate(10);

        return view('admin.certifications.index', compact('certifications'));
    }

    public function create(): View
    {
        $profiles = Profile::orderBy('full_name')->get();

        return view('admin.certifications.create', compact('profiles'));
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'profile_id' => ['required', 'exists:profiles,id'],
            'name' => ['required', 'string', 'max:255'],
            'issuer' => ['nullable', 'string', 'max:255'],
            'year' => ['nullable', 'digits:4'],
        ], [
            'profile_id.required' => 'Profile harus dipilih.',
            'profile_id.exists' => 'Profile tidak valid.',
            'name.required' => 'Nama certification wajib diisi.',
            'year.digits' => 'Tahun harus 4 digit.',
        ]);

        Certification::create($data);

        return redirect()
            ->route('admin.certifications.index')
            ->with('success', 'Certification berhasil ditambahkan.');
    }

    public function show(Certification $certification): View
    {
        $certification->load('profile');

        return view('admin.certifications.show', compact('certification'));
    }

    public function edit(Certification $certification): View
    {
        $profiles = Profile::orderBy('full_name')->get();

        return view('admin.certifications.edit', compact('certification', 'profiles'));
    }

    public function update(Request $request, Certification $certification): RedirectResponse
    {
        $data = $request->validate([
            'profile_id' => ['required', 'exists:profiles,id'],
            'name' => ['required', 'string', 'max:255'],
            'issuer' => ['nullable', 'string', 'max:255'],
            'year' => ['nullable', 'digits:4'],
        ], [
            'profile_id.required' => 'Profile harus dipilih.',
            'profile_id.exists' => 'Profile tidak valid.',
            'name.required' => 'Nama certification wajib diisi.',
            'year.digits' => 'Tahun harus 4 digit.',
        ]);

        $certification->update($data);

        return redirect()
            ->route('admin.certifications.index')
            ->with('success', 'Certification berhasil diperbarui.');
    }

    public function destroy(Certification $certification): RedirectResponse
    {
        $certification->delete();

        return redirect()
            ->route('admin.certifications.index')
            ->with('success', 'Certification berhasil dihapus.');
    }
}
