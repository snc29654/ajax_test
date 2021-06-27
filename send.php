<?php
header("Content-type: text/plain; charset=UTF-8");
$param0 = $_POST['param0'];
$param1 = $_POST['param1'];
$param2 = $_POST['param2'];

//空白チェック
    $errorflag = 0;
	if ($param0 == null) {
		$error_param0 = "param0 is no input";
		$errorflag = 1;
	}else{$error_param0 = "";}
	if ($param1 == null) {
		$error_param1 = "param1 is no input";
		$errorflag = 1;
	}else{$error_param1 = "";}
	if ($param2 == null) {
		$error_param2 = "param2 is no input";
		$errorflag = 1;
	}else{$error_param2 = "";}
	
if ($errorflag == 1)
{
    if($error_param0 != ""){ echo $error_param0."\n";}
	if($error_param1 != ""){ echo $error_param1."\n";}
	if($error_param2 != ""){ echo $error_param2."\n";}
    
}
else
{
   
   echo "complete";
}
?>