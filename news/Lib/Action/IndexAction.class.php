<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
	function __construct(){
        import("@.Rex.Alist");
        $this->assign('www',C('WWW_PATH'));
		$this->assign('public',C('WWW_PATH').'Public/');
	}

    public function index(){
        $partId=2;//要闻id=2
        $list=Alist::getList($partId,1);
        $this->assign('list',$list);
		$this->display();
    }

    public function yuanxi(){
        $partId=33;//图片报道-院系id=2
        $list=Alist::getList($partId,1);
        $this->assign('list',$list);
		$this->display();
    }

    public function zonghe(){
        $partId=3;//综合新闻-院系id=3
        $list=Alist::getList($partId,1);
        $this->assign('list',$list);
        $this->display();
    }

    public function redian(){
        $partId=32;//校园热点id=32
        $list=Alist::getList($partId,1);
        $this->assign('list',$list);
        $this->display();
    }

    public function more(){
    	$r=M("arctype")->select();
    	$this->assign('type',$r);
    	$this->display();
    }

}