<!-- Navigation -->
<nav>
    <div class="nav-height">
        <div class="outer">
            <div class="inner">
                <ul data-breakpoint="10025" class="flexnav">
                    {{-- <li class="link menu-timeline">
                        <a class="" href="#">
                            <div class="before-span"><span data-hover="home">Home</span></div>
                        </a>
                        <ul>
                            <li>
                                <a class="ajax-link {{ request()->is('/') ? 'active' : '' }}"
                                    href="{{ route('index') }}" data-type="page-transition">
                                    Overlapping Gallery
                                </a>
                            </li>
                            <li>
                                <a class="ajax-link {{ request()->is('grid') ? 'active' : '' }}"
                                    href="{{ route('grid') }}" data-type="page-transition">
                                    Portfolio Grid
                                </a>
                            </li>
                            <li>
                                <a class="ajax-link {{ request()->is('archive') ? 'active' : '' }}"
                                    href="{{ route('archive') }}" data-type="page-transition">
                                    Archive Gallery
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    <li class="link menu-timeline">
                        <a class="ajax-link {{ request()->is('index') ? 'active' : '' }}" href="{{ route('index') }}"
                            data-type="page-transition">
                            <div class="before-span"><span data-hover="Home">Home</span></div>
                        </a>
                    </li>
                    <li class="link menu-timeline">
                        <a class="ajax-link {{ request()->is('about') ? 'active' : '' }}" href="{{ route('about') }}"
                            data-type="page-transition">
                            <div class="before-span"><span data-hover="About">About</span></div>
                        </a>
                    </li>
                    <li class="link menu-timeline">
                        <a class="ajax-link {{ request()->is('projects') ? 'active' : '' }}" href="{{ route('projects') }}"
                            data-type="page-transition">
                            <div class="before-span"><span data-hover="Projects">Projects</span></div>
                        </a>
                    </li>
                    <li class="link menu-timeline">
                        <a class="ajax-link {{ request()->is('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}" data-type="page-transition">
                            <div class="before-span"><span data-hover="Contact">Contact</span>
                            </div>
                        </a>
                    </li>
                    {{-- <li class="link menu-timeline">
                        <a class="" href="#">
                            <div class="before-span"><span data-hover="More">More</span></div>
                        </a>
                        <ul>
                            <li><a class="ajax-link" href="{{ route('typography') }}"
                                    data-type="page-transition">Typography</a>
                            </li>
                            <li><a class="ajax-link" href="{{ route('multimedia') }}"
                                    data-type="page-transition">Multimedia</a>
                            </li>
                            <li><a class="ajax-link" href="{{ route('shortcodes') }}"
                                    data-type="page-transition">Shortcodes</a>
                            </li>
                        </ul>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
</nav>
<!--/Navigation -->
<!-- Menu Burger -->
<div class="button-wrap right menu burger-lines">
    <div class="icon-wrap parallax-wrap">
        <div class="button-icon parallax-element">
            <div id="burger-wrapper">
                <div id="menu-burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
    <div class="button-text sticky right"><span data-hover="Menu">Menu</span></div>
</div>
<!--/Menu Burger -->
