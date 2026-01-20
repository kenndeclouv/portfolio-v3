@extends('layouts.app')

@section('title', 'Archived Projects')
@section('bg-color', '#0c0c0c')
@section('menu-color', '#0c0c0c')
@section('content-theme', 'light-content')
@section('primary-color', '#F9E8C9')

@section('content')
    <!-- Main -->
    <div id="main">

        <!-- Main Content -->
        <div id="main-content">


            <!-- Showcase Slider Holder -->
            <div id="itemsWrapperLinks">
                <div id="itemsWrapper" class="webgl-fitthumbs fx-six">

                    <!-- kenndeclouv Slider -->
                    <div class="kenndeclouv-slider-wrapper showcase-gallery preview-mode-enabled">
                        <div class="kenndeclouv-slider">

                            <!-- kenndeclouv Main Slider -->
                            <div class="kenndeclouv-slider-viewport">

                                @foreach($projects as $project)
                                @php
                                    $i = ['s0','s25','s50','s75','s100'][rand(0,4)];
                                    $j = ["has-scale-medium","has-scale-small","has-scale-medium",""][rand(0,3)];
                                    $k = ["speed-50",""][rand(0,1)]
                                @endphp
                                    <div class="kenndeclouv-slide {{ $i }}">
                                        <div class="slide-events {{ $k }}">
                                            <div class="slide-inner" data-centerline="VIEW">
                                                <div class="slide-moving">
                                                    <div class="trigger-item" data-centerline="OPEN">
                                                        <div class="img-mask">
                                                            <a class="slide-link" data-type="page-transition" href="{{ route('project.index', $project->id)  }}">
                                                                <div class="parallax-wrap">
                                                                    <div class="parallax-element">
                                                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <div class="section-image trigger-item-link">
                                                                <img src="{{ asset($project->image) }}" class="item-image grid__item-img" alt="{{ $project->title }}">
                                                            </div>
                                                            <img src="{{ asset($project->image) }}" class="grid__item-img grid__item-img--large" alt="{{ $project->title }}">
                                                        </div>
                                                    </div>
                                                    <div class="slide-caption">
                                                        <div class="slide-title"><span>{{ $project->title }}</span></div>
                                                        <div class="slide-cat"><span>{{ $project->category }}</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                              </div>
                            <!--/kenndeclouv Main Slider -->


                            <div class="slider-fixed-content">
                                <div id="slide-inner-temporary" class="fadeout-element">
                                    <div id="slide-inner-caption" class="content-full-width text-align-center height-title">
                                        <div class="inner">
                                            <h1 class="slide-hero-title caption-timeline primary-font-title"><span>The Archive</span></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="gallery-zoom-wrapper"></div>
                        <div class="gallery-thumbs-wrapper"></div>
                        <div class="gallery-close-thumbs"></div>
                    </div>
                    <!--/kenndeclouv Slider -->
                </div>
            </div>
            <!-- Showcase Slider Holder -->
        </div>
        <!--/Main Content -->
    </div>
    <!--/Main -->
@endsection
