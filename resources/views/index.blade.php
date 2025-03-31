@extends('layouts.app')

@section('title', 'Helloo!')
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
                        <h1 class="hero-title caption-timeline primary-font-title">
                            <span>kenndeclouv</span>
                        </h1>
                        <x-subhero>
                            Beyond pixels and code, I weave stories of functionality and design. <br> Dive into my world of
                            creative problem-solving and let's bring your vision to life
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
                        <div id="info-text">Featured Projects</div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Hero Section -->


        <!-- Main Content -->
        <div id="main-content">
            <!-- Main Page Content -->
            <div id="main-page-content" class="content-full-width">

                <!-- Row -->
                <div class="content-row full text-align-center row_padding_left row_padding_right dark-section"
                    data-bgcolor="#0c0c0c">

                    <div id="itemsWrapperLinks">
                        <div id="itemsWrapper" class="webgl-fitthumbs fx-one">

                            <div class="overlapping-gallery">

                                @foreach ($projects as $project)
                                    <div class="overlapping-image">
                                        <div class="overlapping-image-inner trigger-item {{ $project->theme == 'dark-content' ? 'change-header' : '' }}"
                                            data-centerline="OPEN">
                                            <div class="img-mask">
                                                <a class="slide-link" data-type="page-transition"
                                                    href="{{ route('project.index', $project->id) }}"></a>
                                                <div class="section-image trigger-item-link">
                                                    <img src="{{ asset($project->image) }}"
                                                        class="item-image grid__item-img" alt="{{ $project->title }}">
                                                    @if ($project->has_video)
                                                        <div class="hero-video-wrapper">
                                                            <video loop="" muted="" class="bgvid">
                                                                <source src="{{ asset($project->video) }}" type="video/mp4">
                                                            </video>
                                                        </div>
                                                    @endif
                                                </div>
                                                <img src="{{ asset($project->image) }}"
                                                    class="grid__item-img grid__item-img--large"
                                                    alt="{{ $project->title }}">
                                            </div>
                                            <div class="slide-caption trigger-item-link-secondary" >
                                                <div class="slide-title primary-font-title">
                                                    <span>{{ $project->title }}</span>
                                                </div>
                                                <div class="slide-date"><span>{{ $project->year }}</span></div>
                                                <div class="slide-cat"><span>{{ $project->category }}</span></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                        </div>
                    </div>

                    <hr>

                    <p>
                        <span class="has-opacity">CRAFTING WEBSITES WHERE THE ELEGANCE</span>
                        <br class="destroy">
                        <span class="has-opacity">OF DESIGN INTERSECTS WITH THE SCIENCE OF SELLING
                            PRODUCTS.</span>
                    </p>

                    <div class="button-box text-align-center has-animation fadeout-element">
                        <div class="kenndeclouv-button-wrap parallax-wrap hide-ball">
                            <div class="kenndeclouv-button parallax-element">
                                <div class="button-border outline rounded parallax-element-second">
                                    <a class="ajax-link" href="{{ route('projects') }}" data-type="page-transition">
                                        <span data-hover="See All Works">See All Works</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!--/Row -->


                <!-- Row -->
                <div class="content-row full row_padding_left row_padding_right dark-section fadeout-element"
                    data-bgcolor="#0c0c0c">

                    <div class="list-rotator-wrapper">
                        <div class="list-rotator-title">MY SERVICES</div>
                        <div class="list-rotator-pin">
                            <ul class="list-rotator primary-font-title">
                                <li>Web Design</li>
                                <li>Web Development</li>
                                <li>Optimized SEO</li>
                                <li>UI/UX Design</li>
                                <li>Reliable Web Hosting Options</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!--/Row -->


                <!-- Row -->
                <div class="content-row dark-section text-align-center" data-bgcolor="#0c0c0c">

                    <div class="one_third has-animation" data-delay="100">

                        <div class="box-icon-wrapper block-boxes">
                            <div class="box-icon">
                                <i class="fa fa-paper-plane fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="box-icon-content">
                                <h6 class="no-margins"><a href="mailto:kenndeclouv@gmail.com"
                                        class="link"><span>kenndeclouv@gmail.com</span></a></h6>
                                <p>Email</p>
                            </div>
                        </div>

                    </div>

                    <div class="one_third has-animation" data-delay="200">

                        <div class="box-icon-wrapper block-boxes">
                            <div class="box-icon">
                                <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="box-icon-content">
                                <h6 class="no-margins"><a href="https://g.co/kgs/aLtXJPz" class="link"
                                        target="_blank">Puncak Dieng,
                                        Malang, ID</a></h6>
                                <p>Address</p>
                            </div>
                        </div>

                    </div>

                    <div class=" one_third last has-animation" data-delay="300">

                        <div class="box-icon-wrapper block-boxes">
                            <div class="box-icon">
                                <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="box-icon-content">
                                <h6 class="no-margins"><a href="https://wa.me/6281336446666" class="link"
                                        target="_blank">+62 813 3644
                                        6666</a></h6>
                                <p>Phone</p>
                            </div>
                        </div>

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
                            <div class="next-hero-subtitle caption-timeline"><span>EXPLORE MY ADVENTURE</span></div>
                            <a class="page-title next-ajax-link-page" data-type="page-transition"
                                data-centerline="ABOUT ME" href="{{ route('about') }}">
                                <div class="next-hero-title primary-font-title caption-timeline">
                                    <span>About Me</span>
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
