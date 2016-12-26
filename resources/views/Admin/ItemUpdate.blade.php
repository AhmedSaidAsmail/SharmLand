@extends('Admin.Layouts.Layout_Basic')
@section('title','Items Panel | Update')
@section ('Extra_Css')
<link rel="stylesheet" type="text/css" href="{{asset('css/admin/style.css')}}">
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Directory&Header -->
    <section class="content-header">
        <h1>Items <small>Items Update</small> </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> C-Panel</a></li>
            <li><a href="#">Update Items : {{$Item->name}}</a></li>
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
                            <button type="submit" class="form-control btn-primary" id="addNew">Update Item : ({{$Item->name}})</button>
                        </div>
                    </div>
                    <div id="basicToggle">
                        <form method="post" action="{{route('Items.update',['id'=>$Item->id])}}" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="PUT">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Category Name:</label>
                                            <select class="form-control" name="sort_id">
                                                <option value="">Select  Category</option>
                                                @foreach (App\MyModels\Admin\Sort::all() as $category)
                                                <option value="{{$category->id}}" {!!($category->id==$Item->sort_id)?'selected="selected"':''!!}>{{$category->name}} -- {{$category->basicsort->name}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Item Name:</label>
                                            <input class="form-control" value="{{$Item->name}}" name="name" placeholder="Main category Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Item Title:</label>
                                            <input class="form-control" value="{{$Item->title}}" name="title" placeholder="Main category Title" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <option value="1" >Show</option>
                                                <option value="0" {!! (! $Item->status)?'selected="selected"':'' !!}>Hidden</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Home Shortcut</label>

                                            <select class="form-control" name="recommended">
                                                <option value="1">Show</option>
                                                <option value="0" {!! (! $Item->recommended)?'selected="selected"':'' !!}>Hidden</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group {{$errors->has('arrangement')?'has-error':''}}">
                                            <label>Arrangment</label>
                                            <input  value="{{$Item->arrangement}}" name="arrangement" class="form-control">
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
                                            <input class="form-control" value="{{$Item->keywords}}" name="keywords" placeholder="-- Keywords --" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Description:</label>
                                            <input class="form-control" value="{{$Item->description}}" name="description" placeholder="-- Description --" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group"> <input type="submit" class="btn btn-primary" value="Edit Main Category"></div>
                                <div class="form-group"> </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Prices Table</h3>
                        @if(Session::has('error'))
                        <div class="alert alert-danger">
                            {{Session::get('error')}}
                        </div>
                        @endif
                        @if(isset($errors) && count($errors)>0)
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                        @endif

                    </div>
                    @if(count($Item->price)==0)
                    <form method="post" action="{{route('Item.addPrice',['id'=>$Item->id])}}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="item_id" value="{{$Item->id}}">
                        <div class="box-body">
                            <div class="row"><div class="col-md-12"><div class="form-group"><button class="btn btn-block btn-success">Add New Price</button></div></div></div>
                            <div class="row">
                                <div class="col-md-3"><input class="form-control" type="text" name="st_name" placeholder="First Price Name"></div>
                                <div class="col-md-3"><input class="form-control" type="text" name="st_price" placeholder="First Price"></div>
                                <div class="col-md-3"><input class="form-control" type="text" name="sec_name" placeholder="Second Price Name"></div>
                                <div class="col-md-3"><input class="form-control" type="text" name="sec_price" placeholder="Second Price"></div>

                            </div>
                        </div>
                    </form>
                    @endif

                    <!-- /.box-Prices -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>First Price Name</th>
                                <th>First Price</th>
                                <th>Second Price Name</th>
                                <th>Second price</th>
                                <th></th>
                                <th></th>
                            </tr>

                            @if(isset($Item->price->item_id))
                            <tr>
                                <td>{{$Item->price->st_name}}</td>
                                <td>{{$Item->price->st_price}}</td>
                                <td>{{$Item->price->sec_name}}</td>
                                <td>{{$Item->price->sec_price}}</td>
                                <td><a class="btn btn-xs btn-warning">Edit</a></td>
                                <td><a class="btn btn-xs btn-danger">Delete</a></td>
                            </tr>
                            @endif



                        </table>
                    </div>
                    <!-- /.box-Prices -->
                </div>
                <div>
                    <form action="{{route('Information.create',['itemID'=>$Item->id])}}" method="get">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Add New Details To This Items</label>
                                    <select name="modelName" class="form-control" id="detailsNavigatore">
                                        <option value="">Select Details to Add</option>
                                        <option value="inclusion">Inclusions</option>
                                        <option value="exclusion">Exclusions</option>
                                        <option value="additional">Additional Information </option>
                                        <option value="dresse">Dresses</option>
                                        <option value="note">Notes</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <!-- Inclusions -->
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Inclusions Table</h3>
                            </div>
                            <div class="box-body no-padding">
                                <table class="table table-striped">
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Inclusions Text</th>
                                        <th>Edit</th>
                                        <th style="width: 40px">Delete</th>
                                    </tr>
                                    <?php $oredr = 1 ?>
                                    @foreach($Item->inclusion as $inclusion)
                                    <tr>
                                        <td>{{$oredr}}</td>
                                        <td>{{$inclusion->txt}}</td>
                                        <td><a href="{{route('Information.edit',['item'=>$Item->id,'Information'=>$inclusion->id,'modelName'=>'inclusion'])}}" class="btn btn-xs btn-warning">Edit</a></td>
                                        <td><a href="{{route('Information.show',['item'=>$Item->id,'Information'=>$inclusion->id,'modelName'=>'inclusion'])}}"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                    <?php $oredr++ ?>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        <!-- end Inclusions-->

                    </div>
                    <div class="col-md-6">
                        <!-- Inclusions -->
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Exclusions Table</h3>
                            </div>
                            <div class="box-body no-padding">
                                <table class="table table-striped">
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Exclusions Text</th>
                                        <th>Edit</th>
                                        <th style="width: 40px">Delete</th>
                                    </tr>
                                    <?php $oredr = 1 ?>
                                    @foreach($Item->exclusion as $exclusion)
                                    <tr>
                                        <td>{{$oredr}}</td>
                                        <td>{{$exclusion->txt}}</td>
                                        <td><a href="{{route('Information.edit',['item'=>$Item->id,'Information'=>$exclusion->id,'modelName'=>'exclusion'])}}" class="btn btn-xs btn-warning">Edit</a></td>
                                        <td><a href="{{route('Information.show',['item'=>$Item->id,'Information'=>$exclusion->id,'modelName'=>'exclusion'])}}"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                    <?php $oredr++ ?>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        <!-- end Inclusions-->

                    </div>

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