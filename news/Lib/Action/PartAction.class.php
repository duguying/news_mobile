<?php
class PartAction extends Action{
	public function __construct(){
		import("@.Rex.Alist");
		$this->assign('www',C('WWW_PATH'));
		$this->assign('public',C('WWW_PATH').'Public/');
	}

	public function index(){
		$partId=(int)$_GET['part'];
		$title=Alist::getTypeName($partId);
		$this->assign('title',$title);
		$list=Alist::getList($partId,2);
		$this->assign('list',$list);
		$this->display();
	}
}