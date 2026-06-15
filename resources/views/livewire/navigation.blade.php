<div class="collapse navbar-collapse" id="sidenav-collapse-main">
    <!-- Collapse header -->
    <div class="navbar-collapse-header d-md-none">
        <div class="row">
            <div class="col-6 collapse-brand">
                <a href="#">
                    <img src="{{ asset('img/brand/blue.png') }}">
                </a>
            </div>
            <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main"
                    aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
    <!-- Navigation -->
    <ul class="navbar-nav">
        <li class="nav-item {{ Request::route()->named('dashboard') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('dashboard') ? 'active' : '' }}"
                href="{{ route('dashboard') }}" wire:navigate>
                <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
        </li>
    </ul>
    <!-- Divider -->
    <hr class="my-3">
    <!-- Heading -->

    <!-- Divider -->

    <!-- Heading -->
    <h6 class="navbar-heading text-muted">Otras Acciones</h6>
    <!-- Navigation -->
    <ul class="navbar-nav mb-md-3">
        <li class="nav-item {{ Request::route()->named('profile.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('profile.index') ? 'active' : '' }}"
                href="{{ route('profile.index') }}" wire:navigate>
                <i class="fas fa-user text-blue"></i> Perfil
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt text-gray"></i> Cerrar Sesión
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>

    <!-- Divider -->
    <hr class="my-3">
    <!-- Heading -->
    <h6 class="navbar-heading text-muted">Ejemplos</h6>
    <!-- Navigation -->
    <ul class="navbar-nav mb-md-3">
        <li class="nav-item {{ Request::route()->named('dentists.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('dentists.index') ? 'active' : '' }}"
                href="{{ route('dentists.index') }}" wire:navigate>
                <i class="fas fa-users text-sky-700" style="font-size: 20px; color: grey;"></i> Odontólogos
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('patients.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('patients.index') ? 'active' : '' }}"
                href="{{ route('patients.index') }}" wire:navigate>
                <i class="fas fa-user-check text-blue" style="font-size: 20px; color: darkslateblue;"></i> Pacientes
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('dates.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('dates.index') ? 'active' : '' }}"
                href="{{ route('dates.index') }}" wire:navigate>
                <i class="fas fa-calendar" style="font-size: 20px; color: chartreuse;"></i> Citas
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('treatmentstypes.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('treatmentstypes.index') ? 'active' : '' }}"
                href="{{ route('treatments_types.index') }}" wire:navigate>
                <i class="fas fa-list-alt" style="font-size: 20px; color: coral;"></i> Tipo de tratamientos
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('categories.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('categories.index') ? 'active' : '' }}"
                href="{{ route('categories.index') }}" wire:navigate>
                <i class="fas fa-tags text-yellow"></i> Categories (Normal)
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('posts.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('posts.index') ? 'active' : '' }}"
                href="{{ route('posts.index') }}" wire:navigate>
                <i class="fas fa-newspaper text-green"></i> Posts (Relacionado)
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('animals.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('animals.index') ? 'active' : '' }}"
                href="{{ route('animals.index') }}" wire:navigate>
                <i class="fas fa-dove text-orange"></i> Animals (Imagenes)
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('students.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('students.index') ? 'active' : '' }}"
                href="{{ route('students.index') }}" wire:navigate>
                <i class="fas fa-dove text-orange"></i> Estudiantes
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('carrers.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('carrers.index') ? 'active' : '' }}"
                href="{{ route('carrers.index') }}" wire:navigate>
                <i class="fas fa-dove text-orange"></i> Carreras
            </a>
        </li>
    </ul>
</div>
