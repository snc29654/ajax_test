<form action="" method="post" enctype="multipart/form-data">
 <p>file：<input type="file" name="userfile" size="40" /></p>
 <p><input type="submit" value="upload" /></p>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
 if($_FILES["userfile"]["error"] == UPLOAD_ERR_OK){
  $tempfile = $_FILES["userfile"]["tmp_name"];
  $filename = $_FILES["userfile"]["name"];
  $filename = mb_convert_encoding($filename, "cp932", "utf8");
  $result = move_uploaded_file($tempfile, "../jpg/".$filename);
  if($result == TRUE){
   $message ="upload success";
  }
  else{
   $message ="upload fail";
  }
 }
 elseif($_FILES["userfile"]["error"] == UPLOAD_ERR_NO_FILE) {
  $message ="upload fail";
 }
 else {
  $message ="upload fail";
 }
 echo $message;
}
?>
