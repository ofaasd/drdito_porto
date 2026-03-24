<div class="row g-3">
    <div class="col-md-6">
        <label class="form-label">Profile <span class="text-danger">*</span></label>
        <select name="profile_id" class="form-select @error('profile_id') is-invalid @enderror" required>
            <option value="">-- Pilih Profile --</option>
            @foreach($profiles as $profile)
                <option value="{{ $profile->id }}" @selected(old('profile_id', $organization->profile_id ?? '') == $profile->id)>
                    {{ $profile->full_name }}
                </option>
            @endforeach
        </select>
        @error('profile_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-6">
        <label class="form-label">Role <span class="text-danger">*</span></label>
        <input type="text" name="role" class="form-control @error('role') is-invalid @enderror"
               value="{{ old('role', $organization->role ?? '') }}" required>
        @error('role') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-8">
        <label class="form-label">Nama Organisasi <span class="text-danger">*</span></label>
        <input type="text" name="organization_name" class="form-control @error('organization_name') is-invalid @enderror"
               value="{{ old('organization_name', $organization->organization_name ?? '') }}" required>
        @error('organization_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-4">
        <label class="form-label">Periode</label>
        <input type="text" name="period" class="form-control @error('period') is-invalid @enderror"
               value="{{ old('period', $organization->period ?? '') }}" placeholder="Contoh: 2020-2023">
        @error('period') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
</div>
