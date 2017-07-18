<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <link rel="stylesheet" type="text/css" href="{{asset('style/material.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('style/icon-fonts.css')}}">
    <script src="{{asset('js/material.js')}}"></script>

    <style>

        body {
            margin: 0 !important;
            padding: 0 !important;
        }

        .container {
            width: 1024px;
            margin: 0 auto;
            /*background-color: pink;*/
        }

        .header-layout {
            background-color: #1976d2;
        }

        .header-nav {
            padding: 20px;
        }

        .header-nav-title {
            display: inline-block
        }

        .header-nav-title > small {
            font-weight: 300;
            color: white;
        }

        .nav-title {
            color: white;
            font-size: 20pt;
            font-weight: 300;
            /*background-color: lightblue;*/
        }

        /*.spacer {*/
        /*display: inline-block;*/
        /*width: 700px;*/
        /*height: 2px;*/
        /*!*background: lightgray;*!*/
        /*}*/

        .nav {
            display: inline-block;
            float: right;
        }

        .nav a {
            color: white;
            text-decoration-line: none;
            /*background-color: lightgray;*/
            margin-left: 8px;
            font-weight: lighter;
            font-size: 8pt;
            cursor: pointer;
        }

        .nav a:hover {
            text-decoration-line: underline;
        }

        .header-tab {
            background-color: #1976d2;
        }

        .mdl-layout__tab {
            font-weight: 300;
        }

        .mdl-layout__tab.is-active,
        .mdl-layout__tab:hover {
            color: #fff;
            background-color: #1971cd;
        }

        .mdl-layout__tab.is-active::after {
            height: 2px;
            width: 100%;
            display: block;
            content: " ";
            bottom: 0;
            left: 0;
            position: absolute;
            background: white;
            -webkit-animation: border-expand 0.2s cubic-bezier(0.4, 0, 0.4, 1) alternate forwards;
            animation: border-expand 0.2s cubic-bezier(0.4, 0, 0.4, 1) alternate forwards;
            transition: all 1s cubic-bezier(0.4, 0, 1, 1);
        }

        .left, .right {
            display: inline-block;
        }

        .left {
            width: 472px;
            float: left;
            /*background-color: #66bb6a;*/
        }

        .right {
            width: 512px;
            float: right;
            /*background-color: #90caf9;*/
        }

        .header-post {
            width: 100%;
            height: 340px;
            background-color: #2c2c2c;
        }

        .post-left {
            width: 512px;
            float: left;
            background-color: rgb(35, 35, 35);
        }

        .post-right {
            width: 512px;
            height: 340px;
            float: right;
        }

        .post-info {
            width: 100%;
            height: 300px;
            padding: 20px;
            display: inline-block;
            color: white;
        }

        .post-info > h3 {
            font-weight: 300;
        }

        .post-info > p {
            padding-bottom: 16px;
        }

        .post-image {
            width: 100%;
            height: 100%;
            background: url("{{asset('images/DCsoh3.jpg')}}") no-repeat center;
            -webkit-background-size: contain;
            -moz-background-size: contain;
            -o-background-size: contain;
            background-size: contain;
            display: inline-block;
        }

        .search-box select {
            height: 35px;
            text-align: center;
            padding: 0 15px;
            background-color: white;
            border: none;
            border-radius: 0;
            -webkit-appearance: none;
            -webkit-border-radius: 0;
            position: relative;
            left: 4px;
        }

        .search-box input {
            width: 280px;
            padding: 10px 10px;
            border: none;
            border-left: 1px solid lightgray;
            margin-right: 8px;
        }

        .search-box button {
            font-weight: 300;
        }

        .search-box-appendix span,
        .search-box-appendix a {
            margin-left: 6px;
            font-size: 6pt;
            font-weight: 300;
            color: #f5f5f5;
            text-decoration: none;
        }

        .search-box-appendix a {
            margin-left: 20px;
            text-decoration-line: underline;
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

        .button-blue-sky,
        .button-blue-sky:hover,
        .button-blue-sky.mdl-button--raised,
        .button-blue-sky.mdl-button--fab {
            color: rgb(255, 255, 255);
            background-color: #1976d2;
        }

        .button-blue-sky .mdl-ripple {
            background: rgb(255, 255, 255);
        }

        footer {
            background-color: #2c2c2c;
            padding: 20px 0;
            font-weight: 300;
        }

        footer > .container {
            color: white;
        }

        footer > .container > .left > p {
            font-size: 18pt;
        }

        footer > .container > .right {
            height: 82px;
        }

        .copy-right {
            position: relative;
            top: 53%;
            float: right;
            text-align: right;
            font-size: 8pt;
        }
    </style>
</head>
<body>

<header class="header-layout">

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

    <div class="header-tab">
        <div class="container">
            <a href="" class="mdl-layout__tab is-active">首页</a>
            <a href="" class="mdl-layout__tab">个人首页</a>
            <a href="" class="mdl-layout__tab">职位搜索</a>
            <a href="" class="mdl-layout__tab">资讯中心</a>
            <div style="clear: both;"></div>
        </div>
    </div>
</header>


<div class="header-post">
    <div class="container">
        <section class="post-left">
            <div class="post-info">
                <h3>职业电竞的成功之路</h3>
                <p class="mdl-color-text--white">游戏人生，放飞自我，最强王者，我们等你来！<br>consectetur adipiscing elit.Mauris sagittis
                    pellentesque lacus eleifend lacinia...Lorem ipsum dolor sit amet, consectetur adipiscing elit.Mauris
                    sagittis</p>

                <div class="search-box">
                    <form action="#">
                        <select title="type" name="type">
                            <option value="0">职位</option>
                            <option value="1">新闻</option>
                        </select>

                        <input type="text" placeholder="输入搜索内容"/>
                        <button type="submit" class="mdl-button mdl-js-button mdl-button--raised
                    mdl-js-ripple-effect button-blue-sky">立即搜索
                        </button>
                    </form>
                    <div class="search-box-appendix">
                        <span>输入职位名称或描述／新闻标题或内容</span>
                        <a href="#">使用高级搜索</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="post-right">
            <div class="post-image"></div>
        </section>
        <div style="clear: both;"></div>
    </div>
</div>

<div class="container">

    <section class="main">
        <div class="hot-position">
            <div class="title">
                <h4>热门职位<a href="#">
                        <small>共计1932个, 查看全部</small>
                    </a></h4>
            </div>

            <div class="position-card mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title mdl-card--expand">
                    <h2 class="mdl-card__title-text">职位名称1</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Aenan convallis.
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                        查看详情
                    </a>
                </div>
            </div>

            <div class="position-card mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title mdl-card--expand">
                    <h2 class="mdl-card__title-text">职位名称2</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Aenan convallis.
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                        查看详情
                    </a>
                </div>
            </div>

            <div class="position-card mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title mdl-card--expand">
                    <h2 class="mdl-card__title-text">职位名称3</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Aenan convallis.
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                        查看详情
                    </a>
                </div>
            </div>

            <div class="button-holder">
                <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--fab more-position mdl-shadow--4dp">
                    <i class="material-icons">keyboard_arrow_right</i>
                </button>
            </div>
            <div style="clear:both;"></div>
        </div>


        <div class="recent-mews">
            <div class="title">
                <h4>最新资讯<a href="#">
                        <small>查看全部</small>
                    </a></h4>
            </div>

            <div class="news-panel">
                <div class="news-body">
                    <div class="content">
                        <h6>新闻标题1</h6>
                        <small class="content-appendix"><span>发布时间: 2017-7-17 15:48:55</span><span>作者: author_ly</span>
                        </small>
                        <div class="content-body mdl-color-text--black">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.Mauris sagittis pellentesque lacus
                            eleifend
                            lacinia...Lorem ipsum dolor sit amet, consectetur adipiscing elit.Mauris sagittis
                            pellentesque lacus
                            eleifend lacinia...
                        </div>
                    </div>

                    <div class="aside">
                        <img src="{{asset('images/dog.png')}}" width="155" height="133"/>
                    </div>
                    <div style="clear: both;"></div>
                </div>
            </div>

            <div class="news-panel">
                <div class="news-body">
                    <div class="content">
                        <h6>新闻标题1</h6>
                        <small class="content-appendix"><span>发布时间: 2017-7-17 15:48:55</span><span>作者: author_ly</span>
                        </small>
                        <div class="content-body mdl-color-text--black">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.Mauris sagittis pellentesque lacus
                            eleifend
                            lacinia...Lorem ipsum dolor sit amet, consectetur adipiscing elit.Mauris sagittis
                            pellentesque lacus
                            eleifend lacinia...
                        </div>
                    </div>

                    <div class="aside">
                        <img src="{{asset('images/dog.png')}}" width="155" height="133"/>
                    </div>
                    <div style="clear: both;"></div>
                </div>
            </div>

            <div class="news-panel">
                <div class="news-body">
                    <div class="content">
                        <h6>新闻标题1</h6>
                        <small class="content-appendix"><span>发布时间: 2017-7-17 15:48:55</span><span>作者: author_ly</span>
                        </small>
                        <div class="content-body mdl-color-text--black">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.Mauris sagittis pellentesque lacus
                            eleifend
                            lacinia...Lorem ipsum dolor sit amet, consectetur adipiscing elit.Mauris sagittis
                            pellentesque lacus
                            eleifend lacinia...
                        </div>
                    </div>

                    <div class="aside">
                        <img src="{{asset('images/dog.png')}}" width="155" height="133"/>
                    </div>
                    <div style="clear: both;"></div>
                </div>
            </div>
        </div>
    </section>
</div>

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
</body>
</html>
