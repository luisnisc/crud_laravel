<header class="bg-dark_blue text-white py-4 w-full">
    <div class="container mx-auto flex justify-between items-center px-4">
        <a href="{{ route('home') }}" class="text-2xl font-bold">CrudNisc</a>
        <h2 class="font-bold">{{__('Conectado como:')}} {{auth()->user()->name}}</h2>
        <nav class="flex items-center space-x-4">
            <ul class="flex space-x-4">
                <li>
                    <a href="{{ route('app') }}" class="hover:underline">{{__('Proyectos')}}</a>
                </li>
                <li>
                    <a href="{{ route('usuarios.index') }}" class="hover:underline">{{__('Usuarios')}}</a>
                </li>
            </ul>
            <x-layouts.lang/>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="p-3 bg-blue-800 hover:bg-blue-900 rounded-xl">{{__('Cerrar sesión')}}</button>
            </form>
        </nav>
    </div>
</header>