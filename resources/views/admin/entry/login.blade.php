<!DOCTYPE html>
<html lang="en" >
<head >
    <meta charset="utf-8" >
    <link rel="stylesheet" href="/css/admin.css" >
    <link rel="stylesheet" href="/font/css/font-awesome.min.css" >
</head >
<body style="background:#F3F3F4;" >
<div class="login_box" >
    <h1 >Video</h1 >
    <h2 >欢迎使用Video管理平台</h2 >
    <div class="form" >
        @if(session('error'))
            <p style="color:red" >{{session('error')}}</p >
        @endif
        <form action="" method="post" >
            {{ csrf_field() }}
            <ul >
                <li >
                    <input type="text" name="username" class="text" />
                    <span ><i class="fa fa-user" ></i ></span >
                </li >
                <li >
                    <input type="password" name="password" class="text" />
                    <span ><i class="fa fa-lock" ></i ></span >
                </li >
                <li >
                    <input type="submit" value="立即登陆" />
                </li >
            </ul >
        </form >
        <p ><a href="#" >返回首页</a > &copy; 2016 Powered by <a href="#" target="_blank" >http://www.baidu.com</a ></p >
    </div >
</div >
</body >
</html >