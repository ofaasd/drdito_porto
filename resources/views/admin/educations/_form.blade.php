<div class="row g-3">
    <div class="col-md-6">
        <label class="form-label">Profile <span class="text-danger">*</span></label>
        <select name="profile_id" class="form-select @error('profile_id') is-invalid @enderror" required>
            <option value="">-- Pilih Profile --</option>
            @foreach($profiles as $profile)
                <option value="{{ $profile->id }}" @selected(old('profile_id', $education->profile_id ?? '') == $profile->id)>
                    {{ $profile->full_name }}
                </option>
            @endforeach
        </select>
        @error('profile_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-6">
        <label class="form-label">Institusi <span class="text-danger">*</span></label>
        <input type="text" name="institution" class="form-control @error('institution') is-invalid @enderror"
               value="{{ old('institution', $education->institution ?? '') }}" required>
        @error('institution') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-6">
        <label class="form-label">Degree / Jenjang <span class="text-danger">*</span></label>
        <input type="text" name="degree" class="form-control @error('degree') is-invalid @enderror"
               value="{{ old('degree', $education->degree ?? '') }}" placeholder="Contoh: S1, S2, PhD" required>
        @error('degree') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-6">
        <label class="form-label">Field of Study</label>
        <input type="text" name="field_of_study" class="form-control @error('field_of_study') is-invalid @enderror"
               value="{{ old('field_of_study', $education->field_of_study ?? '') }}" placeholder="Contoh: Kedokteran">
        @error('field_of_study') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-6">
        <label class="form-label">Lokasi</label>
        <input type="text" name="location" class="form-control @error('location') is-invalid @enderror"
               value="{{ old('location', $education->location ?? '') }}" placeholder="Contoh: Makassar">
        @error('location') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-3">
        <label class="form-label">Tahun Mulai</label>
        <input type="text" name="start_year" class="form-control @error('start_year') is-invalid @enderror"
               value="{{ old('start_year', $education->start_year ?? '') }}" maxlength="4" placeholder="2020">
        @error('start_year') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-3">
        <label class="form-label">Tahun Selesai</label>
        <input type="text" name="end_year" class="form-control @error('end_year') is-invalid @enderror"
               value="{{ old('end_year', $education->end_year ?? '') }}" maxlength="4" placeholder="2024">
        @error('end_year') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
</div>
