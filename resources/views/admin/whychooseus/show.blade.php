@extends('admin.master')
@section('content')

    <section class="content">

        <div class="container-fluid">

            <div class="row clearfix">
                {!! Form::open([route('choosePost'),'enctype'=>'multipart/form-data','method'=>'post']) !!}
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="header">
                        </div>

                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-4 col-xs-12">



                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Icon</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <th scope="row"> {{ $chooses->id }}</th>
                                            <td>{{ $chooses->icon }}</td>
                                            <td>{{ $chooses->title }}</td>
                                            <td>{{ $chooses->description }}</td>

                                            {{--<td>{!! $services->image !!}</td>--}}
                                        </tr>
                                        </tbody>

                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>



