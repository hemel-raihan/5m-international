@php
    $navbar = \App\Models\Appearance_Settings\Navbarsetting::find(1);
    $page = \App\Models\Pagebuilder\Custompage::where([['type','=','main-page'],['status','=',true]])->orderBy('id','desc')->first();
@endphp
{{-- <div class="container-lg" style="background: #19a1dd;">
    <div class="container-md" style="background: white;"> --}}
        <div class="{{$page->container}}">
            <div class="main-div">
                <header id="header" style="background: {{$page->background_color}};" class=" header-size-sm" data-sticky-shrink="false">
                    <div class="" >
                        <div style="margin-left: {{$page->left_margin}}; margin-right: {{$page->right_margin}};" class=" header-row flex-column flex-lg-row justify-content-center justify-content-lg-start">

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
                            <div class="header-row" style="background-image: url({{asset('assets/frontend/images/dotted-left.png')}}); background-repeat: no-repeat; background-position: center center;">
                                <div class="header-misc mb-4 mb-lg-0 d-none d-lg-flex">

                                    <form style="margin-right: 20px; margin-top:20px;" class="top-search" action="search.html" method="get">
                                        <label style="margin-left: 20px; color:white; "> 5M International Limited</label>
                                    </form>

                                </div>

                            </div>
                        </div>

                    <div id="header-wrap" class="border-top border-f5">
                        <div class="" style="margin-left: {{$page->left_margin}}; margin-right: {{$page->right_margin}};">
                            <div class="header-row justify-content-between">

                                <div class="header-misc">

                                    <!-- Top Search
                                    ============================================= -->
                                    <div id="top-search" class="header-misc-icon">
                                        <a href="#" id="top-search-trigger"><i style="color: white;" class="icon-line-search"></i><i class="icon-line-cross"></i></a>
                                    </div><!-- #top-search end -->

                                </div>

                                <div id="primary-menu-trigger">
                                    <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                                </div>

                                <!-- Primary Navigation
                                ============================================= -->
                                <nav class="primary-menu">

                                    <ul class="menu-container">
                                        @isset($menuitems)
                                        @foreach ($menuitems as $menuitem)
                                        @if($menuitem->childs->isEmpty())
                                        @if ($menuitem->slug != null)
                                        <li class="menu-item">
                                            <a class="menu-link" href="{{route('page',$menuitem->slug)}}"><div>{{$menuitem->title}}</div></a>
                                        </li>
                                        @else
                                        <li class="menu-item">
                                            <a class="menu-link" href="{{$menuitem->url}}"><div>{{$menuitem->title}}</div></a>
                                        </li>
                                        @endif
                                        @else
                                        <li class="menu-item">
                                            @if ($menuitem->slug != null)
                                            <a class="menu-link" href="#"><div>{{$menuitem->title}}</div></a>
                                            @else
                                            <a class="menu-link" href="#"><div>{{$menuitem->title}}</div></a>
                                            @endif
                                            <ul class="sub-menu-container">
                                                @foreach ($menuitem->childs as $item)
                                                @if ($item->childs->isEmpty())
                                                <li class="menu-item">
                                                    <a class="menu-link" href="{{route('page',$item->slug)}}"><div>{{$item->title}}</div></a>
                                                </li>
                                                @else
                                                <li class="menu-item">
                                                    <a class="menu-link" href="#"><div>{{$item->title}}</div></a>
                                                    <ul class="sub-menu-container">
                                                        @foreach ($item->childs as $itemm)
                                                        @if ($itemm->childs->isEmpty())
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="{{route('page',$itemm->slug)}}"><div>{{$itemm->title}}</div></a>
                                                        </li>
                                                        @else
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="#"><div>{{$itemm->title}}</div></a>
                                                            <ul class="sub-menu-container">
                                                                @foreach ($itemm->childs as $itemmm)
                                                                <li class="menu-item">
                                                                    <a class="menu-link" href="{{route('page',$itemmm->slug)}}"><div>{{$itemmm->title}}</div></a>
                                                                </li>
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                        @endif
                                                        @endforeach

                                                    </ul>
                                                </li>
                                                @endif

                                                @endforeach

                                            </ul>
                                        </li>
                                        @endif
                                        @endforeach
                                        @endisset

                                            <li class="menu-item"> <a href="#" id="top-search-mobile"><i style="color: white;" class="icon-line-search"></i></a></li>

                                    </ul>

                                </nav><!-- #primary-menu end -->

                                <form class="top-search-form" method="GET" action="{{route('search')}}">
                                    <input  type="text" class="form-control" name="query" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
                                </form>

                            </div>

                        </div>
                    </div>
                    <div class="header-wrap-clone"></div>
                </header><!-- #header end -->
            </div>
        </div>

    {{-- </div>
</div> --}}



