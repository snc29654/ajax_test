<?php
session_start();

if(!isset($_SESSION["user_name"])) {
	$no_login_url = "index.php";
	header("Location: {$no_login_url}");
	exit;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8" />
    <title>example</title>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
    $(document).ready(function()
    {
		
        $('#send').click(function()
        {
           var data = {
		        param0 : $('#param0').val(),
		        param1 : $('#param1').val(),
		        param2 : $('#param2').val()
	        };
 
            $.ajax({
                type: "post",
                url: "send.php",
                data: data,
                success: function(data, dataType)
                {
                    alert(data);
				
				    if(data == "complete"){
				        document.forms[0].elements[0].value="";
				        document.forms[0].elements[1].value="";
			            document.forms[0].elements[2].value="";
				    }
                },
                error: function()
                {
                    alert('送信失敗');
                }
            });

           var data = "dummy"
 
            $.ajax({
                type: "post",
                url: "logread.php",
                data: data,
                success: function(data, dataType)
                {
                    document.getElementById( "phplog" ).value = data ;
				
                },
                error: function()
                {
                    alert('送信失敗');
                }
            });


            return false;
        });

        $('#logread').click(function()
        {
           var data = "dummy"
 
            $.ajax({
                type: "post",
                url: "logread.php",
                data: data,
                success: function(data, dataType)
                {
                    document.getElementById( "phplog" ).value = data ;
				
                },
                error: function()
                {
                    alert('送信失敗');
                }
            });
            return false;
        });



    });
    </script>
</head>
<body>
<form id="testForm" name="testForm" method="post" >
<ul>
<li><input type="text" id="param0" name="param0" placeholder="param0"></li>
<li><input type="text" id="param1" name="param1" placeholder="param1" ></li>
<li><textarea name="param2" rows="18" cols="80" id="param2" placeholder="param2" ></textarea></li>  
<li><textarea name="phplog" rows="18" cols="80" id="phplog" placeholder="phplog" ></textarea></li>
</ul>
<p class="more"><input id="send" type="submit" value="送る"></p>
<p class="more"><input id="logread" type="submit" value="ログ読み出し"></p>
<a href="upload_jpg.php">画像upload</a><br/>
<a href="jpg_display.php">画像表示</a><br/>
</form>
</body>
</html>