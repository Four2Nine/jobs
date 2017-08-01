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

        .position-card.mdl-card {
            display: inline-block;
            width: 32%;
            height: 295px;
            margin: 0 5px;
            font-weight: 300;

        }

        .position-card > .mdl-card__title {
            color: #fff;
            height: 176px;
            background: #46B6AC url({{asset('images/dog.png')}}) bottom right 15% no-repeat;
            font-size: 20px;
        }

        .hot-position {
            position: relative;
        }

        .button-holder {
            display: inline-block;
            height: 295px;
            padding-right: 25px;
            position: absolute;
            left: 95%;
            top: 12%;
            z-index: 99;
        }

        .more-position {
            position: relative;
            top: 120px;
            background-color: white;
        }

        .more-position:hover {
            background-color: white;
        }

        .more-position .mdl-ripple {
            background: rgb(185, 185, 185);
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

        .hot-position, .recent-mews {
            margin-bottom: 48px;
        }

        .news-panel {
            width: 98%;
            padding: 10px;
            margin-bottom: 20px;
            border-bottom: 1px solid #f5f5f5;
            cursor: pointer;
        }

        .news-panel:hover {
            background-color: #f5f5f5;
        }

        .news-panel > .news-body > .content > h6 {
            font-weight: 500;
            margin: 0;
        }

        .content {
            width: 70%;
            float: left;
        }

        .aside {
            float: right;
            position: relative;
        }

        .news-panel .content-appendix {
            color: #4c4c4c;
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
        }

        .recommended-company ul li {
            list-style: none;
        }

        .recommended-company .ad_item {
            width: 300px;
            height: 200px;
            display: block;
            background: #000;
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

    <div class="container">

        <section class="main">
            <div class="recommended-company">

            </div>

            <div class="recommended-company">
                <div class="title">
                    <h4>推荐公司
                        <a href="#">
                            <small>共计1932个, 查看全部</small>
                        </a>
                    </h4>
                </div>
                <ul>
                    <li>
                        <div class="ad_item">
                            <a href="#">
                                <img src="#">
                            </a>

                            <div class="ad_item_info">
                                <h5>title</h5>
                                <p>content</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>


            {{--<div class="position-card mdl-card mdl-shadow--2dp">--}}
            {{--<div class="mdl-card__title mdl-card--expand">--}}
            {{--<h2 class="mdl-card__title-text">职位名称1</h2>--}}
            {{--</div>--}}
            {{--<div class="mdl-card__supporting-text">--}}
            {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit.--}}
            {{--Aenan convallis.--}}
            {{--</div>--}}
            {{--<div class="mdl-card__actions mdl-card--border">--}}
            {{--<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">--}}
            {{--查看详情--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--</div>--}}

            {{--<div class="position-card mdl-card mdl-shadow--2dp">--}}
            {{--<div class="mdl-card__title mdl-card--expand">--}}
            {{--<h2 class="mdl-card__title-text">职位名称2</h2>--}}
            {{--</div>--}}
            {{--<div class="mdl-card__supporting-text">--}}
            {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit.--}}
            {{--Aenan convallis.--}}
            {{--</div>--}}
            {{--<div class="mdl-card__actions mdl-card--border">--}}
            {{--<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">--}}
            {{--查看详情--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--</div>--}}

            {{--<div class="position-card mdl-card mdl-shadow--2dp">--}}
            {{--<div class="mdl-card__title mdl-card--expand">--}}
            {{--<h2 class="mdl-card__title-text">职位名称3</h2>--}}
            {{--</div>--}}
            {{--<div class="mdl-card__supporting-text">--}}
            {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit.--}}
            {{--Aenan convallis.--}}
            {{--</div>--}}
            {{--<div class="mdl-card__actions mdl-card--border">--}}
            {{--<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">--}}
            {{--查看详情--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--</div>--}}

            {{--<div class="button-holder">--}}
            {{--<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--fab more-position mdl-shadow--4dp">--}}
            {{--<i class="material-icons">keyboard_arrow_right</i>--}}
            {{--</button>--}}
            {{--</div>--}}
            {{--<div style="clear:both;"></div>--}}
            {{--</div>--}}


            {{--<div class="recent-mews">--}}
                {{--<div class="title">--}}
                    {{--<h4>最新资讯<a href="#">--}}
                            {{--<small>查看全部</small>--}}
                        {{--</a></h4>--}}
                {{--</div>--}}

                {{--<div class="news-panel">--}}
                    {{--<div class="news-body">--}}
                        {{--<div class="content">--}}
                            {{--<h6>新闻标题1</h6>--}}
                            {{--<small class="content-appendix">--}}
                                {{--<span>发布时间: 2017-7-17 15:48:55</span><span>作者: author_ly</span>--}}
                            {{--</small>--}}
                            {{--<div class="content-body mdl-color-text--black">--}}
                                {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit.Mauris sagittis pellentesque--}}
                                {{--lacus--}}
                                {{--eleifend--}}
                                {{--lacinia...Lorem ipsum dolor sit amet, consectetur adipiscing elit.Mauris sagittis--}}
                                {{--pellentesque lacus--}}
                                {{--eleifend lacinia...--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="aside">--}}
                            {{--<img src="{{asset('images/dog.png')}}" width="155" height="133"/>--}}
                        {{--</div>--}}
                        {{--<div style="clear: both;"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="news-panel">--}}
                    {{--<div class="news-body">--}}
                        {{--<div class="content">--}}
                            {{--<h6>新闻标题1</h6>--}}
                            {{--<small class="content-appendix">--}}
                                {{--<span>发布时间: 2017-7-17 15:48:55</span><span>作者: author_ly</span>--}}
                            {{--</small>--}}
                            {{--<div class="content-body mdl-color-text--black">--}}
                                {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit.Mauris sagittis pellentesque--}}
                                {{--lacus--}}
                                {{--eleifend--}}
                                {{--lacinia...Lorem ipsum dolor sit amet, consectetur adipiscing elit.Mauris sagittis--}}
                                {{--pellentesque lacus--}}
                                {{--eleifend lacinia...--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="aside">--}}
                            {{--<img src="{{asset('images/dog.png')}}" width="155" height="133"/>--}}
                        {{--</div>--}}
                        {{--<div style="clear: both;"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="news-panel">--}}
                    {{--<div class="news-body">--}}
                        {{--<div class="content">--}}
                            {{--<h6>新闻标题1</h6>--}}
                            {{--<small class="content-appendix">--}}
                                {{--<span>发布时间: 2017-7-17 15:48:55</span><span>作者: author_ly</span>--}}
                            {{--</small>--}}
                            {{--<div class="content-body mdl-color-text--black">--}}
                                {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit.Mauris sagittis pellentesque--}}
                                {{--lacus--}}
                                {{--eleifend--}}
                                {{--lacinia...Lorem ipsum dolor sit amet, consectetur adipiscing elit.Mauris sagittis--}}
                                {{--pellentesque lacus--}}
                                {{--eleifend lacinia...--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="aside">--}}
                            {{--<img src="{{asset('images/dog.png')}}" width="155" height="133"/>--}}
                        {{--</div>--}}
                        {{--<div style="clear: both;"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </section>
    </div>
@endsection
