@php
    $navbar = \App\Models\Appearance_Settings\Navbarsetting::find(1);
@endphp
<header id="header" class="container-sm header-size-sm" data-sticky-shrink="false">
    <div class="containe" style="background: #19a1dd;">

        <div class="header-row flex-column flex-lg-row justify-content-center justify-content-lg-start">

            <!-- Logo
            ============================================= -->
            @php
                $logo  = \App\Models\Admin\Setting::where([['id',1]])->orderBy('id','desc')->first();
            @endphp
            @isset($logo)
            <div id="logo" class="me-0 me-lg-auto">
                <a href="{{route('home')}}" class="standard-logo" data-dark-logo="{{asset('uploads/settings/'.$logo->logo)}}"><img src="{{asset('uploads/settings/'.$logo->logo)}}" alt="Canvas Logo"></a>
                <a href="{{route('home')}}" class="retina-logo" data-dark-logo="{{asset('uploads/settings/'.$logo->logo)}}"><img src="{{asset('uploads/settings/'.$logo->logo)}}" alt="Canvas Logo"></a>
            </div><!-- #logo end -->
            @endisset


            <div class="header-misc mb-4 mb-lg-0 d-none d-lg-flex">

                <form style="margin-right: 20px; margin-top:20px;" class="top-search" action="search.html" method="get">
                    <label style="margin-left: 20px; color:white; "> 5M International Limited</label> <input type="text" name="q" class="form-contro" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off"> <i style="background: black; color: white; font-weight:bold; margin-right: 10px;" class="icon-line-search"></i>
                 </form>

            </div>

        </div>

    </div>

    <div id="header-wrap" class="" style="background: #008fce;">
        <div class="">
            <div class="header-row justify-content-between">

                {{-- <div class="header-misc">

                    <!-- Top Search
                    ============================================= -->
                    <div id="top-search" class="header-misc-icon">
                        <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
                    </div><!-- #top-search end -->

                </div> --}}

                <div id="primary-menu-trigger">
                    <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                </div>

                <!-- Primary Navigation
                ============================================= -->
                <nav class="primary-menu">

                    <ul class="menu-container">
                        <li class="menu-item">
                            <a class="menu-link" href="index.html"><div>Home</div></a>
                            <ul class="sub-menu-container">
                                <li class="menu-item">
                                    <a class="menu-link" href="intro.html#section-niche"><div>Niche Demos</div></a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="intro.html#section-onepage"><div>One-Page Demos</div></a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="index-corporate.html"><div>Home - Corporate</div></a>
                                    <ul class="sub-menu-container">
                                        <li class="menu-item">
                                            <a class="menu-link" href="index-corporate.html"><div>Corporate - Layout 1</div></a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="index-corporate-2.html"><div>Corporate - Layout 2</div></a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="index-corporate-3.html"><div>Corporate - Layout 3</div></a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="index-corporate-4.html"><div>Corporate - Layout 4</div></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="index-portfolio.html"><div>Home - Portfolio</div></a>
                                    <ul class="sub-menu-container">
                                        <li class="menu-item">
                                            <a class="menu-link" href="index-portfolio.html"><div>Portfolio - Layout 1</div></a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="index-portfolio-2.html"><div>Portfolio - Layout 2</div></a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="index-portfolio-3.html"><div>Portfolio - Masonry</div></a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="index-portfolio-4.html"><div>Portfolio - AJAX</div></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="index-blog.html"><div>Home - Blog</div></a>
                                    <ul class="sub-menu-container">
                                        <li class="menu-item">
                                            <a class="menu-link" href="index-blog.html"><div>Blog - Layout 1</div></a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="index-blog-2.html"><div>Blog - Layout 2</div></a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="index-blog-3.html"><div>Blog - Layout 3</div></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="index-shop.html"><div>Home - Shop</div></a>
                                    <ul class="sub-menu-container">
                                        <li class="menu-item">
                                            <a class="menu-link" href="index-shop.html"><div>Shop - Layout 1</div></a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="index-shop-2.html"><div>Shop - Layout 2</div></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="index-magazine.html"><div>Home - Magazine</div></a>
                                    <ul class="sub-menu-container">
                                        <li class="menu-item">
                                            <a class="menu-link" href="index-magazine.html"><div>Magazine - Layout 1</div></a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="index-magazine-2.html"><div>Magazine - Layout 2</div></a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="index-magazine-3.html"><div>Magazine - Layout 3</div></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="landing.html"><div>Home - Landing Page</div></a>
                                    <ul class="sub-menu-container">
                                        <li class="menu-item">
                                            <a class="menu-link" href="landing.html"><div>Landing Page - Layout 1</div></a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="landing-2.html"><div>Landing Page - Layout 2</div></a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="landing-3.html"><div>Landing Page - Layout 3</div></a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="landing-4.html"><div>Landing Page - Layout 4</div></a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="landing-5.html"><div>Landing Page - Layout 5</div></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="index-fullscreen-image.html"><div>Home - Full Screen</div></a>
                                    <ul class="sub-menu-container">
                                        <li class="menu-item">
                                            <a class="menu-link" href="index-fullscreen-image.html"><div>Full Screen - Image</div></a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="index-fullscreen-slider.html"><div>Full Screen - Slider</div></a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="index-fullscreen-video.html"><div>Full Screen - Video</div></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="index-onepage.html"><div>Home - One Page</div></a>
                                    <ul class="sub-menu-container">
                                        <li class="menu-item">
                                            <a class="menu-link" href="index-onepage.html"><div>One Page - Default</div></a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="index-onepage-2.html"><div>One Page - Submenu</div></a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="index-onepage-3.html"><div>One Page - Dots Style</div></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item mega-menu mega-menu-small">
                                    <a class="menu-link" href="#"><div>Extras</div></a>
                                    <div class="mega-menu-content">
                                        <div class="row mx-0">
                                            <ul class="sub-menu-container mega-menu-column col">
                                                <li class="menu-item">
                                                    <a class="menu-link" href="index-wedding.html"><div>Wedding</div></a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="index-restaurant.html"><div>Restaurant</div></a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="index-events.html"><div>Events</div></a>
                                                </li>
                                            </ul>
                                            <ul class="sub-menu-container mega-menu-column col">
                                                <li class="menu-item">
                                                    <a class="menu-link" href="index-parallax.html"><div>Parallax</div></a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="index-app-showcase.html"><div>App Showcase</div></a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="index-boxed.html"><div>Boxed Layout</div></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </nav><!-- #primary-menu end -->


            </div>

        </div>
    </div>

    {{-- <div id="header-wrap" class="border-top border-f5"> --}}

    {{-- <div class="header-wrap-clone"></div> --}}
</header><!-- #header end -->
