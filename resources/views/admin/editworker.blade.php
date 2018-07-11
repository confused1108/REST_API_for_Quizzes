<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 01-Jul-18
 * Time: 6:48 PM
 */
?>
        <!DOCTYPE html>
<html>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
@include('admin.nvgbar')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                General Form Elements
                <small>Preview</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Forms</a></li>
                <li><a href="#">Stores</a></li>
                <li class="active">Edit Store's Details</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-7">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Store's Details</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        @foreach($workers as $worker)
                        <form role="form" action="<?php echo url("/admin/updateworker/{$worker->worker_id}") ?>" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" value="{{$worker->name}}" class="form-control" id="name" placeholder="Enter name" name="name" required="">
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" value="{{$worker->username}}" class="form-control" id="username" placeholder="Enter username" name="username" required="">
                                </div>
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select class="form-control" id="category" name="category" required="">
                                        @if(count($categories)>0)
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->cat_name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="contact">Contact number</label>
                                    <input type="text" value="{{$worker->number}}" class="form-control" id="contact" placeholder="Contact number" name="number" required="">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" value="{{$worker->address}}" class="form-control" id="address" placeholder="Enter address" name="address" required="">
                                </div>
                            </div>


                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                            @endforeach
                    </div>
                </div>
                <div class="col-md-5">
                </div>
            </div>
        </section>

    </div>

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>
    <div class="control-sidebar-bg"></div>
</div>

</body>
</html>
