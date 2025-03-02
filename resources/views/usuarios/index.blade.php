<x-layouts.app-layout>
    <div class="container mx-auto p-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-3xl font-bold">{{__('Listado de Usuarios')}}</h1>
            <a href="{{ route('usuarios.create') }}" class="bg-green-600 hover:bg-green-500 text-white font-semibold rounded-xl p-2">
                <x-heroicon-s-plus class="w-5 h-5"/>
            </a>
        </div>

        <div class="overflow-x-auto shadow-md rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-dark_blue">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">{{__('Nombre')}}</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">{{__('Acciones')}}</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($usuarios as $usuario)
                        <tr class="hover:bg-blue-50 duration-500">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $usuario->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $usuario->nombre }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $usuario->email }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex space-x-2">
                                    <a href="{{ route('usuarios.edit', $usuario) }}" class="text-blue-600 hover:text-blue-800">
                                        <x-heroicon-s-pencil-square class="w-5 h-5"/>
                                    </a>
                                    <form action="{{ route('usuarios.destroy', $usuario) }}" method="POST" class="delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800">
                                            <x-heroicon-s-trash class="w-5 h-5"/>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'success',
                title: `{{ __(session('success')) }}`,
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
            });
        });
    </script>
@endif



    <script>
document.addEventListener('DOMContentLoaded', function () {
    const deleteForms = document.querySelectorAll('.delete-form');

    deleteForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            Swal.fire({
                title: "{{ __('¿Estás seguro?') }}",
                text: "{{ __('La acción no se puede deshacer') }}",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: "{{ __('Sí, eliminar') }}",
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