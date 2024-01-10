<h1>Ajouter un nouveau matelas</h1>

<form method="post" class="w-[300px]">
    @csrf {{-- Anytime you define an HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request.--}}

            <div class="mb-4">
                <label for="name" class="block">Nom *</label>
                @error('name')
                    <div class="text-red-500">⚠️ {{ $message }}</div>
                @enderror
                <input type="text" name="name" id="title" value="{{ old('name') }}" class="border-0 border-b focus:ring-0 w-full" required>
            </div>
            <div class="mb-4">
                <label for="price" class="block">Prix</label>
                @error('price')
                    <div class="text-red-500">⚠️ {{ $message }}</div>
                @enderror
                <input type="text" name="price" class="border-0 border-b focus:ring-0 w-full"  value="{{ old('price') }}">
            </div>

            <div class="mb-4">
                <label for="number" class="block">Numéro</label>
                @error('number')
                    <div class="text-red-500">⚠️ {{ $message }}</div>
                @enderror
                <input type="text" name="number" class="border-0 border-b focus:ring-0 w-full"  value="{{ old('number') }}">
            </div>
    
            <div class="flex flex-col items-center">
                <button class="mt-10 py-2 px-4 text-white bg-gray-900 rounded-xl hover:bg-gray-700 duration-200">Sauvegarder</button>
            </div>
</form>