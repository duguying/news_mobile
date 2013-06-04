<?php
class Alist{
	/**
	 * 通过分类id获取分类名
	 * @param unknown $id
	 * @return unknown
	 */
	static public function getTypeName($id){
		$t=M("arctype")->where(array('id'=>$id))->find();
		return $t['typename'];
	}
	
	/**
	 * 通过文章id获取分类名
	 * @param unknown $id
	 * @return unknown
	 */
	static public function getTypeNameByAid($aid){
		$t=M("addonarticle")->where(array('id'=>$aid))->find();
		$typeid=$t['typeid'];
		$typename= Alist::getTypeName($typeid);
		return array(
				'id'=>$typeid,
				'name'=>$typename
		);
	}
	
	/**
	 * 获取文章标题列表
	 * @param unknown $id
	 * @param number $page
	 * @return unknown
	 */
	static public function getList($id,$page=1){
		$l=M('archives')->where(array('typeid'=>$id))->order('sortrank desc')->page($page,10)->select();
		return $l;
	}
}