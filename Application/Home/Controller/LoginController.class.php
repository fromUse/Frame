<?php

namespace  Home\Controller;
use Think\Controller;

class LoginController extends Controller {

	private $ID;
	private $passwd;

	public function index()
	{
		$this->display('login');
	}

	public function login()
	{
		$this->display();
	}

	public function status(){

		$this->ID = $_POST ['ID'];
		$this->passwd = $_POST ['Passwd'];

		if ( !isset ( $this->ID ) || !isset ( $this->passwd ) ) {
			$this->display('login');
		}else{

			$con = M('user');
			// 表达式查询判断
			$where ['ID'] = array( 'EQ', $this->ID );
			// 查询表中是否存在ID这个用户,有则返回，没有则返回false
			$flag = $con->field('Passwd')->where($where)->select();
			// 当查询结果有时

			if ( $flag ) {
				if ( $flag ['0'] ['passwd'] == sha1(md5($this->passwd)) ) {
					$_SESSION ['user'] = $this->ID;
					$this->assign('msg', '登陆成功！');
					$this->assign('user', $this->ID);
					$this->display('notification');
				} else {
					$this->assign('msg', '密码错误！');
					$this->assign('ID',$this->ID);
					$this->display('Login/login');
				}
			} else {
				$this->assign('msg', '用户不存在！');
				$this->display('Login/login');
			}

		}

	}

}

?>