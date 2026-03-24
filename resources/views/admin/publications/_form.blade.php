<div class="row g-3">
    <div class="col-md-6">
        <label class="form-label">Profile <span class="text-danger">*</span></label>
        <select name="profile_id" class="form-select @error('profile_id') is-invalid @enderror" required>
            <option value="">-- Pilih Profile --</option>
            @foreach($profiles as $profile)
                <option value="{{ $profile->id }}" @selected(old('profile_id', $publication->profile_id ?? '') == $profile->id)>
                    {{ $profile->full_name }}
                </option>
            @endforeach
        </select>
        @error('profile_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-6">
        <label class="form-label">Kategori <span class="text-danger">*</span></label>
        <input type="text" name="category" class="form-control @error('category') is-invalid @enderror"
               value="{{ old('category', $publication->category ?? '') }}" placeholder="Contoh: Journal, Book" required>
        @error('category') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-12">
        <label class="form-label">Judul <span class="text-danger">*</span></label>
        <textarea name="title" rows="3" class="form-control @error('title') is-invalid @enderror" required>{{ old('title', $publication->title ?? '') }}</textarea>
        @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-6">
        <label class="form-label">Tahun</label>
        <input type="text" name="year" class="form-control @error('year') is-invalid @enderror"
               value="{{ old('year', $publication->year ?? '') }}" maxlength="4" placeholder="2026">
        @error('year') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-6">
        <label class="form-label">Publisher / Journal</label>
        <input type="text" name="publisher_or_journal" class="form-control @error('publisher_or_journal') is-invalid @enderror"
               value="{{ old('publisher_or_journal', $publication->publisher_or_journal ?? '') }}">
        @error('publisher_or_journal') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-12">
        <label class="form-label">Link</label>
        <input type="url" name="link" class="form-control @error('link') is-invalid @enderror"
               value="{{ old('link', $publication->link ?? '') }}" placeholder="https://...">
        @error('link') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
</div>
