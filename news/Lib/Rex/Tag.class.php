<?php
/**
 * 标签处理类
 * 主要用正则表达式预处理标签及字符串
 * @author 李俊[rexlee]
 */
class Tag{
	/**
	 * 图片缩略
	 * 按照原路径产生缩略图片路径
	 */
	static function scaleimage($content){
		function add_request($matches){
	        return '<img src="'.U("Scale/thumb").'?img='.urlencode($matches[1]).'" />';
		}
		$content = preg_replace_callback('/<img [\w\W][^><]+ src="([\w\W][^>:<]+)" [\w\W][^><]+\/>/', 'add_request', $content);
		// var_dump($matches);
		return $content;
	}
}