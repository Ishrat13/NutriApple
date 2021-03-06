@extends('admin.master')
@section('content')

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">

                    <h2>
                        Services
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
                            <th>Description</th>
                            <th>Icon</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($services as $s)
                            <tr>
                                <td>{{ $s->id }}</td>
                                <td>{{ $s->title }} </td>
                                <td>{{ $s->description }}</td>
                                {{--<td>{{ $s->image }}</td>--}}
                                <td>{!! $s->icon !!} </td>
                                <td><img src="{{asset('image/service-photo/'.$s->image)}}" width="400px",height="400px"></td>

                                <td>
                                    <a href="{{route('showService',['id'=>$s->id])}}">Show</a>
                                    <a href="{{route('editService',['id'=>$s->id])}}">Edit</a>
                                    <a href="{{route('destroyService',['id'=>$s->id])}}">Delete</a>

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

