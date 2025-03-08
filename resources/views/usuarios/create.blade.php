<x-layouts.app-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">{{ __('Crear Usuario') }}</h1>
        <form action="{{ route('usuarios.store') }}" method="POST">
            @csrf
            
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700">{{ __('Nombre') }}</label>
                <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}"
                       class="border border-gray-300 w-full p-2" >
                @error('nombre')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="email" class="block text-gray-700">{{ __('E-mail') }}</label>
                <input type="text" id="email" name="email" value="{{ old('email') }}"
                       class="border border-gray-300 w-full p-2" >
                @error('email')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
            
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">
                {{ __('Guardar Usuario') }}
            </button>
            <button type="button">
                <a href="{{ route('usuarios.index') }}" class="bg-red-600 text-white px-4 py-2.5 rounded inline-block">{{ __('Cancelar') }}</a>
            </button>
        </form>
    </div>
</x-layouts.app-layout>