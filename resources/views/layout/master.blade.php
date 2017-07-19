<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{asset('style/material.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('style/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('style/icon-fonts.css')}}">
    <script src="{{asset('js/material.js')}}"></script>
    @section('custom-style')
    @show
</head>
<body>


<header class="header-layout">

    @section('header-nav')
        <div class="header-nav">
            <div class="container">
                <!-- Title -->
                <div class="header-nav-title">
                    <span class="nav-title"><?=$site_name ?></span>
                    <br>
                    <small><?=$site_desc ?></small>
                </div>

                <!-- Add spacer, to align navigation to the right -->
                <!--<div class="spacer"></div>-->
                <!-- Navigation -->
                <nav class="nav">
                    <a href="">登录</a>
                    <a href="">立即注册</a>
                    <a href="">企业合作</a>
                    <a href="">关于我们</a>
                </nav>
            </div>
        </div>
    @show

    @section('header-tab')
        <div class="header-tab">
            <div class="container">
                <a href="" class="mdl-layout__tab is-active">首页</a>
                <a href="" class="mdl-layout__tab">个人首页</a>
                <a href="" class="mdl-layout__tab">职位搜索</a>
                <a href="" class="mdl-layout__tab">资讯中心</a>
                <div style="clear: both;"></div>
            </div>
        </div>
    @show
</header>

@section('content')

@show

@section('footer')
    <footer>
        <div class="container">
            <div class="left">
                <p><?=$site_name ?></p>
                <span><small><?=$site_desc ?></small></span>
            </div>

            <div class="right">
                <span class="copy-right">site design & develop &copy;2017 Four2Nine Studio<br>
                    esporthr 版权所有 | All rights receives</span>
            </div>
            <div style="clear: both;"></div>
        </div>
    </footer>
@show
</body>
</html>
