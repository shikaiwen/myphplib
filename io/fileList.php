<?php
// PHP4 and PHP5
function getFileList($directory){
	$files = array();
	if(is_dir($directory)){
		if($dh=opendir($directory)){
			while(($file=readdir($dh)) != false){
				if($file != '.' && $file != '..'){
					$files[] = $file;
				}
			}
		}
	}
	return $files;
}


// PHP5
function getFileList2($directory){
	$files = array();
	if(is_dir($directory)){
		if($files=scandir($directory)){
			$files = array_slice($files, 2);
		}
	}
	return $files;
}

// PHP5 object oriented
function getFileList3($directory){
	$files = array();
	try{
		$dir = new DirectoryIterator($directory);
	}catch(Exception $e){
		throw new Exception($directory.'is not readable');
	}
	
	foreach ($dir as $file){
		if($file->isDot()) continue;
		$files[] = $file->getFilename();
	}
	return $files;
}
// $dir = dirname(__FILE__);
// var_dump(getFileList2($dir));