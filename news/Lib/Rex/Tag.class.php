<?php
/**
 * 标签处理类
 * 主要用正则表达式预处理标签及字符串
 * @author 李俊[rexlee]
 */
class Tag{
	static function preScaleimage($content){
		function add_request_pre($pre_matches){
			return '<img src="'.$pre_matches[2].'" />';
		}
		$content = preg_replace_callback('/<img [\w\W][^><]* src="(http:\/\/news.yangtzeu.edu.cn)([\w\W][^>"<]*)"[\w\W]* \/>/', 'add_request_pre', $content);
		
		return $content;
	}
	
	/**
	 * 图片缩略
	 * 按照原路径产生缩略图片路径
	 */
	static function scaleimage($content){
		if (!C('IMG_SCALE')) {
			return $content;
		}
		$content=Tag::preScaleimage($content);
		
		function add_request($matches){
	        return '<img src="'.U("Scale/thumb").'?img='.urlencode($matches[1]).'" />';
		}
		$content = preg_replace_callback('/<img [\w\W]*src="([\w\W][^>"<]*)" \/>/', 'add_request', $content);
		// var_dump($matches);
		return $content;
	}
}