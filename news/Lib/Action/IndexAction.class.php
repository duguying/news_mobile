<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
	function __construct(){
		$this->assign('public',C('WWW_PATH').'/Public/');
	}

    public function index(){
		$this->display();
    }
}