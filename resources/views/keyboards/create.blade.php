<x-layout>
    <h1>Create New Keyboard</h1>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2>Create Keyboard</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('keyboards.store') }}" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Keyboard Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="switchType" class="form-label">Switch Type</label>
                        <input type="text" class="form-control @error('switchType') is-invalid @enderror" id="switchType" name="switchType" value="{{ old('switchType') }}">
                        @error('switchType')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="caseType" class="form-label">Case Type</label>
                        <input type="text" class="form-control @error('caseType') is-invalid @enderror" id="caseType" name="caseType" value="{{ old('caseType') }}">
                        @error('caseType')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="pcbType" class="form-label">PCB Type</label>
                        <input type="text" class="form-control @error('pcbType') is-invalid @enderror" id="pcbType" name="pcbType" value="{{ old('pcbType') }}">
                        @error('pcbType')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="keyboardType" class="form-label">Keyboard Type</label>
                        <input type="text" class="form-control @error('keyboardType') is-invalid @enderror" id="keyboardType" name="keyboardType" value="{{ old('keyboardType') }}">
                        @error('keyboardType')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="ergonomic" class="form-label">Ergonomic</label>
                        <select class="form-control @error('ergonomic') is-invalid @enderror" id="ergonomic" name="ergonomic">
                            <option value="1" {{ old('ergonomic') == '1' ? 'selected' : '' }}>Yes</option>
                            <option value="0" {{ old('ergonomic') == '0' ? 'selected' : '' }}>No</option>
                        </select>
                        @error('ergonomic')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="backlight" class="form-label">Backlight</label>
                        <input type="text" class="form-control @error('backlight') is-invalid @enderror" id="backlight" name="backlight" value="{{ old('backlight') }}">
                        @error('backlight')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <h6>Keycaps</h6>
                        <div class="mb-2">
                            <label for="keycapBrand" class="form-label">Brand</label>
                            <input type="text" class="form-control @error('keycapsbrand') is-invalid @enderror" id="keycapBrand" name="keycapsbrand" value="{{ old('keycapsbrand') }}">
                            @error('keycapsbrand')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="keycapMaterial" class="form-label">Material</label>
                            <input type="text" class="form-control @error('keycapsmaterial') is-invalid @enderror" id="keycapMaterial" name="keycapsmaterial" value="{{ old('keycapsmaterial') }}">
                            @error('keycapsmaterial')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="keycapProcess" class="form-label">Process</label>
                            <input type="text" class="form-control @error('keycapsprocess') is-invalid @enderror" id="keycapProcess" name="keycapsprocess" value="{{ old('keycapsprocess') }}">
                            @error('keycapsprocess')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Create Keyboard</button>
                    <a href="{{ route('keyboards.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</x-layout>
