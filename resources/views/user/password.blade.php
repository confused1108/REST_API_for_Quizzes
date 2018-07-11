<?php
/**
 * Created by PhpStorm.
 * User: Hitesh
 * Date: 17-Jun-18
 * Time: 12:24 AM
 */
?>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @use postcss-cssnext;

        /* config.css */

        :root {
            --baseColor: #606468;
        }

        /* helpers/align.css */

        .align {
            align-items: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* helpers/grid.css */

        :root {
            --gridMaxWidth: 20rem;
            --gridWidth: 90%;
        }

        .grid {
            margin-left: auto;
            margin-right: auto;
            max-width: var(--gridMaxWidth);
            width: var(--gridWidth);
        }

        /* helpers/hidden.css */

        .hidden {
            border: 0;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
        }

        /* helpers/icon.css */

        :root {
            --iconFill: var(--baseColor);
        }

        .icons {
            display: none;
        }

        .icon {
            display: inline-block;
            fill: var(--iconFill);
            font-size: 1rem;
            height: 1em;
            vertical-align: middle;
            width: 1em;
        }

        /* layout/base.css */

        :root {
            --htmlFontSize: 100%;

            --bodyBackgroundColor: #2c3338;
            --bodyColor: var(--baseColor);
            --bodyFontFamily: 'Open Sans';
            --bodyFontFamilyFallback: sans-serif;
            --bodyFontSize: 0.875rem;
            --bodyFontWeight: 400;
            --bodyLineHeight: 1.5;
        }

        * {
            box-sizing: inherit;
        }

        html {
            box-sizing: border-box;
            font-size: var(--htmlFontSize);
            height: 100%;
        }

        body {
            background-image: url("{{URL::asset('assets/images/2.jpg')}}");
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: var(--bodyColor);
            font-family: var(--bodyFontFamily), var(--bodyFontFamilyFallback);
            font-size: var(--bodyFontSize);
            font-weight: var(--bodyFontWeight);
            height: 100%;
            line-height: var(--bodyLineHeight);
            margin: 0;
            min-height: 100vh;
        }

        /* modules/anchor.css */

        :root {
            --anchorColor: #eee;
        }

        a {
            color: var(--anchorColor);
            outline: 0;
            text-decoration: none;
        }

        a:focus,
        a:hover {
            text-decoration: underline;
        }

        /* modules/form.css */

        :root {
            --formFieldMargin: 0.875rem;
        }

        input {
            background-image: none;
            border: 0;
            color: inherit;
            font: inherit;
            margin: 0;
            outline: 0;
            padding: 0;
            transition: background-color 0.3s;
        }

        input[type='submit'] {
            cursor: pointer;
        }

        .form {
            margin: calc(var(--formFieldMargin) * -1);
        }

        .form input[type='password'],
        .form input[type='text'],
        .form input[type='submit'] {
            width: 100%;
        }

        .form__field {
            display: flex;
            margin: var(--formFieldMargin);
        }

        .form__input {
            flex: 1;
        }

        /* modules/login.css */

        :root {
            --loginBorderRadus: 0.25rem;
            --loginColor: #eee;

            --loginInputBackgroundColor: #3b4148;
            --loginInputHoverBackgroundColor: #434a52;

            --loginLabelBackgroundColor: #363b41;

            --loginSubmitBackgroundColor: #ea4c88;
            --loginSubmitColor: #eee;
            --loginSubmitHoverBackgroundColor: #d44179;
        }

        .login {
            color: var(--loginColor);
        }

        .login label,
        .login input[type='text'],
        .login input[type='password'],
        .login input[type='submit'] {
            border-radius: var(--loginBorderRadus);
            padding: 1rem;
        }

        .login label {
            background-color: var(--loginLabelBackgroundColor);
            border-bottom-right-radius: 0;
            border-top-right-radius: 0;
            padding-left: 1.25rem;
            padding-right: 1.25rem;
        }

        .login input[type='password'],
        .login input[type='text'] {
            background-color: var(--loginInputBackgroundColor);
            border-bottom-left-radius: 0;
            border-top-left-radius: 0;
        }

        .login input[type='password']:focus,
        .login input[type='password']:hover,
        .login input[type='text']:focus,
        .login input[type='text']:hover {
            background-color: var(--loginInputHoverBackgroundColor);
        }

        .login input[type='submit'] {
            background-color: var(--loginSubmitBackgroundColor);
            color: var(--loginSubmitColor);
            font-weight: 700;
            text-transform: uppercase;
        }

        .login input[type='submit']:focus,
        .login input[type='submit']:hover {
            background-color: var(--loginSubmitHoverBackgroundColor);
        }

        /* modules/text.css */

        :root {
            --paragraphMarginBottom: 1.5rem;
            --paragraphMarginTop: 1.5rem;
        }

        p {
            margin-bottom: var(--paragraphMarginBottom);
            margin-top: var(--paragraphMarginTop);
        }

        .text--center {
            text-align: center;
        }

    </style>
</head>
<body class="align">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<h3 style="color: #0f0f0f">Compelete this form and you are ready to go...</h3>
<div class="grid">

    <form action="{{url('/user/store')}}" method="POST" class="form login">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form__field">
            <label for="login__username"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden">Username</span></label>
            <input id="login__username" type="text" name="org_name" class="form__input" placeholder="Username" required value="{{$app->organization}}" readonly="readonly">
        </div>
        <div class="form__field">
            <label for="login__username"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden">Username</span></label>
            <input id="login__username" type="text" name="org_address" class="form__input" placeholder="Address" required>
        </div>
        <div class="form__field">
            <label for="login__username"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden">Username</span></label>
            <input id="login__username" type="text" name="app_name" class="form__input" placeholder="Username" required value="{{$app->name}}" readonly="readonly">
        </div>
        <div class="form__field">
            <label for="login__username"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden">Username</span></label>
            <input id="login__username" type="text" name="app_designation" class="form__input" placeholder="Username" required value="{{$app->designation}}" readonly="readonly">
        </div>
        <div class="form__field">
            <label for="login__username"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden">Username</span></label>
            <input id="login__username" type="text" name="app_email" class="form__input" placeholder="Username" required value="{{$app->email}}" readonly="readonly">
        </div>
        <div class="form__field">
            <label for="login__username"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden">Username</span></label>
            <input id="login__username" type="text" name="app_number" class="form__input" placeholder="Username" required value="{{$app->number}}" readonly="readonly">
        </div>
        <div class="form__field">
            <label for="login__username"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden">Username</span></label>
            <input id="login__username" type="text" name="package" class="form__input" placeholder="Username" required value="{{$app->package}}" readonly="readonly">
        </div>
        <div class="form__field">
            <label for="login__username"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden">Username</span></label>
            <input id="login__username" type="text" name="app_email_alt" class="form__input" placeholder="Alternate Email" required >
        </div>
        <div class="form__field">
            <label for="login__username"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden">Username</span></label>
            <input id="login__username" type="text" name="org_server" class="form__input" placeholder="Server Address" required >
        </div>
        <div class="form__field">
            <label for="login__username"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden">Username</span></label>
            <input id="login__username" type="text" name="username" class="form__input" placeholder="Admin's Username" required >
        </div>
        <div class="form__field">
            <label for="login__username"><i class="fa fa-lock" aria-hidden="true"></i><span class="hidden">Username</span></label>
            <input id="login__username" type="text" name="password" class="form__input" placeholder="Password" required>
        </div>

        <div class="form__field">
            <label for="login__username"><i class="fa fa-lock"></i><span class="hidden">Password</span></label>
            <input id="login__username" type="text" name="password2" class="form__input" placeholder="Confirm Password" required>
        </div>

        <div class="form__field">
            <input type="submit" value="Submit">
        </div>

    </form>
</div>
</body>
</html>
