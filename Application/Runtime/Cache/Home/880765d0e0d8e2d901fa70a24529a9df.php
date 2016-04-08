<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/Frame/Public/css/query.css" />
    <script type="text/javascript" src="/Frame/Public/js/jquery-2.2.0.min.js"></script>
    <title>查询</title>
</head>
<body>
<div id="container">

    <div id="header">
        <p>学生信息查询系统</p>
    </div>
    <div id="content">
        <form action="?" method="GET" id="query">
            <select name="select_className">
            		<?php if(is_array($Class)): foreach($Class as $key=>$column): ?><option name='<?php echo ($column["classid"]); ?>'><?php echo ($column["classname"]); ?></option><?php endforeach; endif; ?>

            </select>
            <select name="selection">
                <option name="ID">学号</option>
                <option name="Name">姓名</option>
                <option name="Tell">手机</option>
                <option name="QQ">QQ</option>
            </select>
            <input type="text" name="index" class="" id="input" value="<?php echo ($msg); ?>">
            <input type="button" value="查询" onclick="check(this.form)">

            <span class="username">


            </span>
        </form>
        <p id="msg"></p>
    </div>
    <div id="table">

        <table>
            <th>ID</th>
            <th>Name</th>
            <th>Sex</th>
            <th>QQ</th>
            <th>Tell</th>
            <th>Major</th>
            <th>Class</th>


            <?php if(is_array($Info)): foreach($Info as $key=>$reset): ?><tr>
                   <td><?php echo ($reset["id"]); ?></td>
                   <td><?php echo ($reset["name"]); ?></td>
                   <td><?php echo ($reset["sex"]); ?></td>
                   <td><?php echo ($reset["qq"]); ?></td>
                   <td><?php echo ($reset["tell"]); ?></td>
                   <td><?php echo ($reset["major"]); ?></td>
                   <td><?php echo ($reset["class"]); ?></td>
                </tr><?php endforeach; endif; ?>
        </table>

        <p>
            找到<?php echo ($count); ?>条相关信息
        </p>
    </div>
</div>

</body>
<script>
    //检查输入框内容是否为空
    function check(bt) {
        var text = $('#query :text').val();
        var reg = /^[ ]*$/;
        if (!reg.test(text)) {
            bt.submit();
        } else {
            $('#msg').text('查询内容不能为空！');
            $('#query :text').addClass('input_text');
        }
    }

    var input = document.getElementById('input');
    input.onblur = function () {
        var text = $('input').val();
        var reg = /^[ ]*$/;
        if (reg.test(text)) {
            $('#input').removeClass('input_textR');
            $('#input').addClass('input_textL');
            $('#msg').text('查询内容不能为空！');
        } else {
            $('#input').removeClass('input_textL');
            $('#input').addClass('input_textR');
            $('#msg').text('');
        }
    }


    //                var text = $('#query :text').val();
    //                var reg = /([^ ]*)([.]+)([^ ]*)/;
    //                if (reg.test(text)) {
    //                    alert(text);}


</script>
</html>