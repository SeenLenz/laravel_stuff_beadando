<x-layout>
    <h1 class="text-2xl font-bold text-center mb-8">Keyboards</h1>

    <!-- Create keyboard Button -->
    <a href="{{ route('keyboards.create') }}" class="mb-8 inline-block px-6 py-2 text-white font-bold rounded-md ">Create Keyboard</a>

    @foreach ($keyboards as $keyboard)
        <a href="{{ route('keyboards.show', $keyboard->id) }}" class="block mb-6">
            <div class="card border border-gray-300 rounded-md">
                <div class="card-header bg-gray-100 px-6 py-4">
                    <h5 class="card-title text-xl font-semibold">{{ $keyboard->name }}</h5>
                </div>
                <div class="card-body px-6 py-4">
                    <p><strong>Switch Type:</strong> {{ $keyboard->switchType }}</p>
                    <p><strong>Case Type:</strong> {{ $keyboard->caseType }}</p>
                    <p><strong>PCB Type:</strong> {{ $keyboard->pcbType }}</p>
                    <p><strong>Keyboard Type:</strong> {{ $keyboard->keyboardType }}</p>
                    <p><strong>Ergonomic:</strong> {{ $keyboard->ergonomic ? 'Yes' : 'No' }}</p>
                    <p><strong>Backlight:</strong> {{ $keyboard->backlight }}</p>
                    <p><strong>Keycap Brand:</strong> {{ $keyboard->keycapsbrand }}</p>
                    <p><strong>Keycap Material:</strong> {{ $keyboard->keycapsmaterial }}</p>
                    <p><strong>Keycap Process:</strong> {{ $keyboard->keycapsprocess }}</p>
                </div>
            </div>
        </a>
    @endforeach

</x-layout>
