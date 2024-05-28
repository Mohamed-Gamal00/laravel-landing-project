<!-- main-header -->
<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<nav class="site-nav">
    <div class="container">
        <div class="site-navigation">
            <a href="{{ route('landing') }}" class="logo m-0 float-start">Archiark<span class="text-primary">.</span> </a>

            <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-start">
                <li class="{{ Request::routeIs('landing') ? 'active' : '' }}"><a href="{{ route('landing') }}">Home</a>
                </li>
                <li class="{{ Request::routeIs('services') ? 'active' : '' }}"><a
                        href="{{ route('services') }}">Services</a></li>
                <li class="{{ Request::routeIs('projects') ? 'active' : '' }}"><a
                        href="{{ route('projects') }}">Projects</a></li>
                <li class="{{ Request::routeIs('about') ? 'active' : '' }}"><a href="{{ route('about') }}">About</a>
                </li>
                <li><a class="{{ Request::routeIs('contact') ? 'active' : '' }}"
                        href="{{ route('contact') }}">Contact</a></li>
            </ul>



            <a href="#"
                class="burger ml-auto float-end site-menu-toggle light js-menu-toggle d-inline-block d-lg-none"
                data-toggle="collapse" data-target="#main-navbar">
                <span></span>
            </a>
            <ul class="site-menu float-end d-none d-md-block">
                <li><a href="#" class="d-flex align-items-center text-white h2 fw-bold">
                        @if ($settings)
                            <span class="icon-phone me-2"></span>
                            <span>{{ $settings->phone ? $settings->phone : '+ 2 292 4392 327' }}</span>
                        @endif
                    </a></li>
            </ul>

        </div>
    </div>
</nav>
<!-- /main-header -->
