<x-layouts.app-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">{{ __('Editar Usuario') }}</h1>
        <form action="{{ route('usuarios.update', $usuario) }}" method="POST" class="update-form">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nombre" class="block text-gray-700">{{ __('Nombre') }}</label>
                <input type="text" id="nombre" name="nombre"
                    value="{{ old('nombre', $usuario->nombre) }}"
                    class="border border-gray-300 w-full p-2" >
                @error('nombre')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700">{{ __('E-mail') }}</label>
                <input type="text" id="email" name="email"
                    value="{{ old('email', $usuario->email) }}"
                    class="border border-gray-300 w-full p-2" >
                @error('email')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
                {{ __('Actualizar Usuario') }}
            </button>
            <a href="{{ route('usuarios.index') }}" class="bg-red-600 text-white px-4 py-2.5 rounded inline-block">
                {{ __('Cancelar') }}
            </a>
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const updateForms = document.querySelectorAll('.update-form');

            updateForms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    Swal.fire({
                        title: "{{ __('¿Estás seguro?') }}",
                        text: "{{ __('El proyecto de actualizara con los datos introducidos.') }}",
                        icon: 'info',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: "{{ __('Sí, actualizar') }}",
                        cancelButtonText: "{{ __('Cancelar') }}"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
</x-layouts.app-layout>