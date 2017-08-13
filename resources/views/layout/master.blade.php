<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{asset('style/material.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('style/icon-fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('style/style.css')}}">
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/material.js')}}"></script>
    @section('custom-style')
    @show

    @section('custom-script')
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
                <a href="" class="mdl-layout__tab">个人中心</a>
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
                <br>
                <br>
                <small>联系：xxxxxxxxxxxx@xxxx.com</small>
                <br>
                <small>联系：(86)021-65642222</small>
                <br>
                <small>地址：上海市杨浦区邯郸路220号</small>
                <br>
                <small>邮编：200433</small>
                <br>

            </div>

            <div class="middle">
                <p></p>
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
