<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
	function __construct(){
        import("@.Rex.Alist");
        $this->assign('www',C('WWW_PATH'));
		$this->assign('public',C('WWW_PATH').'Public/');
        $this->assign('topic',C("TOPIC"));
	}

    public function index(){
    	$page=(int)@$_GET['page'];
    	if (!$page) {
    		$page=1;
    	}
        $topic=C("TOPIC");
    	$partId=(int)$topic[0]['id'];
    	$total=Alist::itemNum($partId);//get total number of newd-cata
    	$this->assign('page',$page);//curr page
    	$this->assign('total',ceil($total/10));//prev page
    	$this->assign('tid',$partId);
        $this->assign('topic',$topic);
        
        $list=Alist::getList($partId,1);
        $this->assign('list',$list);
		$this->display();
    }

    public function topic2(){
    	$page=(int)@$_GET['page'];
    	if (!$page) {
    		$page=1;
    	}
        $topic=C("TOPIC");
        $partId=(int)$topic[1]['id'];
    	$total=Alist::itemNum($partId);//get total number of newd-cata
    	$this->assign('page',$page);//curr page
    	$this->assign('total',ceil($total/10));//prev page
    	$this->assign('tid',$partId);
    	$this->assign('topic',$topic);
        
        $list=Alist::getList($partId,1);
        $this->assign('list',$list);
		$this->display();
    }

    public function topic3(){
    	$page=(int)@$_GET['page'];
    	if (!$page) {
    		$page=1;
    	}
        $topic=C("TOPIC");
        $partId=(int)$topic[2]['id'];
    	$total=Alist::itemNum($partId);//get total number of newd-cata
    	$this->assign('page',$page);//curr page
    	$this->assign('total',ceil($total/10));//prev page
    	$this->assign('tid',$partId);
    	$this->assign('topic',$topic);
        
        $list=Alist::getList($partId,1);
        $this->assign('list',$list);
        $this->display();
    }

    public function topic4(){
    	$page=(int)@$_GET['page'];
    	if (!$page) {
    		$page=1;
    	}
        $topic=C("TOPIC");
        $partId=(int)$topic[3]['id'];
    	$total=Alist::itemNum($partId);//get total number of newd-cata
    	$this->assign('page',$page);//curr page
    	$this->assign('total',ceil($total/10));//prev page
    	$this->assign('tid',$partId);
    	$this->assign('topic',$topic);
        
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