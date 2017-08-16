@extends('layout.master')
@section('title', '个人中心')

@section('custom-style')
    <style>

        .base-info--user {
            border-top: 3px solid var(--cucumber);
        }

        .base-info--user .mdl-card__title {
            padding: 8px;
        }

        .base-info--user .mdl-card__supporting-text {
            width: 100%;
            display: inline-block;
            padding: 0 8px 8px 8px;
        }

        .base-info--user__header {
            margin: 25px 20px 10px 20px;
        }

        .base-info--user > .mdl-card__menu > button > i {
            color: var(--cucumber);
        }

        .base-info--user__title {
            width: 218px;
            display: inline-block;
            vertical-align: middle;
        }

        .base-info--user__title > p {
            margin-bottom: 0;
            font-weight: 300;
        }

        .base-info--user__title > p:first-child {
            font-size: 18px;
        }

        .base-info--user__contact {
            margin: 0;
            padding: 0;
            border-top: 1px solid rgba(0, 0, 0, .1);
        }

        .base-info--user__contact li {
            padding: 0 16px;
        }

        .base-info--user__functions > .mdl-chip {
            cursor: pointer;
            margin: 2px 4px;
        }

        .base-info--resume {
            min-height: 250px;
            border-top: 3px solid var(--blue-sky);
        }

        .base-info--recommendation {
            border-top: 3px solid var(--orange);
        }

        .resume-item {
            display: inline-block;
            margin: 8px;
            padding: 8px;
            -webkit-transition: all 0.6s ease;
            -moz-transition: all 0.6s ease;
            -o-transition: all 0.6s ease;
            transition: all 0.6s ease;
        }

        .resume-item a {
            display: inline-block;
        }

        .resume-item p {
            margin: 4px 0 0 0;
            font-weight: 300;
            font-size: 12px;
            text-align: center;
        }

        .resume-bg {
            border-radius: 2px;
            background-color: var(--blue-sky);
            color: var(--white);
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
        }

        .info-head-img {
            border: 1px solid #f7f7f7;
            background-color: #f7f7f7;
            padding: 5px;
            margin-right: 20px;
        }

        .recommendation-panel>ul>li{
            width:280px;
        }

        .word_re {
            margin-left: 16px;
        }

        .re_info > h6 {
            margin: 0;
            font-weight: 500;
            padding: 8px;
        }

        .word_re > .re_info h6 a,
        .word_re > .re_info p a {
            font-weight: 300;
            color: #000;
            text-decoration: none;
            font-size: 13px;
        }

        .word_re > .re_info h6 {
            padding: 8px 0 0 0;
        }

        .word_re > .re_info p a {
            color: #373737;
            margin-left: 8px;
            font-size: 12px;
        }

        .word_re > .re_info h6 a:hover,
        .word_re > .re_info p a:hover,
        .news-panel ul li a:hover {
            color: var(--tomato);
        }

        .ad_info > p {
            font-weight: 300;
            margin-bottom: 0;
            padding: 0 8px 8px 8px;
        }
    </style>
@endsection

