@extends('backend.master.index')
@section('head')
    <meta charset="UTF-8">
    <title>Sửa sản phẩm</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="{{asset('public/backend/css/app.css')}}" rel="stylesheet" type="text/css" />
    <!-- end of global css -->
    <!--page level css -->
    <link href="{{asset('public/backend/vendors/jasny-bootstrap/css/jasny-bootstrap.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('public/backend/vendors/select2/css/select2.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('public/backend/vendors/select2/css/select2-bootstrap.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('public/backend/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('public/backend/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/vendors/iCheck/css/all.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/backend/css/pages/wizard.css')}}" type="text/css" rel="stylesheet">
    <!--end of page level css-->
@endsection
@section('body')


        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <section class="content-header">
                <h1>Sửa sản phẩm</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="14" data-color="#000"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Sản phẩm</a>
                    </li>
                    <li class="active">Sửa sản phẩm</li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i> Sửa sản phẩm
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <!-- errors -->
                                <!--main content-->
                                <form id="commentForm" action="{{route('admin.product.update_post',$data->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal" >
                                    <!-- CSRF Token -->
									{{csrf_field()}}
									   <fieldset>
                                        <!-- Name input-->


												<div class="form-group">
                                                    <label for="title" class="col-sm-2 control-label">Tên sản phẩm</label>
                                                    <div class="col-sm-10">
                                                        <input id="name" name="name" type="text" placeholder="Tên sản phẩm" class="form-control" required value="{{$data->name}}" />
                                                    </div>
                                                </div>
												 <div class="form-group">
                                                    <label for="category_id" class="col-sm-2 control-label">Category</label>
                                                    <div class="col-md-10">
                                                        <select class="select21 form-control" name="category_id" id="category_id">
                                                            <option disabled selected>Select Category</option>
                                                            @foreach($category as $item)
                                                        <option value="{{$item->id}}" {{ $item->id == $data->category_id ? 'selected="selected"' : '' }}>{{$item->name}}</option>
                                                    @endforeach
                                                        </select>
                                                    </div>
                                                </div>
												<div class="form-group">
                                                    <label for="bio" class="col-sm-2 control-label">    Intro </label>
                                                    <div class="col-sm-10">
                                                        <textarea name="intro" id="intro" class="form-control resize_vertical" rows="4" >{{$data->intro}}</textarea>
                                                    </div>
                                                </div>
												<div class="form-group">
                                                    <label for="bio" class="col-sm-2 control-label">Content </label>
                                                    <div class="col-sm-10">
                                                        <textarea name="content" id="content" class="form-control resize_vertical" rows="4" >{{$data->content}}</textarea>
                                                    </div>
                                                </div>
												<div class="form-group">
                                                    <label for="bio" class="col-sm-2 control-label">Giá </label>
                                                    <div class="col-sm-10">
                                                        <input id="price" name="price" type="text" placeholder="Giá" class="form-control" value="{{$data->price}}" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="bio" class="col-sm-2 control-label">Số lượng </label>
                                                    <div class="col-sm-10">
                                                        <input id="amout" name="amout" type="text" placeholder="Số lượng" class="form-control" value="{{$data->amout}}" />
                                                    </div>
                                                </div>

												                                   <div class="form-group">
                                                    <label for="pic" class="col-sm-2 control-label">Image</label>
                                                    <div class="col-sm-10">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 200px;">
                                                                <img src="{{asset('public/'."$data->image")}}" alt="news pic">
                                                            </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 200px;"></div>
                                                            <div>
                                                                <span class="btn btn-default btn-file">
															<span class="fileinput-new">Select image</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input id="pic" name="image" type="file" class="form-control" />
                                                                </span>
                                                                <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <div class="form-group">
                                            <div class="col-md-12 text-right">
                                                <button type="submit" name="btnAddNews"class="btn btn-responsive btn-primary btn-sm">Update</button>
                                            </div>
                                        </div>

                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--row end-->
            </section>
        </aside>
 @endsection
@section('bottom')
    <!-- global js -->
    <script src="{{asset('public/backend/js/app.js')}}" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <script src="{{asset('public/backend/vendors/moment/js/moment.min.js')}}"></script>
    <script src="{{asset('public/backend/vendors/jasny-bootstrap/js/jasny-bootstrap.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/vendors/select2/js/select2.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/vendors/bootstrapwizard/jquery.bootstrap.wizard.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/vendors/iCheck/js/icheck.js')}}"></script>
    <script src="{{asset('public/backend/js/pages/adduser.js')}}" type="text/javascript"></script>
    <!-- end of page level js -->
    <script>
    $(document).ready(function() {

        $("#dob").datetimepicker({
            format: 'YYYY-MM-DD',
            widgetPositioning:{
                vertical:'bottom'
            },
            keepOpen:false,
            useCurrent: false,
            maxDate: new Date()
        });
    });
    </script>
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'content',{
        filebrowserBrowseUrl: '{{ asset('public/ckfinder/ckfinder.html') }}',
        filebrowserImageBrowseUrl: '{{ asset('public/ckfinder/ckfinder.html?type=Images') }}',
        filebrowserFlashBrowseUrl: '{{ asset('public/ckfinder/ckfinder.html?type=Flash') }}',
        filebrowserUploadUrl: '{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
        filebrowserImageUploadUrl: '{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
        filebrowserFlashUploadUrl: '{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
    } );
     CKEDITOR.replace( 'intro',{
        filebrowserBrowseUrl: '{{ asset('public/ckfinder/ckfinder.html') }}',
        filebrowserImageBrowseUrl: '{{ asset('public/ckfinder/ckfinder.html?type=Images') }}',
        filebrowserFlashBrowseUrl: '{{ asset('public/ckfinder/ckfinder.html?type=Flash') }}',
        filebrowserUploadUrl: '{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
        filebrowserImageUploadUrl: '{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
        filebrowserFlashUploadUrl: '{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
    } );
</script>
@endsection
