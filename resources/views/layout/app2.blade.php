<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 05-Jun-18
 * Time: 10:55 PM
 */
?>
        <!DOCTYPE html>
<html>
<head>
    <title>{{config('app.name', 'Europa')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--webfonts-->
    <link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,500,700' rel='stylesheet' type='text/css'>
    <!--//webfonts-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{URL::asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{URL::asset('assets/css/style3.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="{{URL::asset('assets/js/navbar.js')}}" type="text/javascript"></script>
    <link href="{{URL::asset('assets/css/navbar.css')}}" rel="stylesheet" type="text/css" media="all">
    <style>

    </style>
</head>
<body>
<div id='cssmenu'>
    <ul>
        <li><a href='#'>Pricing</a></li>
        <li><a href='#'>Login</a></li>
        <li><a href='#'>Admin</a></li>
        <li><a href='#'>Apply</a></li>
        <li><a href='#'>Home</a></li>
        <li><a href='#'>About Us</a></li>
        <li><a href='#'>Contact</a></li>
    </ul>
</div>
@yield('content')
</body>
</html>

