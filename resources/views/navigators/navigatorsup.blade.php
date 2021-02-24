<div class="container">
    <div style="width:100%; height:55px; background-color:#F8F9FA;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light float-right">
        <a class="navbar-brand" href="{{ route('register') }}">Paquetería</a>
        <!--Boton haburguesa responsivo-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('home')}}">Home</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('dashboard')}}">Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('repartidores.index')}}">Repartidores</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link " href="{{route('almacenistas.index')}}">Almacenistas</a>
            </li>

            <!-- Authentication Links -->
            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Cerrar Sesión') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
            </ul>

                        
            
        </div>
        </nav>
    </div>
</div>