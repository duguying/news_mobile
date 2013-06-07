<?php
class PartAction extends Action{
	public function __construct(){
		import("@.Rex.Alist");
		$this->assign('www',C('WWW_PATH'));
		$this->assign('public',C('WWW_PATH').'Public/');
	}

	public function index(){
		$partId=(int)@$_GET['part'];
		$page=(int)@$_GET['page'];
		if (!$page) {
			$page=1;
		}
		$total=Alist::itemNum($partId);//get total number of newd-cata
		$this->assign('page',$page);//curr page
		$this->assign('total',ceil($total/10));//prev page
		$this->assign('tid',$partId);
		$title=Alist::getTypeName($partId);
		$this->assign('title',$title);
		$list=Alist::getList($partId,$page);
		$this->assign('list',$list);
		$this->display();
	}
}