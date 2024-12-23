@php
    $isWelcomePage = Route::currentRouteName() === 'welcome';
@endphp

<div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
    <nav class="uk-navbar-container uk-navbar-transparent lg-navbar" style="background-color: rgba(0, 0, 0, 0.8);" uk-navbar>
        <!-- Centered Navbar Content -->
        <div class="uk-navbar-center">
            <!-- Logo -->
            <a href="{{ route('welcome') }}" class="uk-navbar-item uk-logo">
                <img src="{{ asset('images/lg-logo-rm-bg.png') }}" 
                    alt="Logo Construcción y Remodelación LG"
                    width="50"
                    height="50">
            </a>

            <!-- Navigation Links (visible only on desktop) -->
            <ul class="uk-navbar-nav uk-visible@m">
                <li><a href="{{ $isWelcomePage ? '#' : route('welcome') }}" uk-scroll class="uk-text-bold">INICIO</a></li>
                <li>
                    <a href="{{ $isWelcomePage ? '#sobre-nosotros' : route('welcome') . '#sobre-nosotros' }}" uk-scroll class="uk-text-bold">
                        SOBRE NOSOTROS
                    </a>
                </li>
                <li>
                    <a href="{{ $isWelcomePage ? '#servicios' : route('welcome') . '#servicios' }}" uk-scroll class="uk-text-bold">
                        SERVICIOS
                    </a>
                </li>
                <li>
                    <a href="{{ $isWelcomePage ? '#proyectos' : route('welcome') . '#proyectos' }}" uk-scroll class="uk-text-bold">
                        PROYECTOS
                    </a>
                </li>
                <li>
                    <a href="#contacto" uk-scroll class="uk-text-bold">CONTACTO</a>
                </li>
            </ul>

            <!-- Presupuesto Button (visible only on desktop) -->
            <a href="#presupuesto" uk-toggle class="uk-button uk-border-pill uk-text-bold uk-visible@m" style="color: #444; background: #FFFFFF;">PRESUPUESTO</a>

            <!-- Hamburger Icon for Mobile (hidden on desktop) -->
            <a class="uk-navbar-toggle uk-hidden@m" uk-toggle="target: #offcanvas-nav">
                <span uk-navbar-toggle-icon></span>
            </a>
        </div>
    </nav>
</div>

<!-- Offcanvas Menu for Mobile -->
<div id="offcanvas-nav" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar uk-background-secondary uk-light">
        <!-- Close button -->
        <button class="uk-offcanvas-close" type="button" uk-close></button>

        <!-- Mobile Navigation Links -->
        <ul class="uk-nav uk-nav-default uk-margin-medium-top">
            <li><a href="{{ $isWelcomePage ? '#' : route('welcome') }}" uk-scroll>INICIO</a></li>
            <li><a href="{{ $isWelcomePage ? '#sobre-nosotros' : route('welcome') . '#sobre-nosotros' }}" uk-scroll>SOBRE NOSOTROS</a></li>
            <li><a href="{{ $isWelcomePage ? '#servicios' : route('welcome') . '#servicios' }}" uk-scroll>SERVICIOS</a></li>
            <li><a href="{{ $isWelcomePage ? '#proyectos' : route('welcome') . '#proyectos' }}" uk-scroll>PROYECTOS</a></li>
            <li><a href="#contacto" uk-scroll>CONTACTO</a></li>
        </ul>

        <!-- Mobile Presupuesto Button -->
        <a href="#presupuesto" uk-toggle class="uk-button uk-border-pill uk-text-bold uk-margin-top" style="color: #444; background: #FFFFFF; display: block;">PRESUPUESTO</a>

         <!-- Logo -->
        <a href="{{ route('welcome') }}" class="">
            <img src="{{ asset('images/lg-logo-rm-bg.png') }}" 
                class="uk-border-rounded uk-align-center uk-margin-large-top" 
                alt="Logo Construcción y Remodelación Lg"
                width="120"
                height="120">
        </a>
    </div>
</div>
