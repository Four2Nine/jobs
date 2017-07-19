@extends('layout.master')
@section('title', '注册')
@section('header-tab')
@overwrite


@section('custom-style')
    <style>

        .register-card-holder {
            width: 100%;
            height: 100%;
            background: url({{asset('images/akali_vs_baron_3.jpg')}}) no-repeat center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            padding: 48px 0;
        }

        .register-card-holder > h3,
        .register-card-holder>p{
            font-weight: 300;
            text-align: center;
            color: rgb(255, 255, 255);
        }
        .register-card-holder > p{
            padding-bottom: 32px;
        }

        .register-card {
            width: 350px;
            height: 400px;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, .8);
        }

        .register-card > h5{
            font-weight: 300;
            text-align: center;
            color: rgb(0, 0, 0);
        }

        .nav {
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }

        .nav-tabs {
            border-bottom: 2px solid #eee;
        }

        .nav-tabs > li {
            position: relative;
            top: 3px;
            left: -2px;
            display: inline-block;
            background-color: lightblue;
        }

        .nav-tabs > li > a {
            border: none !important;
            color: #999 !important;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -ms-border-radius: 0;
            border-radius: 0;
        }

        .nav-tabs > li > a:hover, .nav-tabs > li > a:active, .nav-tabs > li > a:focus {
            background-color: transparent !important;
        }

        .nav-tabs > li > a:before {
            content: '';
            position: absolute;
            left: 0;
            width: 100%;
            height: 0;
            border-bottom: 2px solid #2196F3;
            bottom: 2px;
            -moz-transform: scaleX(0);
            -ms-transform: scaleX(0);
            -o-transform: scaleX(0);
            -webkit-transform: scaleX(0);
            transform: scaleX(0);
            -moz-transition: 0.1s ease-in;
            -o-transition: 0.1s ease-in;
            -webkit-transition: 0.1s ease-in;
            transition: 0.1s ease-in;
        }

        .nav-tabs > li > a .material-icons {
            position: relative;
            top: 7px;
            margin-bottom: 8px;
        }

        .nav-tabs li.active a {
            color: #222 !important;
        }

        .nav-tabs li.active a:hover, .nav-tabs li.active a:active, .nav-tabs li.active a:focus {
            background-color: transparent !important;
        }

        .nav-tabs li.active a:before {
            -moz-transform: scaleX(1);
            -ms-transform: scaleX(1);
            -o-transform: scaleX(1);
            -webkit-transform: scaleX(1);
            transform: scaleX(1);
        }
    </style>
@endsection

@section('content')

    <div class="register-card-holder">
        <h3><?=$site_name ?> <?=$site_desc ?></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Aenan convallis.</p>

        <div class="register-card mdl-card mdl-shadow--2dp">
            <h5>立即加入 <?=$site_name?></h5>

            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#home_with_icon_title" data-toggle="tab">
                        <i class="material-icons">phone</i> 手机注册
                    </a>
                </li>
                <li role="presentation">
                    <a href="#profile_with_icon_title" data-toggle="tab">
                        <i class="material-icons">email</i> 邮箱注册
                    </a>
                </li>
            </ul>
        </div>
    </div>


@endsection
