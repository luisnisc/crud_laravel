<!-- filepath: resources/views/app.blade.php -->
<x-layouts.app-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Listado de Proyectos</h1>
        <a href="{{ route('projects.create') }}" class="bg-green-600 text-white px-4 py-2 rounded">Añadir Proyecto</a>

        @if(session('success'))
            <div class="mt-4 text-green-600">{{ session('success') }}</div>
        @endif

        <table class="min-w-full mt-4 border-collapse bg-table text-white">
            <thead>
                <tr class="bg-dark_blue text-white">
                    <th class="border px-4 py-2">ID</th>
                    <th class="border px-4 py-2">Titulo</th>
                    <th class="border px-4 py-2">Horas previstas</th>
                    <th class="border px-4 py-2">Fecha de comienzo</th>
                    <th class="border px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                    <tr>
                        <td class="border px-4 py-2">{{ $project->id }}</td>
                        <td class="border px-4 py-2">{{ $project->titulo }}</td>
                        <td class="border px-4 py-2">{{ $project->horas_previstas}}</td>
                        <td class="border px-4 py-2">{{ $project->fecha_de_comienzo }}</td>
                        <td class="border px-4 py-2  ">
                            <a href="{{ route('projects.edit', $project) }}" class="text-blue-600 hover:underline"><x-heroicon-s-pencil-square class="w-6 h-6 text-white"/></a>
                            <form action="{{ route('projects.destroy', $project) }}" method="POST" class="inline-block">
                                @csrf 
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('¿Estás seguro?')"><x-heroicon-s-trash class="w-6 h-6 text-red-500"/></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.app-layout>