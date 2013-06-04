<?php
class ArticleAction extends Action {
	function __construct() {
		import("@.Rex.Arti");
		import("@.Rex.Alist");
        $this->assign('www',C('WWW_PATH'));
		$this->assign('public',C('WWW_PATH').'Public/');
	}
	function index() {
		$aid=(int)$_GET['aid'];
		$result=Arti::body($aid);
		$typename=Alist::getTypeNameByAid($aid);
		$typename=$typename['name'];
		$this->assign('title',$result['title']);
		$this->assign('time',$result['time']);
		$this->assign('body',$result['body']);
		$this->assign('typename',$typename);
		$this->display();
	}
}