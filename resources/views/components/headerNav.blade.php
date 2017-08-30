<div class="header-nav">
    <div class="container">
        <!-- Title -->
        <div class="header-nav-title">
            <span class="nav-title"><a href="/index"><?=$site_name ?></a></span>
            <br>
            <small><?=$site_desc ?></small>
        </div>

        <!-- Add spacer, to align navigation to the right -->
        <!--<div class="spacer"></div>-->
        <!-- Navigation -->
        <nav class="nav">
            @if($isLogged === true)
                <a href="">退出登录</a>
            @else
                <a href="/account/login">登录</a>
                <a href="/account/register">立即注册</a>
            @endif
            <a href="">企业合作</a>
            <a href="/about">关于我们</a>
        </nav>
    </div>
</div>
