@extends('layouts.app')

@section('title', 'Helloo Friend!')
@section('bg-color', '#f9f9f9')
@section('menu-color', '#0c0c0c')
@section('content-theme', 'dark-content')
@section('primary-color', '#0c0c0c')

@section('content')
    <!-- Main -->
    <div id="main">
        <div id="hero">
            <div id="hero-styles">
                <div id="hero-caption" class="content-full-width parallax-scroll-caption text-align-center height-title">
                    <div class="inner">
                        <h1 class="hero-title caption-timeline primary-font-title"><span>Contact</span></h1>
                        <x-subhero>
                            Contact me now to discuss your project.
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
        <div id="main-content">
            <div id="main-page-content" class="content-max-width">
                <div class="content-row row_padding_top row_padding_bottom text-align-center">

                    <h2 class="big-title has-mask-fill primary-font-title">Let's Talk</h2>

                    <hr>
                    <hr>

                    <!-- Contact Formular -->
                    <div id="contact-formular">

                        <div id="message"></div>

                        <form method="POST" action="{{ route('contact.store') }}">
                            @csrf
                            <div class="name-box">
                                <input name="name" type="text" id="name" size="30"
                                    value="{{ old('name') }}" autocomplete="false" placeholder="What's Your Name"><label
                                    class="input_label"></label>
                            </div>
                            <div class="email-box">
                                <input name="email" type="text" id="email" size="30"
                                    value="{{ old('email') }}" autocomplete="false" placeholder="Your Email"><label class="input_label"></label>
                            </div>
                            <div class="message-box">
                                <textarea name="comments" cols="40" rows="4" id="comments" autocomplete="false" placeholder="Tell Us About Your Project">{{ old('comments') }}</textarea><label class="input_label slow"></label>
                            </div>

                            <div class="verify-box">
                                <ul class="verify-sum">
                                    @php
                                        $i = rand(1, 10);
                                        $j = rand(3, 15);
                                    @endphp
                                    <li>{{ $i }}</li>
                                    <li>+</li>
                                    <li>{{ $j }}</li>
                                    <li>=</li>
                                </ul>
                                <input type="hidden" name="i" value="{{ $i }}">
                                <input type="hidden" name="j" value="{{ $j }}">
                                <input name="verify" type="text" id="verify" size="4"
                                    value="{{ old('verify') }}">
                                <p class="required"><span>*</span> Captcha Validation</p>
                            </div>

                            <div class="button-box">
                                <div class="kenndeclouv-button-wrap parallax-wrap link">
                                    <div class="kenndeclouv-button parallax-element">
                                        <div class="button-border rounded outline "><input type="submit"
                                                class="send_message" id="submit" value="Send Message"></div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <!--/Contact Formular -->
                </div>
                <!--/Row -->


                <!-- Row -->
                <div class="content-row text-align-center">

                    <div class="one_third has-animation" data-delay="100">

                        <div class="box-icon-wrapper block-boxes">
                            <div class="box-icon">
                                <i class="fa fa-paper-plane fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="box-icon-content">
                                <h6 class="no-margins"><a href="mailto:kenn@kenndeclouv.my.id"
                                        class="link"><span>kenn@kenndeclouv.my.id</span></a></h6>
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
                                <h6 class="no-margins">
                                    <a href="https://maps.app.goo.gl/Dh31uqdegUrBuwT67" target="_blank" class="link">
                                        <span>Puncak Dieng, Malang, Jawa Timur, ID</span>

                                    </a>
                                </h6>
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
                                <h6 class="no-margins">
                                    <a href="https://wa.me/6281336446666" target="_blank" class="link">
                                        <span>+62 813 3644 6666</span>
                                    </a>
                                </h6>
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
                            <div class="next-hero-subtitle caption-timeline"><span>INTERESTED TO DISCOVER MORE FROM MY
                                    WORKS?</span></div>
                            <a class="page-title next-ajax-link-page" data-type="page-transition" data-centerline="GO TO"
                                href="{{ route('projects') }}">
                                <div class="next-hero-title primary-font-title caption-timeline"><span>Projects</span>
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
