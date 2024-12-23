<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Construcción y Remodelación LG @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('images/lg-logo-rm-bg.png') }}" type="image/x-icon">
     {{-- Uikit Styles --}}
    <link rel="stylesheet" href="{{ asset('css/uikit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>

    @include('components.navbar')

    @if (session('success'))
        <div class="uk-alert-success uk-position-z-index uk-align-center uk-text-center" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="uk-alert-danger uk-position-z-index uk-align-center uk-text-center" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            {{ session('error') }}
        </div>
    @endif

    @if (session('success-cot'))
        <div class="uk-alert-success uk-position-z-index uk-align-center uk-text-center" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            {{ session('success-cot') }}
        </div>
    @endif

    @if (session('error-cot'))
        <div class="uk-alert-danger uk-position-z-index uk-align-center uk-text-center" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            {{ session('error-cot') }}
        </div>
    @endif

    <section>
        @yield('content')
    </section> 

    @include('components.modalBudget')
    @include('components.whatsappButton')

    @include('components.footer')
    
    <script src="{{ asset('js/uikit.min.js') }}"></script>
    <script src="{{ asset('js/uikit-icons.min.js') }}"></script>
    <script>
        // Funcion para usar loading lazy soobre todas las imagenes con js 
        const images = document.querySelectorAll('img');
        images.forEach(image => {
            image.setAttribute('loading', 'lazy');
        });
        
    </script>
    @stack('js')
</body>
</html>