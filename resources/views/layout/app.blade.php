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
    <meta name="keywords" content="Appizz Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{URL::asset('assets/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="{{URL::asset('assets/css/style2.css')}}" rel='stylesheet' type='text/css' />
    <script src="{{URL::asset('assets/js/jquery-1.11.1.min.js')}}"></script>
    <!--webfonts-->
    <link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,500,700' rel='stylesheet' type='text/css'>
    <!--//webfonts-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400|Roboto:300,400,500">
    <link rel="stylesheet" href="{{URL::asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    <script src="{{URL::asset('assets/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{URL::asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.backstretch.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/wow.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/retina-1.1.0.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/waypoints.min.js')}}"></script>
    <script src="{{URL::asset('assets//js/scripts.js')}}"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="{{URL::asset('assets/js/navbar.js')}}" type="text/javascript"></script>
    <link href="{{URL::asset('assets/css/navbar.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{URL::asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{URL::asset('assets/css/style3.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
    <style>
        .input-group {
            margin-bottom: 15px;
            padding: 0px 10px;
            width: 360px;
            border: 1px solid #bbb;
        }
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

