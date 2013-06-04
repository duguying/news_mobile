<?php
class PageAction extends Action {
	function __construct(){
		$this->assign('public',C('WWW_PATH').'/Public/');
	}
	public function test()
	{
		$art=M('addonarticle');
		$rst=$art->where('body like "%<img%"')->limit(1)->select();
		$this->assign('body',$rst[0]['body']);
		$this->display();

	}
	public function scale(){
		
		$art=M('addonarticle');
		$rst=$art->where('body like "%<img%"')->limit(10)->select();
		echo "<textarea style='width:100%;height:100%;'>";
		$body=$rst[1]['body'];


		import("@.Rex.Tag");


		echo tag::scaleimage($body);


		echo "</textarea>";
	}
}