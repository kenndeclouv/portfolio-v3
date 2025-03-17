@extends('layouts.app')

@section('title', $project->title . ' Project')
@section('bg-color', '#f9f9f9')
@section('menu-color', '#0c0c0c')
@section('content-theme', $project->theme)
@section('primary-color', '#F9E8C9')

@section('content')
    <!-- Main -->
    <div id="main">
        <!-- Hero Section -->
        <div id="hero" class="has-image">
            <div id="hero-styles">
                <div id="hero-caption" class="content-full-width height-title">
                    <div class="inner">
                        <h1 class="hero-title caption-timeline primary-font-title"><span>{{ $project->title }}</span></h1>
                    </div>
                </div>
                <div id="hero-description" class="content-full-width">
                    <div class="inner">
                        <p class="bigger has-opacity">{{ $project->description }}</p>
                        <br>
                        <p class="bigger no-margins">Date</p>
                        <p class="has-opacity">{{ $project->year }}</p>
                        <p class="bigger no-margins">Role</p>
                        <p class="has-opacity no-margins">{{ $project->as }}</p>
                        <hr>
                        <p class="has-animation">[ <a class="link-text" target="_blank" href="{{ $project->link }}"><span
                                    class="link" data-hover="View Website">View Website</span></a> ]</p>
                    </div>
                </div>
                <div id="hero-footer">
                    <div class="hero-footer-left">
                        <div class="button-wrap right scroll-down">
                            <div class="icon-wrap parallax-wrap">
                                <div class="button-icon parallax-element">
                                    <i class="arrow-icon-down"></i>
                                </div>
                            </div>
                            <div class="button-text sticky right"><span data-hover="Scroll to Explore">Scroll to
                                    Explore</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="hero-image-wrapper">
            <div id="hero-background-layer" class="parallax-scroll-image">
                <div id="hero-bg-image" style="background-image:url({{ asset($project->image) }})"></div>
            </div>
        </div>
        <!--/Hero Section -->
        <!-- Main Content -->
        <div id="main-content">
            <div id="main-page-content">
                <!-- Row -->
                <div class="content-row row_padding_top row_padding_bottom light-section change-header-color"
                    data-bgcolor="#fff">

                    <div class="one_half"></div>

                    <div class="one_half last">
                        <h1 class="primary-font-title has-mask-fill">The Challenge</h1>
                        <p><span class="has-opacity">{{ $project->challenge }}</span></p>
                    </div>

                </div>
                <!--/Row -->
                <!-- Row -->
                <div class="content-row light-section change-header-color" data-bgcolor="#fff">

                    <div class="one_half vertical-parallax" data-startparallax="0" data-endparallax="0.3">
                        <figure>
                            <a href="{{ asset($project->first_preview) }}" class="image-link"><img
                                    src="{{ asset($project->first_preview) }}" alt="Image Title"></a>
                        </figure>
                    </div>
                    <div class="one_half last vertical-parallax" data-startparallax="0" data-endparallax="0.15">
                        <figure>
                            <a href="{{ asset($project->second_preview) }}" class="image-link"><img
                                    src="{{ asset($project->second_preview) }}" alt="Image Title"></a>
                        </figure>
                    </div>

                </div>
                <!--/Row -->
                <!-- Row -->
                <div class="content-row row_padding_bottom light-section change-header-color" data-bgcolor="#fff">

                    <div class="one_half">
                        <h1 class="primary-font-title has-mask-fill">The Research</h1>
                        <p><span class="has-opacity">DESIGNING ONLINE PLATFORMS WHERE THE ARTISTRY OF VISUAL APPEAL
                                CONVERGES WITH THE STRATEGY OF PRODUCT MARKETABILITY.</span></p>
                    </div>

                    <div class="one_half last"></div>

                </div>
                <!--/Row -->
                <!-- Row -->
                <div class="content-row full dark-section" data-bgcolor="#171717">

                    <figure class="has-parallax">
                        <img src="{{ asset($project->second_image ?? $project->image) }}" alt="Image Title">
                    </figure>

                </div>
                <!--/Row -->
                <!-- Row -->
                <div class="content-row row_padding_top light-section change-header-color text-align-center"
                    data-bgcolor="#fff">
                    <h1 class="primary-font-title has-mask-fill">Project Preview</h1>
                    {{-- <p>
                        <span class="has-opacity">CRAFTING WEBSITES WHERE THE ELEGANCE</span>
                        <br class="destroy">
                        <span class="has-opacity">OF DESIGN INTERSECTS WITH THE SCIENCE OF SELLING PRODUCTS.</span>
                    </p> --}}
                    <hr>
                    <hr>
                </div>
                <!--/Row -->
                <!-- Row -->
                <div class="content-row full light-section" data-bgcolor="#fff" style="margin-bottom: 50px">
                    <div class="kenndeclouv-slider-wrapper content-slider looped-carousel has-animation autocenter dark-cursor">
                        <div class="kenndeclouv-slider">
                            <div class="kenndeclouv-slider-viewport">
                                @if ($project->third_preview)
                                <div class="kenndeclouv-slide"><div class="slide-img"><img src="{{ asset( $project->third_preview ) }}" alt="Image Title"></div></div>
                                @endif
                                @if ($project->fourth_preview)
                                <div class="kenndeclouv-slide"><div class="slide-img"><img src="{{ asset( $project->fourth_preview ) }}" alt="Image Title"></div></div>
                                @endif
                                @if ($project->fifth_preview)
                                <div class="kenndeclouv-slide"><div class="slide-img"><img src="{{ asset( $project->fifth_preview ) }}" alt="Image Title"></div></div>
                                @endif
                            </div>
                        </div>
                        
                        <div class="kenndeclouv-controls">
                            <div class="kenndeclouv-button-next slider-button-next"></div>
                            <div class="kenndeclouv-button-prev slider-button-prev"></div>
                            <div class="kenndeclouv-pagination"></div>
                        </div>
                    </div>

                </div>
                <!--/Row -->
            </div>
            <!--/Main Page Content -->
            <!-- Project Navigation -->
            <div id="project-nav" class="" style="background-color: #0c0c0c">
                <div class="next-project-wrap">

                    <p class="all-works"><a class="link-text ajax-link" data-type="page-transition"
                            href="{{ route('projects') }}"><span class="link" data-hover="View All Works">View All
                                Works</span></a></p>

                    <div class="next-project-caption text-align-center content-full-width height-title">
                        <div class="next-caption-wrapper">
                            <div class="caption-wrapper">
                                <a class="next-ajax-link-project auto-trigger" data-type="page-transition"
                                    href="{{ route('project.index', $nextProjectLink )  }}" data-firstline="Next"
                                    data-secondline="Project"></a>
                                <div class="next-caption">
                                    <div class="next-hero-subtitle"><span></span></div>
                                    <p style="font-size: x-large; text-transform: uppercase; color: #F9E8C9A0;">{{ $nextProjectTitle }}</p>
                                    <div class="next-hero-title primary-font-title" style="color: #F9E8C9;"><span>next project</span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="next-hero-progress"><span></span></div>

                    <div class="next-project-image-wrapper">
                        <div class="next-project-image">
                            <div class="next-project-image-bg"
                                style="background-image:url({{ asset($nextProjectImage) }})"></div>
                        </div>
                    </div>

                </div>
            </div>
            <!--/Project Navigation -->
        </div>
        <!--/Main Content -->
    </div>
    <!--/Main -->

@endsection
