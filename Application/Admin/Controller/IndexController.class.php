<?php

// Admin模块就要写相对应的命名空间
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	echo 'admin';
    }
    public function test(){
    	echo 'Admin test';
    }
}