@extends('admin.master')
@section('content')

    {{--<section class="content">--}}

    {{--<div class="row clearfix">--}}
    {!! Form::open(['route' => array('updateslider', $sliders->id),'enctype'=>'multipart/form-data','method'=>'patch']) !!}


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2></h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons"></i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>


            <div class="form-group form-float">
                <div class="form-line">
                    <input type="text" class="form-control" name="title" value="{{ $sliders->title }}" required>
                    <label class="form-label">Title</label>
                </div>
            </div>

            <div class="form-group form-float">
                <div class="form-line">
                    <input type="text" class="form-control" name="subtitle" value="{{ $sliders->subtitle }}" required>
                    <label class="form-label">Sub Title</label>
                </div>
            </div>




            <div class="form-group form-float">
                <div class="form-line">
                    <textarea id="ckeditor" name="text"   class="form-control no-resize" required>{{ $sliders->text }}</textarea>
                </div>
            </div>

            <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>

            <script>
                CKEDITOR.replace( 'text' );
            </script>



            <div class="form-group form-float">
                <div class="form-line">
                    <img src="{{asset('image/slider-photo/'.$sliders->image)}}" width="400px",height="400px">
                </div>

                <div class="form-control">

                    <label for="Image">Update Image</label>
                    <input type="file" name="image">

                </div>
            </div>

            <button class="btn btn-primary waves-effect" type="submit">UPDATE</button>
            <button class="btn btn-primary waves-effect" type="submit">CANCEL</button>
        </div>
    </div>
    </div>


    {{--</div>--}}
    {{--</div>--}}


    {!! Form::close() !!}
    {{--</div>--}}
    {{--</section>--}}
@endsection