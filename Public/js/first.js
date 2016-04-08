/**
 * Created by chenq on 2016/3/29.
 */

//window.onload当网页加载完执行
window.onload = function(){
  var flag = false;
  $('a').bind('click',function()
  {
    if($('input:text').val().length<1)
      {
          alert('请输入您的学号');
          return;
      } else if($('input:password').val().length<1)
      {
          alert('请输入您的密码');
          return;
      }
    if(flag){ $('#login').submit(); }
  });


  $('input:password').bind('keyup',function()
  {
     if($('input:password').val().length<6)
     {
         flag=false;
     }else
     {
         flag = true;
     }
  });


$('input:password').bind('keyup',function()
{
     if($('input:password').val().length<6)
     {
         $('#pwd').removeClass('mes_ok');
         $('#pwd').addClass('mes_error');
         $('#pwd').text('密码长度6位以上');
         flag=false;
    }else
    {
         $('#pwd').removeClass('mes_error');
         $('#pwd').addClass('mes_ok');
         $('#pwd').text('Ok');
         flag = true;
     }
});

}
