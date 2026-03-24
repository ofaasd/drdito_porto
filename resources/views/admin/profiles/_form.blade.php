{{-- filepath: d:\work\app\dokterdito_app\resources\views\admin\profiles\_form.blade.php --}}
<div class="row g-3">
    <div class="col-md-6">
        <label class="form-label">Nama Lengkap *</label>
        <input type="text" name="full_name" class="form-control @error('full_name') is-invalid @enderror"
               value="{{ old('full_name', $profile->full_name ?? '') }}" required>
        @error('full_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-6">
        <label class="form-label">Gelar</label>
        <input type="text" name="titles" class="form-control @error('titles') is-invalid @enderror"
               value="{{ old('titles', $profile->titles ?? '') }}" placeholder="contoh: dr., M.Biomed (AAM)">
        @error('titles') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-12">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
               value="{{ old('email', $profile->email ?? '') }}">
        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-12">
        <label class="form-label">Ringkasan Profil</label>
        <textarea name="summary" rows="6" class="form-control @error('summary') is-invalid @enderror"
                  placeholder="Tuliskan ringkasan profil...">{{ old('summary', $profile->summary ?? '') }}</textarea>
        @error('summary') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
</div>