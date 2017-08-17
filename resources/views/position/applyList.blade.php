@extends('layout.master')
@section('title', '申请记录')

@section('custom-style')
    <style>
        .info-panel {
            margin: 20px 0;
        }

        .info-card .mdl-card__title small{
            font-size: 10px;
            font-weight: 300;
            margin-left: 24px;
            color: var(--text-color-secondary);
        }

        .apply-panel {
            min-height:500px;
            padding:0;
        }

        .apply-item {
            padding:16px;
            height:50px;
            border-bottom: 1px solid var(--divider);
            cursor: pointer;
            -webkit-transition: all 0.4s ease;
            -moz-transition: all 0.4s ease;
            -o-transition: all 0.4s ease;
            transition: all 0.4s ease;
        }

        .apply-item > h5,
        .apply-item > p {
            margin:0;
            display: inline-block;
            width:450px;
            font-weight: 300;
        }

        .apply-item>span{
            float: right;
            vertical-align: middle;
            text-align: right;
            font-weight: 400;
            font-size: 13px;
        }

        .apply-item:hover {
            background-color: var(--divider);
        }

    </style>
@endsection

@section('custom-script')

@endsection


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
                <a href="">退出登录</a>
                <a href="">企业合作</a>
                <a href="">关于我们</a>
            </nav>
        </div>
    </div>
@endsection

@section('header-tab')
    <div class="header-tab">
        <div class="container">
            <a href="" class="mdl-layout__tab">首页</a>
            <a href="" class="mdl-layout__tab is-active">个人中心</a>
            <a href="" class="mdl-layout__tab">职位搜索</a>
            <a href="" class="mdl-layout__tab">资讯中心</a>
            <div style="clear: both;"></div>
        </div>
    </div>
@endsection

@section('content')
    <div class="info-panel">
        <div class="container">
            <div class="info-panel--left info-panel">
                <div class="mdl-card mdl-shadow--2dp base-info--resume info-card">
                    <div class="mdl-card__title">
                        <h5 class="mdl-card__title-text">我的申请记录</h5>
                        <small>仅保留近30天的申请记录</small>
                    </div>

                    <div class="mdl-card__actions mdl-card--border apply-panel">

                        <div class="apply-item">
                            <h5>市场专员</h5><br>
                            <p><span>广州市花都万穗小额贷款股份有限公司</span> | <span>申请时间：08-12</span></p>

                            <span class="normal-info">状态：已查阅</span>
                        </div>

                        <div class="apply-item">
                            <h5>市场专员</h5><br>
                            <p><span>广州市花都万穗小额贷款股份有限公司</span> | <span>申请时间：08-12</span></p>

                            <span class="danger-info">状态：已拒绝</span>
                        </div>

                        <div class="apply-item">
                            <h5>市场专员</h5><br>
                            <p><span>广州市花都万穗小额贷款股份有限公司</span> | <span>申请时间：08-12</span></p>

                            <span class="success-info">状态：已回复</span>
                        </div>

                        <div class="apply-item">
                            <h5>市场专员</h5><br>
                            <p><span>广州市花都万穗小额贷款股份有限公司</span> | <span>申请时间：08-12</span></p>

                            <span class="normal-info">状态：已查阅</span>
                        </div>

                        <div class="apply-item">
                            <h5>市场专员</h5><br>
                            <p><span>广州市花都万穗小额贷款股份有限公司</span> | <span>申请时间：08-12</span></p>

                            <span class="">状态：待查阅</span>
                        </div>

                        <div class="apply-item">
                            <h5>市场专员</h5><br>
                            <p><span>广州市花都万穗小额贷款股份有限公司</span> | <span>申请时间：08-12</span></p>

                            <span class="success-info">状态：已回复</span>
                        </div>

                        <div class="apply-item">
                            <h5>市场专员</h5><br>
                            <p><span>广州市花都万穗小额贷款股份有限公司</span> | <span>申请时间：08-12</span></p>

                            <span class="normal-info">状态：已查阅</span>
                        </div>

                        <div class="apply-empty">
                            <img src="{{asset('images/apply-empty.png')}}" width="50px">
                            <span>没有申请记录</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
