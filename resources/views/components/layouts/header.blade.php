<header class="bg-dark_blue text-white py-4 w-full">
    <div class="container mx-auto flex justify-between items-center px-4">
        <a href="{{ url('/') }}" class="text-2xl font-bold">CrudNisc</a>
        <h2>Registrado como: {{auth()->user()->name}}</h2>
        <nav>
            <ul class="flex space-x-4">
                @auth
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="hover:underline">Cerrar sesión</button>
                        </form>
                    </li>
                @else
                    <li><a href="{{ route('login') }}" class="hover:underline">Iniciar Sesión</a></li>
                    <li><a href="{{ route('register') }}" class="hover:underline">Registrarse</a></li>
                @endauth
            </ul>
        </nav>
    </div>
</header>