@extends('admin.master')
@section('content')

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        BASIC TABLES
                        <small>Basic example without any additional modification classes</small>
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Subtitle</th>
                            <th>Details</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($about as $a)
                            <tr>
                                <td>{{ $a->id }}</td>
                                <td>{{ $a->title }} </td>
                                <td>{{ $a->subtitle }}</td>
                                <td>{{ $a->details }}</td>
                                {{--<td>{!! $a->blog_post !!} </td>--}}
                                <td><img src="{{asset('image/about-photo/'.$a->image)}}" width="400px",height="400px"></td>

                                <td>
                                    <a href="{{route('showaboutus',['id'=>$a->id])}}">Show</a>
                                    <a href="{{route('editaboutus',['id'=>$a->id])}}">Edit</a>
                                    <a href="{{route('destroyaboutus',['id'=>$a->id])}}">Delete</a>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection
