<x-layouts.app-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Crear Proyecto</h1>
        <form action="{{ route('projects.store') }}" method="POST">
            @csrf
            
            <!-- Título -->
            <div class="mb-4">
                <label for="titulo" class="block text-gray-700">Título</label>
                <input type="text" id="titulo" name="titulo" value="{{ old('titulo') }}"
                       class="border border-gray-300 w-full p-2" required>
                @error('titulo')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
            
            <!-- Horas previstas -->
            <div class="mb-4">
                <label for="horas_previstas" class="block text-gray-700">Horas previstas</label>
                <input type="number" id="horas_previstas" name="horas_previstas" value="{{ old('horas_previstas') }}"
                       class="border border-gray-300 w-full p-2" required>
                @error('horas_previstas')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
            
            <!-- Fecha de comienzo -->
            <div class="mb-4">
                <label for="fecha_de_comienzo" class="block text-gray-700">Fecha de comienzo</label>
                <input type="date" id="fecha_de_comienzo" name="fecha_de_comienzo" value="{{ old('fecha_de_comienzo') }}"
                       class="border border-gray-300 w-full p-2" required>
                @error('fecha_de_comienzo')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Usuario -->
            <div class="mb-4">
                <label for="usuario_id" class="block text
                -gray-700">Usuario</label>
                <select name="usuario_id" id="usuario_id" class="border border-gray-300 w-full p-2" required>
                    <option value="">Seleccione un usuario</option>
                    @foreach($usuarios as $usuario)
                        <option value="{{ $usuario->id }}" {{ old('usuario_id') == $usuario->id ? 'selected' : '' }}>
                            {{ $usuario->nombre }}
                        </option>
                    @endforeach
                </select>
            
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">
                Guardar Proyecto
            </button>
        </form>
    </div>
</x-layouts.app-layout>