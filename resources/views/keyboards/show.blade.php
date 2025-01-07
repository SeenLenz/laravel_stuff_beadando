<x-layout>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h5>{{ $keyboard->name }}</h5>
            </div>
            <div class="card-body">
                <p><strong>Switch Type:</strong> {{ $keyboard->switchType }}</p>
                <p><strong>Case Type:</strong> {{ $keyboard->caseType }}</p>
                <p><strong>PCB Type:</strong> {{ $keyboard->pcbType }}</p>
                <p><strong>Keyboard Type:</strong> {{ $keyboard->keyboardType }}</p>
                <p><strong>Ergonomic:</strong> {{ $keyboard->ergonomic ? 'Yes' : 'No' }}</p>
                <p><strong>Backlight:</strong> {{ $keyboard->backlight }}</p>
                <p><strong>Keycap Brand:</strong> {{ $keyboard->keycapsbrand }}</p>
                <p><strong>Keycap Material:</strong> {{ $keyboard->keycapsmaterial}}</p>
                <p><strong>Keycap Process:</strong> {{ $keyboard->keycapsprocess }}</p>

                <a href="{{ route('keyboards.edit', $keyboard->id) }}" class="btn btn-primary mt-3">Edit</a>
                <a href="{{ route('keyboards.index') }}" class="btn btn-secondary mt-3">Back to List</a>
            </div>
        </div>
    </div>
</x-layout>
