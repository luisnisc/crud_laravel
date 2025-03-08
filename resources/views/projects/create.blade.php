<x-layouts.app-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">{{ __('Crear Proyecto') }}</h1>
        <form action="{{ route('projects.store') }}" method="POST">
            @csrf
            
            <div class="mb-4">
                <label for="titulo" class="block text-gray-700">{{ __('Título') }}</label>
                <input type="text" id="titulo" name="titulo" value="{{ old('titulo') }}"
                       class="border border-gray-300 w-full p-2" >
                @error('titulo')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="horas_previstas" class="block text-gray-700">{{ __('Horas previstas') }}</label>
                <input type="number" id="horas_previstas" name="horas_previstas" value="{{ old('horas_previstas') }}"
                       class="border border-gray-300 w-full p-2" >
                @error('horas_previstas')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="fecha_de_comienzo" class="block text-gray-700">{{ __('Fecha de comienzo') }}</label>
                <input type="date" id="fecha_de_comienzo" name="fecha_de_comienzo" value="{{ old('fecha_de_comienzo') }}"
                       class="border border-gray-300 w-full p-2" >
                @error('fecha_de_comienzo')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="usuario_id" class="block text-gray-700">{{ __('Usuario') }}</label>
                <select name="usuario_id" id="usuario_id" class="border border-gray-300 w-full p-2" >
                    <option value="">{{ __('Seleccione un usuario') }}</option>
                    @foreach($usuarios as $usuario)
                        <option value="{{ $usuario->id }}" {{ old('usuario_id') == $usuario->id ? 'selected' : '' }}>
                            {{ $usuario->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>
            
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">
                {{ __('Guardar Proyecto') }}
            </button>
            <button type="button">
                <a href="{{ route('app') }}" class="bg-red-600 text-white px-4 py-2.5 rounded inline-block">{{ __('Cancelar') }}</a>
            </button>
        </form>
    </div>
</x-layouts.app-layout>