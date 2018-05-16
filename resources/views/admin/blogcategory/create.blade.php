@extends('admin.master')
@section('content')

    {{--<section class="content">--}}

        <div class="container-fluid">
            <div class="block-header">
                <h2>Add Blog Category</h2>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">


                        <form action="{{route('categorystore')}}" method="post" enctype="multipart/form-data">

    {{csrf_field()}}

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="category" required>
                                    <label class="form-label">Category</label>
                                </div>
                            </div>

                            <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            <button class="btn btn-primary waves-effect" type="submit">CANCEL</button>

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