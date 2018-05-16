@extends('admin.master')
@section('content')

    <section class="content">

        <div class="container-fluid">
            <div class="block-header">
                <h2>Blog Details </h2>
                <small class="text-muted">Blog information form</small>
            </div>

            <div class="row clearfix">
                {!! Form::open([route('blogPost'),'enctype'=>'multipart/form-data','method'=>'post']) !!}
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
                                            <th>Category Id</th>
                                            <th>Author</th>
                                            <th>Blog post</th>
                                            <th>Image</th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <th scope="row"> {{ $blog->id }}</th>
                                            <td>{{ $blog->title }}</td>
                                            <td>{{ $blog->category_id }}</td>
                                            <td>{{ $blog->author }}</td>
                                            <td>{!! $blog->blog_post !!}</td>
                                            <td><img src="{{asset('image/blog-photo/'.$blog->image)}}" width="400px",height="400px"></td>

                                        </tr>
                                        </tbody>

                                    </table>

                                </div>



