<x-layout>
    <h1>Edit Keyboard</h1>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h5>Edit Keyboard: {{ $keyboard->name }}</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('keyboards.update', $keyboard->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Name Field -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Keyboard Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') ?? $keyboard->name }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Switch Type -->
                    <div class="mb-3">
                        <label for="switchType" class="form-label">Switch Type</label>
                        <input type="text" class="form-control @error('switchType') is-invalid @enderror" id="switchType" name="switchType" value="{{ old('switchType') ?? $keyboard->switchType }}">
                        @error('switchType')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Case Type -->
                    <div class="mb-3">
                        <label for="caseType" class="form-label">Case Type</label>
                        <input type="text" class="form-control @error('caseType') is-invalid @enderror" id="caseType" name="caseType" value="{{ old('caseType') ?? $keyboard->caseType }}">
                        @error('caseType')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- PCB Type -->
                    <div class="mb-3">
                        <label for="pcbType" class="form-label">PCB Type</label>
                        <input type="text" class="form-control @error('pcbType') is-invalid @enderror" id="pcbType" name="pcbType" value="{{ old('pcbType') ?? $keyboard->pcbType }}">
                        @error('pcbType')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Keyboard Type -->
                    <div class="mb-3">
                        <label for="keyboardType" class="form-label">Keyboard Type</label>
                        <input type="text" class="form-control @error('keyboardType') is-invalid @enderror" id="keyboardType" name="keyboardType" value="{{ old('keyboardType') ?? $keyboard->keyboardType }}">
                        @error('keyboardType')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Ergonomic -->
                    <div class="mb-3">
                        <label for="ergonomic" class="form-label">Ergonomic</label>
                        <select class="form-control @error('ergonomic') is-invalid @enderror" id="ergonomic" name="ergonomic">
                            <option value="1" {{ (old('ergonomic') ?? $keyboard->ergonomic) == 1 ? 'selected' : '' }}>Yes</option>
                            <option value="0" {{ (old('ergonomic') ?? $keyboard->ergonomic) == 0 ? 'selected' : '' }}>No</option>
                        </select>
                        @error('ergonomic')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Backlight -->
                    <div class="mb-3">
                        <label for="backlight" class="form-label">Backlight</label>
                        <input type="text" class="form-control @error('backlight') is-invalid @enderror" id="backlight" name="backlight" value="{{ old('backlight') ?? $keyboard->backlight }}">
                        @error('backlight')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Keycaps Brand -->
                    <div class="mb-3">
                        <label for="keycapBrand" class="form-label">Keycap Brand</label>
                        <input type="text" class="form-control @error('keycapsbrand') is-invalid @enderror" id="keycapBrand" name="keycapsbrand" value="{{ old('keycapsbrand') ?? $keyboard->keycapsbrand }}">
                        @error('keycapsbrand')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Keycaps Material -->
                    <div class="mb-3">
                        <label for="keycapMaterial" class="form-label">Keycap Material</label>
                        <input type="text" class="form-control @error('keycapsmaterial') is-invalid @enderror" id="keycapMaterial" name="keycapsmaterial" value="{{ old('keycapsmaterial') ?? $keyboard->keycapsmaterial }}">
                        @error('keycapsmaterial')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Keycaps Process -->
                    <div class="mb-3">
                        <label for="keycapProcess" class="form-label">Keycap Process</label>
                        <input type="text" class="form-control @error('keycapsprocess') is-invalid @enderror" id="keycapProcess" name="keycapsprocess" value="{{ old('keycapsprocess') ?? $keyboard->keycapsprocess }}">
                        @error('keycapsprocess')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Submit Buttons -->
                    <button type="submit" class="btn btn-success">Update Keyboard</button>
                    <a href="{{ route('keyboards.show', $keyboard->id) }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</x-layout>
