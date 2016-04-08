<?php
// Home模块就要写相对应的命名空间
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    private $ID;
    private $passwd;
    private $selection = 'ID';
    private $index;
    private $Info;
    private $where;
    public function index()
    {
        $this->query();
    }


    public function query()
    {

        if($this->isLogin()){
            $this->listClass();
            $this->listuserinfo();
            $this->display('Index/query');
            exit();
        }


        $this->display('Login/login');
        exit();
    }

    /**
     *
     * 判断当前用户是否已经登陆
     *
     */
    private function isLogin(){

        if(isset($_SESSION['user']))
            return true;

        return false;
    }

    /**
     *
     * 当用户成功登录后，
     * 将班级表名称存到域里
     *
     */
    private function listClass(){

        $con = M('class');
        $Class = $con->select();
        if ( $Class ) {
            //将班级名表存到域里
            $this->assign('Class', $Class);
        }

    }

    /**
     *
     * 当用户成功登录后，
     * 将用户表信息存到域里
     *
     */
    private function listuserinfo(){

        $con = M('userinfo');
        $this->index = $_GET['index'];
        if(isset($this->index))
        {
            $this->assign('msg',$this->index);

            switch($_GET['selection'])
            {
                case 'QQ':$this->selection = 'QQ';break;
                case '姓名':$this->selection = 'Name';break;
                case '手机':$this->selection = 'Tell';break;
                default ;
            }
           $this->where[$this->selection] = array('like',"%$this->index%");
           $this->Info = $con->where($this->where)->select();
        }else
        {

            $this->Info = $con->select();
        }



        if($this->Info){
 //         dump($this->Info);
            $count = 0;
            $count = count($this->Info)>0?count($this->Info):$count;
            $this->assign('count',$count);
           $this->assign('Info',$this->Info);
        }


    }
}