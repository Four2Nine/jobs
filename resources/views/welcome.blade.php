<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('style/material.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('style/icon-fonts.css')}}">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            padding-top: 20px;
            /*vertical-align: middle;*/
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 50px;
            padding-top: 20px;
        }

        .web-contents {
            width:800px;
            margin:20px auto;
            text-align: left;
            padding:0 20px;
        }

        .web-contents a {
            font-weight: 300;
            font-size:10pt;
            color: #000000;
            text-decoration-line: none;
        }

    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">Laravel 5</div>
    </div>

    <div class="web-contents">
        <p><a href="/index">/index&nbsp;&nbsp;首页</a> <i class="material-icons">check</i></p>
        <p><a href="/account/register">/account/register&nbsp;&nbsp;注册页面</a> <i class="material-icons">check</i></p>
        <p><a href="/account/login">/account/login&nbsp;&nbsp;登录页面</a> <i class="material-icons">check</i></p>
        <p><a href="/account/findPassword">/account/findPassword&nbsp;&nbsp;找回密码</a> <i class="material-icons">check</i></p>
    </div>
</div>
</body>
</html>
