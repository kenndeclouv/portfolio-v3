@extends('layouts.app')

@section('title', 'Projects')
@section('bg-color', '#f9f9f9')
@section('menu-color', '#0c0c0c')
@section('content-theme', 'dark-content')
@section('primary-color', '#0c0c0c')

@section('content')
    <!-- Main -->
    <div id="main">
        <!-- Hero Section -->
        <div id="hero">
            <div id="hero-styles">
                <div id="hero-caption" class="content-full-width parallax-scroll-caption text-align-center height-title">
                    <div class="inner">
                        <h1 class="hero-title caption-timeline primary-font-title"><span>projects</span></h1>
                        <x-subhero>
                            Explore the projects that showcase my expertise in crafting unique digital experiences.
                        </x-subhero>
                    </div>
                </div>
                <div id="hero-footer" class="has-border">
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

                        <div class="filters-options-wrapper">
                            <a id="all" class="filter-option is_active" href="#" data-filter=""><span
                                    class="link" data-hover="All">All</span></a>
                            @php
                                $uniqueCategories = $projects->pluck('category')->unique();
                            @endphp
                            @foreach ($uniqueCategories as $category)
                                @php
                                    $filterName = str_replace(' ', '-', strtolower($category)) . '-filter';
                                @endphp
                                <a class="filter-option" href="#" data-filter="{{ $filterName }}"><span
                                        class="link"
                                        data-hover="{{ ucfirst($category) }}">{{ ucfirst($category) }}</span></a>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--/Hero Section -->


        <!-- Main Content -->
        <div id="main-content">
            <!-- Main Page Content -->
            <div id="main-page-content">





                <!-- Showcase Portfolio Holder -->
                <div id="itemsWrapperLinks">
                    <div id="itemsWrapper" class="webgl-fitthumbs fx-one">

                        <!-- Kenndeclouv Portfolio -->
                        <div class="showcase-portfolio">

                            @foreach ($projects as $project)
                                @php
                                    $filterName = str_replace(' ', '-', strtolower($project->category)) . '-filter';
                                @endphp
                                <div class="kenndeclouv-item {{ $filterName }}">
                                    <div class="slide-inner trigger-item{{ $project->has_video ? ' change-header' : '' }}"
                                        data-centerline="OPEN">
                                        <div class="img-mask">
                                            <div class="curtains" data-curtain-color="#f9f9f9">
                                                <div class="curtain-row"></div>
                                            </div>
                                            <a class="slide-link" data-type="page-transition"
                                                href="/project/{{ $project->id }}"></a>
                                            <div class="section-image trigger-item-link">
                                                <img src="{{ asset($project->image) }}" class="item-image grid__item-img"
                                                    alt="">
                                                @if ($project->has_video)
                                                    <div class="hero-video-wrapper">
                                                        <video loop="" muted="" class="bgvid">
                                                            <source src="{{ asset($project->video) }}" type="video/mp4">
                                                        </video>
                                                    </div>
                                                @endif
                                            </div>
                                            <img src="{{ asset($project->image) }}"
                                                class="grid__item-img grid__item-img--large" alt="">
                                        </div>
                                        <div class="slide-caption trigger-item-link-secondary">
                                            <div class="slide-title"><span>{{ $project->title }}</span></div>
                                            <div class="slide-date"><span>{{ $project->year }}</span></div>
                                            <div class="slide-cat"><span>{{ $project->category }}</span></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <!-- Kenndeclouv Portfolio -->

                    </div>
                </div>
                <!-- Showcase Portfolio Holder -->


            </div>
            <!--/Main Page Content -->


            <!-- Page Navigation -->
            <div id="page-nav">
                <div class="page-nav-wrap">
                    <div class="page-nav-caption content-full-width text-align-center height-title">
                        <div class="inner">
                            <div class="next-hero-subtitle caption-timeline"><span>EXPLORING OUR WORLD
                                    OF VISUAL AND INTERACTIVE DESIGN</span></div>
                            <a class="page-title next-ajax-link-page" data-type="page-transition"
                                data-centerline="ARCHIVE" href="{{ route('archive') }}">
                                <div class="next-hero-title primary-font-title caption-timeline">
                                    <span>The Archive</span>
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
