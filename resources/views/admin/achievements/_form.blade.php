<div class="row g-3">
    <div class="col-md-6">
        <label class="form-label">Profile <span class="text-danger">*</span></label>
        <select name="profile_id" class="form-select @error('profile_id') is-invalid @enderror" required>
            <option value="">-- Pilih Profile --</option>
            @foreach($profiles as $profile)
                <option value="{{ $profile->id }}" @selected(old('profile_id', $achievement->profile_id ?? '') == $profile->id)>
                    {{ $profile->full_name }}
                </option>
            @endforeach
        </select>
        @error('profile_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-6">
        <label class="form-label">Tahun</label>
        <input type="text" name="year" class="form-control @error('year') is-invalid @enderror"
               value="{{ old('year', $achievement->year ?? '') }}" maxlength="4" placeholder="Contoh: 2026">
        @error('year') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-12">
        <label class="form-label">Judul Achievement <span class="text-danger">*</span></label>
        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
               value="{{ old('title', $achievement->title ?? '') }}" required>
        @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-12">
        <label class="form-label">Issuer / Pemberi</label>
        <input type="text" name="issuer" class="form-control @error('issuer') is-invalid @enderror"
               value="{{ old('issuer', $achievement->issuer ?? '') }}" placeholder="Nama instansi atau pihak pemberi">
        @error('issuer') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-12">
        <label class="form-label">Deskripsi</label>
        <textarea name="description" rows="5" class="form-control @error('description') is-invalid @enderror"
                  placeholder="Tuliskan detail achievement...">{{ old('description', $achievement->description ?? '') }}</textarea>
        @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
</div>
