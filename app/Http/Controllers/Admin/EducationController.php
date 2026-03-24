<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Profile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EducationController extends Controller
{
    public function index(): View
    {
        $educations = Education::with('profile')->latest()->paginate(10);

        return view('admin.educations.index', compact('educations'));
    }

    public function create(): View
    {
        $profiles = Profile::orderBy('full_name')->get();

        return view('admin.educations.create', compact('profiles'));
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'profile_id' => ['required', 'exists:profiles,id'],
            'institution' => ['required', 'string', 'max:255'],
            'degree' => ['required', 'string', 'max:255'],
            'field_of_study' => ['nullable', 'string', 'max:255'],
            'location' => ['nullable', 'string', 'max:255'],
            'start_year' => ['nullable', 'digits:4'],
            'end_year' => ['nullable', 'digits:4'],
        ], [
            'profile_id.required' => 'Profile harus dipilih.',
            'profile_id.exists' => 'Profile tidak valid.',
            'institution.required' => 'Nama institusi wajib diisi.',
            'degree.required' => 'Degree/Jenjang wajib diisi.',
            'start_year.digits' => 'Tahun mulai harus 4 digit.',
            'end_year.digits' => 'Tahun selesai harus 4 digit.',
        ]);

        Education::create($data);

        return redirect()
            ->route('admin.educations.index')
            ->with('success', 'Education berhasil ditambahkan.');
    }

    public function show(Education $education): View
    {
        $education->load('profile');

        return view('admin.educations.show', compact('education'));
    }

    public function edit(Education $education): View
    {
        $profiles = Profile::orderBy('full_name')->get();

        return view('admin.educations.edit', compact('education', 'profiles'));
    }

    public function update(Request $request, Education $education): RedirectResponse
    {
        $data = $request->validate([
            'profile_id' => ['required', 'exists:profiles,id'],
            'institution' => ['required', 'string', 'max:255'],
            'degree' => ['required', 'string', 'max:255'],
            'field_of_study' => ['nullable', 'string', 'max:255'],
            'location' => ['nullable', 'string', 'max:255'],
            'start_year' => ['nullable', 'digits:4'],
            'end_year' => ['nullable', 'digits:4'],
        ], [
            'profile_id.required' => 'Profile harus dipilih.',
            'profile_id.exists' => 'Profile tidak valid.',
            'institution.required' => 'Nama institusi wajib diisi.',
            'degree.required' => 'Degree/Jenjang wajib diisi.',
            'start_year.digits' => 'Tahun mulai harus 4 digit.',
            'end_year.digits' => 'Tahun selesai harus 4 digit.',
        ]);

        $education->update($data);

        return redirect()
            ->route('admin.educations.index')
            ->with('success', 'Education berhasil diperbarui.');
    }

    public function destroy(Education $education): RedirectResponse
    {
        $education->delete();

        return redirect()
            ->route('admin.educations.index')
            ->with('success', 'Education berhasil dihapus.');
    }
}
