@extends('admin.master')
@section('content')


    <form action="{{route('choosePost')}}" method="post" enctype="multipart/form-data">

        {{csrf_field()}}



        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Add Why Choose Us</h2>
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
                                    <input type="text" class="form-control" name="icon" required>
                                    <label class="form-label">Icon</label>
                                </div>
                            </div>


                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="title" required>
                                    <label class="form-label">Title</label>
                                </div>
                            </div>


                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="description" required>
                                    <label class="form-label">Description</label>
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


