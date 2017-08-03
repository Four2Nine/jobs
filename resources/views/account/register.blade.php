@extends('layout.master')
@section('title', '注册')
@section('header-tab')
@overwrite
{{--这里隐藏了 tab--}}

@section('custom-style')
    <style>

        .register-card-holder {
            width: 100%;
            min-height:450px;
            background: url({{asset('images/akali_vs_baron_3.jpg')}}) no-repeat center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            padding: 80px 0
        }

        .register-card-holder > h3,
        .register-card-holder > p {
            min-width: 800px;
            font-weight: 300;
            text-align: center;
            /*color: var(--primary-color);*/
            color: white;
        }

        .register-card-holder > p {
            padding-bottom: 32px;
        }

        .register-card {
            width: 800px;
            height: 400px;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, .95);
            padding: 0 30px;
            border: 1px solid lightgray;
        }

        .register-card > h5 {
            font-weight: 300;
            text-align: center;
            color: rgb(0, 0, 0);
        }

        .register-form {
            width: 370px;
            border-right: 1px solid #4d4d4d;
        }

        .register-input {
            display: block;
        }

        #register-verify-code {
            width: 206px;
            display: inline-block;
        }

        #right-panel {
            width: 365px;
            padding-left: 30px;
        }
    </style>
@endsection

@section('content')

    <div class="register-card-holder">
        <h3><?=$site_name ?> <?=$site_desc ?></h3>
        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.--}}
        {{--Aenan convallis.</p>--}}

        <div class="register-card mdl-card mdl-shadow--2dp">
            <h5>立即加入 <?=$site_name?></h5>

            <table border="0">
                <tr>
                    <td>
                        <form action="#" class="register-form">
                            <div class="register-input mdl-textfield mdl-js-textfield">
                                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?"
                                       id="register-input-phone">
                                <label class="mdl-textfield__label" for="register-input-phone">手机号...</label>
                                <span class="mdl-textfield__error">请输入正确的手机号!</span>
                                {{--<a class="use-email-register" href="">使用邮箱注册</a>--}}
                            </div>

                            <div class="register-input mdl-textfield mdl-js-textfield" id="phone-verify-code">
                                <input class="mdl-textfield__input" type="text" id="register-verify-code">
                                <button class="mdl-button mdl-js-button mdl-button-default button-border">发送验证码</button>
                                <label class="mdl-textfield__label" for="register-verify-code">验证码...</label>
                                <span class="mdl-textfield__error">请输入格式正确的验证码!</span>
                            </div>

                            <div class="register-input mdl-textfield mdl-js-textfield">
                                <input class="mdl-textfield__input" type="password" pattern=""
                                       id="register-input-password">
                                <label class="mdl-textfield__label" for="register-input-password">密码...</label>
                                <span class="mdl-textfield__error"></span>
                            </div>

                            <div class="register-input mdl-textfield mdl-js-textfield">
                                <input class="mdl-textfield__input" type="password" pattern=""
                                       id="register-confirm-password">
                                <label class="mdl-textfield__label" for="register-confirm-password">确认密码...</label>
                                <span class="mdl-textfield__error"></span>
                            </div>

                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button-blue-sky">
                                立即注册
                            </button>
                        </form>
                    </td>
                    <td>
                        <div id="right-panel">
                            <p>你还可以使用邮箱来注册 esporthr <a href="#">立即使用邮箱注册</a></p>
                            <p>已经有账号了？<a href="#">立即登录</a></p>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>


@endsection
