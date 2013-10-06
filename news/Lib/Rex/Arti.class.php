<?php
class Arti {
	public $artModel; 
	public $titleModel;
	function __construct() {
		import('@.Rex.Tag');
		$this->artModel=M('addonarticle');
		$this->titleModel=M('archives');
	}
	/**
	 * 获取文章
	 * @param unknown $aid
	 * @return multitype:unknown Ambigous <string, mixed>
	 */
	function getBody($aid) {
		$title=$this->titleModel->where(array('id'=>$aid))->find();
		$time=$title['pubdate'];//int型时间
		$title=$title['title'];
		$body=$this->artModel->where(array('aid'=>$aid))->find();
		$body=Tag::scaleimage($body['body'].(($body['redirecturl']=='')?'':('<br>跳转新闻 <a href='.$body['redirecturl'].'>'.$body['redirecturl'].'</a>')));
		
		return array(
				'title'=>$title,
				'body'=>$body,
				'time'=>date('Y/m/d H:i:s', $time),//转为指定类型
		);
	}
	
	static public function body($aid){
		$a=new Arti();
		return $a->getBody($aid);
	}
	
}