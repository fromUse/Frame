<?php if (!defined('THINK_PATH')) exit(); session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="UTF-8">
    <link href="css/index.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="/Frame/Public/css/index.css" />
	<script type="text/javascript" src="/Frame/Public/js/first.js"></script>
	<script type="text/javascript" src="/Frame/Public/js/jquery-2.2.0.min.js"></script>
    <title>用户登录</title>
</head>
<body>
<div id="container">
    <div id="content">
        <form action="/Frame/Home/Login/status" method="post" id="login">
            学　号 : <input type="text" name="ID" placeholder="你的学号?" value="<?php echo ($ID); ?>"><br/>
            密　码 : <input type="password" name="Passwd" placeholder="长度6位以上">　<span id="pwd" class="mes_error"><?php echo ($msg); ?></span>
        </form>
        <br/>
       <a href="javascript:void()"></a>
    </div>
</div>
</body>
<script type="text/javascript">
// var flag = false;
// $('a').bind('click',function check(){
//   if($('input:text').val().length<1){
//     alert('请输入您的学号');
//     return;
//     } else if($('input:password').val().length<1){
//     alert('请输入您的密码');
//     return;
//   }
//   if(flag){
//
//     $('#login').submit();
//   }
// });

// $('input:password').bind('keyup',function(){
//    if($('input:password').val().length<6){
//        flag=false;
//    }else{
//        flag = true;
//    }
// });
// $('input:password').bind('keyup',function(){
//    if($('input:password').val().length<6){
//        $('#pwd').removeClass('mes_ok');
//        $('#pwd').addClass('mes_error');
//        $('#pwd').text('密码长度6位以上');
//        flag=false;
//    }else{
//        $('#pwd').removeClass('mes_error');
//        $('#pwd').addClass('mes_ok');
//        $('#pwd').text('Ok');
//        flag = true;
//    }
// });
</script>
</html>