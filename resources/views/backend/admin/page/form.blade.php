@extends('layouts.app')

@section('styles')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- FILE UPLODE CSS -->
        <link href="{{ asset('assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css"/>
		<!-- INTERNAL Fancy File Upload css -->
		<link href="{{ asset('assets/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" />
        <!-- WYSIWYG EDITOR CSS -->
        <link href="{{ asset('assets/plugins/wysiwyag/richtext.css') }}" rel="stylesheet"/>

        <!-- SUMMERNOTE CSS -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.css') }}">

        <!-- INTERNAL Quill css -->
        <link href="{{ asset('assets/plugins/quill/quill.snow.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/plugins/quill/quill.bubble.css') }}" rel="stylesheet">
        <!-- INTERNAL SELECT2 CSS -->
        <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet"/>

		<!-- INTERNAL Jquerytransfer css-->
		<link rel="stylesheet" href="{{ asset('assets/plugins/jQuerytransfer/jquery.transfer.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/plugins/jQuerytransfer/icon_font/icon_font.css') }}">


		<!-- MULTI SELECT CSS -->
		<link rel="stylesheet" href="{{ asset('assets/plugins/multipleselect/multiple-select.css') }}">

		<!--INTERNAL IntlTelInput css-->
		<link rel="stylesheet" href="{{ asset('assets/plugins/intl-tel-input-master/intlTelInput.css') }}">

		<!-- INTERNAL multi css-->
		<link rel="stylesheet" href="{{ asset('assets/plugins/multi/multi.min.css') }}">






		        <!-- FILE UPLODE CSS -->
				<link href="{{ asset('assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css"/>

				<!-- SELECT2 CSS -->
				<link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet"/>

				<!-- INTERNAL Fancy File Upload css -->
				<link href="{{ asset('assets/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" />

				<!--BOOTSTRAP-DATERANGEPICKER CSS-->
				<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.css') }}">

				<!-- TIME PICKER CSS -->
				<link href="{{ asset('assets/plugins/time-picker/jquery.timepicker.css') }}" rel="stylesheet"/>

				<!-- INTERNAL Date Picker css -->
				<link href="{{ asset('assets/plugins/date-picker/date-picker.css') }}" rel="stylesheet" />

				<!-- INTERNAL Sumoselect css-->
				<link rel="stylesheet" href="{{ asset('assets/plugins/sumoselect/sumoselect.css') }}">

				<!-- INTERNAL Jquerytransfer css-->
				<link rel="stylesheet" href="{{ asset('assets/plugins/jQuerytransfer/jquery.transfer.css') }}">
				<link rel="stylesheet" href="{{ asset('assets/plugins/jQuerytransfer/icon_font/icon_font.css') }}">

				<!-- INTERNAL Bootstrap DatePicker css-->
				<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.css') }}">

				<!-- MULTI SELECT CSS -->
				<link rel="stylesheet" href="{{ asset('assets/plugins/multipleselect/multiple-select.css') }}">

				<!--INTERNAL IntlTelInput css-->
				<link rel="stylesheet" href="{{ asset('assets/plugins/intl-tel-input-master/intlTelInput.css') }}">

				<!-- INTERNAL multi css-->
				<link rel="stylesheet" href="{{ asset('assets/plugins/multi/multi.min.css') }}">

@endsection

