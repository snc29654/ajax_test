<?php
session_start();

$error_message = "";

if(isset($_POST["login"])) {

	if($_POST["user_name"] == "guest" && $_POST["password"] == "guest_guest") {
		$_SESSION["user_name"] = $_POST["user_name"];
		$login_success_url = "ajax_test.php";
		header("Location: {$login_success_url}");
		exit;
	}
$error_message = "ID、またはパスワードが間違いです。<br>　再度入力下さい。";
}
?>
<?php
error_reporting(0);
if($error_message) {
	echo $error_message;
}
?>

<form action="index.php" method="POST">
	<p>ログインID：<input type="text" name="user_name"></p>
	<p>パスワード：<input type="password" name="password"></p>
	<input type="submit" name="login" value="ログイン">

</form>