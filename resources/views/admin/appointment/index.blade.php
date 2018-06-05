@extends('admin.master')
@section('content')

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
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
                <div class="body table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>email</th>
                            <th>phone no</th>
                            <th>message</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($appointments as $a)
                            <tr>
                                <td>{{ $a->id }}</td>
                                <td>{{ $a->firstname}} </td>
                                <td>{{ $a->lastname}} </td>
                                <td>{{ $a->email}} </td>
                                <td>{{ $a->phone}} </td>
                                <td>{{ $a->message}} </td>

                                <td>
                                    <a href="{{route('destroyappointment',['id'=>$a->id])}}">Delete</a>
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
