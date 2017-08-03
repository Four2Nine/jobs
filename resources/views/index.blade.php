@extends('layout.master')

@section('custom-style')
    <style>

        .header-post {
            width: 100%;
            height: 120px;
            background-color: var(--primary-color);
        }

        .search-box {
            padding-top: 25px;
        }

        .search-box input {
            width: 500px;
            height: 25px;
            padding: 10px 10px;
            border: none;
            font-size: 16px;
            margin-right: 8px;
        }

        .search-box button {
            font-weight: 300;
        }

        .search-box-appendix {
            padding-top: 4px;
        }

        .search-box-appendix span,
        .search-box-appendix a {
            margin-left: 6px;
            font-size: 6pt;
            font-weight: 300;
            color: #f5f5f5;
            text-decoration: none;
        }

        .search-box-appendix a:hover {
            color: var(--accent-color);
        }

        .search-box-appendix a:last-child {
            margin-left: 20px;
            text-decoration-line: underline;
        }

        .search-box button {
            width: 100px;
            height: 45px;
        }

        .main {
            padding-top: 24px;
            /*background-color: #d1c4e9;*/
        }

        .title h4 {
            font-weight: 300;
            margin-top: 0;
        }

        .title h4 > a {
            text-decoration-line: none;
        }

        .title h4 > a > small {
            margin-left: 16px;
            color: #4c4c4c;
            font-weight: 300;
        }

        .button-accent,
        .button-accent:hover,
        .button-accent.mdl-button--raised,
        .button-accent.mdl-button--fab {
            color: rgb(255, 255, 255);
            background-color: var(--accent-color);
        }

        .button-accent .mdl-ripple {
            background: rgb(255, 255, 255);
        }

        .recommended-company ul {
            float: left;
            padding: 0;
        }

        .recommended-company ul li {
            list-style: none;
            display: inline-block;
            margin-right: 12px;
            margin-bottom: 16px;
        }

        .light-bg {
            width: 100%;
            background-color: lightgray;
            margin-top: 60px;
            padding: 45px 0;
        }

        .image_ad {
            width: 330px;
            display: block;
            position: relative;
        }

        .word_ad {
            width: 328px;
            border: 1px solid rgba(0, 0, 0, .4);
            border-radius: 3px;
        }

        .image_ad > .ad_info {
            position: absolute;
            bottom: 0;
            z-index: 99;
            width: 330px;
            height: 80px;
            background-color: rgba(255, 255, 255, .15);
        }

        .image_ad > .ad_info > h5,
        .image_ad > .ad_info > p {
            color: #fff;
        }

        .ad_info > h5 {
            margin: 0;
            font-weight: 500;
            padding: 8px;
        }

        .ad_info > p {
            font-weight: 300;
            margin-bottom: 0;
            padding: 0 8px 8px 8px;
        }

        .none_margin {
            margin: 0 !important;
        }

        .position-card.mdl-card {
            display: inline-block;
            width: 32%;
            height: 120px !important;
            margin: 0 5px;
            font-weight: 300;

        }

        .position-card > .mdl-card__title {
            font-size: 20px;
            padding-bottom: 0;
        }

        .position-card > .mdl-card__supporting-text {
            padding-top: 8px;
            height: 72px;
        }

        .hot-position,
        .recent-news {
            padding: 45px 0;
        }

        .news-panel ul {
            padding-left:0;
        }

        .news-panel ul li{
            list-style: none;
            margin:8px 0;
        }
        .news-panel ul li a{
            font-weight: 300;
            text-decoration: none;
            color: #000;
        }
        .news-panel ul li a small {
            margin-left: 16px;
            font-weight: 300;
            color: rgba(0,0,0,.4);
        }

    </style>
@endsection

