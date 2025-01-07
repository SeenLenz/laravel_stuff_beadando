<x-layout>

    <h1 class="text-4xl font-bold text-center text-gradient mb-8">Keyboards</h1>

    <!-- Create keyboard Button with sparkle effect -->
    <a href="{{ route('keyboards.create') }}" class="btn btn-primary mb-4 px-6 py-3 bg-blue-500 text-white font-semibold rounded-lg transform hover:scale-105 transition duration-300 shadow-lg hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50 relative overflow-hidden">
        <span class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-pink-500 via-purple-500 to-blue-500 opacity-30 blur-md"></span>
        <span class="z-10 relative">Create Keyboard</span>
        <span class="absolute top-0 right-0 w-5 h-5 bg-yellow-400 animate-ping rounded-full"></span>
    </a>

    @foreach ($keyboards as $keyboard)
        <a href="{{ route('keyboards.show', $keyboard->id) }}" class="text-decoration-none transform hover:scale-105 transition duration-300">
            <div class="card mb-4 shadow-xl bg-gradient-to-r from-purple-600 via-indigo-600 to-blue-600 rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                <div class="card-header py-4 px-6 bg-gradient-to-r from-pink-500 to-blue-500 text-white">
                    <h5 class="card-title text-2xl font-semibold">{{ $keyboard->name }}</h5>
                    <span class="absolute top-1 right-2 text-yellow-300 text-xl animate-pulse">✨</span>
                </div>
                <div class="card-body text-white bg-gray-800 p-6 rounded-b-lg">
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
