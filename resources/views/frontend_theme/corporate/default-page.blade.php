@extends('frontend_theme.corporate.front_layout.app')

@section('styles')

@endsection

@section('content')

                    @php
                    $page = \App\Models\Pagebuilder\Custompage::where([['type','=','main-page'],['status','=',true]])->orderBy('id','desc')->first();
                    @endphp



                                @if ($page->rightsidebar_id == 0 && $page->leftsidebar_id == 0)
                                <div class="postcontent col-lg-12">
                                @elseif(!$page->rightsidebar_id == 0 && $page->leftsidebar_id == 0)
                                <div class="postcontent col-lg-9">
                                @elseif($page->rightsidebar_id == 0 && !$page->leftsidebar_id == 0)
                                <div class="postcontent col-lg-9">
                                @elseif(!$page->rightsidebar_id == 0 && !$page->leftsidebar_id == 0)
                                <div class="postcontent col-lg-6">
                                @endif

                                    {{-- <div class="single-post mb-0" style="width: 80%; margin-left:10%;"> --}}
                                        <div class="single-post mb-0" >

                                        <!-- Single Post
                                        ============================================= -->
                                        <div class="entry clearfix">

                                            <!-- Entry Title
                                            ============================================= -->
                                            <div class="entry-title">
                                                <h2>{{$custom_page->title}}</h2>
                                            </div><!-- .entry-title end -->
                                        </br>
                                        <div class="body_content">
                                            {!!$custom_page->body!!}
                                        </div>




                                        {{-- @if ($blog->files)

                                        <a target="blank" href="{{ asset('uploads/files/'.$page->files) }}">
                                            <img src="{{ asset('frontend/images/pdf.png') }}" alt="001-converted (1)_compressed (1).pdf" class="file-icon" />
                                            Click here to View in new tab
                                        </a>
                                    </br>
                                        <div class="row justify-content-center">
                                            <iframe src="{{ asset('uploads/files/'.$blog->files) }}" width="50%" height="800">
                                                    This browser does not support PDFs. Please download the PDF to view it: <a href="{{ asset('uploads/files/'.$blog->files) }}">Download PDF</a>
                                            </iframe>
                                        </div>
                                        @endif --}}


                                        @if(!$custom_page->gallaryimage == null)

                                        <div class="masonry-thumbs grid-container grid-5" data-big="1" data-lightbox="gallery">
                                            @php
                                                $galaryimage = explode("|", $custom_page->gallaryimage);
                                            @endphp
                                            @foreach ($galaryimage as $key => $images)
                                            <a class="grid-item" href="{{asset('uploads/pagegallary_image/'.$images)}}" data-lightbox="gallery-item"><img src="{{asset('uploads/pagegallary_image/'.$images)}}" alt="Gallery Thumb 1"></a>
                                            @endforeach
                                        </div>
                                        @endif

                                    </div>
                        </div>




@endsection()

@section('scripts')

@endsection
