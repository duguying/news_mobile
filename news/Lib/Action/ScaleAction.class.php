<?php
/**
 * 缩略图生成行为
 */
class ScaleAction extends Action {
	/**
	 * 生成并返回显示缩略图
	 */
	function thumb(){
		import("@.Util.Image");
		$img=C("IMG_BASE").urldecode($_GET['img']);
		Image::thumb($img);
	}
	
}