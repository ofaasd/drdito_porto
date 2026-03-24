<div class="row g-3">
    <div class="col-md-6">
        <label class="form-label">Profile <span class="text-danger">*</span></label>
        <select name="profile_id" class="form-select @error('profile_id') is-invalid @enderror" required>
            <option value="">-- Pilih Profile --</option>
            @foreach($profiles as $profile)
                <option value="{{ $profile->id }}" @selected(old('profile_id', $experience->profile_id ?? '') == $profile->id)>
                    {{ $profile->full_name }}
                </option>
            @endforeach
        </select>
        @error('profile_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-6">
        <label class="form-label">Posisi <span class="text-danger">*</span></label>
        <input type="text" name="position" class="form-control @error('position') is-invalid @enderror"
               value="{{ old('position', $experience->position ?? '') }}" required>
        @error('position') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-6">
        <label class="form-label">Perusahaan <span class="text-danger">*</span></label>
        <input type="text" name="company" class="form-control @error('company') is-invalid @enderror"
               value="{{ old('company', $experience->company ?? '') }}" required>
        @error('company') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-6">
        <label class="form-label">Lokasi</label>
        <input type="text" name="location" class="form-control @error('location') is-invalid @enderror"
               value="{{ old('location', $experience->location ?? '') }}">
        @error('location') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-4">
        <label class="form-label">Mulai</label>
        <input type="text" name="start_date" class="form-control @error('start_date') is-invalid @enderror"
               value="{{ old('start_date', $experience->start_date ?? '') }}" placeholder="Contoh: Jan 2020">
        @error('start_date') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-4">
        <label class="form-label">Selesai</label>
        <input type="text" name="end_date" class="form-control @error('end_date') is-invalid @enderror"
               value="{{ old('end_date', $experience->end_date ?? '') }}" placeholder="Contoh: Des 2023">
        @error('end_date') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-4 d-flex align-items-end">
        <div class="form-check mb-2">
            <input class="form-check-input" type="checkbox" value="1" id="is_current" name="is_current" @checked(old('is_current', $experience->is_current ?? false))>
            <label class="form-check-label" for="is_current">
                Masih Bekerja
            </label>
        </div>
    </div>

    <div class="col-12">
        <label class="form-label">Deskripsi</label>
        <textarea name="description" rows="5" class="form-control @error('description') is-invalid @enderror"
                  placeholder="Tuliskan ringkasan pengalaman kerja...">{{ old('description', $experience->description ?? '') }}</textarea>
        @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
</div>