@section('content')

						<!-- PAGE-HEADER -->
						<div class="page-header">
							<div>
								<h1 class="page-title">{{ isset($page) ? 'Edit ' : 'Create '}}Pages</h1>
								{{-- <ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Tables</a></li>
									<li class="breadcrumb-item active" aria-current="page">Table</li>
								</ol> --}}
							</div>
							<div class="ms-auto pageheader-btn">
								<a href="{{route('admin.pages.index')}}" class="btn btn-primary btn-icon text-white me-2">
									<span>
										{{-- <i class="fe fe-minus"></i> --}}
									</span> Back To PageList
								</a>
								{{-- <a href="#" class="btn btn-success btn-icon text-white">
									<span>
										<i class="fe fe-log-in"></i>
									</span> Export
								</a> --}}
							</div>
						</div>
						<!-- PAGE-HEADER END -->

                   <!-- ROW-1 OPEN -->
    <form method="POST" action="{{isset($page) ? route('admin.pages.update',$page->id) : route('admin.pages.store')}}" enctype="multipart/form-data">
    @csrf
    @isset($page)
    @method('PUT')
    @endisset
	<div class="row">
		{{-- Left Side --}}
		<div class="col-lg-9 col-xl-9 col-md-12 col-sm-12">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Create Page</h3>
				</div>
				<div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

					<div class="form-group">
						<label for="exampleInputname">Page Title</label>
						<input type="text" class="form-control @error('title') is-invalid @enderror" value="{{$page->title ?? old('title')}}" name="title" id="posttitle" onkeyup="myFunction()" placeholder="Post Name">
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
					</div>

     <!--               @isset($page)-->
     <!--               <div class="form-group">-->
					<!--	<label for="exampleInputname">Post Slug</label>-->
					<!--	<input type="text" class="form-control" value="{{$page->slug ?? old('slug')}}" name="slug" id="postslug" placeholder="Post Slug">-->
					<!--</div>-->
     <!--               @endisset-->



					<div class="form-group">
						<label for="exampleInputContent">Post Description</label>
						<div class="ql-wrapper ql-wrapper-demo bg-light">
							<!-- <div id="quillEditor">

							</div> -->
                            {{-- <textarea style="height: 200px;" class="form-control" id="" name="body">{{$post->body ?? old('body')}}</textarea> --}}

                            <textarea name="body" class="my-editor form-control" id="ckeditor" style="height: 200px;" cols="30" rows="10">{!!$page->body ?? old('page')!!}</textarea>

						</div>
					</div>


                    {{-- <input type="radio" name="link" checked id="test2">
                    <label for="css">Feature Image</label>
                    <input type="radio" name="link" id="test1">
                    <label for="html">Youtube Link</label>


                    <div class="form-group youtube" style="display:none">
						<label for="exampleInputname">Youtube Link</label>
						<input type="text" class="form-control" value="{{$post->youtube_link ?? old('youtube_link')}}" name="youtube_link" id="youtube_link" placeholder="Youtube Video Link">
					</div>

					<div class="form-group featur">
						<label class="form-label">Feature Image</label>
						<!-- <input id="demo" type="file" name="image" accept=".jpg, .png, image/jpeg, image/png" multiple="" class="ff_fileupload_hidden"> -->
                        <input type="file" data-height="100" class="dropify form-control" data-default-file="{{ isset($post) ? asset($post->image) : '' }}" name="image">
					</div> --}}

					<div class="form-group">
						<label class="form-label">Gallary Image</label>
						<!-- <input id="demo" type="file" name="image" accept=".jpg, .png, image/jpeg, image/png" multiple="" class="ff_fileupload_hidden"> -->
                        <input type="file" data-height="100" class="dropify @error('gallaryimage') is-invalid @enderror form-control" data-default-file="{{ isset($page) ? asset('uploads/pagegallary_image/'.$page->gallaryimage) : '' }}" multiple name="gallaryimage[]">
                        @error('gallaryimage')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
					</div>

				</div>
				<div class="card-footer text-end">
					<button type="submit" class="btn btn-success mt-1">
                        @isset($page)
                        <i class="fas fa-arrow-circle-up"></i>
                        Update
                        @else
                        <i class="fe fe-plus"></i>
                        Create
                        @endisset
                    </button>
					<a href="{{route('admin.posts.index')}}" class="btn btn-danger mt-1">Cancel</a>
				</div>
			</div>
		</div>

		{{-- Right Side --}}
		<div class="col-lg-3 col-xl-3 col-md-12 col-sm-12" style="float: left">

			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Create Page</h3>
				</div>
				<div class="card-body">
                    @isset($page)
					<div class="form-group">
						<div class="form-label">Status</div>
						<label class="custom-switch">
							<input type="checkbox" name="status" {{$page->status == true ? 'checked' : ''}} class="custom-switch-input ">
							<span class="custom-switch-indicator"></span>
						</label>
					</div>

                    @else

                    <div class="form-group">
						<div class="form-label">Status</div>
						<label class="custom-switch">
							<input type="checkbox" name="status" class="custom-switch-input ">
							<span class="custom-switch-indicator"></span>
						</label>
					</div>

                    @endisset

					{{-- @isset($editsidebars)

                    <div class="form-group">
						<label class="form-label">Left Sidebar</label>
						<select name="leftsidebar_id" class="form-control form-select select2" data-bs-placeholder="Select Sidebar">
							<option label="Select Country">Select Left Sidebar</option>
                            <option value="0" {{($page->leftsidebar_id == 0) ? 'selected' : ''}}>None</option>
                            @foreach ($editsidebars as $editsidebar)
                            @if($editsidebar->type == 'Left Side Bar')
                            <option value="{{$editsidebar->id}}" {{($page->leftsidebar_id == $editsidebar->id) ? 'selected' : ''}}>{{$editsidebar->title}}</option>
                            @endif
                            @endforeach
						</select>
					</div>


					<div class="form-group">
						<label class="form-label">Right Sidebar</label>
						<select name="rightsidebar_id" class="form-control  form-select select2" data-bs-placeholder="Select Sidebar">
							<option label="Select Country">Select Right Sidebar</option>
                            <option value="0" {{($page->rightsidebar_id == 0) ? 'selected' : ''}} >None</option>
                            @foreach ($editsidebars as $editsidebar)
                            @if($editsidebar->type == 'Right Side Bar')
							<option value="{{$editsidebar->id}}" {{($page->rightsidebar_id == $editsidebar->id) ? 'selected' : ''}} >{{$editsidebar->title}}</option>
                            @endif
                            @endforeach
						</select>
					</div>

                    @else

                    <div class="form-group">
						<label class="form-label">Left Sidebar</label>
						<select name="leftsidebar_id" class="form-control @error('leftsidebar_id') is-invalid @enderror form-select select2" data-bs-placeholder="Select Sidebar">
							<option value="">Select Left Sidebar</option>
                            <option value="0">None</option>
                            @foreach ($sidebars as $sidebar)
                            @if($sidebar->type == 'Left Side Bar')
                            <option value="{{$sidebar->id}}">{{$sidebar->title}}</option>
                            @endif
                            @endforeach
						</select>
                        @error('leftsidebar_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>


					<div class="form-group">
						<label class="form-label">Right Sidebar</label>
						<select name="rightsidebar_id" class="form-control @error('rightsidebar_id') is-invalid @enderror form-select select2" data-bs-placeholder="Select Sidebar">
							<option value="">Select Right Sidebar</option>
                            <option value="0">None</option>
                            @foreach ($sidebars as $sidebar)
                            @if($sidebar->type == 'Right Side Bar')
							<option value="{{$sidebar->id}}">{{$sidebar->title}}</option>
                            @endif
                            @endforeach
						</select>
                        @error('rightsidebar_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

                    @endisset --}}

                    <div class="form-group">
						<label class="form-label">Feature Image</label>
						<input type="file" name="image" class="dropify @error('image') is-invalid @enderror" data-default-file="{{ isset($page) ? asset('uploads/pagephoto/'.$page->image) : ''}}" data-bs-height="180"  />
                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
					</div>

                    {{-- <div class="form-group">
						<label class="form-label">File</label>
						<input type="file" name="files" class="dropify" data-default-file="{{ isset($post) ? asset('files/'.$post->files) : ''}}" data-bs-height="180"  />

					</div> --}}

				</div>

			</div>
		</div>

	</div>
    </form>
	<!-- ROW-1 CLOSED -->
@endsection('content')

@section('scripts')


    {{-- <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script> --}}
    <script src="//cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script>
<script>
	window.onload = function () {
		CKEDITOR.replace('ckeditor', {
	        filebrowserBrowseUrl: filemanager.ckBrowseUrl,
	    });
	}
</script>

<script>
$(document).ready(function() {
    $("input[id$='test1']").click(function() {
        var link = $(this).val();

        $("div.youtube").show();
        $("div.featur").hide();
    });

    $("input[id$='test2']").click(function() {
        var link = $(this).val();

        $("div.youtube").hide();
        $("div.featur").show();
    });
});
</script>


     {{-- <script>

function myFunction() {
    var title = document.getElementById('posttitle').value;
  document.getElementById("postslug").value = title;
}
//         document.getElementById('postslug').addEventListener('click', FILLSLUG);

// function FILLSLUG() {

//     var title = document.getElementById('posttitle');
//     var slug = document.getElementById('postslug');

//     slug.value = title.value;

// };
    </script> --}}


        <!-- <script>
            $('#select-all').click(function(event){
                if(this.checked)
                {
                    $(':checkbox').each(function(){
                        this.checked = true;
                    });
                }
                else
                {
                    $(':checkbox').each(function(){
                        this.checked = false;
                    });
                }
            });
         </script> -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


        <!-- CHARTJS JS -->
        <script src="{{ asset('assets/plugins/chart/Chart.bundle.js')}}"></script>
		<script src="{{ asset('assets/plugins/chart/utils.js')}}"></script>

        <!-- INTERNAL SELECT2 JS -->
        <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
		<script src="{{ asset('assets/js/select2.js') }}"></script>
		<!-- FILE UPLOADES JS -->
		<script src="{{ asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
		<script src="{{ asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>

		<!-- INTERNAL File-Uploads Js-->
		<script src="{{ asset('assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
        <script src="{{ asset('assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
        <script src="{{ asset('assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
        <script src="{{ asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
        <script src="{{ asset('assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>

		<!-- WYSIWYG Editor JS -->
		<script src="{{ asset('assets/plugins/wysiwyag/jquery.richtext.js') }}"></script>
		<script src="{{ asset('assets/plugins/wysiwyag/wysiwyag.js') }}"></script>

		<!-- INTERNAL multi js-->
		<script src="{{ asset('assets/plugins/multi/multi.min.js') }}"></script>

				<!-- MULTI SELECT JS-->
				<script src="{{ asset('assets/plugins/multipleselect/multiple-select.js') }}"></script>
				<script src="{{ asset('assets/plugins/multipleselect/multi-select.js') }}"></script>

						<!-- FORMELEMENTS JS -->
		<script src="{{ asset('assets/js/formelementadvnced.js') }}"></script>
		<script src="{{ asset('assets/js/form-elements.js') }}"></script>


		<!-- INTERNAL jquery transfer js-->
		<script src="{{ asset('assets/plugins/jQuerytransfer/jquery.transfer.js') }}"></script>

		<!-- SUMMERNOTE JS -->
		<script src="{{ asset('assets/plugins/summernote/summernote-bs4.js') }}"></script>

		<!-- FORMEDITOR JS -->
		<script src="{{ asset('assets/plugins/quill/quill.min.js') }}"></script>
		<script src="{{ asset('assets/js/form-editor2.js') }}"></script>

@endsection
