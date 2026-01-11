<header class="header js-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="EnviroAnalytix" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa fa-bars"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('services*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('services') }}">Services</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('projects') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('projects') }}">Projects</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('careers') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('careers') }}">Careers</a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <button id="theme-toggle" class="nav-link btn btn-link" style="color: var(--text-light); border: none; padding: 0.5rem; display: flex; align-items: center; justify-content: center;">
                            <i id="theme-icon" class="fa fa-moon-o" style="font-size: 1.25rem;"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