@section('custom-script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.resume-item').mouseenter(function () {
                $(this).addClass("resume-bg");
            }).mouseleave(function () {
                $(this).removeClass("resume-bg");
            });
        });
    </script>
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
                        <h5 class="mdl-card__title-text">我的简历</h5>
                    </div>

                    <div class="mdl-card__actions mdl-card--border resume-panel">
                        <div class="resume-item">
                            <a href="#"><img src="{{asset('images/resume.png')}}" width="100px"/></a>
                            <p>简历名称1</p>
                        </div>

                        <div class="resume-item">
                            <a href="#"><img src="{{asset('images/resume.png')}}" width="100px"/></a>
                            <p>简历名称2</p>
                        </div>

                        <div class="resume-item">
                            <a href="#"><img src="{{asset('images/resume_add.png')}}" width="100px"/></a>
                            <p>添加简历</p>
                        </div>
                    </div>
                </div>

                <div class="mdl-card mdl-shadow--2dp base-info--recommendation info-card">
                    <div class="mdl-card__title">
                        <h5 class="mdl-card__title-text">为您推荐</h5>
                    </div>

                    {{--<div class="mdl-card__menu">--}}
                    {{--<button class="mdl-button mdl-button--icon mdl-js-button">--}}
                    {{--<i class="material-icons">more</i>--}}
                    {{--</button>--}}
                    {{--</div>--}}

                    <div class="mdl-card__actions mdl-card--border recommendation-panel">
                        <ul>
                            <li>
                                <div class="word_re">
                                    <div class="re_info">
                                        <h6><a href="#">广州市花都万穗小额贷款股份有限公司</a></h6>
                                        <p>
                                            <small><b>职位: </b><a href="#"><b>市场专员</b></a></small>
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="word_re">
                                    <div class="re_info">
                                        <h6><a href="#">广州市花都万穗小额贷款股份有限公司</a></h6>
                                        <p>
                                            <small><b>职位: </b><a href="#"><b>市场专员</b></a></small>
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="word_re">
                                    <div class="re_info">
                                        <h6><a href="#">广州市花都万穗小额贷款股份有限公司</a></h6>
                                        <p>
                                            <small><b>职位: </b><a href="#"><b>市场专员</b></a></small>
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="word_re">
                                    <div class="re_info">
                                        <h6><a href="#">广州市花都万穗小额贷款股份有限公司</a></h6>
                                        <p>
                                            <small><b>职位: </b><a href="#"><b>市场专员</b></a></small>
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="word_re">
                                    <div class="re_info">
                                        <h6><a href="#">广州市花都万穗小额贷款股份有限公司</a></h6>
                                        <p>
                                            <small><b>职位: </b><a href="#"><b>市场专员</b></a></small>
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="word_re">
                                    <div class="re_info">
                                        <h6><a href="#">广州市花都万穗小额贷款股份有限公司</a></h6>
                                        <p>
                                            <small><b>职位: </b><a href="#"><b>市场专员</b></a></small>
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="word_re">
                                    <div class="re_info">
                                        <h6><a href="#">广州市花都万穗小额贷款股份有限公司</a></h6>
                                        <p>
                                            <small><b>职位: </b><a href="#"><b>市场专员</b></a></small>
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="word_re">
                                    <div class="re_info">
                                        <h6><a href="#">广州市花都万穗小额贷款股份有限公司</a></h6>
                                        <p>
                                            <small><b>职位: </b><a href="#"><b>市场专员</b></a></small>
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="gap"></div>

            <div class="info-panel--right info-panel">
                <div class="mdl-card mdl-shadow--2dp base-info--user info-card">

                    <div class="base-info--user__header">
                        <img class="img-circle info-head-img" src="{{asset('images/avatar.png')}}" width="70px"
                             height="70px">

                        <div class="base-info--user__title">
                            <p>刘洋</p>
                            <p><span>男</span> | <span>23岁</span> | <span>现居吉尔吉斯斯坦</span> | <span>目前正在求职</span></p>
                        </div>
                    </div>

                    <div class="mdl-card__menu">
                        <button class="mdl-button mdl-button--icon mdl-js-button">
                            <i class="material-icons">mode_edit</i>
                        </button>
                    </div>

                    <div class="mdl-card__actions mdl-card--border">
                        <div class="mdl-card__title">
                            <h6 class="mdl-card__title-text">自我评价</h6>
                        </div>

                        <div class="mdl-card__supporting-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Mauris sagittis pellentesque lacus eleifend lacinia...
                        </div>
                    </div>

                    <ul class="mdl-list base-info--user__contact">
                        <li class="mdl-list__item">
                            <span class="mdl-list__item-primary-content">
                                <i class="material-icons mdl-list__item-icon">phone</i>
                                13258382770
                            </span>
                        </li>
                        <li class="mdl-list__item">
                            <span class="mdl-list__item-primary-content">
                                <i class="material-icons mdl-list__item-icon">email</i>
                                sealiu0217@gmail.com
                            </span>
                        </li>
                    </ul>

                    <div class="mdl-card__actions mdl-card--border base-info--user__functions">
                        <span class="mdl-chip mdl-chip--contact">
                            <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white">9+</span>
                            <span class="mdl-chip__text">申请记录</span>
                        </span>

                        <span class="mdl-chip mdl-chip--contact">
                            <span class="mdl-chip__contact mdl-color--green mdl-color-text--white">9+</span>
                            <span class="mdl-chip__text">站内信</span>
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
