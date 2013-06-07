<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
	function __construct(){
        import("@.Rex.Alist");
        $this->assign('www',C('WWW_PATH'));
		$this->assign('public',C('WWW_PATH').'Public/');
	}

    public function index(){
    	$page=(int)@$_GET['page'];
    	if (!$page) {
    		$page=1;
    	}
    	$partId=2;//要闻id=2
    	$total=Alist::itemNum($partId);//get total number of newd-cata
    	$this->assign('page',$page);//curr page
    	$this->assign('total',ceil($total/10));//prev page
    	$this->assign('tid',$partId);
        
        $list=Alist::getList($partId,1);
        $this->assign('list',$list);
		$this->display();
    }

    public function yuanxi(){
    	$page=(int)@$_GET['page'];
    	if (!$page) {
    		$page=1;
    	}
    	$partId=33;//图片报道-院系id=2
    	$total=Alist::itemNum($partId);//get total number of newd-cata
    	$this->assign('page',$page);//curr page
    	$this->assign('total',ceil($total/10));//prev page
    	$this->assign('tid',$partId);
    	
        
        $list=Alist::getList($partId,1);
        $this->assign('list',$list);
		$this->display();
    }

    public function zonghe(){
    	$page=(int)@$_GET['page'];
    	if (!$page) {
    		$page=1;
    	}
    	$partId=3;//综合新闻-院系id=3
    	$total=Alist::itemNum($partId);//get total number of newd-cata
    	$this->assign('page',$page);//curr page
    	$this->assign('total',ceil($total/10));//prev page
    	$this->assign('tid',$partId);
    	
        
        $list=Alist::getList($partId,1);
        $this->assign('list',$list);
        $this->display();
    }

    public function redian(){
    	$page=(int)@$_GET['page'];
    	if (!$page) {
    		$page=1;
    	}
    	$partId=32;//校园热点id=32
    	$total=Alist::itemNum($partId);//get total number of newd-cata
    	$this->assign('page',$page);//curr page
    	$this->assign('total',ceil($total/10));//prev page
    	$this->assign('tid',$partId);
    	
        
        $list=Alist::getList($partId,1);
        $this->assign('list',$list);
        $this->display();
    }

    public function more(){
    	$r=M("arctype")->select();
    	$this->assign('type',$r);
    	$this->display();
    }

    /**
     * 探针
     */
    public function phpinf(){
        if (@$_GET['psw']=='rex') {
            phpinfo();
        }
    }
	
}