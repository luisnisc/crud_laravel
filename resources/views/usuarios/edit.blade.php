<x-layouts.app-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Editar Proyecto</h1>
        <form action="{{ route('usuarios.update', $usuario) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nombre" class="block text-gray-700">Nombre</label>
                <input type="text" id="nombre" name="nombre"
                    value="{{ old('nombre', $usuario->nombre) }}"
                    class="border border-gray-300 w-full p-2" required>
                @error('nombre')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700">E-mail</label>
                <input type="email" id="email" name="email"
                    value="{{ old('email', $usuario->email) }}"
                    class="border border-gray-300 w-full p-2" required>
                @error('email')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
                Actualizar Usuario
            </button>
            <button>
                <a href="{{ route('usuarios.index') }}" class="bg-red-600 text-white px-4 py-2.5 rounded">Cancelar</a>
            </button>
        </form>
    </div>
</x-layouts.app-layout>