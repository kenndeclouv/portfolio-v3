<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | {{ env('APP_NAME') }}</title>

    @include('layouts._partials.seo')
    @include('layouts._partials.styles')
</head>

<body class="hidden hidden-ball smooth-scroll rounded-borders" data-primary-color="@yield('primary-color')">
    <main>
        <div class="preloader-wrap" data-centerline="Loading">
            <div class="outer">
                <div class="inner">
                    <div class="trackbar">
                        <div class="preloader-intro">
                            <span>Loading</span>
                        </div>
                        <div class="loadbar"></div>
                        <div class="percentage-wrapper">
                            <div class="percentage" id="precent"></div>
                        </div>
                    </div>

                    <div class="percentage-intro">Please wait, content is loading</div>
                </div>
            </div>
        </div>
        <div class="cd-index cd-main-content">
            <div id="kenndeclouv-page-content" class="@yield('content-theme')" data-bgcolor="@yield('bg-color')">
                <header class="fullscreen-menu invert-header" data-menucolor="@yield('menu-color')">
                    <div id="header-container">
                        <!-- Logo -->
                        <div id="logo" class="hide-ball">
                            <a class="ajax-link" data-type="page-transition" href="{{ route('index') }}">
                                <img class="black-logo" src="{{ asset('assets/images/logo.png') }}"
                                    alt="Kenndeclouv Logo">
                                <img class="white-logo" src="{{ asset('assets/images/logo-white.png') }}"
                                    alt="Kenndeclouv Logo">
                            </a>
                        </div>
                        @include('layouts.components.navbar')
                    </div>
                </header>
                <div id="content-scroll">
                    @yield('content')
                    @include('layouts.components.footer')
                </div>
                <div id="app"></div>
            </div>
        </div>
    </main>
    <div class="cd-cover-layer"></div>
    <div id="magic-cursor">
        <div id="ball">
            <div id="ball-drag-x"></div>
            <div id="ball-drag-y"></div>
            <div id="ball-loader"></div>
        </div>
    </div>
    <div id="clone-image">
        <div class="hero-translate"></div>
    </div>
    <div id="rotate-device"></div>
    @include('layouts._partials.scripts')
    @include('layouts.components.alert')
</body>

</html>