@section('content')
    <div class="header-post">
        <div class="container">

            <div class="search-box">
                <form action="#">

                    <input type="text" placeholder="输入搜索内容"/>
                    <button type="submit" class="mdl-button mdl-js-button mdl-button--raised
                        mdl-js-ripple-effect button-accent">立即搜索
                    </button>
                </form>
                <div class="search-box-appendix">
                    <span>热门分类: </span>
                    <a href="#">电竞培训</a>
                    <a href="#">电竞传媒</a>
                    <a href="#">电竞俱乐部</a>
                    <a href="#">使用高级搜索</a>
                </div>
            </div>

        </div>
    </div>



    <section class="main">

        <div class="container">
            <div class="title">
                <h4>推荐公司
                    <a href="#">
                        <small>共计1932个, 查看全部</small>
                    </a>
                </h4>
            </div>
        </div>

        <div class="recommended-company">

            <div class="container">

                <ul>
                    <li>
                        <div class="image_ad">
                            <a href="#">
                                <img src={{asset('images/DCsoh3.jpg')}} width="330" height="200">
                            </a>

                            <div class="ad_info">
                                <h5>公司名称</h5>
                                <p>公司简介</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="image_ad">
                            <a href="#">
                                <img src={{asset('images/DCsoh3.jpg')}} width="330" height="200">
                            </a>

                            <div class="ad_info">
                                <h5>公司名称</h5>
                                <p>公司简介</p>
                            </div>
                        </div>
                    </li>

                    <li class="none_margin">
                        <div class="image_ad">
                            <a href="#">
                                <img src={{asset('images/DCsoh3.jpg')}} width="330" height="200">
                            </a>

                            <div class="ad_info">
                                <h5>公司名称</h5>
                                <p>公司简介</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="image_ad">
                            <a href="#">
                                <img src={{asset('images/DCsoh3.jpg')}} width="330" height="200">
                            </a>

                            <div class="ad_info">
                                <h5>公司名称</h5>
                                <p>公司简介</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="image_ad">
                            <a href="#">
                                <img src={{asset('images/DCsoh3.jpg')}} width="330" height="200">
                            </a>

                            <div class="ad_info">
                                <h5>公司名称</h5>
                                <p>公司简介</p>
                            </div>
                        </div>
                    </li>

                    <li class="none_margin">
                        <div class="image_ad">
                            <a href="#">
                                <img src={{asset('images/DCsoh3.jpg')}} width="330" height="200">
                            </a>

                            <div class="ad_info">
                                <h5>公司名称</h5>
                                <p>公司简介</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="image_ad">
                            <a href="#">
                                <img src={{asset('images/DCsoh3.jpg')}} width="330" height="200">
                            </a>

                            <div class="ad_info">
                                <h5>公司名称</h5>
                                <p>公司简介</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="image_ad">
                            <a href="#">
                                <img src={{asset('images/DCsoh3.jpg')}} width="330" height="200">
                            </a>

                            <div class="ad_info">
                                <h5>公司名称</h5>
                                <p>公司简介</p>
                            </div>
                        </div>
                    </li>

                    <li class="none_margin">
                        <div class="image_ad">
                            <a href="#">
                                <img src={{asset('images/DCsoh3.jpg')}} width="330" height="200">
                            </a>

                            <div class="ad_info">
                                <h5>公司名称</h5>
                                <p>公司简介</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="image_ad">
                            <a href="#">
                                <img src={{asset('images/DCsoh3.jpg')}} width="330" height="200">
                            </a>

                            <div class="ad_info">
                                <h5>公司名称</h5>
                                <p>公司简介</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="image_ad">
                            <a href="#">
                                <img src={{asset('images/DCsoh3.jpg')}} width="330" height="200">
                            </a>

                            <div class="ad_info">
                                <h5>公司名称</h5>
                                <p>公司简介</p>
                            </div>
                        </div>
                    </li>

                    <li class="none_margin">
                        <div class="image_ad">
                            <a href="#">
                                <img src={{asset('images/DCsoh3.jpg')}} width="330" height="200">
                            </a>

                            <div class="ad_info">
                                <h5>公司名称</h5>
                                <p>公司简介</p>
                            </div>
                        </div>
                    </li>
                </ul>
                <div style="clear: both;"></div>
            </div>

            {{--文字类广告--}}

            <div class="light-bg">
                <div class="container">


                    <ul>
                        <li>
                            <div class="word_ad">
                                <div class="ad_info">
                                    <h5><a href="#">公司名称</a></h5>
                                    <p>公司简介</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="word_ad">
                                <div class="ad_info">
                                    <h5><a href="#">公司名称</a></h5>
                                    <p>公司简介</p>
                                </div>
                            </div>
                        </li>

                        <li class="none_margin">
                            <div class="word_ad">
                                <div class="ad_info">
                                    <h5><a href="#">公司名称</a></h5>
                                    <p>公司简介</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="word_ad">
                                <div class="ad_info">
                                    <h5><a href="#">公司名称</a></h5>
                                    <p>公司简介</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="word_ad">
                                <div class="ad_info">
                                    <h5><a href="#">公司名称</a></h5>
                                    <p>公司简介</p>
                                </div>
                            </div>
                        </li>

                        <li class="none_margin">
                            <div class="word_ad">
                                <div class="ad_info">
                                    <h5><a href="#">公司名称</a></h5>
                                    <p>公司简介</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="word_ad">
                                <div class="ad_info">
                                    <h5><a href="#">公司名称</a></h5>
                                    <p>公司简介</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="word_ad">
                                <div class="ad_info">
                                    <h5><a href="#">公司名称</a></h5>
                                    <p>公司简介</p>
                                </div>
                            </div>
                        </li>

                        <li class="none_margin">
                            <div class="word_ad">
                                <div class="ad_info">
                                    <h5><a href="#">公司名称</a></h5>
                                    <p>公司简介</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="word_ad">
                                <div class="ad_info">
                                    <h5><a href="#">公司名称</a></h5>
                                    <p>公司简介</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="word_ad">
                                <div class="ad_info">
                                    <h5><a href="#">公司名称</a></h5>
                                    <p>公司简介</p>
                                </div>
                            </div>
                        </li>

                        <li class="none_margin">
                            <div class="word_ad">
                                <div class="ad_info">
                                    <h5><a href="#">公司名称</a></h5>
                                    <p>公司简介</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div style="clear: both;"></div>
                </div>
            </div>
        </div>


        <div class="hot-position">
            <div class="container">

                <div class="title">
                    <h4>热门职位
                        <a href="#">
                            <small>共计1932个, 查看全部</small>
                        </a>
                    </h4>
                </div>

                <div class="position-card mdl-card mdl-shadow--2dp" style="height: 120px;">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">职位名称1</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Aenan convallis.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Aenan convallis.
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-js-button mdl-js-ripple-effect button-link">
                            查看详情
                        </a>
                    </div>
                </div>

                <div class="position-card mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">职位名称2</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Aenan convallis.
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-js-button mdl-js-ripple-effect button-link">
                            查看详情
                        </a>
                    </div>
                </div>

                <div class="position-card mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">职位名称3</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Aenan convallis.
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-js-button mdl-js-ripple-effect button-link">
                            查看详情
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="recent-news">
            <div class="container">
                <div class="title">
                    <h4>最新资讯<a href="#">
                            <small>查看全部</small>
                        </a></h4>
                </div>

                <div class="news-panel">
                    <ul>
                        <li><a href="">资讯标题资讯标题资讯标题资讯标题<small><i>2017-08-03</i></small></a></li>
                        <li><a href="">资讯标题资讯标题资讯<small><i>2017-08-03</i></small></a></li>
                        <li><a href="">资讯标题资讯标题<small><i>2017-08-03</i></small></a></li>
                        <li><a href="">资讯标题资讯标题资讯标题资讯<small><i>2017-08-03</i></small></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
