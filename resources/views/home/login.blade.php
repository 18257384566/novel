<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登陆</title>
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/login.css')}}">
    <style>
        .wrapper{height:673px;margin-top:-340px; }
        .pos{margin-top:130px;}
    </style>
</head>
<body>
<div class="htmleaf-container">
    <div class="wrapper">
        <div class="container">
            <div class="pos">
                <h1>登陆</h1>
                <p><a href="##" style="color:#fff; text-decoration: none; cursor: pointer">点此注册</a></p>
                <form class="form">
                    <input type="text" placeholder="用户名">
                    <input type="password" placeholder="密码">
                    <input type="text" placeholder="验证码" style="width: 120px">
                    <button type="submit" id="login-button">登陆</button>
                </form>
            </div>
        </div>


        <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
</div>

<script src="{{url('home/js/jquery-2.1.4.min.js')}}" type="text/javascript"></script>
<script>
    $('#login-button').click(function (event) {
        event.preventDefault();
        $('form').fadeOut(500);
        $('.wrapper').addClass('form-success');
    });
    $('#login-button').click(function(){
        $('.pos p').css('display','none')
        $('.wrapper').css('height','675')
    });
</script>

</body>
</html>