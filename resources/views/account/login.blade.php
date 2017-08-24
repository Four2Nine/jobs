@extends('layout.master')
@section('title', '登录')

@section('custom-style')
    <style>

        .login-card-holder {
            width: 100%;
            min-height:450px;
            background: url({{asset('images/akali_vs_baron_3.jpg')}}) no-repeat center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            padding: 80px 0
        }

        .login-card-holder > h3,
        .login-card-holder > p {
            min-width: 800px;
            font-weight: 300;
            text-align: center;
            /*color: var(--primary-color);*/
            color: white;
        }

        .login-card-holder > p {
            padding-bottom: 32px;
        }

        .login-card {
            width: 800px;
            height: 300px;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, .95);
            padding: 0 30px;
            border: 1px solid lightgray;
        }

        .login-card > h5 {
            font-weight: 300;
            text-align: center;
            color: rgb(0, 0, 0);
        }

        .login-form {
            width: 370px;
            border-right: 1px solid #4d4d4d;
        }

        .login-input {
            display: block;
        }

        .login-form .use-email-login {
            font-size: 8px;
            float: right;
            color: var(--blue-sky);
        }

        #right-panel {
            width: 365px;
            padding-left: 30px;
        }
    </style>
@endsection

@section('header-nav')
    @include('components.headerNav', ['isLogged' => false])
@endsection

@section('content')

    <div class="login-card-holder">
        <h3><?=$site_name ?> <?=$site_desc ?></h3>
        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.--}}
        {{--Aenan convallis.</p>--}}

        <div class="login-card mdl-card mdl-shadow--2dp">
            <h5>立即登录 <?=$site_name?></h5>

            <table border="0">
                <tr>
                    <td>
                        <form action="#" class="login-form">
                            <div class="login-input mdl-textfield mdl-js-textfield">
                                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?"
                                       id="login-input-phone">
                                <label class="mdl-textfield__label" for="login-input-phone">手机号...</label>
                                <span class="mdl-textfield__error">请输入正确的手机号!</span>
                                <a class="use-email-login" href="">使用邮箱登录</a>
                            </div>

                            <div class="login-input mdl-textfield mdl-js-textfield">
                                <input class="mdl-textfield__input" type="password" id="login-input-password">
                                <label class="mdl-textfield__label" for="login-input-password">密码...</label>
                                <span class="mdl-textfield__error"></span>
                            </div>

                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button-blue-sky">
                                立即登录
                            </button>
                        </form>
                    </td>
                    <td>
                        <div id="right-panel">
                            <p>还没有账号？<a href="#">立即注册</a></p>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>


@endsection
