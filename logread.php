<?php
header("Content-type: text/plain; charset=UTF-8");

//空白チェック
$errorflag = 0;
	
if ($errorflag == 1)
{
    
}
else
{
	$file = file_get_contents('../php_log.txt');
	echo $file;
	   
}
?>