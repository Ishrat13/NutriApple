@extends('admin.master')
@section('content')

    {{--<section class="content">--}}

    {{--<div class="row clearfix">--}}
    {!! Form::open(['route' => array('updateblog', $blog->id),'enctype'=>'multipart/form-data','method'=>'patch']) !!}


            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Add Blog</h2>
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
                            <input type="text" class="form-control" name="title" value="{{ $blog->title }}" required>
                            <label class="form-label">Title</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="author" value="{{ $blog->author }}" required>
                            <label class="form-label">Author</label>
                        </div>
                    </div>




                    <div class="form-group form-float">
                        <div class="form-line">
                            <textarea id="ckeditor" name="blog_post"   class="form-control no-resize" required>{{ $blog->blog_post }}</textarea>
                        </div>
                    </div>

                    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>

                    <script>
                        CKEDITOR.replace( 'blog_post' );
                    </script>



                    <div class="form-group form-float">
                        <div class="form-line">
                            <img src="{{asset('image/blog-photo/'.$blog->image)}}" width="400px",height="400px">
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