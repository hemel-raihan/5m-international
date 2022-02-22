@extends('frontend_theme.corporate.front_layout.app')

@section('styles')

@endsection

@section('content')



                {{-- <div class="single-post mb-0" style="width: 80%; margin-left:10%;"> --}}
                    <div class="single-post mb-0" >

                    <!-- Single Post
                    ============================================= -->
                    <div class="entry clearfix">

                        
                    <div class="center mb-5">
                        <h1 class="fw-bold display-4">Contact Us..</h1>
                    </div>
                    {{-- <div class="form-widget" data-loader="button" data-alert-type="inline"> --}}

                        <div class="row">
                            <div class="col-6">
                                <form id="coming-soon-registration" class="mb-0" action="{{route('contact.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-process"></div>
                                    <div class="row form-section px-4 py-5 bg-white rounded shadow-lg">
                                        <div class="col-12 form-group">
                                            <label>Name:</label>
                                            <input type="text" name="name" id="landing-enquiry-name" class="form-control form-control-lg required" value="" placeholder="John Doe">
                                        </div>
                                        <div class="col-12 form-group">
                                            <label>Email:</label>
                                            <input type="email" name="email" id="landing-enquiry-email" class="form-control form-control-lg required" value="" placeholder="user@company.com">
                                        </div>
                                        <div class="col-12 form-group">
                                            <label>Phone:</label>
                                            <input type="tel" name="phone" id="landing-enquiry-phone" class="form-control form-control-lg required" value="" placeholder="123-45-678" maxlength="12">
                                        </div>
                                        <div class="col-12 form-group">
                                            <label>Message</label>
                                            <textarea name="msg" id="landing-enquiry-phone" class="form-control form-control-lg required" value="" placeholder="Write your message" ></textarea>
                                        </div>
                                        <div class="col-12 d-none">
                                            <input type="text" id="landing-enquiry-botcheck" name="landing-enquiry-botcheck" value="" />
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" name="landing-enquiry-submit" class="btn w-100 text-white bg-color rounded-3 py-3 fw-semibold text-uppercase mt-2">Get Notified</button>
                                        </div>

                                        <input type="hidden" name="prefix" value="landing-enquiry-">
                                    </div>
                                </br>
                                </br>
                                    {{-- <div class="result-section center">
                                        <div class="form-result"></div>
                                        <a class="btn w-100 text-white btn-danger rounded-3 py-3 fw-semibold text-uppercase mt-3 button-back">Thank You.</a>
                                    </div> --}}
                                </form>
                            </div>
                            <div class="col-6">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.8003818461652!2d90.39779751536324!3d23.79012169317382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c713baad70ab%3A0x1db8512cf4fe0bbf!2s5M%20INTERNATIONAL%20LTD.!5e0!3m2!1sen!2sbd!4v1645249159049!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>






                </div>
    </div>



@endsection()

@section('scripts')

@endsection
