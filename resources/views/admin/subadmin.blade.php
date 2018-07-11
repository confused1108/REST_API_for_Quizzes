<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 01-Jul-18
 * Time: 7:51 PM
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
                <li class="active">Subadmins</li>
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
                            <h3 class="box-title">Add a Subadmin</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{url('/admin/addadmin')}}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" required="">
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" class="form-control" id="username" placeholder="Enter username" required="">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required="">
                                </div>
                                <div class="form-group">
                                    <label for="alt-email">Alternate Email</label>
                                    <input type="email" name="alt_email" class="form-control" id="alt-email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="designation">Designation</label>
                                    <input type="designation" name="designation" class="form-control" id="designation" placeholder="Designation" required="">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required="">
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>



                <div class="col-md-5">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Registered Subadmins</h3>
                        </div>
                        <div class="container">
                            @foreach($admins as $admin)
                            <div class="row">
                                <div class=" col-md-5 ">
                                    <br>
                                    <label for="subadmin-1">Subadmin </label>
                                    <table class="table table-user-information">
                                        <tbody>
                                        <tr>
                                            <td>Name:</td>
                                            <td style="margin-left: -20%">{{$admin->name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Username</td>
                                            <td>{{$admin->username}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>{{$admin->email}}</td>
                                        </tr>

                                        <tr>
                                            <td>Alternate Email</td>
                                            <td>{{$admin->alt_email}}</td>
                                        </tr>
                                        <tr>
                                            <td>Designation</td>
                                            <td>{{$admin->designation}}</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
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
