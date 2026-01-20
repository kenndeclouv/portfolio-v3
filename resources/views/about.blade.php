@extends('layouts.app')

@section('title', 'About Me!')
@section('bg-color', '#0c0c0c')
@section('menu-color', '#0c0c0c')
@section('content-theme', 'light-content')
@section('primary-color', '#F9E8C9')

@section('content')
    <!-- Main -->
    <div id="main">

        <!-- Hero Section -->
        <div id="hero">
            <div id="hero-styles">
                <div id="hero-caption" class="content-full-width parallax-scroll-caption text-align-center height-title">
                    <div class="inner">
                        <h1 class="hero-title caption-timeline primary-font-title"><span>About Me</span></h1>
                        <x-subhero>
                            Learn more about me and my journey in creating innovative digital solutions.
                        </x-subhero>
                    </div>
                </div>
                <div id="hero-footer">
                    <div class="hero-footer-left">
                        <div class="button-wrap right scroll-down">
                            <div class="icon-wrap parallax-wrap">
                                <div class="button-icon parallax-element">
                                    <i class="fa-solid fa-angle-down"></i>
                                </div>
                            </div>
                            <div class="button-text sticky right"><span data-hover="Scroll to Explore">Scroll to
                                    Explore</span></div>
                        </div>
                    </div>
                    <div class="hero-footer-right">
                        <div id="info-text">Our Short Story</div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Hero Section -->


        <!-- Main Content -->
        <div id="main-content">
            <!-- Main Page Content -->
            <div id="main-page-content" class="content-max-width">


                <!-- Row -->
                <div class="content-row dark-section" data-bgcolor="#0c0c0c">

                    <div class="clipped-image-wrapper">

                        <div class="clipped-image-pin">
                            <div class="clipped-image">
                                <img src="{{ asset('assets/images/about.png') }}" alt="Image Title">
                                <div class="clipped-image-gradient"></div>
                            </div>
                        </div>
                        <div class="clipped-image-content text-align-center" style="max-width: 50vw">
                            <h2 class="primary-font-title big-title has-mask-fill">About Me</h2>
                            <p>I'm a software engineer with a passion for building scalable and efficient systems. I've
                                worked with a variety of clients, from small businesses to large corporations. Here are
                                some of the projects I've worked on.</p>
                        </div>
                    </div>

                </div>
                <!--/Row -->

                <!-- Row -->
                <div class="content-row full row_padding_left row_padding_right row_padding_bottom text-align-center dark-section"
                    data-bgcolor="#0c0c0c">

                    <hr>
                    <hr>
                    <hr class="destroy">
                    <h2 class="big-title primary-font-title no-margins has-mask-fill">Education</h2>
                    <hr>
                    <hr>
                    <hr>
                    <hr class="destroy">

                    <!-- Flex Lists -->
                    <ul class="flex-lists-wrapper">
                        <li class="flex-list link has-animation">
                            <span class="flex-list-left">2023 - NOW</span>
                            <span class="flex-list-center">SMK Averroes</span>
                            <span class="flex-list-right">Vocational High School</span>
                        </li>
                        <li class="flex-list link has-animation">
                            <span class="flex-list-left">2020 - 2023</span>
                            <span class="flex-list-center">SMP Paramitha</span>
                            <span class="flex-list-right">Junior High School</span>
                        </li>
                        <li class="flex-list link has-animation">
                            <span class="flex-list-left">2012 - 2019</span>
                            <span class="flex-list-center">SDN Percobaan 2</span>
                            <span class="flex-list-right">Elementary School</span>
                        </li>
                    </ul>

                    <hr class="destroy">

                </div>
                <!--/Row -->
                <!-- Row -->
                <div class="content-row text-align-center dark-section" data-bgcolor="#0c0c0c">


                    <div class="move-thumbs-wrapper">

                        <div class="start-thumbs-caption">
                            <h2 class="primary-font-title big-title has-mask-fill">Certifications</h2>
                            <p>My Certifications</p>
                        </div>



                        <div class="start-thumbs-wrapper">

                            <div class="start-move-thumb" data-start="top 120%" data-stop="600%">
                                <div class="move-thumb-inner">
                                    <div class="section-image">
                                        <img src="{{ asset('assets/images/certification/1.png') }}" class="item-image"
                                            alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="start-move-thumb" data-start="top 90%" data-stop="1100%">
                                <div class="move-thumb-inner">
                                    <div class="section-image">
                                        <img src="{{ asset('assets/images/certification/2.png') }}" class="item-image"
                                            alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="start-move-thumb" data-start="top 90%" data-stop="400%">
                                <div class="move-thumb-inner">
                                    <div class="section-image">
                                        <img src="{{ asset('assets/images/certification/3.png') }}" class="item-image"
                                            alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="start-move-thumb" data-start="top 120%" data-stop="600%">
                                <div class="move-thumb-inner">
                                    <div class="section-image">
                                        <img src="{{ asset('assets/images/certification/4.png') }}" class="item-image"
                                            alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="start-move-thumb" data-start="top 100%" data-stop="750%">
                                <div class="move-thumb-inner">
                                    <div class="section-image">
                                        <img src="{{ asset('assets/images/certification/5.png') }}" class="item-image"
                                            alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="start-move-thumb" data-start="top 40%" data-stop="300%">
                                <div class="move-thumb-inner">
                                    <div class="section-image">
                                        <img src="{{ asset('assets/images/certification/6.png') }}" class="item-image"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="end-thumbs-wrapper">
                            <div class="end-move-thumb"></div>
                            <div class="end-move-thumb"></div>
                            <div class="end-move-thumb"></div>
                            <div class="end-move-thumb"></div>
                            <div class="end-move-thumb"></div>
                            <div class="end-move-thumb"></div>
                        </div>
                    </div>
                </div>
                <!--/Row -->
                <!-- Row -->
                <div class="content-row row_padding_top row_padding_bottom light-section change-header-color has-clip-path"
                    data-bgcolor="#f9e8c9">

                    <hr class="destroy">
                    <hr class="destroy">


                    <div class="pinned-section">
                        <div class="pinned-element left">
                            <h2 class="big-title primary-font-title no-margins"><span
                                    class="has-mask-fill">My</span><br><span class="has-mask-fill">Services</span></h2>
                        </div>

                        <div class="scrolling-element right">
                            <dl class="accordion has-animation">
                                <dt>
                                    <span class="link">
                                        <div>Web Design</div>
                                    </span>
                                    <div class="acc-icon-wrap parallax-wrap">
                                        <div class="acc-button-icon parallax-element">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="accordion-content">I specialize in crafting clean, modern websites with
                                    intuitive user experiences that help businesses stand out and connect with their
                                    audience. laravel? its my friend!</dd>

                                <dt>
                                    <span class="link">
                                        <div>Web Development</div>
                                    </span>
                                    <div class="acc-icon-wrap parallax-wrap">
                                        <div class="acc-button-icon parallax-element">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="accordion-content">I can develop your website with the latest technologies and
                                    best practices.</dd>

                                <dt>
                                    <span class="link">
                                        <div>SEO Optimization</div>
                                    </span>
                                    <div class="acc-icon-wrap parallax-wrap">
                                        <div class="acc-button-icon parallax-element">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="accordion-content">I can optimize your website for search engines to improve its
                                    visibility and drive organic traffic.</dd>

                                <dt>
                                    <span class="link">
                                        <div>UI/UX Design</div>
                                    </span>
                                    <div class="acc-icon-wrap parallax-wrap">
                                        <div class="acc-button-icon parallax-element">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="accordion-content">I can design intuitive and visually appealing user interfaces
                                    that enhance user experiences and streamline interactions.</dd>

                                <dt>
                                    <span class="link">
                                        <div>Web Hosting</div>
                                    </span>
                                    <div class="acc-icon-wrap parallax-wrap">
                                        <div class="acc-button-icon parallax-element">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="accordion-content">I can provide reliable and secure web hosting services to
                                    ensure your website is always up and running.</dd>

                            </dl>
                        </div>
                    </div>

                    <hr class="destroy">

                </div>
                <!--/Row -->


                <!-- Row -->
                <div class="content-row full row_padding_top row_padding_left row_padding_right text-align-center dark-section"
                    data-bgcolor="#0c0c0c">

                    <h2 class="big-title primary-font-title"><span class="has-mask-fill">My Clients</span></h2>
                    <p>I've worked with a variety of clients, from small businesses to large corporations. Here are some of
                        the projects I've worked on.</p>
                    <hr>
                    <hr>



                </div>
                <!--/Row -->


                <!-- Row -->
                <div class="content-row full row_padding_bottom dark-section" data-bgcolor="#0c0c0c">

                    <div class="moving-gallery bw-gallery">
                        <ul class="wrapper-gallery">
                            <li class="link">
                                <a target="_blank" href="https://imamgt.averroesinsanmulia.com/"><img
                                        src="{{ asset('assets/images/clients/1.png') }}" alt="client"></a>
                                <div class="moving-gallery-caption">Imam Muda</div>
                            </li>
                            <li class="link">
                                <a target="_blank" href="#"><img src="{{ asset('assets/images/clients/2.png') }}"
                                        alt="client"></a>
                                <div class="moving-gallery-caption">Syabab Studio</div>
                            </li>
                            <li class="link">
                                <a target="_blank" href="https://sidigs.com/"><img
                                        src="{{ asset('assets/images/clients/3.png') }}" alt="client"></a>
                                <div class="moving-gallery-caption">Sidigs</div>
                            </li>
                            <li class="link">
                                <a target="_blank" href="https://ppdb.averroesinsanmulia.com/"><img
                                        src="{{ asset('assets/images/clients/4.png') }}" alt="client"></a>
                                <div class="moving-gallery-caption">Averroes</div>
                            </li>
                            <li class="link">
                                <a target="_blank" href="#"><img src="{{ asset('assets/images/clients/5.png') }}"
                                        alt="client"></a>
                                <div class="moving-gallery-caption">Daris Pos</div>
                            </li>
                        </ul>
                    </div>

                    <div class="moving-gallery fw-gallery">
                        <ul class="wrapper-gallery">
                            <li class="link">
                                <a target="_blank" href="https://ppdb.averroesinsanmulia.com/"><img
                                        src="{{ asset('assets/images/clients/4.png') }}" alt="client"></a>
                                <div class="moving-gallery-caption">Averroes</div>
                            </li>
                            <li class="link">
                                <a target="_blank" href="https://technobit.id/"><img
                                        src="{{ asset('assets/images/clients/6.png') }}" alt="client"></a>
                                <div class="moving-gallery-caption">Technobit</div>
                            </li>
                            <li class="link">
                                <a target="_blank" href="#"><img src="{{ asset('assets/images/clients/7.png') }}"
                                        alt="client"></a>
                                <div class="moving-gallery-caption">Marboot</div>
                            </li>
                            <li class="link">
                                <a target="_blank" href="https://xonenetwork.my.id/"><img
                                        src="{{ asset('assets/images/clients/8.png') }}" alt="client"></a>
                                <div class="moving-gallery-caption">X1 Community</div>
                            </li>
                            <li class="link">
                                <a target="_blank" href="https://technobit.id/"><img
                                        src="{{ asset('assets/images/clients/6.png') }}" alt="client"></a>
                                <div class="moving-gallery-caption">Technobit</div>
                            </li>
                        </ul>
                    </div>

                </div>
                <!--/Row -->

                <!-- Row -->
                <div class="content-row row_padding_bottom light-section" data-bgcolor="#0c0c0c">
                    <div class="marquee-text-wrapper">
                        <h2 class="marquee-text bw big-title primary-font-title" style="color: #f9e8c9;">
                            Turning complex logic into clean code and high-performance systems.
                        </h2>
                    </div>

                    <hr>

                    <div class="marquee-text-wrapper">
                        <h2 class="marquee-text fw big-title primary-font-title" style="color: #f9e8c9;">
                            Ready to scale? Let's deploy your vision to production today!
                        </h2>
                    </div>
                </div>
                <!--/Row -->




            </div>
            <!--/Main Page Content -->

            <!-- Page Navigation -->
            <div id="page-nav">
                <div class="page-nav-wrap">
                    <div class="page-nav-caption content-full-width text-align-center height-title">
                        <div class="inner">
                            <div class="next-hero-subtitle caption-timeline"><span>EXPLORING MY AWESOME PROJECTS</span>
                            </div>
                            <a class="page-title next-ajax-link-page" data-type="page-transition"
                                data-centerline="PROJECTS" href="{{ route('projects') }}">
                                <div class="next-hero-title primary-font-title caption-timeline">
                                    <span>Projects</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Page Navigation -->


        </div>
        <!--/Main Content -->

    </div>
    <!--/Main -->
@endsection
