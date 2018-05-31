@extends('admin.master')
@section('content')

    <section class="content">

        <div class="container-fluid">
            <div class="block-header">

            </div>

            <div class="row clearfix">
                {!! Form::open([route('sliderPost'),'enctype'=>'multipart/form-data','method'=>'post']) !!}
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
                                            <th>Title</th>
                                            <th>Sub Title</th>
                                            <th>Your Text</th>
                                            <th>Image</th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <th scope="row"> {{ $sliders->id }}</th>
                                            <td>{{ $sliders->title }}</td>
                                            <td>{{ $sliders->subtitle}}</td>
                                            <td>{{ $sliders->text }}</td>
                                            <td><img src="{{asset('image/slider-photo/'.$sliders->image)}}" width="400px",height="400px"></td>

                                        </tr>
                                        </tbody>

                                    </table>

                                </div>



