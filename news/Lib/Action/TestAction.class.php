<?php
class TestAction extends Action{
	function Util() {
		function dirtree($path) {
			$handle = opendir($path);
			$itemArray=array();
			while (false !== ($file = readdir($handle))) {
				if (($file=='.')||($file=='..')){
				}elseif (is_dir($path.$file)) {
					try {
						$dirtmparr=dirtree($path.$file.'/');
					} catch (Exception $e) {
						$dirtmparr=null;
					};
					$itemArray[$file]=$dirtmparr;
				}else{
					array_push($itemArray, $file);
				}
			}
			return $itemArray;
		}
		
		$path=APP_PATH.'/Lib/'.__FUNCTION__.'/';
		$classes=dirtree($path);
		$clses=array();
		foreach ($classes as $cls) {
			include_once $path.$cls;
			array_push($clses, preg_replace('/.class.php/', '', $cls));
		}
		
		foreach ($clses as $value) {
			if(method_exists($value, "TEST")){
				var_dump(eval('return '.$value.'::TEST();'));
			}else {
				echo '类'.$value.'存在，但是无测试单元。<br/>';
			}
			
		}
	}
}