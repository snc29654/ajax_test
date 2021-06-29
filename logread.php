<?php
header("Content-type: text/plain; charset=UTF-8");
	//書き込みが早すぎるのでsleepさせる
	usleep(100);
	$file = file_get_contents('../php_log.txt');
	echo $file;
	   
?>