@extends('admin.master')
@section('content')

    <section class="content">

        <div class="container-fluid">
            <div class="block-header">
                <h2>About us details </h2>
                <small class="text-muted">Blog information form</small>
            </div>

            <div class="row clearfix">
                {!! Form::open([route('aboutusPost'),'enctype'=>'multipart/form-data','method'=>'post']) !!}
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
                                            <th>Subtitle</th>
                                            <th>Details</th>
                                            <th>Image</th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <th scope="row"> {{ $about->id }}</th>
                                            <td>{{ $about->title }}</td>
                                            <td>{{ $about->subtitle }}</td>
                                            <td>{!! $about->details !!}</td>
                                            <td><img src="{{asset('image/about-photo/'.$about->image)}}" width="400px",height="400px"></td>

                                        </tr>
                                        </tbody>

                                    </table>

                                </div>
