@extends('admin.master')
@section('content')

    {{--<section class="content">--}}



    <form action="{{route('aboutusPost')}}" method="post" enctype="multipart/form-data">

        {{csrf_field()}}



        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>About Us</h2>
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

                    <div class="body">
                        <form id="form_validation" method="POST">

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="title" required>
                                    <label class="form-label">Title</label>
                                </div>
                            </div>


                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="subtitle" required>
                                    <label class="form-label">Founder</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <textarea id="ckeditor" name="details"  class="form-control no-resize" required></textarea>
                                </div>
                            </div>

                            <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>

                            <script>
                                CKEDITOR.replace( 'details' );
                            </script>

                            {{--<textarea class="form-control" id="blog_post"></textarea>--}}

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="file" class="form-control" name="image" required>
                                    <label class="form-label"></label>
                                </div>
                            </div>


                            <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        </div>

        </div>
        </div>
        </div>
        </div>

    </form>
    {{--</section>--}}
@endsection