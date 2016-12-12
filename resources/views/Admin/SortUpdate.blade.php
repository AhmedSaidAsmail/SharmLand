@extends('Admin.Layouts.Layout_Basic')
@section('title','Category Panel | Update')
@section ('Extra_Css')
<link rel="stylesheet" type="text/css" href="{{asset('css/admin/style.css')}}">
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Directory&Header -->
    <section class="content-header">
        <h1>Categories <small>Categories Update</small> </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> C-Panel</a></li>
            <li><a href="#">Update Category : {{$Sort->name}}</a></li>
        </ol>
    </section>
    <!-- end Directory&Header -->
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <!-- box -->
                <div class="box">
                    <div class="box-header with-border">
                        <div class="form-group">
                            <button type="submit" class="form-control btn-primary" >Update Catagory : ({{$Sort->name}})</button>
                        </div>
                    </div>

                    <form method="post" action="{{route('editCategory',['id'=>$Sort->id])}}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PUT">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Main Category Name:</label>
                                        <select class="form-control" name="main_category">
                                            <option value="">Select Main Category</option>
                                            @foreach (App\MyModels\Admin\Basicsort::all() as $MainCategory)
                                            <option value="{{$MainCategory->id}}" {!!($MainCategory->id==$Sort->main_category)?'selected="selected"':''!!}>{{$MainCategory->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Category Name:</label>
                                        <input class="form-control" value="{{$Sort->name}}" name="name" placeholder="Main category Name" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Category Title:</label>
                                        <input class="form-control" value="{{$Sort->title}}" name="title" placeholder="Main category Title" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option value="1" >Show</option>
                                            <option value="0" {!! (! $Sort->status)?'selected="selected"':'' !!}>Hidden</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Home Shortcut</label>

                                        <select class="form-control" name="recommended">
                                            <option value="1">Show</option>
                                            <option value="0" {!! (! $Sort->recommended)?'selected="selected"':'' !!}>Hidden</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group {{$errors->has('arrangement')?'has-error':''}}">
                                        <label>Arrangment</label>
                                        <input  value="{{$Sort->arrangement}}" name="arrangement" class="form-control">
                                        @if($errors->has('arrangement'))
                                        <span class="help-block">The Arrangment has to be Integer</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group {{$errors->has('img')?'has-error':''}}">
                                        <label>Image</label>
                                        <input type="file" class="form-control" name="img">
                                        @if($errors->has('img'))
                                        <span class="help-block">It has to be an Image File</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Keywords:</label>
                                        <input class="form-control" value="{{$Sort->keywords}}" name="keywords" placeholder="-- Keywords --" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Description:</label>
                                        <input class="form-control" value="{{$Sort->description}}" name="description" placeholder="-- Description --" >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group"> <input type="submit" class="btn btn-primary" value="Edit Main Category"></div>
                            <div class="form-group"> </div>
                        </div>
                    </form>

                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- end content -->
</div>
@endsection
@section('Extra_Js')
<script src="{{asset('js/admin/admin.js')}}"></script>
@endsection